<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>user-registration</title>
  <?php include '../includes/styles.php'; ?>
</head>
<body>
  <div class="containert m-5 p-5">
     <h1 class="text-center">User Registration</h1>
     <div class="container m-5 p-5 border rounded shadow w-75 mx-auto">
          <form 
          action="../process/register-user.php" 
          method="POST" 
          class="p-4"
          onsubmit="return validate_registration_form()"
          >
              <fieldset class="p-5">
                  <legend>Personal Information</legend>
                  <div class="mb-3">
                      <label for="fullname">Full Name:</label>
                      <input 
                      type="text" 
                      id="fullname" 
                      name="fullname" 
                      class="form-control" 
                      onkeypress="clearErrorMessage('fullname_error')"
                      >
                      <div>
                          <span id="fullname_error" class="text-danger"></span>
                      </div>
                  </div>
                  
                  <div class="mb-3">
                      <label for="email">Email:</label>
                      <input type="email" id="email" name="email" class="form-control">
                  </div>

                  <div class="mb-3">
                      <label for="password">Password:</label>
                      <input type="password" id="password" name="password" class="form-control">
                  </div>
                  <div class="mb-3">
                      <label for="confirm_password">Confirm Password:</label>
                      <input type="password" id="confirm_password" name="confirm_password" class="form-control">  
                  </div>
                  <div class="mb-3">
                      <label for="phone">Phone Number:</label>
                      <input type="text" id="phone" name="phone" class="form-control">
                  </div>
                                  
                  <div class="mb-3">
                      <label for="dob">Date of Birth:</label>
                      <input type="date" id="dob" name="dob" class="form-control">
                  </div>
                  <div class="mb-3">
                      <label for="gender">Gender:</label>
                      <input type="radio" id="gender_male" name="gender" value="male"> Male
                      <input type="radio" id="gender_female" name="gender" value="female"> Female
                  </div>
                  <div class="mb-3">
                      <label for="qualification">Qualification:</label>
                      <input type="checkbox" id="qualification_bachelor" name="qualification[]" value="bachelor"> Bachelor
                      <input type="checkbox" id="qualification_master" name="qualification[]" value="master"> Master
                  </div>
                  
                   <div class="mb-3">
                      <label for="address">Address:</label>
                      <input type="text" id="address" name="address" class="form-control">
                  </div>
                 <div class="mb-3">
                  <label for="country">Country:</label>
                  <select id="country" name="country" class="form-control">
                      <option value="usa">USA</option>
                      <option value="canada">Canada</option>
                      <option value="uk">UK</option>
                      <option value="australia">Australia</option>
                  </select>
                  </div>

                  <div class="mb-3">
                      <label for="zip">Zip Code:</label>
                      <input type="text" id="zip" name="zip" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label>Photo:</label>
                    <input type="file" name="photo" id="photo" class="form-control">
                  </div>
                  <div class="mb-3">
                      <button type="submit" class="btn btn-primary w-100">Register</button>
                      <button type="reset" class="btn btn-secondary w-100 mt-2">Reset</button>
                  </div>
              </fieldset>
          </form>
     </div>
  </div>
  <?php include '../includes/scripts.php'; ?>

</body>
</html>