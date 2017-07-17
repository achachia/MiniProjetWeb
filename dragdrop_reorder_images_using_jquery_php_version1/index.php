<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>jQuery UI Sortable - Default functionality</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <style>
            #sortable { list-style-type: none; margin: 0; padding: 0; width: 100%; }
            #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 50%; }
            #sortable li span { position: absolute; margin-left: -1.3em; }
            #sortable1 { list-style-type: none; margin: 0; padding: 0; width: 100%; }
            #sortable1 li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 50%; }
            #sortable1 li span { position: absolute; margin-left: -1.3em; }
            #sortable2 { list-style-type: none; margin: 0; padding: 0; width: 100%; }
            #sortable2 li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 50%; }
            #sortable2 li span { position: absolute; margin-left: -1.3em; }
            #sortable3 { list-style-type: none; margin: 0; padding: 0; width: 450px; }
            #sortable3 li { margin: 3px 3px 3px 0; padding: 1px; float: left; width: 100px; height: 90px; font-size: 4em; text-align: center; }
        </style>

        <style>
            #feedback { font-size: 1.4em; }
            #selectable .ui-selecting { background: #FECA40; }
            #selectable .ui-selected { background: #F39814; color: white; }
            #selectable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
            #selectable li { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }
        </style>

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
        <script>
            $(function () {
                /************* https://jqueryui.com/selectable/#serialize*****************/
                
                $("#sortable").sortable();
                $("#sortable").disableSelection();
                $("#test_1").on('click', function () {
                    var h = [];
                    $("#sortable li").each(function () {
                        h.push($(this).attr('id').substr(9));
                    });
                    alert(h);
                });

                $("#sortable1,#sortable2,#sortable3").sortable();
                $("#sortable1,#sortable2,#sortable3").disableSelection();

                $("#test_2").on('click', function () {
                    var h = [];
                    $("#sortable1 li").each(function () {
                        h.push($(this).attr('id').substr(9));
                    });
                    $("#sortable2 li").each(function () {
                        h.push($(this).attr('id').substr(9));
                    });
                    alert(h);
                });
                $("#test_3").on('click', function () {
                    var h = [];
                    $("#sortable3 li").each(function () {
                        h.push($(this).attr('id').substr(9));
                    });
                    alert(h);
                });
                /*************************************************/
                $("#selectable").selectable({
                    stop: function () {
                        var result = $("#select-result").empty();
                        $(".ui-selected", this).each(function () {
                            var index = $("#selectable li").index(this);
                            result.append(" #" + (index + 1));
                        });
                    }
                });
                /*************************************************/

                /*************************************************/

            });

        </script>
    </head>
    <body>
        <table border="1">
            <?php for ($i = 1; $i <= 7; $i++) { ?>
                <tr>
                    <td style="width:40%;text-align: center"><?= $i; ?></td>
                    <?php if ($i == 1) { ?>
                        <td rowspan="7" style="width:400px">
                            <ul id="sortable">
                                <li class="ui-state-default" id="image_li_1" ><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><img src="https://latex.codecogs.com/gif.latex?valeur1" title="ceci est un test\frac{2}{3}" /></li>
                                <li class="ui-state-default" id="image_li_2" ><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><img src="https://latex.codecogs.com/gif.latex?valeur2" title="ceci est un test\frac{2}{3}" /></li>
                                <li class="ui-state-default" id="image_li_3" ><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><img src="https://latex.codecogs.com/gif.latex?valeur3" title="ceci est un test\frac{2}{3}" /></li>
                                <li class="ui-state-default" id="image_li_4"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><img src="https://latex.codecogs.com/gif.latex?valeur4" title="ceci est un test\frac{2}{3}" /></li>
                                <li class="ui-state-default" id="image_li_5"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><img src="https://latex.codecogs.com/gif.latex?valeur5" title="ceci est un test\frac{2}{3}" /></li>
                                <li class="ui-state-default" id="image_li_6"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><img src="https://latex.codecogs.com/gif.latex?valeur6" title="ceci est un test\frac{2}{3}" /></li>
                                <li class="ui-state-default" id="image_li_7"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><img src="https://latex.codecogs.com/gif.latex?valeur7" title="ceci est un test\frac{2}{3}" /></li>

                            </ul>
                        </td>
                    <?php } ?>

                </tr>
            <?php } ?>
        </table><br/><br/>

        <button class="button primary" id="test_1">test1 </button>
        <hr>
        <table border="1">
            <tr>
                <td style="width:400px;text-align: center">
                    <ul id="sortable1">
                        <li class="ui-state-default" id="image_li_1_1" ><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><img src="https://latex.codecogs.com/gif.latex?valeur1" title="ceci est un test\frac{2}{3}" /></li>
                        <li class="ui-state-default" id="image_li_2_1" ><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><img src="https://latex.codecogs.com/gif.latex?valeur2" title="ceci est un test\frac{2}{3}" /></li>
                        <li class="ui-state-default" id="image_li_3_1" ><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><img src="https://latex.codecogs.com/gif.latex?valeur3" title="ceci est un test\frac{2}{3}" /></li>
                        <li class="ui-state-default" id="image_li_4_1"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><img src="https://latex.codecogs.com/gif.latex?valeur4" title="ceci est un test\frac{2}{3}" /></li>
                        <li class="ui-state-default" id="image_li_5_1"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><img src="https://latex.codecogs.com/gif.latex?valeur5" title="ceci est un test\frac{2}{3}" /></li>
                        <li class="ui-state-default" id="image_li_6_1"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><img src="https://latex.codecogs.com/gif.latex?valeur6" title="ceci est un test\frac{2}{3}" /></li>
                        <li class="ui-state-default" id="image_li_7_1"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><img src="https://latex.codecogs.com/gif.latex?valeur7" title="ceci est un test\frac{2}{3}" /></li>
                    </ul>
                </td>
                <td style="width:40%;text-align: center">
                    <ul id="sortable2">
                        <li class="ui-state-default" id="image_li_1_2" ><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><img src="https://latex.codecogs.com/gif.latex?valeur1" title="ceci est un test\frac{2}{3}" /></li>
                        <li class="ui-state-default" id="image_li_2_2" ><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><img src="https://latex.codecogs.com/gif.latex?valeur2" title="ceci est un test\frac{2}{3}" /></li>
                        <li class="ui-state-default" id="image_li_3_2" ><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><img src="https://latex.codecogs.com/gif.latex?valeur3" title="ceci est un test\frac{2}{3}" /></li>
                        <li class="ui-state-default" id="image_li_4_2"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><img src="https://latex.codecogs.com/gif.latex?valeur4" title="ceci est un test\frac{2}{3}" /></li>
                        <li class="ui-state-default" id="image_li_5_2"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><img src="https://latex.codecogs.com/gif.latex?valeur5" title="ceci est un test\frac{2}{3}" /></li>
                        <li class="ui-state-default" id="image_li_6_2"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><img src="https://latex.codecogs.com/gif.latex?valeur6" title="ceci est un test\frac{2}{3}" /></li>
                        <li class="ui-state-default" id="image_li_7_2"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><img src="https://latex.codecogs.com/gif.latex?valeur7" title="ceci est un test\frac{2}{3}" /></li>
                    </ul>
                </td>
            </tr>

        </table><br/><br/>

        <button class="button primary" id="test_2">test2 </button>
        <hr>

        <ul id="sortable3">
            <li class="ui-state-default" id="image_li_1_3">1</li>
            <li class="ui-state-default" id="image_li_2_3">2</li>
            <li class="ui-state-default" id="image_li_3_3">3</li>
            <li class="ui-state-default" id="image_li_4_3">4</li>
            <li class="ui-state-default" id="image_li_5_3">5</li>
            <li class="ui-state-default"  id="image_li_6_3">6</li>
            <li class="ui-state-default" id="image_li_7_3">7</li>
            <li class="ui-state-default" id="image_li_8_3">8</li>
            <li class="ui-state-default" id="image_li_9_3">9</li>
            <li class="ui-state-default" id="image_li_10_3">10</li>
            <li class="ui-state-default" id="image_li_11_3">11</li>
            <li class="ui-state-default" id="image_li_12_3">12</li>
        </ul><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <button class="button primary" id="test_3">test3 </button>
        <hr>
        <p id="feedback">
            <span>You've selected:</span> <span id="select-result">none</span>.
        </p>

        <ol id="selectable">
            <li class="ui-widget-content">Item 1</li>
            <li class="ui-widget-content">Item 2</li>
            <li class="ui-widget-content">Item 3</li>
            <li class="ui-widget-content">Item 4</li>
            <li class="ui-widget-content">Item 5</li>
            <li class="ui-widget-content">Item 6</li>
        </ol>


    </body>
</html>