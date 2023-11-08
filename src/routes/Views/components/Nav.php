<style> @import url('/src/routes/Views/components/Nav.css?v=<?= APP_VERSION ?>'); </style>
<script type="text/javascript" src="/src/routes/Views/components/Nav.js?v=<?= APP_VERSION ?>" defer></script>

<nav class="nav" id="nav">
  <a href="<?= URL_APP ?>">Home</a>
  <a href="<?= URL_APP ?>/section/page/1">Page</a>
  <a href="<?= URL_APP ?>/section/class-example">Class Example</a>
  <a href="<?= URL_APP ?>/about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="dropdownItems()">
    <i class="fa fa-bars"></i>
  </a>
</nav>