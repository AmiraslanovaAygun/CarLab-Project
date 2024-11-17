<?php
include 'partials/header.php';
?>
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/assets/front/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="/home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Register <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Register</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                 <h2 class="mb-3">REGİSTRATİON</h2>
            </div>
        </div>
        <form action="/register" method="POST" class="w-75 m-auto">
            <div class="form-group">
                <label for="exampleInputFullname">Name Surname</label>
                <input type="text" class="form-control" id="exampleInputFullname" name="name" placeholder="Enter Fullname">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>

<section class="ftco-section ftco-intro" style="background-image: url(/assets/front/images/bg_3.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 heading-section heading-section-white ftco-animate">
                <h2 class="mb-3">Do You Want To Register? So Don't Be Late.</h2>
                <a href="#" class="btn btn-primary btn-lg">Become A Driver</a>
            </div>
        </div>
    </div>
</section>
<?php
include 'partials/footer.php';
?>


