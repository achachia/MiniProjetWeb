<?php
include("Dbconfig.php");

$results = $dbcon->prepare("SELECT COUNT(*) FROM e_coupon");
$results->execute();
$get_total_rows = $results->fetch();

//breaking total records into pages
$pages = ceil($get_total_rows[0] / $item_per_page);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>jQuery Pagination using PHP PDO : Coding Cage</title>
        <link href="style.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


        <script type="text/javascript" src="js/jquery.bootpag.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#results").load("get_records.php");  //initial page number to load
//                $(".paging_link").bootpag({
//                    total: <?php echo $pages; ?>
//                }).on("page", function (e, num) {
//                    e.preventDefault();
//                    $("#results").prepend('<div class="loading-indication"><img src="ajax-loader.gif" /> Loading...</div>');
//                    $("#results").load("get_records.php", {'page': num});
//                });
                $('.paging_link').bootpag({
                    total: <?php echo $pages; ?>,
                    page: 1,
                    maxVisible: 10,
                    leaps: true,
                    firstLastUse: true,
                    first: '<span aria-hidden="true">&larr;</span>',
                    last: '<span aria-hidden="true">&rarr;</span>',
                    wrapClass: 'pagination',
                    activeClass: 'active',
                    disabledClass: 'disabled',
                    nextClass: 'next',
                    prevClass: 'prev',
                    lastClass: 'last',
                    firstClass: 'first'
                }).on("page", function (e, num) {
                    e.preventDefault();
                   // $("#results").prepend('<div class="loading-indication"><img src="ajax-loader.gif" /> Loading...</div>');
                    $("#results").load("get_records.php", {'page': num});
                });

            });
        </script>

    </head>
    <body>


        <br />


        <div id="results"></div>

        <br />

        <div class="paging_link"></div>

    </body>
</html>