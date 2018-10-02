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

if (isset($_SESSION['m_id']) || isset($_SESSION['m_pw'])) {
  $login_check = true;
}else{
  $login_check = false;
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src='//code.jquery.com/jquery.min.js'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js'></script>
  <script src="js/event.js"></script>
  <script src="js/post_check.js"></script>
<!--   <script>
    $(function() {
      $('#m_image').bind('change', function() {
        $("<form action='upload_ok.php' enctype='multipart/form-data' method='post'/>")
        .ajaxForm({
          dataType: 'json',
          beforeSend: function() {
            $('#result').append( "beforeSend...\n" );
          },
          complete: function(data) {
            $('#result')
            .append( "complete...\n" )
            .append( JSON.stringify( data.responseJSON ) + "\n" );
          }
        })
        .append( $(this) )
        .submit();
      });
    });
  </script>
-->
<!-- <script type="text/javascript">  
  $(document).ready(function() {

    $("#m_image").submit( function(e){
      e.preventDefault();

      var datas, xhr;

      datas = new FormData();
      datas.append( 'service_image', $( '#profile_image' )[0].files[0] );

      $.ajax({
            url: someurl, // url where upload the image
            contentType: 'multipart/form-data',
            type: 'POST',
            data: datas,  
            dataType: 'json',    
            mimeType: 'multipart/form-data',
            success: function (data) {              
             alert( data.url );               
           },
           error : function (jqXHR, textStatus, errorThrown) {
            alert('ERRORS: ' + textStatus);
          },
          cache: false,
          contentType: false,
          processData: false
        });        
    });

  });

</script>
-->
<!-- 메모장CSS 완성시 삭제바람 -->
<style media="screen">
.memo{
  width: 500px;
  height: 200px;
  background-color: rgba(255,255,255,0.4);
  position: absolute;
  left: 10px;
  top: 10px;
  overflow-y: scroll;
}
</style>
</head>

<body>
  <div class="wrap">

    <!-- 메모장영역 완성시 삭제바람 -->

    <div class="memo">
      <h1>메모장입니다</h1>

    테스트 계정</br>
  계정:admin / 패스워드 :admin</br>
진행사항 : 로그인 로그아웃 UI / 시스템 완성(10/01)</br>
<b>*****클릭하면사라짐******</b>


</div>
<script type="text/javascript">
  $(".memo").click(function(){
    $(this).hide()
  })
</script>
<!-- 메모장영역 완성시 삭제바람 -->


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
      <div class="login_selector">
        <p id="selector_login">Login</p>
        <p id="selector_join">Join</p>
      </div>

      <div class="select_login">
        <div class="login_mark_people"></div>

        <div class="logout">
          <?php
          if ($login_check == true) {
            echo "<p>[".$m_id."] 님이 로그인중입니다</p>";
            echo "<p>로그아웃을 하시겠습니까?</p>";
            echo "
            <button type='submit' name='button' value='로그아웃' class='logout_yes'>
            <a href='dess_sess.php'>예</a>
            </button>

            <div class='login_box_close'>아니오</div>

            ";
          }else{
            ?>

          </div>


          <form class="login_form" action="login_proc.php" method="get">
            <input type="text" name="m_id" placeholder="ID" autocomplete="off" class="login_input"></br>
            <input type="password" name="m_pw" placeholder="PW" autocomplete="off" class="password_input">
            <button type="submit" name="button" value="로그인" class="form_login_btn">로그인</button>
            <div class="login_box_close">닫기</div>
          </form>

        <? } ?>

      </div>
      <div class="select_join">
        <div class="login_mark_people"></div>

        <form class="logout_form" enctype="multipart/form-data" action="regi_proc.php" method="post" onSubmit="return post_check();">
          <input type="text" name='m_id' placeholder="ID" autocomplete="off" class="login_input"><br>
          <input type="password" name="m_pw" placeholder="PW" autocomplete="off" class="password_input"><br>
          <input type="password" name="m_pwre" placeholder="PW_repeat" autocomplete="off" class="password_input"><br>
          <input type="text" name="m_name" placeholder="NAME" autocomplete="off" class="password_input"><br>
          <input type="file" name="m_image">
          <button type="submit" name="button" value="회원가입" class="form_login_btn">회원가입</button>
          <div class="login_box_close">닫기</div>
        </form>

      </div>

    </div>

  </div>

</section>
<div class="login_btn">
  <?php 
  if ($login_check == true) {
    echo "<marquee>Logged In [".$m_id."]</marquee>";//장난으로 마퀴태그 써봄 ㅋㅋㅋㅋ 한줄로 그냥 쓰면 아랫줄로 넘어가버림
  }else{
    echo "Log In";
  }
  ?>
</div>
</div>

</body>

</html>
