<style> @import url('/src/routes/resources_<?= APP_VERSION ?>/css/Nav.css'); </style>
<script type="text/javascript" src="/src/routes/resources_<?= APP_VERSION ?>/js/components/Nav.js" defer></script>

<nav class="nav" id="nav">
  <a href="<?= URL_APP ?>">Home</a>
  <a href="<?= URL_APP ?>/section/page/1">Page</a>
  <a href="<?= URL_APP ?>/section/class-example">Class Example</a>
  <a href="<?= URL_APP ?>/about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="dropdownItems()">
    <i class="fa fa-bars"></i>
  </a>
</nav>