<?php include_once(dirname(__DIR__) . '/_config.php') ?>
<?php if (!isset($_action) && AUTH && !ADMIN) not_admin_redirect(base_path); ?>
<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<?php $form_data = $form_data ?? null ?>

<form action="<?= $_action ?? base_path . "/users/create.php" ?>" method="post" enctype="multipart/form-data">
<div class="registration-section1">
    <div class="registration-section1-mid">
        <div class="registration-form">
            <?php if (AUTH): ?>
                <?php 
                    printf('<image class="show-image" id="profile" name="profile" width="80px" height="auto" src="data:%s;base64,%s"/>',
                    $_SESSION['user']['image_type'], 
                    base64_encode($_SESSION['user']['profile_image']));
                ?>
            <?php else: ?>
                <img id="profile" name="profile" src="<?= base_path ?>/images/face-facial-hair-fine-looking-guy-614810.jpg" alt="profile">
            <?php endif ?>
            <p></p>
            <small>
            <a href="./"><i class="fa fa-chevron-left"></i>&nbsp;Back to users...</a>
            </small>
                <?php if (isset($_GET['id'])): ?>
                    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                <?php endif ?>
                <div class="registration-form-blocks">
                <div class="registration-form-block form-group">
                    <span>First Name</span>
                    <input type="text" id="first_name" name="first_name" placeholder="Enter First Name" value="<?= $form_data['first_name'] ?? null ?>"> <br>  
                    <span>Last Name</span>
                    <input type="text" id="last_name" name="last_name" placeholder="Enter Last Name" value="<?= $form_data['last_name'] ?? null ?>"> <br>
                    <span>Email</span>
                    <input type="email" id="email" name="email" placeholder="Enter Email" value="<?= $form_data['email'] ?? null ?>"> <br>
                    <span>Password</span>
                    <input type="password" id="password" name="password"> <br>
                    <input type="file" id="profile_image" name="profile_image" accept="image/*" onchange="loadImage(event)">
                    <script src="<?= base_path ?>/js/loadImage.js"></script>
                </div>
                <div class="registration-form-block form-group">
                    <span>Phone</span>
                    <input type="text" id="phone" name="phone" placeholder="Enter Phone Number" value="<?= $form_data['phone'] ?? null ?>"> <br>
                    <span>Address</span>
                    <input type="text" id="address" name="address" placeholder="Enter Address" value="<?= $form_data['address'] ?? null ?>"> <br>
                    <span>Province</span>
                    <input type="text" id="province" name="province" placeholder="Enter Province" value="<?= $form_data['province'] ?? null ?>"> <br>
                    <span>Password Confirmation</span>
                    <input type="password" id="password_confirmation" name="password_confirmation" value="<?= $form_data['password_confirmation'] ?? null ?>"> <br>
                    <span>Postal Code</span>
                    <input type="text" id="postal_code" name="postal_code" placeholder="Enter Postal Code" value="<?= $form_data['postal_code'] ?? null ?>"> <br>
                </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </div>
    </div>
</form>