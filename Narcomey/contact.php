<?php
$to = 'theunifiedhalo@gmail.com';
$subject = 'Lawn care request';

$name = $_POST['name']
$email = $_POST['email']
$message = $_POST['message']

$body = <<<EMAIL

Hi my name is  $name

$message

From $name
$phone
$email

EMAIL;

$header = '$email';

if($_POST){
  if($name == '' || $email == '' || $message == ''){
    $feedback = 'Fill out all the fields.'
  }else{
    main($to, $subject, $body, $header)
    $feedback = 'Thanks for the message!';
  }}
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Narcomey Lawn Care</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="img/logo.png" class = "logo"></a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="index.html">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Services <span class="sr-only">(current)</span></a></li>
          <li class="active"><a href="contact.html">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <form action="?" method="POST" class="form">
    <ul>
      <li>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" />
      </li>
      <li>
        <label for="name">Email:</label>
        <input type="text" name="email" id="email" />
      </li>
      <li>
        <label for="Message">Message:</label>
        <textarea id="message" name="message" cols="42" rows="9"></textarea>
      </li>
      <li>
        <input type="submit" value="Submit">
      </li>
    </ul>
  </form>

  <div class="mainFooter">
    <div class="container">
      <p id="copyright">Copyright 2015 Morris Narcomey</p>
      <p id="blake">Website designed and developed by Blake Nations</p>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html
