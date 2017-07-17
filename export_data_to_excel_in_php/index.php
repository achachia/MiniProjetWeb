

<!DOCTYPE html><html lang="en">
    <head><meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="http://www.codexworld.com/wp-content/uploads/2014/09/favicon.ico" type="image/x-icon" />
        <meta name="description" content="Live Demo at CodexWorld - PHP HTML Email with Multiple Attachments by CodexWorld">
        <meta name="keywords" content="demo, codexworld demo, project demo, live demo, tutorials, programming, coding">
        <meta name="author" content="CodexWorld">
        <title>DEMO BY CODEXWORLD: Export data to Excel in PHP</title>
        <link href="http://demos.codexworld.com/includes/css/bootstrap.css" rel="stylesheet">
        <link href="http://demos.codexworld.com/includes/css/style.css" rel="stylesheet">
        <script type="text/javascript">function form_validate() {
                var email = document.getElementById("email").value;
                var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
                if (email == '' || !testEmail.test(email))
                {
                    alert('Please enter valid email ID.');
                    document.getElementById("email").focus();
                    return false;
                } else
                {
                    return true; 
                }
            }</script>
        <style type="text/css">
            h1.demo-head{font-weight:normal;color:#024457}h1.demo-head
            span{color:#167F92}table{*border-collapse:collapse;border-spacing:0;width:100%}.bordered{border:solid #ccc 1px;-webkit-box-shadow:0 1px 1px #ccc;-moz-box-shadow:0 1px 1px #ccc;box-shadow:0 1px 1px #ccc}.bordered td, .bordered
            th{border-left:1px solid #ccc;border-top:1px solid #ccc;padding:10px;text-align:left}.bordered
            th{background-color:#dce9f9;background-image:-webkit-gradient(linear, left top, left bottom, from(#ebf3fc), to(#dce9f9));background-image:-webkit-linear-gradient(top, #ebf3fc, #dce9f9);background-image:-moz-linear-gradient(top, #ebf3fc, #dce9f9);background-image:-ms-linear-gradient(top, #ebf3fc, #dce9f9);background-image:-o-linear-gradient(top, #ebf3fc, #dce9f9);background-image:linear-gradient(top, #ebf3fc, #dce9f9);-webkit-box-shadow:0 1px 0 rgba(255,255,255,.8) inset;-moz-box-shadow:0 1px 0 rgba(255,255,255,.8) inset;box-shadow:0 1px 0 rgba(255,255,255,.8) inset;border-top:none;text-shadow:0 1px 0 rgba(255,255,255,.5)}.bordered td:first-child, .bordered th:first-child{border-left:none}.btn{float:right;display:inline-block;padding:6px
                                                                                                                                                                                                        12px;margin-bottom:10px;margin-top:10px;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px
                                                                                                                                                                                                        solid transparent;border-radius:4px}.btn-success{color:#fff;background-color:#5cb85c;border-color:#4cae4c}</style>
    </head>
                                                                                                                                                                                         22px;-moz-border-radius:4px;border-radius:4px;-webkit-border-radius:4px;-webkit-box-shadow:0px 1px 2px rgba(0,0,0,0.3);-moz-box-shadow:0px 1px 2px rgba(0,0,0,0.3);box-shadow:0px 1px 2px rgba(0,0,0,0.3)}textarea{padding:3px;width:96%;height:100px}textarea:focus{background:#ebf8fd;text-indent:0;z-index:1;color:#373737;opacity:0.6;box-shadow:0 0 5px rgba(4,129,177,0.5);border-color:#ccc}.small{line-height:14px;font-size:12px;color:#999898;margin-bottom:3px}.large{line-height:0px;font-size:14px;color:#999898;margin-bottom:25px}</style>-->
        <body> 
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="http://www.codexworld.com/">
                        <img src="http://www.codexworld.com/wp-content/uploads/2014/09/codexworld-logo.png" alt="CodexWorld"> </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="social_btn nav navbar-nav navbar-left"><li class="flike">
                            <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Ffacebook.com%2Fcodexworld&width=85&layout=button_count&action=like&show_faces=false&share=false&height=21&appId=1602134356668306" width="85" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></li>
                        <li class="tflow"><iframe allowtransparency="true" data-show-count="true" frameborder="0" scrolling="no" src="//platform.twitter.com/widgets/follow_button.html?screen_name=codexworldblog" style="width:300px; height:20px;"></iframe></li>
                        <li class="gplus">
                            <div class="g-follow" data-annotation="bubble" data-height="20" data-href="//plus.google.com/u/0/110696445627919232462" data-rel="publisher"></div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li> 
                            <a href="http://demos.codexworld.com/download.php?url=https://app.box.com/s/yslhb6vn3vhumxe267t5">Download</a>
                        </li>
                        <li> <a href="">Tutorial</a></li>
                    </ul>
                </div>
            </div> 
        </nav>
        <div class="bar-header">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> 
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5750766974376423" data-ad-slot="4802459696" data-ad-format="auto"></ins>
            <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
        </div>
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12"> 
                        <a href="export.php" class="btn btn-success" title="Click to export">Export</a>
                        <table class="bordered">
                            <thead>
                                <tr>
                                    <th>First Name</th><th>Last Name</th>
                                    <th>Email</th><th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nitya</td><td>Maity</td><td>nityamaity87@gmail.com</td><td>Test message by Nitya</td>
                                </tr>
                                <tr>
                                    <td>Codex</td><td>World</td><td>info@codexworld.com</td><td>Test message by CodexWorld</td>
                                </tr>
                                <tr>
                                    <td>John</td><td>Thomas</td><td>john@gmail.com</td><td>Test message by John</td>
                                </tr>
                                <tr>
                                    <td>Michael</td><td>Vicktor</td><td>michael@gmail.com</td><td>Test message by Michael</td>
                                </tr>
                                <tr>
                                    <td>Sarah</td><td>David</td><td>sarah@gmail.com</td><td>Test message by Sarah</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="bar-footer">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5750766974376423" data-ad-slot="2211144895" data-ad-format="link">

            </ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
        </div><script src="http://demos.codexworld.com/includes/js/bootstrap.js">
        </script><script src="https://apis.google.com/js/platform.js" async defer>
        </script>
    </body>
</html>