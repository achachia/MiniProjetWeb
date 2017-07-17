<?php
session_start();
include_once('dbConfig.php');
if(isset($_POST['bulk_delete_submit'])){
    $idArr = $_POST['checked_id'];
    foreach($idArr as $id){
        mysqli_query($conn,"DELETE FROM users_3 WHERE id=".$id);
    }
    $_SESSION['success_msg'] = 'Users have been deleted successfully.';
    header("Location:index.php");
}
?>