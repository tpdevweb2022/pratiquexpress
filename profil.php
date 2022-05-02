<?php include_once("_includes/arrayUsers.php"); ?>
<?php
$id = htmlspecialchars($_GET["id"]);
$user = $arrayUsers[$id];
$name = $user["name"];
$gps = $user["location"]["coordinates"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <img src="<?= $user["picture"]['large'] ?>" alt="<?= $name["first"] ?> <?= $name["last"] ?>">
                <h1 class="text-danger">
                    <?= $name["first"] ?> <?= $name["last"] ?>
                </h1>
                <p>Email : <?= $user["email"] ?></p>
                <p>Date de naissance : <?= date("d/m/Y H:i", strtotime($user["dob"]["date"])) ?></p>
                <p>Nationalité : <?= $user["nat"] ?></p>
                <p>Cordonnées GPS : <?= $gps["latitude"] ?>, <?= $gps["longitude"] ?></p>
            </div>
        </div>
    </div>
</body>

</html>