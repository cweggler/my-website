<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Cara Weggler: Contact</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Cara Weggler is a young professional, freelance app developer and musician.
Her goal is to make mobile apps that revolutionizes the lives of their users">
<link href="https://fonts.googleapis.com/css?family=Share" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700|Oswald:400,500" rel="stylesheet">
<!-- This references the stylesheet for bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--This links the style sheet for Font Awesome, where you can get nice icons for your website. -->
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" >
<!-- Custom styles for this template. This is last of the CSS stylesheets, so it can override the Bootsrap CSS. Change the name to the name of your style sheet-->
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-inverse" style="background-color: #001f4d;">
            <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button aria-expanded="false" class="navbar-toggle collapsed" data-target=
                  "#bs-example-navbar-collapse-1" data-toggle="collapse" type=
                  "button"><span class="sr-only">Toggle navigation</span> <span class=
                  "icon-bar"></span> <span class="icon-bar"></span> <span class=
                  "icon-bar"></span></button> <a class="navbar-brand" href="#">Cara Weggler</a>
                </div><!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="resume.html">Resume</a>
                        </li>
                        <li>
                            <a href="project.html">My Projects</a>
                        </li>
                        <li class="active">
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Thank You</h1>
                    <?php
				                /*These are the variables in form. In PHP, all variables start with a $ sign.
				                They are used below to generate an email notice. The fields come from the field name in the contact.php script. */
				                $describe = $_POST['describe']; /* In English: Get the field with the name of "describe" and make a variable named, $describe */
				                $name = $_POST['name'];
				                $email = $_POST['email'];
				                $phone = $_POST['phone'];

				                 /*This is the message that is generated to the user when the form is submitted. */
				                 $success = "Thank you taking time to contact me! Your message has been sent.<br /> ";

				                 /*Change the email address to your email address. */
				                 $to = "cweggler@gmail.com";

				                 /*This set of variables is what you will receive back in an email to alert you to the message.
				                 The message is not stored in a database and is only in the email you or your designee receives. The "/n" starts a new line in the form. In PHP*/
				                 $subject = "Contact Form Submission";
				                 $msg =
					                   "Message:   $describe\n" .
					                   "Name:   $name\n" .
					                   "Email:  $email\n" .
					                   "Phone:  $phone\n";

				                 mail($to, $subject, $msg);

				                 echo $success ;
			               ?>
                     <a href="index.html">Return to home page</a><br>
            </div>
        </div>
        <footer> </footer>
        <!-- Javascript links are placed at the end of the document so the pages load faster -->
        <!--This it the reference to jQuery. This script must load before the Bootstrap Javascript-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!--This is the reference to the Bootstrap Javascript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
