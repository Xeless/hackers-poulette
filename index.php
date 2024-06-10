<?php
session_start(); // Démarrer la session

// Récupérer les erreurs de la session s'ils existent
$errors = isset($_SESSION["errors"]) ? $_SESSION["errors"] : [];

// Effacer les erreurs de la session
unset($_SESSION["errors"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Hackette poulet</title>
</head>
<body>
    <header>

    
    </header>

    <div class="container mt-5 d-flex justify-content-center">
        <form action="assets/php/process_form.php" method="post">
            <div class="form-group">
                <label for="name"></label>
                <div class="d-flex align-items-center">
                    <input type="text" id="name" name="name" class="form-control" placeholder="name">
                    <?php if(isset($errors["name"])): ?>
                        <div class="text-danger ml-2"><?php echo $errors["name"]; ?></div>
                    <?php endif; ?>
                </div>

                <label for="lastname"></label>
                <div class="d-flex align-items-center">
                    <input type="text" id="lastname" name="lastname" class="form-control" placeholder="lastname">
                    <?php if(isset($errors["lastname"])): ?>
                        <div class="text-danger ml-2"><?php echo $errors["lastname"]; ?></div>
                    <?php endif; ?>
                </div>

                <label for="gender"></label>
                <select id="gender" name="gender" class="form-control">
                    <option>Male</option>
                    <option>Femme</option>
                    <option>Autre</option>
                </select>

                <label for="email"></label>
                <div class="d-flex align-items-center">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                    <?php if(isset($errors["email"])): ?>
                        <div class="text-danger ml-2"><?php echo $errors["email"]; ?></div>
                    <?php endif; ?>
                </div>

                <label for="country"></label>
                <div class="d-flex align-items-center">
                    <input type="text" id="country" name="country" class="form-control" placeholder="Country">
                    <?php if(isset($errors["country"])): ?>
                        <div class="text-danger ml-2"><?php echo $errors["country"]; ?></div>
                    <?php endif; ?>
                </div>

                <label for="subject"></label>
                <select id="subject" name="subject" class="form-control">
                    <option>la font-police est discutable</option>
                    <option>les pokemon c'est sous-estime</option>
                    <option>Autre</option>
                </select>

                <label for="message"></label>
                    <textarea id="message" name="message" class="form-control" placeholder="Message"></textarea>
                    <?php if(isset($errors["message"])): ?>
                        <div class="text-danger ml-2"><?php echo $errors["message"]; ?></div>
                    <?php endif; ?>


                <button type="submit" name="submit" class="btn btn-primary mt-4">Envoyer</button>
            </div>
        </form>
    </div>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
