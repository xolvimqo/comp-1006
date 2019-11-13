<!-- Don't use it to store password -->
<?php include_once('../_config.php') ?>
<?php if (!isset($_action) && AUTH && !ADMIN) not_admin_redirect(base_path) ?>
<?php $form_data = $form_data ?? null ?>
<!-- Step 1: Add the action and HTTP method to the form attributes -->
<?php $_action = $_action ?? base_path . "/users/create.php" ?>
<form action="<?= $_action ?>" method="post">
  <div class="row">
    <div class="form-group col">
      <label for="first_name">First Name:</label>
      <!-- Step 2: Add the name attribute to the input element -->
      <!-- Step 3: Add the default value if it exists -->
      <!-- Step 4: Add the client-side validation option -->
      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" value="<?= $form_data['first_name'] ?? null ?>">
    </div>

    <div class="form-group col">
      <label for="last_name">Last Name:</label>
      <!-- Step 2: Add the name attribute to the input element -->
      <!-- Step 3: Add the default value if it exists -->
      <!-- Step 4: Add the client-side validation option -->
      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" value="<?= $form_data['last_name'] ?? null ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="email">Email:</label>
    <!-- Step 2: Add the name attribute to the input element -->
    <!-- Step 3: Add the default value if it exists -->
    <!-- Step 4: Add the client-side validation option -->
    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" value="<?= $form_data['email'] ?? null ?>">
  </div>

  <div class="form-group">
    <label for="password">Password:</label>
    <!-- Step 2: Add the name attribute to the input element -->
    <!-- Step 4: Add the client-side validation option -->
    <input type="password" class="form-control" id="password" name="password">
  </div>

  <div class="form-group">
  <!-- Step 2: Add the name attribute to the input element -->
  <!-- Step 4: Add the client-side validation option -->
    <label for="password_confirmation">Password Confirmation:</label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
  </div>

  <button class="btn btn-primary" type="submit">Submit</button>
</form>

<!-- Below is a script that will grab a new avatar and load it when you change your email address -->
<script>
  const emailField = document.querySelector('[name="email"]');
  const avatar = document.querySelector('#avatar');
  email.addEventListener('change', function () {
    const email = emailField.value;
    avatar.src = `http://api.adorable.io/avatars/300/${email}`;
    avatar.classList.remove('invisible');
  });
</script>
