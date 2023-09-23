<?php

$root = $_SERVER['DOCUMENT_ROOT'];

require_once "{$root}/App.php";
$Head = "{$root}/src/components/Head.php";
$Nav = "{$root}/src/components/Nav.php";
$Footer = "{$root}/src/components/Footer.php";

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <?php require_once $Head; ?>
    <title>Error</title>
</head>
<body>
    <?php require_once $Nav; ?>

    <?php

      require App::renderContent();
    
    ?>

    <?php require_once $Footer; ?>
</body>
</html>