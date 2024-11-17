<?php
include '../app/Views/partials/header.php';
?>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/assets/front/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="/home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">CARS</h1>
            </div
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
            <tr>
                <th>id</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Image</th>
                <th>Price ($)</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($cars as $car): ?>
                <tr>
                    <td>
                        <div class="ms-3">
                            <p class="text-muted mx-4"><?php echo htmlspecialchars($car['id']); ?></p>
                        </div>
                    </td>
                    <td>
                        <div class="ms-3">
                            <p class="text-muted"><?php echo htmlspecialchars($car['brand']); ?></p>
                        </div>
                    </td>
                    <td>
                        <div class="ms-3">
                            <p class="text-muted"><?php echo htmlspecialchars($car['model']); ?></p>
                        </div>
                    </td>
                    <td>
                        <img
                            src="/assets/Admin/images/cars/<?php echo htmlspecialchars($car['image']); ?>"
                            style="width: 80px; height: 55px"
                            class=" mx-2"
                        />
                    </td>

                    <td>
                        <div class="ms-3">
                            <p class="text-muted"><?php echo htmlspecialchars($car['price_per_day']); ?></p>
                        </div>
                    </td>
                    <?php if(($car['status']) == 'available'): ?>
                        <td>
                            <span class="badge badge-success rounded-pill d-inline mx-2">Available</span>
                        </td>
                    <?php endif; ?>
                    <?php if(($car['status']) == 'rented'): ?>
                        <td>
                            <span class="badge badge-warning rounded-pill d-inline mx-2">Rented</span>
                        </td>
                    <?php endif; ?>
                    <td>
                        <form action="/admin/deleteCar" method="POST">
                            <input type="hidden" name="id" value="<?php echo $car['id']; ?>">
                            <button type="submit" class="btn btn-danger btn-sm btn-rounded ml-5">
                                Delete
                            </button>
                        </form>
                    </td>
                    <td>
                        <form action="/admin/editCar" method="POST">
                            <input type="hidden" name="id" value="<?php echo $car['id']; ?>">
                            <button type="submit" class="btn btn-primary btn-sm btn-rounded">
                                Edit
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<?php
include '../app/Views/partials/footer.php';
?>

