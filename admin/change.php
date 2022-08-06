<?php include_once("../includes/config.php");
$query=mysqli_query($link, "Update users set status='".$_POST['val']."' where user_id='".$_POST['user_id']."' ");
if($query)
{
  $q=mysqli_query($link, "Select * from users where user_id='".$_POST['user_id']."' ");
  $data=mysqli_fetch_assoc($query);
  echo $data['$status'];
}
?>