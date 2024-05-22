<?php

var_dump($_POST);



include __DIR__ . "/partials/functions.php";


if (isset($_POST["email"])) {
    $error = check_email($_POST["email"]);
}




// var_dump(check_email($_POST["email"], $error));

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">

        <!-- Alert -->
        <div>
            <?php if (!isset($_POST["email"])) { ?>
                <div class="alert alert-warning">Inserire email!</div>
            <?php } ?>

            <?php if (isset($_POST["email"]) && !$error) { ?>
                <div class="alert alert-success">Email inserita correttamente</div>
            <?php } elseif (isset($_POST["email"]) && $error) { ?>
                <div class="alert alert-danger">Email inserita male</div>
            <?php } ?>
        </div>

        <!-- Form -->
        <form action="index.php" method="post">
            <div class="mb-3">
                <label for="i" class="form-label">Email address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </div>
</body>

</html>