<?php $urls = (isset($_GET['urls']) ? $_GET['urls'] : "") ?>

<?php
if ($urls != "login") {
    require_once "views/layouts/head.php";
}
?>

<?php
if ($urls != "login") {
    require_once "views/layouts/includes/navbar.php";
}
?>

<main>
    <?php require_once "apps/controllers/viewControllers.php"; ?>
</main>

<?php
if ($urls != "login") {
    require_once "views/layouts/footer.php";
}
?>