
	<header>
		<nav class="p_relative m_a">
			<div class="logo">
				<a href="/"><img src="./common/img/logo.png"></a>
			</div>
			<ul class="p_absolute">
				<li>Milk Chocolate</li>
				<li>Dark Chocolate</li>
				<li>Yogurt Chocolate</li>
				<li>Green Chocolate</li>
			</ul>
			<div class="hamburger">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</nav>

		<!-- 세로 메뉴바(반응형만 사용? 미정)-->
		<div class="background-menubar">
			<ul class="background-menu">
				<li class="menu">
					<a class="category" href="#"><h1>PRODUCT</h1></a>
					<ul class="hide">
						<li>Milk Chocolate</li>
						<li>Dark Chocolate</li>
						<li>Yogurt Chocolate</li>
						<li>Green Chocolate</li>
					</ul>
				</li>
		 
				<li class="menu">
					<a class="category" href="#"><h1>SERVICE CENTER</h1></a>
					<ul class="hide">
						<li>Q & A</li>
						<li>상담 센터</li>
					</ul>
				</li>
			</ul>
		</div>

		<script src="//code.jquery.com/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				$(".menu>a").click(function(){
					var submenu = $(this).next("ul");
					if( submenu.is(":visible") ){
						submenu.slideUp();
					}else{
						submenu.slideDown();
					}
				});
			});
		</script>
	</header>