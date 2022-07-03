<?php 

require_once 'templates/includes/header.php' ?>

<head>
    <link rel="stylesheet" href="assets/login.css">
</head>

<div class="login-wrapper w-100 d-flex align-items-center justify-content-center">
    <form class="login-form text-white" action="admin.php?action=login" method="POST">
        <input type="hidden" name="login" value="true" />
        <?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage text-center fw-bold my-2 d-block"><?php echo $results['errorMessage'] ?></div>
        <?php } ?>
        <h2 class="mb-4 text-center">Login</h2>
        <div class="input-group">
            <label class="pt-2" for="username">User Name</label>
            <input class="mt-2 px-2" type="text" name="username" required autofocus>
        </div>
        <div class="input-group">
            <label class="pt-2" for="password">Password</label>
            <input class="mt-2 px-2 mb-4" type="password" name="password" required>
        </div>
        <input class="submit-btn d-block ms-auto text-uppercase fs-6 py-2 px-3 border-0 rounded-3" type="submit"
            name="login" value="Login">
    </form>
</div>

<?php 

require_once 'templates/includes/footer.php' ?>