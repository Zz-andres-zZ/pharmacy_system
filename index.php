<?php $url = (isset($_GET['url']) ? $_GET['url'] : "") ?>

<?php
if ($url != "login") {
    require_once "view/layout/head.php";
}
?>

<?php
if ($url != "login") {
    require_once "view/layout/include/navbar.php";
}
?>

<main>
    <?php require_once "app/controller/viewController.php"; ?>
</main>

<?php
if ($url != "login") {
    require_once "view/layout/footer.php";
}
?>