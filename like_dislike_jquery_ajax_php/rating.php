<?php
include_once("tutorial.php");
$tutorial = new Tutorial();
if($_POST['id']){
	//previous tutorial data
	$prev_record = $tutorial->get_rows($_POST['id']);
	//previous total likes
	$prev_like = $prev_record['like_num'];
	//previous total dislikes
	$prev_dislike = $prev_record['dislike_num'];
	
	//calculates the numbers of like or dislike
	if($_POST['type'] == 1){
		$like = ($prev_like + 1);
		$dislike = $prev_dislike;
		$return_count = $like;
	}else{
		$like = $prev_like;
		$dislike = ($prev_dislike + 1);
		$return_count = $dislike;
	}
	
	//store update data
	$data = array('like_num'=>$like,'dislike_num'=>$dislike,'modified'=>date("Y-m-d H:i:s"));
	//update condition
	$condition = array('id'=>$_POST['id']);
	//update tutorial like dislike
	$update = $tutorial->update($data,$condition);
	
	//return like or dislike number if update is successful, otherwise return error
	echo $update?$return_count:'err';
}
?>