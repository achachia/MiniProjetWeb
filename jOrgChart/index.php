
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/svg.js/1.0.1/svg.min.js"></script>
        <script src="js/flowsvg.min.js"></script>

        <style>
            a:hover {
                text-decoration:underline;
            }
        </style>
        <title>jQuery flowSVG Plugin Demo</title>
    </head>
    <body>
       
        <h1 style="margin-top:150px; text-align:center">jQuery flowSVG Plugin Demo</h1>
        <div id="drawing" style="margin:30px auto; width:900px;"></div>

        <script>
            ///////////////////// start flow chart ////////////////////////////////////////////////////////////
            flowSVG.draw(SVG('drawing').size(900, 1100));
            flowSVG.config({
                interactive: true,
                showButtons: true,
                connectorLength: 60,
                scrollto: true
            });
            flowSVG.shapes(
                    [
                        {
                            label: 'knowPolicy',
                            type: 'decision',
                            text: [
                                'Do you know the ',
                                'Open Access policy',
                                'of the journal?'
                            ],
                            yes: 'hasOAPolicy',
                            no: 'checkPolicy'
                        },
                        {
                            label: 'hasOAPolicy',
                            type: 'decision',
                            text: [
                                'Does it have Open',
                                'Access paid option or is it an',
                                ' Open Access journal?'
                            ],
                            yes: 'CCOffered',
                            no: 'canWrap'
                        },
                        {
                            label: 'CCOffered',
                            type: 'decision',
                            text: [
                                'Creative Commons licence',
                                'CC-BY offered?'
                            ],
                            yes: 'canComply',
                            no: 'checkGreen'
                        },
                        {
                            label: 'canComply',
                            type: 'finish',
                            text: [
                                'Great - can comply. ',
                                'Please complete'
                            ],
                            links: [
                                {
                                    text: 'application form',
                                    url: 'http://www.jqueryscript.net/chart-graph/Simple-SVG-Flow-Chart-Plugin-with-jQuery-flowSVG.html',
                                    target: '_blank'
                                }
                            ],
                            tip: {title: 'HEFCE Note',
                                text:
                                        [
                                            'You must put your',
                                            'accepted version into',
                                            'WRAP and/or subject',
                                            'repository within 3 months',
                                            'of acceptance.'
                                        ]}
                        },
                        {
                            label: 'canWrap',
                            type: 'decision',
                            text: [
                                'Can you archive in ',
                                'WRAP and/or Subject',
                                'repository?'
                            ],
                            yes: 'checkTimeLimits',
                            no: 'doNotComply'
                        },
                        {
                            label: 'doNotComply',
                            type: 'finish',
                            text: [
                                'You do not comply at all. ',
                                'Is this really the only journal',
                                ' you want to use? ',
                                'Choose another or make ',
                                'representations to journal'
                            ],
                            tip: {title: 'HEFCE Note',
                                text:
                                        [
                                            'If you really have to go',
                                            'this route you must log',
                                            'the exception in WRAP on',
                                            'acceptance in order',
                                            'to comply.'
                                        ]}
                        },
                        {
                            label: 'checkGreen',
                            type: 'process',
                            text: [
                                'Check the journal\'s policy',
                                'on the green route'
                            ],
                            next: 'journalAllows',
                        },
                        {
                            label: 'journalAllows',
                            type: 'decision',
                            text: ['Does the journal allow this?'],
                            yes: 'checkTimeLimits',
                            no: 'cannotComply',
                            orient: {
                                yes: 'r',
                                no: 'b'
                            }

                        },
                        {
                            label: 'checkTimeLimits',
                            type: 'process',
                            text: [
                                'Make sure the time limits',
                                'acceptable',
                                '6 month Stem',
                                '12 month AHSS'
                            ],
                            next: 'depositInWrap'
                        },
                        {
                            label: 'cannotComply',
                            type: 'finish',
                            text: [
                                'You cannot comply with',
                                'RCUK policy. Contact ',
                                'journal to discuss or',
                                'choose another'
                            ],
                            tip: {title: 'HEFCE Note',
                                text:
                                        [
                                            'Deposit in WRAP if',
                                            'time limits acceptable. If',
                                            'journal does not allow at all',
                                            'an exception record will',
                                            'have to be entered',
                                            'in WRAP, if you feel this is',
                                            'most appropriate journal.'
                                        ]}
                        },
                        {
                            label: 'depositInWrap',
                            type: 'finish',
                            text: [
                                'Deposit in WRAP here or ',
                                'contact team'
                            ],
                            tip: {title: 'HEFCE Note',
                                text:
                                        [
                                            'You must put your',
                                            'accepted version into',
                                            'WRAP and/or subject',
                                            'repository within 3 months',
                                            'of acceptance.',
                                            'Note also time limits:',
                                            'HEFCE 12 months',
                                            'STEM ? months',
                                            'AHSS ? months',
                                            'So you comply here too.'
                                        ]}
                        },
                        {
                            label: 'checkPolicy',
                            type: 'process',
                            text: [
                                'Check journal website',
                                'or go to '
                            ],
                            links: [
                                {
                                    text: 'SHERPA FACT/ROMEO ',
                                    url: 'http://www.jqueryscript.net/chart-graph/Simple-SVG-Flow-Chart-Plugin-with-jQuery-flowSVG.html',
                                    target: '_blank'
                                }
                            ],
                            next: 'hasOAPolicy'
                        }
                    ]);
        </script>
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-36251023-1']);
            _gaq.push(['_setDomainName', 'jqueryscript.net']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

        </script>

    </body></html>