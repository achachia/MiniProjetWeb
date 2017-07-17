<?php
require_once 'Dbconfig.php'; //include required dbconfig file
//sanitize post value
if (isset($_POST["page"])) {
    $page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
    if (!is_numeric($page_number)) {
        die('Invalid page number!');
    } //incase of invalid page number
} else {
    $page_number = 1;
}

//get current starting point of records
$position = (($page_number - 1) * $item_per_page);

$results = $dbcon->prepare("SELECT id_coupon,code_coupon FROM e_coupon ORDER BY id_coupon DESC LIMIT $position, $item_per_page");
$results->execute();

//getting results from database
?>
<ul class="page_result">
    <?php
    while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <li>
            <a href="#"><?php echo $row['code_coupon'].'-'.$row['id_coupon']; ?></a>
        </li>
        <?php
    }
    ?>
</ul>

