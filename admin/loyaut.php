<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title><?= $title ?></title>
</head>

<body>

    <header class="header">
        <?php include '../elems/header.php'; ?>
    </header>

    <div class="content">
        <?= $content ?>
    </div>

    <footer class="footer">
        <?php include '../elems/footer.php'; ?>
    </footer>




</body>

</html>