<?php $url = $_SERVER['REQUEST_URI'];
$str = explode('/', $url); ?>

<div class="header_inner">

	<div class="left">
		<?php
			if ($str[1] == "") {
				echo '<h1 class="logo"><a href="/"><img src="/images/common/header_logo.svg" alt=""></a></h1>';
			} else {
				echo '<p class="logo"><a href="/"><img src="/images/common/header_logo.svg" alt=""></a></p>';
			}
		?>
	</div>
	<div class="middle">
		<ul>
			<li>
				<a href="">
					<img src="/images/common/fb_icon.svg" alt=""></a>
				</a>
			</li>
			<li>
				<a href="">
					<img src="/images/common/ig_icon.svg" alt=""></a>
				</a>
			</li>
			<li>
				<a href="">
					<img src="/images/common/weibo_icon.png" alt=""></a>
				</a>
			</li>
		</ul>
		<div class="menu">
			<span class="line line-t"></span>
			<span class="line line-m"></span>
			<span class="line line-b"></span>
			<p></p>
		</div>
		<div class="overlay"></div>
	</div>
	<nav class="right">
		<ul>
			<li><a href="/" <?php if ($str[1] == "") {
				echo ' class="here"';
			} ?>>PHILOSOPHY</a></li>
			<li><a href="/" <?php if ($str[1] == "") {
				echo ' class="here"';
			} ?>>COURSES</a></li>
			<li><a href="/event/" <?php if ($str[1] == "") {
				echo ' class="here"';
			} ?>>EVENTS</a></li>
			<li><a href="/" <?php if ($str[1] == "") {
				echo ' class="here"';
			} ?>>INSTRUCTORS</a></li>
			<li><a href="http://musicschool.kawai-global.com/contact/" target="_blank" <?php if ($str[1] == "") {
				echo ' class="here"';
			} ?>>CONTACT</a></li>
		</ul>
	</nav>
</div>
