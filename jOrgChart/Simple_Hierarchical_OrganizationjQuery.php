
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Simple Hierarchical OrganizationjQuery jOrgChart Plugin Demo</title>
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <link href="css/orgchart_1.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="js/Simple_Hierarchical_OrganizationjQuery.js"></script>
        <script>
            $(document).ready(function () {
                // create a tree
                $("#tree-data").jOrgChart({
                    chartElement: $("#tree-view"),
                    nodeClicked: nodeClicked
                });

                // lighting a node in the selection
                function nodeClicked(node, type) {
                    node = node || $(this);
                    $('.jOrgChart .selected').removeClass('selected');
                    node.addClass('selected');
                }
            });
        </script>
        <style>
            .container { max-width:960px; margin:150px auto;}
        </style>
    </head>
    <body>
        <div class="container">
            <h1>jQuery jOrgChart Plugin Demo</h1>
            <ul id="tree-data" style="display:none">
                <li id="root">
                    root
                    <ul>
                        <li id="node1">
                            node1
                        </li>
                        <li id="node2">
                            node2
                            <ul>
                                <li id="node3">
                                    node3
                                    <ul>
                                        <li id="node4">
                                            node4
                                            <ul type="vertical">
                                                <li id="node5">
                                                    node5
                                                    <ul>
                                                        <li id="node6">
                                                            node6
                                                        </li>

                                                        <li id="node7">
                                                            node7
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li id="node8" class="last">
                                                    node8
                                                    <ul>
                                                        <li id="node9">
                                                            node9
                                                        </li>

                                                        <li id="node10">
                                                            node10
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li id="node11">
                                            node11
                                            <ul type="vertical">
                                                <li id="node12">
                                                    node12
                                                    <ul>
                                                        <li id="node13">
                                                            node13
                                                        </li>

                                                        <li id="node14">
                                                            node14
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li id="node15" class="last">
                                                    node15
                                                    <ul>
                                                        <li id="node16">
                                                            node16
                                                        </li>

                                                        <li id="node17">
                                                            node17
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li id="node18" class="last">
                                    node18
                                    <ul>
                                        <li id="node19">
                                            node19
                                        </li>

                                        <li id="node20">
                                            node20
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li id="node21">
                            node21
                            <ul type="vertical">
                                <li id="node22">
                                    node22
                                    <ul>
                                        <li id="node23">
                                            node23
                                        </li>

                                        <li id="node24">
                                            node24
                                        </li>
                                    </ul>
                                </li>
                                <li id="node25" class="last">
                                    node25
                                    <ul>
                                        <li id="node26">
                                            node26
                                        </li>

                                        <li id="node27">
                                            node27
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li id="node28" class="last">
                            node28
                            <ul>
                                <li id="node29">
                                    node29
                                    <ul type="vertical">
                                        <li id="node30">
                                            node30
                                            <ul>
                                                <li id="node31">
                                                    node31
                                                </li>

                                                <li id="node32">
                                                    node32
                                                </li>
                                            </ul>
                                        </li>
                                        <li id="node33" class="last">
                                            node33
                                            <ul>
                                                <li id="node34">
                                                    node34
                                                </li>

                                                <li id="node35">
                                                    node35
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li id="node36">
                                    node36
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li id="node37">
                    node37
                </li>
            </ul>

            <div id="tree-view"></div>
        </div>
    </body>
</html>

