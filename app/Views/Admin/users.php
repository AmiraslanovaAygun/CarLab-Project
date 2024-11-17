<?php
include '../app/Views/partials/header.php';
?>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/assets/front/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="/home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Users <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">USERS</h1>
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
            <th>FullName</th>
            <th>Image</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td>
                    <div class="ms-3">
                        <p class="text-muted mx-4"><?php echo htmlspecialchars($user['id']); ?></p>
                    </div>
                </td>
                <td>
                    <div class="ms-3">
                        <p class="text-muted"><?php echo htmlspecialchars($user['name']); ?></p>
                    </div>
                </td>
                <td>
                    <img
                        src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                        style="width: 45px; height: 45px"
                        class="rounded-circle mx-2"
                    />
                </td>
                <td>
                    <div class="ms-3">
                        <p class="text-muted"><?php echo htmlspecialchars($user['email']); ?></p>
                    </div>
                </td>
                <?php if(($user['role']) == 'admin'): ?>
                    <td>
                        <span class="badge badge-success rounded-pill d-inline mx-2">Admin</span>
                    </td>
                <?php endif; ?>
                <?php if(($user['role']) == 'customer'): ?>
                    <td>
                        <span class="badge badge-dark rounded-pill d-inline mx-2">Customer</span>
                    </td>
                <?php endif; ?>
                <td>
                     <?php if(($user['role']) !== 'admin'): ?>
                    <form action="/admin/deleteUser" method="POST">
                        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                        <button type="submit" class="btn btn-danger btn-sm btn-rounded mx-3">
                            Delete
                        </button>
                    </form>
                     <?php endif; ?>
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

