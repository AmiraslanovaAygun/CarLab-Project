<?php
include 'partials/header.php';
?>
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/assets/front/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="/home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Profile <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">PROFILE</h1>
            </div
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container mt-5">
        <div class="row justify-content-center mb-4">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h1 class="display-4 text-primary mb-3">Welcome <br> <?= htmlspecialchars($user['name']) ?>!</h1>
                <p class="lead text-muted">Here you can update your personal information easily.</p>
            </div>
        </div>
        <div class="card shadow-lg p-4 w-75 mx-auto">
            <form action="/updateUser" method="POST">
                <div class="form-group mb-3">
                    <label for="exampleInputFullname" class="form-label fw-bold">Name Surname</label>
                    <input type="text" class="form-control border-primary" id="exampleInputFullname" name="name"
                           placeholder="Enter Fullname" value="<?= htmlspecialchars($user['name']) ?>" required>
                </div>
                <div class="form-group mb-4">
                    <label for="exampleInputEmail1" class="form-label fw-bold">Email Address</label>
                    <input type="email" class="form-control border-primary" id="exampleInputEmail1" name="email"
                           placeholder="Enter email" value="<?= htmlspecialchars($user['email']) ?>" required>
                </div>
                <button type="submit" class="btn btn-primary btn-lg w-25">Update</button>
            </form>
        </div>
    </div>

</section>

<?php
include 'partials/footer.php';
?>



