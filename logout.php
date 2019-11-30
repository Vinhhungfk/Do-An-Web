<?php session_start(); 
 
if (isset($_SESSION['userindex'])){
    unset($_SESSION['userindex']); // xóa session login
}
?>
<?php include("header.php"); ?>

<div class="list2">Đăng xuất thành công!</div>

