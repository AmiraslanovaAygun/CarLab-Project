<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Carbook</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/front/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/assets/front/css/animate.css">
    <link rel="stylesheet" href="/assets/front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/front/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/front/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/front/css/aos.css">
    <link rel="stylesheet" href="/assets/front/css/ionicons.min.css">
    <link rel="stylesheet" href="/assets/front/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/assets/front/css/jquery.timepicker.css">
    <link rel="stylesheet" href="/assets/front/css/flaticon.css">
    <link rel="stylesheet" href="/assets/front/css/icomoon.css">
    <link rel="stylesheet" href="/assets/front/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/home">Car<span>Book</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <?php use Core\Helper;?>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <?php if(isset($_SESSION['user'])): ?>
                    <?php if($_SESSION['user']['role'] == 'admin'): ?>
                        <li class="nav-item <?php echo Helper::activeOrNone('/dashboard');?>"><a href="/admin" class="nav-link">Dashboard</a></li>
                        <li class="nav-item <?php echo Helper::activeOrNone('/cars'); ?>"><a href="/admin/cars-list" class="nav-link">Cars</a></li>
                        <li class="nav-item <?php echo Helper::activeOrNone('/users'); ?>"><a href="/admin/users" class="nav-link">Users</a></li>
                    <?php endif; ?>
                    <?php if($_SESSION['user']['role'] == 'customer'): ?>
                        <li class="nav-item <?php echo Helper::activeOrNone('/home'); echo Helper::activeOrNone('/'); ?>"><a href="/home" class="nav-link">Home</a></li>
                        <li class="nav-item <?php echo Helper::activeOrNone('/about'); ?>"><a href="/about" class="nav-link">About</a></li>
<!--                        <li class="nav-item --><?php //echo Helper::activeOrNone('/pricing'); ?><!--"><a href="/pricing" class="nav-link">Pricing</a></li>-->
                        <li class="nav-item <?php echo Helper::activeOrNone('/cars'); ?>"><a href="/cars" class="nav-link">Cars</a></li>
<!--                        <li class="nav-item --><?php //echo Helper::activeOrNone('/blog'); ?><!--"><a href="/blog" class="nav-link">Blog</a></li>-->
                        <li class="nav-item <?php echo Helper::activeOrNone('/contact'); ?>"><a href="/contact" class="nav-link">Contact</a></li>
                        <li class="nav-item <?php echo Helper::activeOrNone('/profile'); ?>"><a href="/profile" class="nav-link">Profile</a></li>
                    <?php endif; ?>
                    <li class="nav-item <?php echo Helper::activeOrNone('/logout'); ?>" style="display: inline-block; margin: 5px;">
                        <a href="/logout" class="nav-link btn btn-primary text-white rounded-pill logout-btn" style="padding: 8px 15px; text-decoration: none;">Logout</a>
                    </li>
                <?php endif; ?>

                <?php if(!isset($_SESSION['user'])):?>
                    <li class="nav-item <?php echo Helper::activeOrNone('/login'); ?>"><a href="/login" class="nav-link">Login</a></li>
                    <li class="nav-item <?php echo Helper::activeOrNone('/register'); ?>"><a href="/register" class="nav-link">Register</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>