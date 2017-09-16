<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Page Description">
    <meta name="author" content="banban">
    <title>Formulaire</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container-fluid">
    <div class="container-form well">
        <form action="validate.php" method="post" role="form">
        <legend>Contactez nous :</legend>


        <div class="form-group">
            <label for="subject">Objet du message</label>
            <select id="subject" name="subject" class="form-control" required="required">
                <option value="Restaurant" selected="">Question sur un restaurant</option>
                <option value="Aventure">Participez à l'aventure</option>
                <option value="Presse">Presse</option>
                <option value="Suggestions">Suggestions</option>
                <option value="Partenariat">Partenariat</option>
                <option value="Autres">Autres</option>
            </select>
        </div>
        <div class="form-group">
            <label for="name">
                Votre nom et Prénom</label>
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                <input type="text" class="form-control" name="name" id="name" placeholder="Prénom et nom" required="required" />
                <p class="<?php echo $error[1]; ?>"></p>
            </div>
        </div>
        <div class="form-group">
            <label for="email">
                Votre email</label>
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                <input type="email" class="form-control" id="email" name="email" placeholder="Votre adresse email" required="required" />
            </div>
        </div>
        <div class="form-group">
            <label for="tel">
                Votre numéro de téléphone</label>
            <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span>
                                    </span>
                <input type="tel" class="form-control" id="tel" name="tel" placeholder="Votre numéro"  maxlength="14" required="required" />
            </div>
        </div>



        <button type="submit" class="btn btn-success">Submit</button>
    </form>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>