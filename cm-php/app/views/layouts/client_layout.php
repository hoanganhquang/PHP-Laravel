<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>

<body>
    <!-- header -->
    <?php $this->render("blocks/header") ?>

    <!-- Content -->
    <?php $this->render($content, $sub_content) ?>

    <!-- footer -->
    <?php $this->render("blocks/footer") ?>
</body>

</html>