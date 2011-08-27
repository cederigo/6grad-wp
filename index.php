<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<?php

require 'fb-php-sdk/src/facebook.php';

$fb = new Facebook(array(
  'appId' => '163392733738849',
  'secret' => '8942bee5d62cb2494478cb19740324ee' ,
));
$isfan = FALSE;
$sr = $fb->getSignedRequest();
if (isset($sr['page']['liked'])) {
  $isfan = $sr['page']['liked'];
}
php?>

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>6Grad - Welcome Page</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8"/>
  </head>
  <body>
    <div id="fb-page">
      
      <div id="fan" >
        <div class="button" id="btn_sharepdf"></div>
        <div class="button" id="btn_invite"></div>
        <div class="button" id="btn_download"></div>
      </div>
      
      <div id="notfan"></div>
      <div class="button" id="btn_sharefan"></div>
      <div class="button" id="btn_book"></div>
      <div class="button" id="btn_contact"></div>
      <div class="button square" id="btn_twitter"></div>
      <div class="button square" id="btn_mail"></div>
      <div class="button square" id="btn_rss"></div>
      
      
    </div>
    <div id='fb-root'></div>
  </body>
  <script src='http://connect.facebook.net/en_US/all.js'></script>
  <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js'></script>
  
  <script type="text/javascript">
    FB.init({
      appId : '<?php echo $fb->getAppID()?>',
      status : true, // check login status
      cookie : true, // enable cookies to allow the server to access the session
      xfbml : false, // parse XFBML
      oauth : true // enable OAuth 2.0
    });
    
    var isFan = '<?php echo $isfan ?>';
    
    if (isFan){
      $('#notfan').fadeOut(500);
    }

  </script>
</html>
