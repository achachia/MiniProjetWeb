<?php
include_once("db.php");
$db = new DB();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Drag&amp;Drop Reorder</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="jquery-ui.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.reorder_link').on('click', function () {
                    $("ul.reorder-photos-list").sortable({tolerance: 'pointer'});
                    $('.reorder_link').html('save reordering');
                    $('.reorder_link').attr("id", "save_reorder");
                    $('#reorder-helper').slideDown('slow');
                    $('.image_link').attr("href", "javascript:void(0);");
                    $('.image_link').css("cursor", "move");
                    $("#save_reorder").click(function (e) {
                        if (!$("#save_reorder i").length)
                        {
                            $(this).html('').prepend('<img src="images/refresh-animated.gif"/>');
                            $("ul.reorder-photos-list").sortable('destroy');
                            $("#reorder-helper").html("Reordering Photos - This could take a moment. Please don't navigate away from this page.").removeClass('light_box').addClass('notice notice_error');

                            var h = [];
                            $("ul.reorder-photos-list li").each(function () {
                                h.push($(this).attr('id').substr(9));
                            });
                            $.ajax({
                                type: "POST",
                                url: "order_update.php",
                                data: {ids: " " + h + ""},
                                success: function (html)
                                {
                                 //   window.location.reload();
                                    /*$("#reorder-helper").html( "Reorder Completed - Image reorder have been successfully completed. Please reload the page for testing the reorder." ).removeClass('light_box').addClass('notice notice_success');
                                     $('.reorder_link').html('reorder photos');
                                     $('.reorder_link').attr("id","");*/
                                }

                            });
                            return false;
                        }
                        e.preventDefault();
                    });
                });

            });
        </script>
    </head>

    <body>
        <table border="1">
            <tr>
                <td>1</td>
                <td rowspan="3">2</td>

            </tr>
            <tr>
                <td>4</td>

            </tr>
            <tr>
                <td>5</td>

            </tr>


        </table>
        <div style="margin-top:50px;">
            <a href="javascript:void(0);" class="btn outlined mleft_no reorder_link" id="save_reorder">reorder photos</a>
            <div id="reorder-helper" class="light_box" style="display:none;">1. Drag photos to reorder.<br>2. Click 'Save Reordering' when finished.</div>
            <div class="gallery">
                <table border="1">
                    <?php
                    for ($i = 1; $i <= 8; $i++) {
                        ?>
                        <tr>
                            <td style="width:50%">1</td>
                            <?php if ($i == 1) { ?>
                                <td rowspan="8">
                                    <ul class="reorder_ul reorder-photos-list">
                                        <?php
                                        //Fetch all images from database
                                        $rows = $db->getRows();
                                        foreach ($rows as $row):
                                            ?>
                                            <li id="image_li_<?php echo $row['id']; ?>" class="ui-sortable-handle"><a href="javascript:void(0);" style="float:none;" class="image_link"><img src="images/<?php echo $row['image']; ?>" alt=""></a></li><br/>
                                            <?php endforeach; ?>
                                    </ul>
                                </td>
                            <?php } ?>

                        </tr>
                        <?php
                    }
                    ?>
                </table>

            </div>
        </div>
    </body>
</html>

