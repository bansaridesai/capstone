<?php
require 'config/config.php';

// sending the user feedback to the database.
    if(isset($_POST['submit'])){
       $first_name = $_POST['fname'];
       $last_name = $_POST['lname'];
       $email = $_POST['email'];
       $subject = $_POST['subject'];

       $query = mysqli_query($con,"INSERT into contact_us VALUES (NULL,'lokesh','kumar','lokesh@gmail.com','deadadad')");

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="description" content="Contact us page of pinch">
  <meta name="keywords" content="Contact, feedback, pinch">
  <meta name="author" content="Amandeep Singh Gill">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us: Pinch</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style>

        *{
            margin:0px;
            padding:0px;
        }

        .logo{
			width:21%;
			margin-top:-4px;	
			
		}

		.top_bar{
			margin-bottom:40px;
            z-index: 0;
		}
        .footer {
			position: fixed;
			left: 0;
			bottom: 0;
			width: 100%;
			background-color: #ED4C67;
			color: white;
			text-align: center;
            height:7%;
            line-height:40px;
		}

        img{
            border-radius:200px;
        }

        h3{
            margin-top:20px;
        }

        .test{
            margin-top:25px;
        }

        nav a{
            font-size:25px;
            padding-right:10px;
        }
        input[type=text], select, textarea {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 5px;
            resize: vertical;
        }

        input[type=email]{
        width: 100%;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 5px;
        resize: vertical;
        }

        input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        input[type=submit]:hover {
        background-color: #45a049;
        }

        label{
            font-family:
        }


        @media only screen and (max-width: 650px){
            .logo{
                width:23%;
            }
            
            nav{
                padding-right:650px;
            }
            
            form{
                margin-bottom:100px;
            }
        }
     
      
    </style>
</head>
<body>
<div class="top_bar"> 
	<div class="logo">
		<a href="index.php"><img alt="logo of website" class="logo" src="assets/images/icons/logo.png"></a>
	</div>
	<nav>
		<a href="aboutus.php">About us</a>
		<a href="contactus.php">Contact us</a>
	</nav>
</div>
<div class="container">
<h3>Contact Form</h3>
  <form action="contactus.php" method="POST" onSubmit="alert('Your feedback has been submitted Successfully')" >
    <strong><label class="test" for="fname">First Name</label></strong>
    <input type="text" id="fname" name="fname" required placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" required placeholder="Your last name..">

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required placeholder="Your email..">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" required placeholder="Write something.." style="height:100px"></textarea>

    <input type="submit" id="submit" name="submit" value="submit" >
  </form>
</div>
<div class="footer">
  		<p>&copy 2021 Amandeep Singh Gill, Tinkle Patel, Bansari Desai</p>
</div>
</body>
</html>