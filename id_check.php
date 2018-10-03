<?php 

include_once $_SERVER['DOCUMENT_ROOT']."/inc/conn.inc";

$conn = getConnection();

$m_id = $_REQUEST['m_id'];
$idcheck = "SELECT * FROM member_tb WHERE m_id = '$m_id'";
$idcheck_query = mysqli_query($conn, $idcheck);
$idcheck_result = mysqli_fetch_array($idcheck_query);
if ($idcheck_result) {
	echo "중복된 아이디 입니다.";
}else{
	echo "사용가능한 아이디 입니다.";
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>아이디 중복체크
 	</title>
 </head>
 <body>
 	<button value="closewindow" onclick="window.close()">닫기</button>
 </body>
 </html>