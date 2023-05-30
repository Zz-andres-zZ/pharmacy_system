<?php
if (isset($_GET['url']) != "login") {
    require_once "view/layout/head.php";
}else {
    require_once "view/layout/head.php";
}
?>

<?php
if (isset($_GET['url']) != "login") {
    require_once "view/layout/include/navbar.php";
}else {
    require_once "view/layout/include/navbar.php";
}
?>

<?php if (isset($_GET['url']) != "login") { ?>
    <main>
        <?php require_once "app/controller/view_controller.php"; ?>
    </main>
<?php } else {
    require_once "app/controller/view_controller.php";
} ?>

<?php
if (isset($_GET['url']) != "login") {
    require_once "view/layout/footer.php";
}else {
    require_once "view/layout/footer.php";
}
?>