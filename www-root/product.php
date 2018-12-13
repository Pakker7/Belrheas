<?php include_once './common/head.php';?>

<section class="wrap">
	<div class="wrap-container">
		<div class="one-step">
			<div class="one-image-cover"></div>
			<div class="one-image">
				<div class="image-content one-image-content" onclick="action_move('milk')">
					<div>Milk<br>Chcolate</div>
				</div>
			</div>
		</div>
		<div class="two-step">
			<div class="two-image-cover"></div>
			<div class="two-image">
				<div class="image-content two-image-content" onclick="action_move('dark')">
					<div>Dark<br>Chcolate</div>
				</div>
			</div>
		</div>
		<div class="three-step">
			<div class="three-image-cover"></div>
			<div class="three-image">
				<div class="image-content three-image-content" onclick="action_move('green')">
					<div>Green<br>Chcolate</div>
				</div>
			</div>
		</div>
		<div class="four-step">
			<div class="four-image-cover"></div>
			<div class="four-image">
				<div class="image-content four-image-content" onclick="action_move('yogurt')">
					<div>Yogurt<br>Chcolate</div>
				</div>
			</div>
		</div>
	</div>
	<div class="loading-container">
		<div class="loading" id="loading">
			<div class="loader">
			</div>
		</div>
	</div>
</section>

<?php include_once './common/footer.php';?>