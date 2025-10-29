function validate_registration_form() {
    if (!validateFullName()) {
        return false;
    }
    if (!validateEmail()) {
        return false;
    }
    return true;
}


function clearErrorMessage(elementId) {
  
  document.getElementById(elementId).innerText = "";
}
function validateFullName() {
  if (!blankValidation('fullname', 'fullname_error', 'Full Name')) {
    return false;
  }
  if (!allowOnlyAlphabets('fullname', 'fullname_error', 'Full Name')) {
    return false;
  }
  if (!allowSpecificRangeLength('fullname', 'fullname_error', 'Full Name', 3, 30)) {
    return false;
  }
  return true;
}
function validateEmail() {
  if (!blankValidation('email', 'email_error', 'Email')) {
    return false;
  }
  if (!validateEmailFormat('email', 'email_error', 'Email')) {
    return false;
  }
  return true;
}
function validatePassword() {
  if (!blankValidation('password', 'password_error', 'Password')) {
    return false;
  } 
  if (!validatePasswordStrength('password', 'password_error', 'Password')) {
    return false;
  }
}