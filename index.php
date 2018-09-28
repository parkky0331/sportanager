<?php
if (!isset($_SESSION)) {
  // echo "세션 없음";
  session_start();
}else{
  // echo "세션 있음";
  session_start();
}
$m_id = $_SESSION['m_id'];
$m_pw = $_SESSION['m_pw'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/event.js"></script>
</head>

<body>
  <div class="wrap">
    <section class="intor_section">
      <div class="section_wrap">
        <div class="boxs">
          <div class="sitelogo"></div>
          <!--변경-->
          <div class="index_box1">

            <a href="team.php">
              <div class="box1_img">
                <img src="img/cart.png" alt="">
              </div>
            </a>

            <div class="box1_text">
              팀 관리
            </div>
          </div>
          <div class="index_box2">

            <a href="player.php">
              <div class="box2_img">
                <img src="img/people.png" alt="">
              </div>
            </a>
            <div class="box2_text">
              선수 관리
            </div>
          </div>
          <div class="index_box3">

            <a href="league.php">
              <div class="box3_img">
                <img src="img/zoom.png" alt="">
              </div>
            </a>
            <div class="box3_text">
              리그 관리
            </div>
          </div>

          <!--변경-->
        </div>
        <div class="login_box">
          <?php
          if (isset($_SESSION['m_id']) || isset($_SESSION['m_pw'])) {
            echo "[".$m_id."] 님이 로그인중입니다<br>";
            echo "<p>로그아웃을 하시겠습니까?";
            echo "
            <button type='submit' name='button' value='로그아웃'>
            <a href='dess_sess.php'>예</a>
            </button>
            <button type='submit' name='button' value='로그아웃'>
            <div class='login_box_close'>아니오</div>
            </button>
            ";
          }else{
            ?>


            <form class="" action="login_proc.php" method="get">
              <input type="text" name="m_id" placeholder="ID"></br>
              <input type="password" name="m_pw" placeholder="PW">
              <button type="submit" name="button" value="로그인">로그인</button>
            </form>
          <div class="login_box_close">닫기</div>
          <? } ?>

        </div>
      </div>

    </section>
    <div class="login_btn">
      logIN
    </div>
  </div>

</body>

</html>
