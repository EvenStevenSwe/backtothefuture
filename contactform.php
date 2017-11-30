<!DOCTYPE html>
<html lang="sv">

<head>

    <!-- Meta beskrivningar -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="En sida om Back to the Future/Tillbaka till Framtiden">
    <meta name="keywords" content="back to the future, tillbaka till framtiden, bttf, tbtf, marty mcfly, doc brown, lorraine mcfly, george mcfly">

    <title>Back to the Future</title>

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <!-- Eget CSS -->
    <link href="css/bttfstyle.css" rel="stylesheet">
    <!-- CSS till Galleri -->
    <link href="css/lightbox.css" rel="stylesheet">
    <!-- CSS till Kontakt -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <!-- Övrig CSS -->
    <link href='css/custom.css' rel='stylesheet' type='text/css'>
    <!-- Modernizer Script for old Browsers -->
    <script src="js/modernizr-2.6.2.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        -->
</head>
<body>

<!-- Kontakt -->
<aside id="kontakt" class="kontakt">
<div class="text-vertical-center">
<div class="content_box">
<div class="container">
<div class="row">
<div class="col-lg-8 col-lg-offset-2">
<form id="contact-form" method="post" action="js/contact.php">

<div class="messages"></div>
<div class="controls"><div class="row"><div class="col-md-6">
<div class="form-group">
<label for="form_name">Namn: *</label>
<input id="form_name" type="text" name="name" class="form-control" placeholder="Var vänlig skriv ditt förnamn *" required="required" data-error="Förnamn behövs här.">
<div class="help-block with-errors"></div>
</div>
</div>

<div class="col-md-6"><div class="form-group">
<label for="form_lastname">Efternamn *</label>
<input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Var vänlig skriv ditt efternamn *" required="required" data-error="Efternamn behövs här.">
<div class="help-block with-errors"></div>
</div>
</div>
</div>

<div class="row"><div class="col-md-6"><div class="form-group">
<label for="form_email">E-mail *</label>
<input id="form_email" type="email" name="email" class="form-control" placeholder="Var vänlig skriv ditt e-mail *" required="required" data-error="Giltig email behövs här.">
<div class="help-block with-errors"></div>
</div>
</div>

<div class="col-md-6"><div class="form-group">
<label for="form_phone">Telefon</label>
<input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Var vänlig skriv ditt telefonnummer">
<div class="help-block with-errors"></div>
</div>
</div>
</div>

<div class="row"><div class="col-md-12"><div class="form-group">
<label for="form_message">Meddelande *</label>
<textarea id="form_message" name="message" class="form-control" placeholder="Ditt meddelande *" rows="4" required="required" data-error="Var vänling, lämna ett meddelande."></textarea>
<div class="help-block with-errors"></div>
</div>
</div>

<div class="col-md-12"><input type="submit" class="btn btn-success btn-send" value="Skicka meddelande"></div>
</div>

<div class="row"><div class="col-md-12"><p class="ftext"><strong>*</strong> Obligatorisk för att kunna få svar.</p></div></div>

</div>



<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- JS till Galleri -->
<script src="js/lightbox.js"></script>


<!-- JS till Kontakt -->
<script src="js/validator.js"></script>
<script src="js/contact.js"></script>

</  body>
</html>