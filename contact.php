
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Web Design and development | html5, CSS, PHP, MySql, ASP.net, java, jquery, JSON, PhoneGap, AJAX, WordPress, joomla, Drupal, and more.">
    <meta name="author" content="Nicholas Hutsell">
<title>Nik Hutsell Web Design `Portfolio </title>
<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="assets/js/nav.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">


</head>

<body>
<div class="content">
<header class="main-header">
    <a class="site-logo" href="#"><img src="assets/img/nh_logo_small.png" alt="" /></a>
  <div class="nav-toggle">&hellip;</div>
    <ul class="nav">
      <li class="category-item"><a href="index.html">home</a></li>
      <li class="category-item"><a href="about.html">about</a></li>
      <li class="category-item"><a href="services.html">services</a></li>
      <li class="category-item"><a href="portfolio.html">portfolio</a></li>
      <li class="category-item"><a href="contact.html">contact</a></li>
    </ul>
  </header>
  </div>
<div class="wrapper">
<main class="content">
<div class="wrapper">
  <main class="content">
    <div class="grid">
      <div class="box-full" >
<div class="box-full-text">
  <h1>Contact Form</h1>
           <p>Please feel free to contact me, if you are looking for a great addition to your design team, or if you just need some contract work done. Even if you just want to say Hi! Please feel free to contact me.</p>
        <hr>
       
  <?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    Your name:<br>
    <input name="name" type="text" value="" size="30"/><br>
    Your email:<br>
    <input name="email" type="text" value="" size="30"/><br>
    Your message:<br>
    <textarea name="message" rows="7" cols="30"></textarea><br>
    <input type="submit" value="Send email"/>
    </form>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
		mail("nikhutsell@gmail.com", $subject, $message, $from);
		echo "Email sent!";
	    }
    }  
?>
		

    </div>
      </div>
      </div>
      </main>
  
</div>
</main>
</div>
<footer>
        <div class="container">
        <ul class="nav">
      <li class="category-item"><a href="index.html">home</a></li>
      <li class="category-item"><a href="about.html">about</a></li>
      <li class="category-item"><a href="services.html">services</a></li>
      <li class="category-item"><a href="portfolio.html">portfolio</a></li>
      <li class="category-item"><a href="contact.html">contact</a></li>
    </ul>
            <div class="">
			  <ul class="list-inline social-buttons">
                        <li><a href="http://wcet3.waketech.edu/nwhutsell/WEB250mos/" target="new"><i class="fa fa-wordpress"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/nicholas.hutsell.3" target="new"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/in/nicholas-hutsell-a32191124" target="new"><i class="fa fa-linkedin"></i></a>
                            </li>
                    </ul>
                       <div class=""><span class="copyright">Copyright &copy; Nik Hutsell </span></div>

      </div>
        </div>
</footer>

</body>
<script>


</script>
</html>
