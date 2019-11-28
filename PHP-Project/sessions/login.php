<?php include('../_config.php') ?>

<?php
    $_title = "Login";
    $_active = "login";
?>

<?php include(ROOT . '/partials/_header.php') ?>

<div class="login-section1">
    <div class="login-section1-mid">
        <div class="login-form"><img src="<?= base_path ?>/images/face-facial-hair-fine-looking-guy-614810.jpg" alt="">
            <p>Login</p>
            <section>
                <form action="./authenticate.php" method="post">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter email" value="<?= $form_data['email'] ?? null ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                    </div>
                    <button class="btn btn-primary" type="submit">Login</button>
                </form>
            </section>

            <div>
                <small>Don't have an account? <a href="<?= base_path ?>/users/registration.php" class="Sing-in">Register</a></small>
            </div>
        </div>
    </div>
</div>
    
<?php include(ROOT . '/partials/_footer.php');?>