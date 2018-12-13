<?php 
include_once './common/head.php';
include_once './common/top_menu.php';
?>

<section class="purchase-wrap">
	<div class="purchase-container">
		<div class="parents">
		<div class="purleft"></div>
		<div class="purright">
			<div class="purchase">상품명</div>
			<div class="purchase">개수</div>
			<div class="purchase">가격</div>
			<div class="purchase">배송비</div>
		</div>
		</div>
		<div class="purdown">총 결제금액</div>
	</div>
</section>

<section class="order-section">
	<div class="order-tab">
		<div class="clear-both"></div>
		<button class="f_right btn-payment" onclick="scrollDown()">이전</button>
		<button class="f_right btn-basket" onclick="scrollUp()">다음</button>
		<div class="clear-both"></div>
	</div>
	<div class="info-order"></div>
</section>

<?php include_once './common/footer.php';?>