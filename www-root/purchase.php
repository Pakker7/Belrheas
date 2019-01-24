<?php 
include_once './common/head.php';
include_once './common/top_menu.php';
?>


<section class="purchase-wrap">
	<div class="purchase-container">
		<div class="parents">
		<div class="purleft"></div>
		<div class="purright">
			<div class="purchase"><span class="spam">상품명</span>Milk Chocolate</div>
			<div class="purchase"><span class="spam">개수</span>2개</div>
			<div class="purchase"><span class="spam">가격</span>24,000원</div>
			<div class="purchase"><span class="spam">배송비</span>2,500원</div>
		</div>
		</div>
		<div class="purdown"><span class="spamdown">총 결제금액</span>26,500원</div>
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