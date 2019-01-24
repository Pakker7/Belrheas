<?php 
include_once './common/head.php';
include_once './common/top_menu.php';
?>

<section class="order-wrap" id="scroll-wrap">
	<div class="wrap-container order-container" id="scroll-container">
		<div class="scroll-item">
			<div class="scroll-sub-box">
<!--			<div class="scroll-sub-box content-div">	-->
				<div class="product-subject c_black">배송지 정보 입력</div>
				<span class="underline"></span>
				<div class="address">
					<form method="post" action="./d_insert.php"> <!--action 유/무 결정해야 함 -->
						<table class="addressList">
							<tr>
								<th></th>
								<td id="userinfo"><input type="checkbox" class="checkbox">회원정보와 동일</td><!--현재 로그인한 회원 정보 불러오기 -->
							</tr>
							<tr>
								<th class="property">이 름</th>
								<td><input type="text" name="name"></td>
							</tr>
							<tr>
								<th class="property">우편 번호</th>
								<td><input type="text" id="sample6_postcode" name="postcode"><input type="button" onclick="sample6_execDaumPostcode()" value="주소검색"></td>
							</tr>
							<tr>	
								<th class="property">주 소</th>
								<td><input type="text" id="sample6_address" name="address"><input type="text" id="sample6_address2" placeholder="상세 주소" name="address_detail"></td>
							</tr>
							<tr>
								<th class="property">연락처</th>
								<td class="phone"><input type="text" class="small-input" maxlength="3" name="phone1">
									<span>-</span><input type="text" class="small-input"maxlength="4" name="phone2">
									<span>-</span><input type="text" class="small-input"maxlength="4" name="phone3"></td>
							</tr>
							<tr>
								<th class="property">이메일</th>
								<td><input type="text" class="email" name=email1> @ <input type="text" name="email2" id="str_email02" style="width:100px;"> 
									<select style="width:100px;margin-right:10px" name="selectEmail" id="selectEmail"> 
										<option value="1">직접입력</option> 
										<option value="naver.com" selected>naver.com</option>
										<option value="gmail.com">gmail.com</option> 
										<option value="hanmail.net">hanmail.net</option> 
										<option value="hotmail.com">hotmail.com</option> 
										<option value="nate.com">nate.com</option> 
										<option value="yahoo.co.kr">yahoo.co.kr</option>
										<option value="yahoo.co.kr">daum.net</option>						
									</select>
								</td>
							</tr>
							<tr>
								<th class="property">요청사항</th>
								<td><textarea name="request" placeholder="ex.배송시 연락 주세요"></textarea> </td>
							</tr>								
						</table>
					</form>
				</div>

			</div>
		</div>

</section>
<!-- 원페이지
		<div class="scroll-item">
			<div class="scroll-sub-box">


			</div>
		</div>
-->


<section class="order-section">
	<div class="order-tab">
		<div class="clear-both"></div>
		<button class="f_right btn-payment" type="submit">다음</button>
		<button class="f_right btn-payment" type="submit">추가</button>
		<button class="f_right btn-basket">이전</button>
		<div class="clear-both"></div>
	</div>
	<div class="info-order"></div>
</section>
<script>
	document.addEventListener( "DOMContentLoaded", function () {
		setTimeout(function () {
			loading_end();
		}, 500);
	});
</script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://ssl.daumcdn.net/dmaps/map_js_init/postcode.v2.js"></script>
<script>
	//이메일 선택
	$('#selectEmail').change(function(){ $("#selectEmail option:selected").each(function () { 
		if($(this).val()== '1'){ //직접입력일 경우 
			$("#str_email02").val(''); //값 초기화 
			$("#str_email02").attr("disabled",false); //활성화 
		} else{ //직접입력이 아닐경우 
			$("#str_email02").val($(this).text()); //선택값 입력 
			$("#str_email02").attr("disabled",true); //비활성화 
		} 
	}); 
});
	//휴대폰 번호 input
	$(function() {
    $(".small-input").keydown(function(e) {
		var charLimit = $(this).attr("maxlength");
        var keys = [8, 9, /*16, 17, 18,*/ 19, 20, 27, 33, 34, 35, 36, 37, 38, 39, 40, 45, 46, 144, 145];

        if (e.which == 8 && this.value.length == 0) {
            $(this).prev('.small-input').focus();
        } else if ($.inArray(e.which, keys) >= 0) {
            return true;
        } else if (this.value.length >= charLimit) {
            $(this).next('.small-input').focus();
            return false;
        } else if (e.shiftKey || e.which <= 47 || e.which >= 106) {
            return false;
        } else if (e.shiftKey || (e.which >= 58 && e.which <= 95)) {
            return false;
        }
    }).keyup (function () {
		var charLimit = $(this).attr("maxlength");
        if (this.value.length >= charLimit) {
            $(this).next('.small-input').focus();
            return false;
        }
    });
});
	//다음 지도 팝업
    function sample6_execDaumPostcode() {
        new daum.Postcode({
            oncomplete: function(data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var fullAddr = ''; // 최종 주소 변수
                var extraAddr = ''; // 조합형 주소 변수

                // 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    fullAddr = data.roadAddress;

                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    fullAddr = data.jibunAddress;
                }

                // 사용자가 선택한 주소가 도로명 타입일때 조합한다.
                if(data.userSelectedType === 'R'){
                    // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                    // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                    if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                        extraAddr += data.bname;
                    }
                    // 건물명이 있고, 공동주택일 경우 추가한다.
                    if(data.buildingName !== '' && data.apartment === 'Y'){
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                    fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                document.getElementById('sample6_postcode').value = data.zonecode; //5자리 새우편번호 사용
                document.getElementById('sample6_address').value = fullAddr;

                // 커서를 상세주소 필드로 이동한다.
                document.getElementById('sample6_address2').focus();
            }
        }).open();
    }
</script>
<?php include_once './common/footer.php';?>
