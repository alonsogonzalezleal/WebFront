<?php

$root = $_SERVER['DOCUMENT_ROOT'];

$CardSample = "{$root}/src/components/Home/CardSample.php";

?>

<script type="module" src="/src/routes/resources/js/routes/Home.js?v=<?= APP_VERSION ?>" defer></script>
<style> @import url('/src/routes/resources/css/Home.css?v=<?= APP_VERSION ?>'); </style>
<style> @import url('/src/routes/resources/css/Card.css?v=<?= APP_VERSION ?>'); </style>

<header>
	<div class="space-50"></div>
	<div class="container">
		<h2 class="my-title">Hi! This is a Web App made with WebFront.</h2>
	</div>
</header>

<main>
	<section class="container">
		<p class="my-paragraph">Oh! This is a paragraph, you can put any text inside.</p>
		<p class="my-paragraph">Press the next button to go to an inexistent page.</p>
		<p class="my-paragraph"><a href="<?= URL_APP ?>/thispagedoesntexist" target="_self" class="btn">Go to Error 404</a></p>
	</section>

	<section>
		<?php require $CardSample; ?>
	</section>

</main>