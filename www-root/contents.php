<?php 
include_once './common/head.php';
include_once './common/top_menu.php';
?>

<?php 
$product = $_GET['product'];

$img_src = '';
$product_subject = '';
$product_info_img = '';
switch ($product) {
	case 'milk':
		$img_src = './common/img/photo1.jpg';
		$product_subject = 'Milk Chocolate';
		$product_info_img = 'bg_milk';
		break;

	case 'dark':
		$img_src = './common/img/photo2.jpg';
		$product_subject = 'Dark Chocolate';
		$product_info_img = 'bg_dark';
		break;

	case 'yogurt':
		$img_src = './common/img/photo3.jpg';
		$product_subject = 'Yogurt Chocolate';
		$product_info_img = 'bg_yogurt';
		break;

	case 'green':
		$img_src = './common/img/photo4.jpg';
		$product_subject = 'Green Chocolate';
		$product_info_img = 'bg_green';
		break;
	
	default:
		$img_src = './common/img/noimage.jpg';
		break;
}
?>

<div class="loading-container fixed-div">
	<div class="loading" id="loading">
		<div class="loader">
		</div>
	</div>
</div>

<section class="order-wrap" id="scroll-wrap">
	<div class="wrap-container order-container" id="scroll-container">
		<div class="scroll-item">
			<div class="scroll-sub-box">
				<div class="product-subject"><?=$product_subject?></div>
				<div class="photo-order">
					<img src="<?=$img_src?>">
				</div>
			</div>
		</div>
		<div class="scroll-item">
			<div class="scroll-sub-box content-div">
				<div class="product-subject c_white">More Information</div>
				<div class="photo-order">
					<div class="img <?=$product_info_img?>">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="order-section">
	<div class="order-tab">
		<div class="clear-both"></div>
		<button class="f_right btn-payment" onclick="scrollDown()">구매하기</button>
		<button class="f_right btn-basket" onclick="scrollUp()">장바구니</button>
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

<?php include_once './common/footer.php';?>