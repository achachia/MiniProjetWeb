<?php

function multi_attach_mail($to, $subject, $message, $senderMail, $senderName, $files) {

    $from = $senderName . " <" . $senderMail . ">";
    $headers = "From: $from";

    // boundary 
    $semi_rand = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

    // headers for attachment 
    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

    // multipart boundary 
    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
            "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";

    // preparing attachments
    if (count($files) > 0) {
        for ($i = 0; $i < count($files); $i++) {
            if (is_file($files[$i])) {
                $message .= "--{$mime_boundary}\n";
                $fp = @fopen($files[$i], "rb");
                $data = @fread($fp, filesize($files[$i]));
                @fclose($fp);
                $data = chunk_split(base64_encode($data));
                $message .= "Content-Type: application/octet-stream; name=\"" . basename($files[$i]) . "\"\n" .
                        "Content-Description: " . basename($files[$i]) . "\n" .
                        "Content-Disposition: attachment;\n" . " filename=\"" . basename($files[$i]) . "\"; size=" . filesize($files[$i]) . ";\n" .
                        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
            }
        }
    }
    $message .= "--{$mime_boundary}--";
    $returnpath = "-f" . $senderMail;

    //send email
    $mail = @mail($to, $subject, $message, $headers, $returnpath);

    //function return true, if email sent, otherwise return fasle
    if ($mail) {
        return TRUE;
    } else {
        return FALSE;
    }
}

//email variables
$to = $_POST['email'];
$from = 'info@codexworld.com';
$from_name = 'test';

//attachment files path array
$files[]=$imgFile = $_FILES['attach1']['name'];
$files[]=$imgFile = $_FILES['attach2']['name'];
//$files = array('screencapture-www-codexworld-com.png', 'send_html_email_multiple_attachments_php.pdf');

$subject = 'PHP Email with multiple attachments by CodexWorld';
$html_content = '<h1>PHP Email with multiple attachments by CodexWorld</h1>
			<p><b>Total Attachments : </b>' . count($files) . ' attachments</p>';

//call multi_attach_mail() function and pass the required arguments
$send_email = multi_attach_mail($to, $subject, $html_content, $from, $from_name, $files);

//print message after email sent
echo $send_email ? "<h1> Mail Sent</h1>" : "<h1> Mail not SEND</h1>";
?>
<!DOCTYPE html><html lang="en">
    <head><meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="http://www.codexworld.com/wp-content/uploads/2014/09/favicon.ico" type="image/x-icon" />
        <meta name="description" content="Live Demo at CodexWorld - PHP HTML Email with Multiple Attachments by CodexWorld">
        <meta name="keywords" content="demo, codexworld demo, project demo, live demo, tutorials, programming, coding">
        <meta name="author" content="CodexWorld">
        <title>Live Demo - PHP HTML Email with Multiple Attachments by CodexWorld</title>
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
    </head>
    <style type="text/css">
        #wrapper{width:450px;margin:0
                     auto;font-family:Verdana,sans-serif}legend{color:#0481b1;font-size:16px;padding:0
                                                       10px;background:#fff;-moz-border-radius:4px;box-shadow:0 1px 5px rgba(4, 129, 177, 0.5);padding:5px
                                                       10px;text-transform:uppercase;font-family:Helvetica,sans-serif;font-weight:bold}fieldset{border-radius:4px !important;background:#fff !important;background:-moz-linear-gradient(#fff, #f9fdff) !important;background:-o-linear-gradient(#fff, #f9fdff) !important;background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#f9fdff)) !important;background:-webkit-linear-gradient(#fff, #f9fdff);padding:20px
                                                                                                     !important}input,textarea{color:#373737;background:#fff;border:1px
                                      solid #CCC;color:#aaa;font-size:14px;line-height:1.2em;margin-bottom:15px;-moz-border-radius:4px;-webkit-border-radius:4px;border-radius:4px;box-shadow:0 1px 2px rgba(0, 0, 0, 0.1) inset, 0 1px 0 rgba(255,255,255,0.2)}input[type="text"],input[type="password"]{padding:8px
                                                                                                                                                                                                        6px;height:35px !important;width:280px}input[type="text"]:focus,input[type="password"]:focus{background:#f5fcfe;text-indent:0;z-index:1;color:#373737;-webkit-transition-duration:400ms;-webkit-transition-property:width, background;-webkit-transition-timing-function:ease;-moz-transition-duration:400ms;-moz-transition-property:width, background;-moz-transition-timing-function:ease;-o-transition-duration:400ms;-o-transition-property:width, background;-o-transition-timing-function:ease;width:380px;border-color:#ccc;box-shadow:0 0 5px rgba(4,129,177,0.5);opacity:0.6}input[type="submit"]{background:#222;border:none;text-shadow:0 -1px 0 rgba(0,0,0,0.3);text-transform:uppercase;color:#eee;cursor:pointer;font-size:15px;margin:5px
                                                                                                                                                                                                        0;padding:5px
                                                                                                                                                                                                        22px;-moz-border-radius:4px;border-radius:4px;-webkit-border-radius:4px;-webkit-box-shadow:0px 1px 2px rgba(0,0,0,0.3);-moz-box-shadow:0px 1px 2px rgba(0,0,0,0.3);box-shadow:0px 1px 2px rgba(0,0,0,0.3)}textarea{padding:3px;width:96%;height:100px}textarea:focus{background:#ebf8fd;text-indent:0;z-index:1;color:#373737;opacity:0.6;box-shadow:0 0 5px rgba(4,129,177,0.5);border-color:#ccc}.small{line-height:14px;font-size:12px;color:#999898;margin-bottom:3px}.large{line-height:0px;font-size:14px;color:#999898;margin-bottom:25px}</style>
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
            <div class="row">
                <div class="col-lg-12"><div >
                        <div id="wrapper"><form action="" method="post" enctype="multipart/form-data" onSubmit="return form_validate();">
                                <fieldset style="border:1px solid rgba(4, 129, 177, 0.4);">
                                    <legend>HTML Email with Multiple Attachments</legend>
                                    <div>
                                        <div class="large"></div>

                                    </div>
                                    <div> 
                                        <input type="text" name="email" id="email" placeholder="Email"/>
                                    </div>
                                    <div>
                                        <textarea name="message" placeholder="Message"></textarea></div><div>
                                        <div class="small">First Email Attachment</div> 
                                        <input type="file" name="attach1" />
                                    </div>
                                    <div>
                                        <div class="small">Second Email Attachment</div>
                                        <input type="file" name="attach2"/></div> 
                                    <input type="submit" name="submit" value="Send"/>
                                </fieldset>
                            </form>
                        </div>
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