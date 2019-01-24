<?php 
include_once './common/head.php';
include_once './common/top_menu.php';
?>

<section class="order-wrap" id="scroll-wrap">
   <div class="wrap-container order-container" id="scroll-container">
      <div class="scroll-item">
         <div class="scroll-sub-box">
            <div class="product-subject c_black">로그인</div>
            <form name="login_form" method="post" action="./j_insert.php">
            <div class="login-table">
               <div class="login-input">
                    <input class="join-text-input" type="text" name="email" placeholder="이메일" >
                    <div class="check-id" id="check-id"></div>
               </div>
               <div class="login-input">
                    <input class="join-text-input" type="password" name="pw" placeholder="비밀번호" >
               </div>
            </div>
            </form>
         </div>
      </div>
</section>
<section class="order-section">
    <div class="order-tab">
        <div class="clear-both"></div>
        <button class="f_right btn-payment" onclick="checkSubmit();">로그인</button>
        <div class="clear-both"></div>
    </div>
    <div class="info-order"></div>
</section>


<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://ssl.daumcdn.net/dmaps/map_js_init/postcode.v2.js"></script>
<script type="text/javascript">

  // 유효성 검사
  function checkSubmit () {
    var f = document.join_form;

    if (f.email.value == "") {
        alert('이메일을 입력해주세요');
        f.email.focus();
        return false;
    }
    if (f.pw.value == "") {
        alert('패스워드를 입력해주세요');
        f.pw.focus();
        return false;
    }
    if (f.name.value == "") {
        alert('이름을 입력해주세요');
        f.name.focus();
        return false;
    }

    f.submit();
}

    function emailCheck(val){
        $("#check-id").empty();
        $.ajax({
            url: "member/id_check",
            type: "post",
            data: {
                'email' : val
            },
            success : function(data){
                console.log(data);
                $("#check-id").css({'display':'block'});
                if (data == 'failed') {
                    $('#check-id').text('이미 존재하는 이메일 입니다.');
                } else if(data == 'success') {
                    $('#check-id').text('사용가능한 이메일 입니다.');
                }
            },
            erro: function (request,error){
                console.log(request+"/"+error);
            }
        });
    }
</script>
<?php include_once './common/footer.php';?>