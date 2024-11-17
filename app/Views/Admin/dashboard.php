<?php
include '../app/Views/partials/header.php';
?>
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/assets/front/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="/home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Dashboard <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">DASHBOARD</h1>
            </div
        </div>
    </div>
</section>

<section class="mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <div class="card shadow-lg border-0">
                    <div class="card-body py-5 bg-light">
                        <h2 class="mb-3 text-primary">Welcome Admin</h2>
                        <h3 class="font-weight-bold "><?= htmlspecialchars($user['name']) ?></h3>
                        <div class="d-flex justify-content-center mt-4">
                            <a href="/admin/cars-list" class="btn btn-outline-primary mx-2">Manage Cars</a>
                            <a href="/admin/users" class="btn btn-outline-success mx-2">Manage Users</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-5">
    <div class="container">
    <h2 class="border w-25 border-primary rounded p-3 text-center">Add New Car</h2>
    <form action="/admin/createCar" method="POST" enctype="multipart/form-data" class="row g-3">
        <div class="col-md-6">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" class="form-control" id="brand" name="brand" placeholder="Enter brand name" required>
        </div>
        <div class="col-md-6">
            <label for="model" class="form-label">Model</label>
            <input type="text" class="form-control" id="model" name="model" placeholder="Enter model" required>
        </div>
        <div class="col-md-6">
            <label for="image" class="form-label">Car Image</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>
        <div class="col-md-6">
            <label for="price_per_day" class="form-label">Price per Day ($)</label>
            <input type="number" step="0.01" class="form-control" id="price_per_day" name="price_per_day" placeholder="Enter price" required>
        </div>
        <div class="col-12 mt-4">
            <button type="submit" class="btn btn-primary">Add Car</button>
        </div>
    </form>
    </div>
</section>

<section id="updateCarSection" class="mb-5">
    <div class="container">
        <h2  class="border w-25 border-success rounded p-3 text-center">Update Car</h2>
        <form action="/admin/updateCar" method="POST" enctype="multipart/form-data" class="row g-3">
            <div class="col-md-6">
                <label for="id" class="form-label">Car ID</label>
                <input type="text" class="form-control" id="id" name="id" placeholder="Enter Car ID" value="<?= htmlspecialchars($car['id'] ?? '') ?>" readonly>
            </div>
            <div class="col-md-6">
                <label for="brand" class="form-label">Brand</label>
                <input type="text" class="form-control" id="brand" name="brand" placeholder="Enter brand name" value="<?= htmlspecialchars($car['brand'] ?? '') ?>" required>
            </div>
            <div class="col-md-6">
                <label for="model" class="form-label">Model</label>
                <input type="text" class="form-control" id="model" name="model" placeholder="Enter model" value="<?= htmlspecialchars($car['model'] ?? '') ?>" required>
            </div>
            <div class="col-md-6">
                <label for="image" class="form-label">Car Image</label>
                <input type="file" class="form-control" id="image" name="image" value="<?= htmlspecialchars($car['image']) ?>">
            </div>
            <div class="col-md-6">
                <label for="price_per_day" class="form-label">Price per Day ($)</label>
                <input type="number" step="0.01" class="form-control" id="price_per_day" name="price_per_day" placeholder="Enter price" value="<?= htmlspecialchars($car['price_per_day'] ?? '') ?>" required>
            </div>
            <div class="col-12 mt-4">
                <?php if(isset($car['image'])): ?>
                <img src="/assets/Admin/images/cars/<?= htmlspecialchars($car['image']) ?>" alt="Current Image" style="max-width: 100px; height: auto;">
                <?php endif; ?>
                <button type="submit" class="btn btn-success">Update Car</button>
            </div>
        </form>
    </div>
</section>





<?php
include '../app/Views/partials/footer.php';
?>



