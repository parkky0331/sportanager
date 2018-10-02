<?
include_once $_SERVER['DOCUMENT_ROOT']."/inc/conn.inc";

$conn = getConnection();
session_start();

$m_id = $_SESSION['m_id'];
if (!$m_id) {

    echo "
    <script type='text/javascript'>
    alert('로그인이 필요한 서비스 입니다.');
    location.href = 'index.php';
    </script>";

}

$info_sql = "SELECT * FROM member_tb WHERE m_id = '$m_id'";
$info_query = mysqli_query($conn, $info_sql);
$info_array = mysqli_fetch_array($info_query);


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/master.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif+KR" rel="stylesheet">
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
        <a href="index.php">
          <div class="head_logo">
          </div>
        </a>
      </div>

      <div class="head_login">
        <?php echo $_SESSION['m_id']; ?>
      </div>

      <div class="logout_box">
        <div class="logout_team_logo">
d
        </div>
        <div class="logout_team_info">
          <h1><?php echo $_SESSION['m_id']; ?></h1>
          <p>팀대표자 : <?php echo $_SESSION['m_id']; ?> </p>

        </div>

        <div class="logout_logout">

          로그아웃하시겠습니까?
          <div class="logout_logout_yes">
            yes
          </div>
          <div class="logout_logout_no">
            no
          </div>
        </div>
        <script type="text/javascript">
        $(".head_login").click(function(){
          $(".logout_box").show()
        })
        $(".logout_logout_no").click(function(){
          $(".logout_box").css({"display":"none"})

        })

        </script>




      </div>

    </div>
    <div class="page1_article">
      <div class="nav">
        <div class="nav_team_logo_box">
          <img src="<?php echo $info_array['m_image']; ?>">
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
        <h1>TEAM PAGE</h1>

        <div class="my_team_box">
          <div class="my_team_logo">
            <p>TEAM NAME[PHP처리]</p>
            <div class="my_logo">
              TEMA_LOGO[php처리 ]
            </div>
          </div>
          <div class="my_team_member">
            <div class="member_tit">
              <p>MEMBER LIST</p>

              <!--멤버검색하면 리스트에 검색한 이름만뜨게 / 멤버추가는 다른페이지에서-->

              <form class="" action="index.html" method="post">

                <div class="member_input">
                  <input type="text" name="" value="">
                  <div class="member_pluse">
                    <a href="">+</a>
                  </div>

                  <div class="member_find">
                    <input type="button" name="" value="">
                  </div>

                </div>
              </form>

            </div>


            <!--PHP 처리해야할부분!-->
            <!--li 클릭하면 PAGE2 에서 바로 그 이름에 해당하는 회원을 볼수있어야함-->
            <ul>
              <!--이부분은 없앨꺼임-->
              <li><span>연번</span> <span>이름</span><span>보직</span><span>생년월일</span><span>연락처</span></li>
              <!--이부분은 없앨꺼임-->
              <a href="page2.html">
                <li><span>001</span><span>김다운</span><span>타자</span><span>930408</span><span>010-0000-0000</span></li>
              </a>
              <li><span>002</span></li>
              <li><span>003</span></li>
              <li><span>003</span></li>
              <li><span>003</span></li>
              <li><span>003</span></li>
              <li><span>003</span></li>
              <li><span>003</span></li>
              <li><span>003</span></li>


            </ul>

          </div>

        </div>

        <div class="my_team_date">
          <h2>SCHEDULE</h2>

        </div>

      </div>








    </div>


  </div>

</body>

</html>
