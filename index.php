<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>(1) Bring Old Batteries To Life Again</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom styles -->
    <link href="styles.css" rel="stylesheet" type="text/css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
     

     <header id="header">
     	<div class="container">
     		<div class="row">
     			<div class="col-md-4">
     				<div id="logo">
     					<img src="./images/logo.png">
     				</div>
     			</div>
     			<div class="col-md-8">
     				 <nav class="navbar navbar-expand-lg navbar-light navbar-right">
				 
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="collapse navbar-collapse" id="navbarSupportedContent">
						    <ul class="navbar-nav mr-auto">
						       
						      <li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Menu
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <a class="dropdown-item" href="privacy.php">Privacy</a>
						          <a class="dropdown-item" href="disclaimer.php">Disclaimer</a>
						          <a class="dropdown-item" href="contact.php">Contact</a>

						        </div>
						      </li>
						 
						    </ul>
						 
						  </div>
						</nav>
     			</div>

     			 
     		</div>
     	</div>
     </header><!-- End of Header -->

<?php

$afflink = file_get_contents("./files/afflink.txt");
$affid = file_get_contents("./files/clickbankid.txt");
$tid = file_get_contents("./files/tid.txt");

//echo $afflink;

?>

<?php if(empty($tid)) { ?>

<?php if ($afflink=="aff1") { ?>
<?php $src ="https://hop.clickbank.net/?affiliate=".$affid."&vendor=ezbattery"; ?>
 
 

<?php } elseif ($afflink=="aff2") { ?>
<?php $src ="https://hop.clickbank.net/?affiliate=".$affid."&vendor=ezbattery&x=fb"; ?> 
 
 
<?php } ?>

<?php } else { ?>

<?php if ($afflink=="aff1") { ?>
<?php $src ="https://hop.clickbank.net/?affiliate=".$affid."&vendor=ezbattery&tid=".$tid.""; ?>
 
 
<?php } elseif ($afflink=="aff2") { ?>
<?php $src ="https://hop.clickbank.net/?affiliate=".$affid."&vendor=ezbattery&x=fb&tid=".$tid.""; ?> 

 
<?php } ?>


<?php } ?>




     <section id="main">
        <div class="row" style="background: #FAFAFB; border-bottom: 1px solid #E8E8E8;">
         	<div class="container">
                <h2 class="text-center">Bring Old Batteries Back To Life Again...</h2>
                <p class="text-center">EZ Battery Reconditioning™ is the new way to recondition old batteries back to life again</p>
                <p class="text-center"><a href="<?php echo $src; ?>"><img src="./images/Recondition-Battery-play.jpg" style="display: inline-block;" /></a></p>
         	</div>
        </div>
        <div class="row" style="padding: 40px 0;">
            <div class="container">
                <h3>[Video] Bringing old batteries back to life is simple with EZ Battery Reconditioning™</h3>
                <p>We all know batteries are expensive and prices keep going up.</p>
                <p>The average family is spending <u>more and more</u> of their hard earned money each month on all kinds of batteries…</p>
                <p>But it doesn't have to be like this because there's finally a better way!</p>
                <p>It's called the <strong><a href="<?php echo $src; ?>">EZ Battery Reconditioning program</a></strong> and it teaches people how to bring old batteries back to life again!*</p>
                <p>It's simple, quick ...and can be used on many different types of batteries!</p>
                <p>To date, <strong>over 19,000 people have already tried out the program!</strong></p>
                <p><img src="./images/aso.png" class="align-center" style="margin-top: 40px;" /></p>

                <div class="greenbox-middle">
                    <h4 class="title">I Was Not Expecting It To Be That Easy…</h4>
                    <p>"I was just about to buy a new battery for my car but was able to use your guide to quickly recondition my old battery instead!</p>
                    <p>That already saved me over $100 and there are so many other batteries I am going to recondition now too! Thank you!"*</p>
                    <p class="author">Stephanie Mota, Arizona</p>
                </div>

                <p>Just think about it...</p>
                <p>How much of your hard earned money do you spend on replacement batteries for your car, tools, laptop, cell phone, electronics, and other devices?</p>
                <p>The average person spends over $15,000 in their lifetime!</p>
                <p>But what if you could instead bring old batteries back to life again and re-use them?</p>
                <p>This could save you money because you'd buy less new batteries!</p>
                <p>And here's what's great...</p>
                <p>It's <u>simple</u> and <u>quick</u> to do with the <a href="<?php echo $src; ?>">EZ Battery Reconditioning program</a>!*</p>
                <p>And if you check out <a href="<?php echo $src; ?>">this video</a>, you can learn more about EZ Battery Reconditioning™ and how to use it to bring old batteries back to life again!</p>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <p><a href="<?php echo $src; ?>"><img src="./images/ez1.jpg" class="align-center" /></a></p>
                <h4 class="text-center"><a href="<?php echo $src; ?>">>> Click here to watch the free presentation <<</a></h4>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">

                        <div class="space"></div>
                        <div class="space"></div>


                        <p>If your batteries die, don't throw them out!</p>
                        <p>If you have a box of old batteries, save them!</p>
                        <p>You can recondition these and use them again!*</p>
                        <p>The <a href="<?php echo $src; ?>">EZ Battery Reconditioning™ program</a> is simple, quick, and very effective!*</p>
                        <p>And it can be used right in the comfort of your own home to recondition your old batteries!</p>
                        <p>And if you’re not technical or don’t know the first thing about batteries, you can still use the program...</p>
                        <p>Because <a href="<?php echo $src; ?>">EZ Battery Reconditioning™</a> is designed so anybody can use it.</p>

                    </div>
                    <div class="col-md-3">

                        <div class="greenbox-side">
                            <h4 class="title">This Just Saved Me Hundreds Of Dollars!</h4>
                            <p>"Thank you for your help reconditioning my batteries. I was just about to throw out 3 old batteries that I thought were completely dead. But I was able to recondition them using your methods in less than 1 hour! This just saved me hundreds of dollars!"</p>
                            <p class="author">Tom Brunson, Utah</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 45px;">
            <div class="container">

                    <h4 class="text-center" style="margin-bottom: 10px;"><a href="<?php echo $src; ?>">Learn More In This Free Presentation...</a></h4>
                    <div class="text-center"><a href="<?php echo $src; ?>" id="orangebtn"><span class="text">Click Here To Watch The Presentation</span><span class="shine"></span><span class="hover"></span><span class="active"></span></a></div>

            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="row">

                    <div class="col-md-9">

                        <div class="space"></div>
                        <div class="space"></div>

                        <p>And not just that...</p>
                        <p>While most people are thrilled to just recondition and re-use their old household batteries, there are others taking it a step further!...</p>
                        <p>They're getting old batteries in bulk (for free), reconditioning them, and then selling them for profits!</p>
                        <p>And they're doing this for all kinds of batteries too... car batteries, laptop and cell phone batteries, golf cart batteries, forklift batteries, plus many other kinds!</p>
                        <p>And this <a href="<?php echo $src; ?>">brand new video presentation</a> reveals how you can use EZ Battery Reconditioning™ to do this!</p>
                        <p><strong><u>Click the link below</u></strong> to watch the <u>free</u> video to learn more now...</p>

                    </div>
                    <div class="col-md-3">

                        <div class="greenbox-side">
                            <h4 class="title">I’ve been going around my house and reconditioning every dead battery I find!</h4>
                            <p>I just got the EZ Battery Reconditioning program and have had a really hard time putting it down! I’ve been going around my house and reconditioning every dead battery I find!*</p>
                            <p class="author">Jim Hutchins, California</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <p><a href="<?php echo $src; ?>"><img src="./images/EZBattery-learn-more.png" class="align-center" /></a></p>
            </div>
        </div>


     </section><!-- End of Main -->

     <footer id="footer">

	     	<div class="row">
	     		<div class="container">
	     		 
	     			<p><img src="./images/EZ-Battery-Reconditioning-Logo-transparent3.png" class="align-center" /></p>

                    <p>DISCLAIMER: Please take into consideration that the EZ Battery Reconditioning results may vary due to differences in a battery's condition, history, and other factors.</p>

                    <p>TESTIMONIAL DISCLAIMER: The testimonials above are real and were written by people who actually used EZ Battery Reconditioning. Please take into consideration that these testimonials do not necessarily represent typical results and are based on the user's opinion. Results may vary due to differences in a battery's condition, history, and other factors.</p>

                    <p>ABOUT THE TRAINING: At the end of the training, I’ll be making an offer for people who want to work more closely with me and my team. This is completely optional. If you don’t want to use our course and work more closely with me, you can leave without buying anything. We will try and teach you many helpful skills in the training and you’ll be able to implement what you learn right away on your own.</p>

                    <p>NOT FACEBOOK: This site is not a part of the Facebook website or Facebook Inc. Additionally, this site is not endorsed by Facebook in any way. FACEBOOK is a trademark of FACEBOOK, Inc.</p>

                    <div class="space"></div>
                    <div class="space"></div>

	     	 
	     		</div>
	     	</div>
            <div class="row">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6">
                            <p class="copyright">Copyright &copy; 2020 - EZbatteryReconditioning.com - All Rights Reserved</p>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li><a href="privacy.php">Privacy</a></li>
                                <li><a href="disclaimer.php">Disclaimer</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
	
     </footer>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

  	<!-- FontAwesome -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


	
</body>
</html>