<?php

include_once $_SERVER['DOCUMENT_ROOT']."/inc/conn.inc";

$conn = getConnection();
session_start();

$m_id = $_SESSION['m_id'];

$info_sql = "SELECT * FROM member_tb WHERE m_id = '$m_id'";
$info_query = mysqli_query($conn, $info_sql);
$info_array = mysqli_fetch_array($info_query);


$s_player = $_REQUEST['s_player'];

if ($s_player == "@ALL") {
  $search_sql = "select p_backnum,p_name from player_tb where p_tname = '$info_array[m_tname]'";
}else{
  $search_sql = "select p_backnum,p_name from player_tb where p_tname = '$info_array[m_tname]' AND p_name like '%$s_player%'";
}
$search_query = mysqli_query($conn, $search_sql);
$search_array = mysqli_fetch_array($search_query);

$print_mode = false;
if ($search_array != null) {
  $print_mode = true;

  $search_rownum = mysqli_num_rows($search_query);
  $search_fieldnum = mysqli_num_fields($search_query);
  for ($i=0; $i < $search_rownum; $i++) {
    for ($j=0; $j < $search_fieldnum; $j++) {
      $search_full_array[$i][$j] = mysqli_result($search_query, $i, $j);
    }
  }

}else{
  $print_mode = false;
}


// print_r2($search_full_array);


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/master.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif+KR" rel="stylesheet">
  <script src="js/event.js"></script>
  <script>
    function pDetailView(name){
      var temp = "player.php?searchPlayer=";
      var name = name;
      var link = temp+name;
      // parent.location.href = link;
      window.opener.location.href = link;
      console.log(link);
      self.close();
    }
  </script>
  <title></title>
</head>
<body>
  <div class="member_is" style="vertical-align: center">
    <h1><span>등번호</span><span>이름</span></h1>
    <ul>
      <?php
      if ($print_mode) {
        for ($rows=0; $rows < $search_rownum; $rows++) { 
          $p_backnum = $search_full_array[$rows][0];
          $p_name = $search_full_array[$rows][1];
          ?>
          <li>
            <p><?php echo $p_backnum; ?></p>
            <p id="p_name" onclick="pDetailView('<?=$p_name?>');"><?php echo $p_name ?></p>
          </li>
          <?php
        }
      }
      else{
        echo "<h1><b>검색된 선수가 없습니다.</h1>";
      }
      ?>
      <!-- <p onclick="pDetailView();"></p> -->
    </ul>
  </div>

  <div class="login_box_close">닫기</div>
</body>
</html>
