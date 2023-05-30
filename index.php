<?php $url = (isset($_GET['url']) ? $_GET['url'] : "") ?>
<?php $url = str_replace("/", "", $url) ?>

<!-- HEAD -->
<?php
if ($url !== "login") {
    require_once "view/layout/head.php";
}
?>

<!-- NAVBAR -->
<?php
if ($url !== "login") {
    require_once "view/layout/include/navbar.php";
}
?>

<!-- LOGIN -->
<main>
    <?php require_once "app/controller/viewController.php"; ?>
</main>

<!-- FOOTER -->
<?php
if ($url !== "login") {
    require_once "view/layout/footer.php";
}
?>