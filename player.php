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
  <div class="page2_wrap">

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
              <a href="page1.html">
                <li>list1</li>
              </a>
              <a href="page1.html">
                <li>list1</li>
              </a>
              <a href="page1.html">
                <li>list1</li>
              </a>
              <a href="page1.html">
                <li>list1</li>
              </a>
            </ul>

            <li id="member_ul"><img src="img/nav_icon2.png" alt=""></span>&emsp;MEMBER</li>
            <ul class="small_list_2">
              <a href="page2.html">
                <li>list1</li>
              </a>
              <a href="page2.html">
                <li>list1</li>
              </a>
              <a href="page2.html">
                <li>list1</li>
              </a>
              <a href="page2.html">
                <li>list1</li>
              </a>
            </ul>

            <li id="league_ul"><img src="img/nav_icon3.png" alt=""></span>&emsp;LEAGUE</li>
            <ul class="small_list_3">
              <a href="page3.html">
                <li>list1</li>
              </a>
              <a href="page3.html">
                <li>list1</li>
              </a>
              <a href="page3.html">
                <li>list1</li>
              </a>
              <a href="page3.html">
                <li>list1</li>
              </a>
            </ul>
          </ul>
        </div>
      </div>

      <div class="main">
        <h1>TEAM PAGE</h1>

        <div class="my_member_box">
          <div class="member_info">
            <div class="member_member_tit">
              <p>MEMBER</p>
            </div>

            <div class="member_member_find">

              <!--검색하면 정보가 검색한사람 정보로 바뀌어야뎀-->
              <form class="" action="index.html" method="post">
                <input type="text" name="" value="" id="member_finder" placeholder="선수검색">
                <input type="button" name="" value="" id="member_finder_btn">
              </form>
            </div>

            <div class="member_infomation">
              <div class="member_photo">
                <!--멤버사진 php-->
                <img src="img/people.png" alt="">

              </div>
              <div class="member_is">
                <h1><span>001</span><span>김다운</span></h1>
                <ul>
                  <!--php 정보 처리-->
                  <li>
                    <p>보직</p>
                    <p>투수</p>
                  </li>
                  <li>
                    <p>생년월일</p>
                    <p>930408</p>
                  </li>
                  <li>
                    <p>가입연월</p>
                    <p>201809</p>
                  </li>
                  <li>
                    <p>연락처</p>
                    <p>010-0000-0000</p>
                  </li>
                  <li>
                    <p>주소</p>
                    <p>안양시 비산동</p>
                  </li>
                  <li>
                    <p>상세주소</p>
                    <p>대림대학교 모바일 109호</p>
                  </li>
                  <li>
                    <p>메신져</p>
                    <p>moin2018</p>
                  </li>

                </ul>

              </div>

            </div>

          </div>

          <div class="member_table">
            <div class="member_table_tit">
              <p>RECORD</p>
            </div>
            <div class="record_table">
              <h1>경기기록</h1>
              <div class="record_ul">

              <ul>
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
                <li>5</li>
                <li>5</li>


              </ul>
              <ul>
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
                <li>5</li>
                <li>5</li>

              </ul>
              <ul>
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
                <li>5</li>
                <li>5</li>

              </ul>
              <ul>
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
                <li>5</li>
                <li>5</li>

              </ul>
            </div>
            </div>
          </div>

        </div>

        <div class="member_chart">
          <h2>GRAPH</h2>

        </div>

      </div>








    </div>


  </div>

</body>

</html>
