<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>Our Story</title>
  <meta name="description" content="About us page of pinch">
  <meta name="keywords" content="about us, our story, pinch story, developers">
  <meta name="author" content="Amandeep Singh Gill">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <style>
    body {
      font-family: 'Raleway-Regular',sans-serif;
      margin: 0;
    }

    h2{
      font-family:'Raleway-Bold',sans-serif;
    }

    html {
      box-sizing: border-box;
    }

    *, *:before, *:after {
      box-sizing: inherit;
    }


    .column {
      float: left;
      width: 33.3%;
      margin-bottom: 16px;
      padding: 0 8px;
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      margin: 8px;
      background-color:#ecf0f1;

    }

    .about-section {
      padding: 50px;
      padding-bottom:10px;
      text-align: center;
      background-color: #34495e;
      color: white;
    }

    .container {
      padding: 0 16px;
    }

    .container::after, .row::after {
      content: "";
      clear: both;
      display: table;
    }

    .title {
      color: grey;
    }

    .button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
    }

    button{
      background-color:#ED4C67;
      color:#000;
    }

    .button:hover {
      background-color: #555;
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
      position: relative;
      left: 0;
      bottom: 0;
      width: 100%;
      margin-bottom:0px;
      height:50px;
      background-color:#ED4C67;
      color: white;
      text-align: center;
      line-height:35px;
    }

    .footer p{
      padding-top:10px;
    }

    nav a{
      font-size:27px;
      margin-top:auto;
      margin-bottom:auto;
      padding-right:30px;
    }
    a{
      padding-right:10px;
      margin-top:auto;
      margin-bottom:auto;
    }

    img{
      border-radius:200px;
    }

    @media screen and (max-width: 650px) {
      .column {
        width: 100%;
        display: block;
      }
      .logo{
        padding-top:3px;
      }

      nav{
                padding-right:650px;
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


<div class="about-section">
  <h1>About Us(Our Story)</h1>
  <p> We are the team behind Pinch, a social network which would allow you to connect with your friends and your loved ones!</p>
  <p> We welcome you on this journey with us!</p>
  <p> Want to know more about us. You can contact us using the links below!. Till then keep using Pinch!</p>
  <p>Want to support projects development. You can donate using the link below</p>
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post">

<!-- Identify your business so that you can collect the payments. -->
<input type="hidden" name="business"
    value="donations@kcparkfriends.org">

<!-- Specify a Donate button. -->
<input type="hidden" name="cmd" value="_donations">

<!-- Specify details about the contribution -->
<input type="hidden" name="item_name" value="Friends of the Park">
<input type="hidden" name="item_number" value="Fall Cleanup Campaign">
<input type="hidden" name="currency_code" value="USD">

<!-- Display the payment button. -->
<input type="image" name="submit"
src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif"
alt="Donate">
<img alt="" width="1" height="1"
src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="assets/images/team/aman.jpeg" alt="Photo of Amandeep Singh Gill" style="width:100%">
      <div class="container">
        <h2>Amandeep Singh Gill</h2>
        <p class="title">Web Developer</p>
        <p>Loves Punjabi music and code.</p>
        <p>Agill2364@conestogac.on.ca</p>
        <button>Contact Me!</button>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="assets/images/team/tinkle.jpeg" alt="Photo of Tinkle Patel" style="width:100%">
      <div class="container">
        <h2>Tinkle Patel</h2>
        <p class="title">Web Developer</p>
        <p>Loves dancing and coding.</p>
        <p>tinkle@conestogac.on.ca</p>
        <button>Contact Me!</button>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="assets/images/team/bansari.jpeg" alt="Photo of Bansari Desai" style="width:100%">
      <div class="container">
        <h2>Bansari Desai</h2>
        <p class="title">Web Developer</p>
        <p>In love with programming</p>
        <p>bansari@conestogac.on.ca</p>
        <button>Contact Me!</button>
      </div>
    </div>
  </div>
</div>
<div class="footer">
  		<p>&copy 2021. Amandeep Singh Gill, Tinkle Patel, Bansari Desai</p>
</div>


</body>
</html>
