<?php
include 'partials/header.php';
?>
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/assets/front/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="/home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Choose Your Car</h1>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($cars as $car): ?>
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url('/assets/Admin/images/cars/<?= htmlspecialchars($car['image']); ?>');">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="/car-single"><?= htmlspecialchars($car['brand']); ?></a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat"><?= htmlspecialchars($car['brand']); ?></span>
                            <p class="price ml-auto">$<?= intval($car['price_per_day']); ?> <span>/day</span></p>
                        </div>
                        <?php if($car['status'] == 'available'): ?>
                            <form action="/bookCar" method="POST">
                                <input type="hidden" name="id" value="<?php echo $car['id']; ?>">
                                <button type="submit" class="btn btn-primary py-2 mr-1">
                                    Book now
                                </button>
                            </form>
                        <?php endif; ?>
                        <?php if($car['status'] == 'rented'): ?>
                            <form action="/unBookCar" method="POST">
                                <input type="hidden" name="id" value="<?php echo $car['id']; ?>">
                                <button type="submit" class="btn btn-warning py-2 mr-1">
                                    Rented
                                </button>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'partials/footer.php';
?>


