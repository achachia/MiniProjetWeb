
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Create A Editable Organization jOrgChart Plugin Demo</title>
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <link href="css/orgchart_2.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="js/Create_A_ Editable_Organization.js"></script>
        <script type="text/javascript">
            var testData = [
                {id: 1, name: 'My Organization', parent: 0},
                {id: 2, name: 'CEO Office', parent: 1},
                {id: 3, name: 'Division 1', parent: 1},
                {id: 4, name: 'Division 2', parent: 1},
                {id: 6, name: 'Division 3', parent: 1},
                {id: 7, name: 'Division 4', parent: 1},
                {id: 8, name: 'Division 5', parent: 1},
                {id: 5, name: 'Sub Division', parent: 3},
            ];
            $(function () {
                org_chart = $('#orgChart').orgChart({
                    data: testData,
                    showControls: true,
                    allowEdit: true,
                    onAddNode: function (node) {
                        log('Created new node on node ' + node.data.id);
                        org_chart.newNode(node.data.id);
                    },
                    onDeleteNode: function (node) {
                        log('Deleted node ' + node.data.id);
                        org_chart.deleteNode(node.data.id);
                    },
                    onClickNode: function (node) {
                        log('Clicked node ' + node.data.id);
                    }

                });
            });

            // just for example purpose
            function log(text) {
                $('#consoleOutput').append('<p>' + text + '</p>')
            }
        </script>
        <style>
            #orgChart{
                width: auto;
                height: auto;
            }

            #orgChartContainer{
                width: 1000px;
                height: 500px;
                overflow: auto;
                background: #eeeeee;
            }
        </style>
    </head>
    <body>
        <div id="orgChartContainer">
            <div id="orgChart"></div>
        </div>
        <div id="consoleOutput">
        </div>
    </body>
</html>



