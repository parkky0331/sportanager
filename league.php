<?php

session_start();


$m_id = $_SESSION['m_id'];
if (!$m_id) {

    echo "
    <script type='text/javascript'>
    alert('로그인이 필요한 서비스 입니다.');
    location.href = 'index.php';
    </script>";

}


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/master.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
  <script src="js/event.js"></script>

  <title></title>
</head>

<body>
  <div class="page1_wrap">

    <div class="head">

      <div class="head_logo_section">
        <div class="hamber" id="hamber_open">
          <div></div>
          <div></div>
          <div></div>
        </div>
        <div class="hamber" id="hamber_close">
          <div></div>
          <div></div>
          <div></div>
        </div>
        <a href="index.php"><div class="head_logo">
        </div></a>
      </div>

      <div class="head_login">
        <?php echo $_SESSION['m_id']; ?>
      </div>
    </div>
    <div class="page1_article">
      <div class="nav">
        <div class="nav_team_logo_box">
        </div>
        <p>WELCOME</p>
        <h1>TEAM NAME(php처리)</h1>
        <div class="menu_list">
          <ul class="high_list">
            <h2>MENU</h2>
            <li id="team_ul"><span><img src="img/nav_icon1.png" alt=""></span>&emsp;TEAM</li>

            <ul class="small_list_1">
              <a href="page1.html"><li>list1</li></a>
              <a href="page1.html"><li>list1</li></a>
              <a href="page1.html"><li>list1</li></a>
              <a href="page1.html"><li>list1</li></a>
            </ul>

            <li id="member_ul"><img src="img/nav_icon2.png" alt=""></span>&emsp;MEMBER</li>
            <ul class="small_list_2">
              <a href="page2.html"><li>list1</li></a>
              <a href="page2.html"><li>list1</li></a>
              <a href="page2.html"><li>list1</li></a>
              <a href="page2.html"><li>list1</li></a>
            </ul>

            <li id="league_ul"><img src="img/nav_icon3.png" alt=""></span>&emsp;LEAGUE</li>
            <ul class="small_list_3">
              <a href="page3.html"><li>list1</li></a>
              <a href="page3.html"><li>list1</li></a>
              <a href="page3.html"><li>list1</li></a>
              <a href="page3.html"><li>list1</li></a>
            </ul>
          </ul>
      </div>
      </div>

      <div class="main">
        <h1>Legue page</h1>

      </div>








    </div>


  </div>

</body>

</html>
