<?php include_once("_includes/arrayUsers.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratiqu'Express</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row g-3">
            <?php foreach ($arrayUsers as $user) :
                shuffle($colors);
            ?>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card border <?php if ($user['gender'] === "female") {
                                                echo 'border-success';
                                            } else {
                                                echo 'border-primary';
                                            } ?>">
                        <img src="<?= $user['picture']['medium'] ?>" class="card-img-top" alt="<?= $user['name']['first'] ?> <?= $user['name']['last'] ?>">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $user['name']['first'] ?> <?= $user['name']['last'] ?>
                            </h5>
                            <div>
                                <div>
                                    <div>Genre : <?= $user['gender'] ?></div>
                                </div>
                                <div>
                                    Email : <?= $user['email'] ?>
                                </div>
                                <div>
                                    Phone : <?= $user['phone'] ?>
                                </div>
                            </div>
                            <div>
                                <div class="badge <?= $colors[0] ?>"><?= $user["nat"] ?></div>
                            </div>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>