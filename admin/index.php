<?php $urls = (isset($_GET['urls']) ? $_GET['urls'] : "") ?>

<?php require_once "views/layouts/head.php"; ?>

<main>
    <?php require_once "apps/controllers/viewControllers.php"; ?>
</main>

<?php
if ($urls != "login") {
    require_once "views/layouts/footer.php";
}
?>