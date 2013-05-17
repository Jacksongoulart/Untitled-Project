<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>How To:Use Facebook Registration Plugin As Your Registration System</title>
<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
 
<body>
<div id="wrapper">
    <div id="header">
       <div id="content">
         <div class="reg-cont">
            <div id="fb-root"></div>
            <script type="text/javascript">
                window.fbAsyncInit = function() {
                    FB.init({
                        appId   : '<?php echo $config["fb_app_id"]; ?>',
                        status  : true,
                        cookie  : true,
                        xfbml   : true
                    });
                    FB.getLoginStatus(function(response) {
                        if (response.status == "connected" || response.status == "unknown") {
                            window.location = "<?php echo $config["base_url"]; ?>";
                        }
                    });
                };
                (function() {
                    var e = document.createElement('script');
                    e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
                    e.async = true;
                    document.getElementById('fb-root').appendChild(e);
                }());
            </script>
            <fb:registration
                fields='<?php echo retrieve_fields($config["fb_fields"]); ?>'
                redirect-uri="<?php echo $config["base_url"]; ?>"
                fb_only="true"
                width="530">
            </fb:registration>
        </div>
    </div>
</div>
</body>
</html>
