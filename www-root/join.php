<?php 
include_once './common/head.php';
include_once './common/top_menu.php';
?>

<section class="order-wrap" id="scroll-wrap">
	<div class="wrap-container order-container" id="scroll-container">
		<div class="scroll-item">
			<div class="scroll-sub-box">
				<div class="product-subject c_black">회원 가입</div>
				<form method="post" action="./joinInsert.php">
				<div class="join-table">
					<div class="join-input">
                        <input class="join-text-input" type="text" name="email" placeholder="이메일" >
                    </div>
					<div class="join-input">
                        <input class="join-text-input" type="text" name="pw" placeholder="비밀번호" >
                    </div>
					<div class="join-input">
                        <input class="join-text-input" type="text" name="checkPw" placeholder="비밀번호확인" >
                    </div>
					<div class="join-input">
                        <input class="join-text-input" type="text" name="name" placeholder="이름" >
                    </div>
					<div class="join-input">
                        <input class="join-text-input" type="text" name="address" id="sample6_address" placeholder="주소">
                    </div>
					<div class="join-input">
                        <input class="join-text-input" type="text" name="postcode" id="sample6_postcode" placeholder="우편번호">
                        <input type="button" onclick="sample6_execDaumPostcode()" value="주소검색">
                    </div>
					<div class="join-input">
                        <input class="join-text-input" type="text" name="address_detail" id="sample6_address2" placeholder="상세 주소" >
                    </div>
					<div class="join-input">
                        <input type="text" class="join-phone-input" name="phone1" class="small-input" maxlength="3" >
						-<input type="text" class="join-phone-input" maxlength="4" name="phone2">
						-<input type="text" class="join-phone-input" maxlength="4" name="phone3">
                    </div>
				</div>
				</form>
			</div>
		</div>
</section>




<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://ssl.daumcdn.net/dmaps/map_js_init/postcode.v2.js"></script>
<script type="text/javascript">
	

	//다음 지도 팝업
    function sample6_execDaumPostcode() {
        new daum.Postcode({
            oncomplete: function(data) {
                var fullAddr = '';
                var extraAddr = '';

                if (data.userSelectedType === 'R') {
                    fullAddr = data.roadAddress;
                } else {
                    fullAddr = data.jibunAddress;
                }
                if(data.userSelectedType === 'R'){
                    if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                        extraAddr += data.bname;
                    }
                    if(data.buildingName !== '' && data.apartment === 'Y'){
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
                }
                document.getElementById('sample6_postcode').value = data.zonecode; 
                document.getElementById('sample6_address').value = fullAddr;
                document.getElementById('sample6_address2').focus();
            }
        }).open();
    }
</script>



<?php include_once './common/footer.php';?>
