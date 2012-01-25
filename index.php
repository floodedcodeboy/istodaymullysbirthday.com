<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Is Today Mully's Birthday?</title>
	<meta property="og:title" content="Is today Mully's birthday?" />
	<meta property="og:image" content="http://istodaymullysbirthday.com/images/mully-icon.jpg" />
	<meta property="og:url" content="http://istodaymullysbirthday.com" />
	<meta property="og:description" content="Find out if today is James Mulligan's birthday." />
	<meta property="og:site_name" content="Is today Mully's birthday?" />
        
	<style>
            html {
                background:black;
                height:100%;
            }
            
            * {
                font-family: Gill Sans MT, Lucida, sans-serif;
                text-transform: uppercase;
                font-weight:normal;
            }
            
            body {
                margin:0;
                padding:0;
                position:relative;
            }
                        
            .content {
                width:1024px;
                height:640px;
                position:relative;
                margin:0 auto;
            }
            .content:before {
                content:"\0020";
                background:black url(images/mully.jpg) bottom left no-repeat; 
                position: absolute;
                bottom:-80px;
                left:-200px;
                width:969px;
                height:678px;
            }
            h1 {
                position:absolute;
                top:20px;
                left:20px;
                margin:0;
            }
            
            h1 span {
                background:red;
                padding:5px 10px;
                margin-right:20px;
            }
            
            div.sidebar {
                position:absolute;
                right:30px;
                top:70px;
                width:260px;
                text-align: center;
            }
            
            h2 {
                background:red;
                padding:10px 0;
                font-size:6.5em;
                margin:0;
            }
            
            h3 {
                background:red;
                padding:5px;
                font-size:1.6em;
                margin:15px 0;
            }
            
            h3 span {
                text-transform: none;
            }
            
            p {
                background:red;
                padding:5px;
            }
            
            .button {
                background:#3b5997;
                border: 5px solid;
                border-left-color: #44506a;
                border-bottom-color: #44506a;
                border-top-color: #7287b4;
                border-right-color: #7287b4;
                
                color:white;  
                display:block;
                text-decoration: none;
                padding:5px;
            }
            
            .button:hover {
                background:#425e98;
            }
            .button:active {
                background:#3b5997;
                border-right-color: #44506a;
                border-top-color: #44506a;
                border-bottom-color: #7287b4;
                border-left-color: #7287b4;
            }
            
            .facebook-logo {
                background: #3b5997;
                padding:20px 0;
                display:block;
                margin:20px 0;
            }
        </style>
    </head>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28594792-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    <?php
    $mullys_birthday = new DateTime('1984-01-30');
    $date = new DateTime();
    $date->setTimezone(new DateTimeZone('Europe/London'));
    ?>
    <body>
        <div class="content">
            <h1><span>Is today mully's birthday?</span><span>.com</span></h1>
            <div class="sidebar">
            <?php if ($date->format('d-m') != $mullys_birthday->format('d-m')) :?>
                <h2>Yes!</h2>
                <h3>The <?php echo $date->format('j'); echo "<span>".$date->format('S')."</span>&nbsp;"; echo $date->format('M'); ?></h3>
                <p>is officially <br/>Mully's birthday</p>
                <a class="button" onclick="share_friend();" href="#">Post your birthday <br/>wishes to Mully's <br/>wall now &gt;&gt;</a>
                <a class="facebook-logo" target="_blank" href="http://www.facebook.com/mulliganj"><img src="images/fb.png"/></a>
            <?php else : ?>
                <h2>No!</h2>
                <h3>The <?php echo $date->format('jS M'); ?></h3>
                <p>is NOT <br/>Mully's birthday</p>
                <p>Come back again tomorrow.</p>
            <?php endif; ?>
                <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.istodaymullysbirthday.com%2F&amp;send=false&amp;layout=standard&amp;width=265&amp;show_faces=true&amp;action=like&amp;colorscheme=dark&amp;font&amp;height=100&amp;appId=296839917031150" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:265px; height:100px;" allowTransparency="true"></iframe>
            </div>
            
        </div>
        <div id="fb-root"></div><!--needed for facebook JS SDK-->
        <script src="https://connect.facebook.net/en_US/all.js"></script>    
        <script type="text/javascript"> 
            //FB sdk
        FB.init({
                appId  : "296839917031150",
                status : true,
                cookie : false,
                xfbml  : false	
        });
        
        function share_friend(){
            FB.ui(
                {     
                    link:"http://istodaymullysbirthday.com",
                    method:"feed",
                    picture:"http://istodaymullysbirthday.com/images/mully-icon.jpg",
                    to: "223601764",
                    name: "Is today Mully's birthday?",
                    description: "Today IS Mully's birthday!",
                    message: "Happy birthday Mully!"
                },
                function(response) { 
                    if (response == null) {
                        window.location='http://www.facebook.com/mulliganj';
                    }
                }
            );
        }
        </script>
        
    </body>
</html>
