<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Pagination with jQuery Ajax PHP and MySQL by CodexWorld</title>
<link href='style.css' rel='stylesheet' type='text/css'>
<script src="jquery.min.js"></script>
<script type="text/javascript">
// Show loading overlay when ajax request starts
$( document ).ajaxStart(function() {
    $('.loading-overlay').show();
});
// Hide loading overlay when ajax request completes
$( document ).ajaxStop(function() {
    $('.loading-overlay').hide();
});
</script>
</head>
<body>
<div class="post-wrapper">
    <div class="loading-overlay"><div class="overlay-content">Loading.....</div></div>
    <div id="posts_content">
    <?php
    //Include pagination class file
    include('Pagination.php');
    
    //Include database configuration file
    include('dbConfig.php');
    
    $limit = 5;
    
    //get number of rows
    $queryNum = $db->query("SELECT COUNT(*) as postNum FROM posts");
    $resultNum = $queryNum->fetch_assoc();
    $rowCount = $resultNum['postNum'];
    
    //initialize pagination class
    $pagConfig = array('baseURL'=>'getData.php', 'totalRows'=>$rowCount, 'perPage'=>$limit, 'contentDiv'=>'posts_content');
    $pagination =  new Pagination($pagConfig);
    
    //get rows
    $query = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT $limit");
    
    if($query->num_rows > 0){ ?>
        <div class="posts_list">
        <?php
            while($row = $query->fetch_assoc()){ 
                $postID = $row['id'];
        ?>
            <div class="list_item"><a href="javascript:void(0);"><h2><?php echo $row["title"]; ?></h2></a></div>
        <?php } ?>
        </div>
        <?php echo $pagination->createLinks(); ?>
    <?php } ?>
    </div>
</div>
</body>
</html>