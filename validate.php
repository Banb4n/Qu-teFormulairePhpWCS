<?php
// On créer un $data pour stocker les données et utilisons
// la méthode htmlspecialchars() pour désactiver le code html entrer
// et ainsi éviter les failles XSS
    $subject = htmlspecialchars($_POST["subject"]);
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["tel"]);

// Nous créons un array $error pour stocker les messages d'erreurs.
$error = [
    'subject' => 'Sélectionnez un motif !',
    'name'=> 'Entrez votre nom et prénom !',
    'email' => 'Email incorrect !',
    'phone'=> 'Numéro de télèphone incorrect !',
];

// Nous créons un array $error pour stocker les messages de validations.
$success = [
    'subject' => 'Vous nous contactez pour ',
    'name'=> 'Votre nom est ',
    'email' => 'Votre email : ',
    'phone'=> 'Votre numéro de télephone : ',
];


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Page Description">
    <meta name="author" content="banban">
    <title>Status Page</title>

    <!-- Bootstrap -->
    <link href="style.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">Statut de votre message : </div>
        <div class="panel-body">
            <?php

            if (!empty($subject)) {
                echo "<div class='alert alert-success'>" . $success['subject'] . $subject ."</div>";
            } else {
                echo "<div class='alert alert-danger'>" . $error['subject'] . $subject ."</div>";
            }

            if (!empty($name)) {
                echo "<div class='alert alert-success'>" . $success['name'] . $name ."</div>";
            } else {
                echo "<div class='alert alert-danger'>" . $error['name'] . $name . "</div>";
            }

            if (!empty($email)) {
                if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email)){
                    echo "<div class='alert alert-success'>" . $success['email'] . $email . "</div>";
                } else {
                    echo "<div class='alert alert-danger'>" . $error['email'] . $email . "</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>" . $error['email'] . $email . "</div>";
            }

            if (!empty($phone)) {
                if(preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", $phone)){
                    echo "<div class='alert alert-success'>" . $success['phone'] . $phone . "</div>";
                } else {
                    echo "<div class='alert alert-danger'>" . $error['phone'] . $phone . "</div>";
                }            } else {
                echo "<div class='alert alert-danger'>" . $error['phone'] . $phone . "</div>";
            }

            ?>

        </div>
    </div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>







