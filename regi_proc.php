<?php 

include_once $_SERVER['DOCUMENT_ROOT']."/inc/conn.inc";

$conn = getConnection();

$upload_dir = null;
$default_dir = './img/m_image';
$allowed_ext = array('jpg','jpeg','png','gif');

// 변수 정리
$error = $_FILES['m_image']['error'];
$name = $_FILES['m_image']['name'];
$ext = array_pop(explode('.', $name));
 

$m_id = $_REQUEST['m_id'];
$m_pw = $_REQUEST['m_pw'];
$m_name = $_REQUEST['m_name'];
// $m_image = $_REQUEST['profile_image'];
if ($name) {
	$upload_dir = '/img/m_image/'.$name;
}else{
	$upload_dir = '/img/m_image/default.png';
}

// 오류 확인
if( $error != UPLOAD_ERR_OK ) {
	switch( $error ) {
		case UPLOAD_ERR_INI_SIZE:
		case UPLOAD_ERR_FORM_SIZE:
			echo "파일이 너무 큽니다. ($error)";
			break;
		case UPLOAD_ERR_NO_FILE:
			echo "파일이 첨부되지 않았습니다. ($error)";
			break;
		default:
			echo "파일이 제대로 업로드되지 않았습니다. ($error)";
	}
	exit;
}
 
// 확장자 확인
if( !in_array($ext, $allowed_ext) ) {
	echo "허용되지 않는 확장자입니다.";
	exit;
}
 
// 파일 이동
move_uploaded_file( $_FILES['m_image']['tmp_name'], "$default_dir/$name");



$regi_sql = "INSERT INTO `member_tb` (`m_num`, `m_id`, `m_pw`, `m_name`, `m_image`) VALUES (NULL, '$m_id', '$m_pw', '$m_name', '$upload_dir')";
$regi_query = mysqli_query($conn, $regi_sql);
if ($regi_query) {
	?>
	<script type='text/javascript'>
		alert('<?php echo($m_id.'님 반갑습니다!<br>회원가입이 정상적으로 완료되었습니다.') ?>');
		location.href = 'index.php';
	</script>
	<?php
}else{
	?>
	<script type='text/javascript'>
		alert('<?php echo('회원가입을 실패하였습니다.') ?>');
		location.href = 'index.php';
	</script>
	<?php

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

</body>
</html>