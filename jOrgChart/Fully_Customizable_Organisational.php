
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fully Customizable Organisational jOrgChart Plugin Demo</title>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link href="css/orgchart_3.css" rel="stylesheet" type="text/css"/>
        <link href="css/style_css.css" rel="stylesheet" type="text/css"/>
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="js/html2canvas.js"></script>
        <script type="text/javascript" src="js/Fully_Customizable_Organisational.js"></script>
        <script>
            'use strict';

            (function ($) {

                $(function () {

                    var datascource = {
                        'id': '1',
                        'name': 'Lao Lao',
                        'title': 'general manager',
                        'relationship': {'children_num': 8},
                        'children': [
                            {'id': '2', 'name': 'Bo Miao', 'title': 'department manager', 'relationship': {'children_num': 0, 'parent_num': 1, 'sibling_num': 7}},
                            {'id': '3', 'name': 'Su Miao', 'title': 'department manager', 'relationship': {'children_num': 2, 'parent_num': 1, 'sibling_num': 7},
                                'children': [
                                    {'id': '4', 'name': 'Tie Hua', 'title': 'senior engineer', 'relationship': {'children_num': 0, 'parent_num': 1, 'sibling_num': 1}},
                                    {'id': '5', 'name': 'Hei Hei', 'title': 'senior engineer', 'relationship': {'children_num': 2, 'parent_num': 1, 'sibling_num': 1},
                                        'children': [
                                            {'id': '6', 'name': 'Pang Pang', 'title': 'engineer', 'relationship': {'children_num': 0, 'parent_num': 1, 'sibling_num': 1}},
                                            {'id': '7', 'name': 'Xiang Xiang', 'title': 'UE engineer', 'relationship': {'children_num': 0, 'parent_num': 1, 'sibling_num': 1}}
                                        ]
                                    }
                                ]
                            },
                            {'id': '8', 'name': 'Yu Jie', 'title': 'department manager', 'relationship': {'children_num': 0, 'parent_num': 1, 'sibling_num': 7}},
                            {'id': '9', 'name': 'Yu Li', 'title': 'department manager', 'relationship': {'children_num': 0, 'parent_num': 1, 'sibling_num': 7}},
                            {'id': '10', 'name': 'Hong Miao', 'title': 'department manager', 'relationship': {'children_num': 0, 'parent_num': 1, 'sibling_num': 7}},
                            {'id': '11', 'name': 'Yu Wei', 'title': 'department manager', 'relationship': {'children_num': 0, 'parent_num': 1, 'sibling_num': 7}},
                            {'id': '12', 'name': 'Chun Miao', 'title': 'department manager', 'relationship': {'children_num': 0, 'parent_num': 1, 'sibling_num': 7}},
                            {'id': '13', 'name': 'Yu Tie', 'title': 'department manager', 'relationship': {'children_num': 0, 'parent_num': 1, 'sibling_num': 7}}
                        ]
                    };

                    $('#chart-container').orgchart({
                        'data': datascource,
                        'depth': 2,
                        'nodeTitle': 'name',
                        'nodeContent': 'title',
                        'nodeID': 'id',
                        'createNode': function ($node, data) {
                            var nodePrompt = $('<i>', {
                                'class': 'fa fa-info-circle second-menu-icon',
                                click: function () {
                                    $(this).siblings('.second-menu').toggle();
                                }
                            });
                            var secondMenu = '<div class="second-menu"><img class="avatar" src="img/avatar/' + data.id + '.jpg"></div>';
                            $node.append(nodePrompt).append(secondMenu);
                        }
                    });

                });

            })(jQuery);
        </script>
    </head>
    <body>
        <div id="chart-container">
            <!-- <div class="orgchart ">
               <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <tr class="node-cells">
                            <td class="node-cell" colspan="16">
                                <div class="node focused">
                                    <div class="title"><i class="fa fa-users symbol"></i>Lao Lao</div>
                                    <div class="content">general manager</div><i class="edge bottomEdge fa"></i><i class="fa fa-info-circle second-menu-icon"></i>
                                    <div class="second-menu"><img class="avatar" src="img/avatar/1.jpg"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="16">
                                <div class="down"></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="right">&nbsp;</td>
                            <td class="left top">&nbsp;</td>
                            <td class="right top">&nbsp;</td>
                            <td class="left top">&nbsp;</td>
                            <td class="right top">&nbsp;</td>
                            <td class="left top">&nbsp;</td>
                            <td class="right top">&nbsp;</td>
                            <td class="left top">&nbsp;</td>
                            <td class="right top">&nbsp;</td>
                            <td class="left top">&nbsp;</td>
                            <td class="right top">&nbsp;</td>
                            <td class="left top">&nbsp;</td>
                            <td class="right top">&nbsp;</td>
                            <td class="left top">&nbsp;</td>
                            <td class="right top">&nbsp;</td>
                            <td class="left">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="node-container" colspan="2">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <tbody><tr class="node-cells">
                                            <td class="node-cell" colspan="2">
                                                <div class="node"><div class="title">Bo Miao</div>
                                                    <div class="content">department manager</div><i class="edge topEdge fa"></i><i class="edge rightEdge fa"></i><i class="edge leftEdge fa"></i><i class="fa fa-info-circle second-menu-icon"></i><div class="second-menu"><img class="avatar" src="img/avatar/2.jpg"></div></div></td></tr></tbody></table></td><td class="node-container" colspan="2"><table cellpadding="0" cellspacing="0" border="0"><tbody><tr class="node-cells"><td class="node-cell" colspan="4"><div class="node"><div class="title"><i class="fa fa-users symbol"></i>Su Miao</div><div class="content">department manager</div><i class="edge topEdge fa"></i><i class="edge rightEdge fa"></i><i class="edge leftEdge fa"></i><i class="edge bottomEdge fa"></i><i class="fa fa-info-circle second-menu-icon"></i><div class="second-menu"><img class="avatar" src="img/avatar/3.jpg"></div></div></td></tr><tr style="display: none;"><td colspan="4"><div class="down"></div></td></tr><tr style="display: none;"><td class="right">&nbsp;</td><td class="left top">&nbsp;</td><td class="right top">&nbsp;</td><td class="left">&nbsp;</td></tr><tr style="display: none;"><td class="node-container" colspan="2"><table cellpadding="0" cellspacing="0" border="0"><tbody><tr class="node-cells"><td class="node-cell" colspan="2"><div class="node"><div class="title">Tie Hua</div><div class="content">senior engineer</div><i class="edge topEdge fa"></i><i class="edge rightEdge fa"></i><i class="edge leftEdge fa"></i><i class="fa fa-info-circle second-menu-icon"></i><div class="second-menu"><img class="avatar" src="img/avatar/4.jpg"></div></div></td></tr></tbody></table></td><td class="node-container" colspan="2"><table cellpadding="0" cellspacing="0" border="0"><tbody><tr class="node-cells"><td class="node-cell" colspan="4"><div class="node"><div class="title"><i class="fa fa-users symbol"></i>Hei Hei</div><div class="content">senior engineer</div><i class="edge topEdge fa"></i><i class="edge rightEdge fa"></i><i class="edge leftEdge fa"></i><i class="edge bottomEdge fa"></i><i class="fa fa-info-circle second-menu-icon"></i><div class="second-menu"><img class="avatar" src="img/avatar/5.jpg"></div></div></td></tr><tr style="display: none;"><td colspan="4"><div class="down"></div></td></tr><tr style="display: none;"><td class="right">&nbsp;</td><td class="left top">&nbsp;</td><td class="right top">&nbsp;</td><td class="left">&nbsp;</td></tr><tr style="display: none;"><td class="node-container" colspan="2"><table cellpadding="0" cellspacing="0" border="0"><tbody><tr class="node-cells"><td class="node-cell" colspan="2"><div class="node"><div class="title">Pang Pang</div><div class="content">engineer</div><i class="edge topEdge fa"></i><i class="edge rightEdge fa"></i><i class="edge leftEdge fa"></i><i class="fa fa-info-circle second-menu-icon"></i><div class="second-menu"><img class="avatar" src="img/avatar/6.jpg"></div></div></td></tr></tbody></table></td><td class="node-container" colspan="2"><table cellpadding="0" cellspacing="0" border="0"><tbody><tr class="node-cells"><td class="node-cell" colspan="2"><div class="node"><div class="title">Xiang Xiang</div><div class="content">UE engineer</div><i class="edge topEdge fa"></i><i class="edge rightEdge fa"></i><i class="edge leftEdge fa"></i><i class="fa fa-info-circle second-menu-icon"></i><div class="second-menu"><img class="avatar" src="img/avatar/7.jpg"></div></div></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td><td class="node-container" colspan="2"><table cellpadding="0" cellspacing="0" border="0"><tbody><tr class="node-cells"><td class="node-cell" colspan="2"><div class="node"><div class="title">Yu Jie</div><div class="content">department manager</div><i class="edge topEdge fa"></i><i class="edge rightEdge fa"></i><i class="edge leftEdge fa"></i><i class="fa fa-info-circle second-menu-icon"></i><div class="second-menu"><img class="avatar" src="img/avatar/8.jpg"></div></div></td></tr></tbody></table></td><td class="node-container" colspan="2"><table cellpadding="0" cellspacing="0" border="0"><tbody><tr class="node-cells"><td class="node-cell" colspan="2"><div class="node"><div class="title">Yu Li</div><div class="content">department manager</div><i class="edge topEdge fa"></i><i class="edge rightEdge fa"></i><i class="edge leftEdge fa"></i><i class="fa fa-info-circle second-menu-icon"></i><div class="second-menu"><img class="avatar" src="img/avatar/9.jpg"></div></div></td></tr></tbody></table></td><td class="node-container" colspan="2"><table cellpadding="0" cellspacing="0" border="0"><tbody><tr class="node-cells"><td class="node-cell" colspan="2"><div class="node"><div class="title">Hong Miao</div><div class="content">department manager</div><i class="edge topEdge fa"></i><i class="edge rightEdge fa"></i><i class="edge leftEdge fa"></i><i class="fa fa-info-circle second-menu-icon"></i><div class="second-menu"><img class="avatar" src="img/avatar/10.jpg"></div></div></td></tr></tbody></table></td><td class="node-container" colspan="2"><table cellpadding="0" cellspacing="0" border="0"><tbody><tr class="node-cells"><td class="node-cell" colspan="2"><div class="node"><div class="title">Yu Wei</div><div class="content">department manager</div><i class="edge topEdge fa"></i><i class="edge rightEdge fa"></i><i class="edge leftEdge fa"></i><i class="fa fa-info-circle second-menu-icon"></i><div class="second-menu"><img class="avatar" src="img/avatar/11.jpg"></div></div></td></tr></tbody></table></td><td class="node-container" colspan="2"><table cellpadding="0" cellspacing="0" border="0"><tbody><tr class="node-cells"><td class="node-cell" colspan="2"><div class="node"><div class="title">Chun Miao</div><div class="content">department manager</div><i class="edge topEdge fa"></i><i class="edge rightEdge fa"></i><i class="edge leftEdge fa"></i><i class="fa fa-info-circle second-menu-icon"></i><div class="second-menu"><img class="avatar" src="img/avatar/12.jpg"></div></div></td></tr></tbody></table></td><td class="node-container" colspan="2"><table cellpadding="0" cellspacing="0" border="0"><tbody><tr class="node-cells"><td class="node-cell" colspan="2"><div class="node"><div class="title">Yu Tie</div><div class="content">department manager</div><i class="edge topEdge fa"></i><i class="edge rightEdge fa"></i><i class="edge leftEdge fa"></i><i class="fa fa-info-circle second-menu-icon"></i><div class="second-menu"><img class="avatar" src="img/avatar/13.jpg"></div></div></td></tr></tbody></table></td></tr></tbody></table></div></div>-->

<!--        <script type="text/javascript" src="js/script.js"></script> -->
    </body>
</html>




