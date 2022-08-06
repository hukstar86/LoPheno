<?php
include_once('../includes/config.php');
if (!isset($_SESSION['user_id'])) {
	header("Location: ../signin_required.php");
} 
if ($_SESSION['role'] == 1) {
	header("Location: ../signin_admin_required.php");
}
// retreives product id from url
$productID = $_GET['ProdID'];
$query = "DELETE FROM products WHERE productID='$productID' ";
mysqli_query($link, $query);
// redirect to product home page
header("Location: index.php");
?>