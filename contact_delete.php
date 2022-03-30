<?php 

require_once "core/base.php"; 
require_once "core/function.php";

$id = $_GET['id'];

$sql = "SELECT * FROM contact_list WHERE id='$id'";
$row = fetch($sql);
unlink($row['photo']);

contactDelete($id);
redirect('index.php');

?>

       