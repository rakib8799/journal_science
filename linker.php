<?php
if (isset($_SESSION['author_id']) || isset($_SESSION['reviewer_id']) || isset($_SESSION['associative_editor_id']) || isset($_SESSION['main_editor_id'])) {
?>
    <script>
        window.location = "<?php echo $_SESSION['person'] ?>/index.php";
    </script>
<?php
    exit();
}
?>

<?php require_once("database/connection.php"); ?>

<!DOCTYPE html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
<!-- <html class="no-js" lang="zxx"> <![endif] -->

<!-- Mirrored from amentotech.com/htmls/amentojourn/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Feb 2024 12:19:02 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NUJSE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/fontawesome/fontawesome-all.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/scrollbar.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/chartist.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/transitions.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>