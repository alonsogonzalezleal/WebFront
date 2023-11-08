<?php

require_once ROOT_PATH . '/src/App.php';

$Head = ROOT_PATH . '/src/routes/Views/components/Head.php';
$Nav = ROOT_PATH . '/src/routes/Views/components/Nav.php';
$Footer = ROOT_PATH . '/src/routes/Views/components/Footer.php';

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <?php require_once $Head; ?>
    <title>Section</title>
</head>
<body>
    <?php require_once $Nav; ?>

    <?php

      require App::renderContent();
    
    ?>

    <?php require_once $Footer; ?>
</body>
</html>