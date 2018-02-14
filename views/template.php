<!DOCTYPE html>
<html lang="en">
<head>
	<?php $Route = RouteModel::Route(); ?>
	<meta charset="UTF-8">
    <title>My Work</title>
    <link rel="stylesheet" href="<?php echo $Route; ?>views/css/main.css">
    <link rel="stylesheet" href="<?php echo $Route; ?>views/css/bootstrap-grid.min.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,900" rel="stylesheet">
</head>
<body>

	<?php include 'modules/header.view.php'; ?>
	<?php include 'modules/information.view.php'; ?>


    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

	
</body>
</html>