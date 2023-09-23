<?php

$root = $_SERVER['DOCUMENT_ROOT'];

$CardSample = "{$root}/src/components/Home/CardSample.php";

?>

<script type="module" src="/src/routes/resources_<?= APP_VERSION ?>/js/routes/Home.js" defer></script>
<style> @import url('/src/routes/resources_<?= APP_VERSION ?>/css/Home.css'); </style>
<style> @import url('/src/routes/resources_<?= APP_VERSION ?>/css/Card.css'); </style>

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