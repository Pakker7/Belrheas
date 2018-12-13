<?php include_once './common/head.php';?>

<section class="wrap">
	<div class="wrap-container">
		<div id="parentDiv">
			<div id="childDiv"></div>
			<div class="img-div"></div>
		</div>

		<div class="line-div p_absolute">
			<span></span>
			<span></span>
			<span></span>
		</div>
		
		<section class="gif-section">
			<div class="svg-div">
				<svg version="1.1" viewBox="0 0 700 300">
					<symbol id="fade-text">
						<text x="50%" y="50%" text-anchor="middle">BEL RHEAS</text>
					</symbol>
					<g>
						<use class="stroke" xlink:href="#fade-text"/> <use class="fill" xlink:href="#fade-text"/>
					</g>
				</svg>
			</div>
		</section>
		<a class="nextpage" href="product.php">
			<div class="nextpage-back"></div>
			다음페이지 바로가기
		</a>
	</div>
</section>

<?php include_once './common/footer.php';?>