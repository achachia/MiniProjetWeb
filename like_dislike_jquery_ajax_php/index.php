<?php
include_once("tutorial.php");
$tutorial = new Tutorial();
$trows = $tutorial->get_rows();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Like and Dislike using jQuery, Ajax and PHP</title>
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<style type="text/css">
.row{ margin:20px 20px 20px 20px;}
.ratings{ font-size:25px !important;}
.thumbnail img {
    width: 100%;
}

.ratings {
    padding-right: 10px;
    padding-left: 10px;
    color: #d17581;
}

.thumbnail {
    padding: 0;
}

.thumbnail .caption-full {
    padding: 9px;
    color: #333;
}
.glyphicon-thumbs-up:hover{ color:#008000; cursor:pointer;}
.glyphicon-thumbs-down:hover{ color: #E10000; cursor:pointer;}
.counter{ color:#333333;}
.thumbnail img{height:200px;}
</style>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
/**
* Function Name: cwRating()
* Function Author: CodexWorld
* Description: cwRating() function is used for implement the rating system. cwRating() function insert like or dislike data into the database and display the rating count at the target div.
* id = Unique ID, like or dislike is based on this ID.
* type = Use 1 for like and 0 for dislike.
* target = Target div ID where the total number of likes or dislikes will display.
**/
function cwRating(id,type,target){
	$.ajax({
		type:'POST',
		url:'rating.php',
		data:'id='+id+'&type='+type,
		success:function(msg){
			if(msg == 'err'){
				alert('Some problem occured, please try again.');
			}else{
				$('#'+target).html(msg);
			}
		}
	});
}
</script>
</head>

<body>
<div class="row">
	<?php foreach($trows as $trow){ ?>
    <div class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail">
            <img src="<?php echo 'images/'.$trow['image']; ?>" alt="" />
            <div class="caption">
                <h4><a href="javascript:void(0);"><?php echo $trow['title']; ?></a></h4>
                <p><?php echo $trow['details']; ?></p>
            </div>
            <div class="ratings">
                <p class="pull-right"></p>
                <p>
                    <!-- Like Icon HTML -->
                    <span class="glyphicon glyphicon-thumbs-up" onClick="cwRating(<?php echo $trow['id']; ?>,1,'like_count<?php echo $trow['id']; ?>')"></span>&nbsp;
                    <!-- Like Counter -->
                    <span class="counter" id="like_count<?php echo $trow['id']; ?>"><?php echo $trow['like_num']; ?></span>&nbsp;&nbsp;&nbsp;
                    
                    <!-- Dislike Icon HTML -->
                    <span class="glyphicon glyphicon-thumbs-down" onClick="cwRating(<?php echo $trow['id']; ?>,0,'dislike_count<?php echo $trow['id']; ?>')"></span>&nbsp;
                    <!-- Dislike Counter -->
                    <span class="counter" id="dislike_count<?php echo $trow['id']; ?>"><?php echo $trow['dislike_num']; ?></span>
                </p>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
</body>
</html>
