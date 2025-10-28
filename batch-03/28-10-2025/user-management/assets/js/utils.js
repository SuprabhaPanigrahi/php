function blankValidation(fieldId, errorElementId, fieldName) {
  let field = document.getElementById(fieldId);
  if (field.value.trim() === "") {
    document.getElementById(errorElementId).innerText = fieldName + " cannot be blank";
    field.focus();
    return false;
  }
  return true;
}

function allowOnlyAlphabets(fieldId, errorElementId, fieldName) {
  let regex = /^[A-Za-z\s]+$/;
  let field = document.getElementById(fieldId);
  if (!regex.test(field.value)) {
    document.getElementById(errorElementId).innerText = fieldName + " must be alphabetic";
    field.focus();
    return false;
  }
  return true;
}

function allowSpecificRangeLength(fieldId, errorElementId, fieldName, minLength, maxLength) {
  let field = document.getElementById(fieldId); 
  if (field.value.length < minLength || field.value.length > maxLength) {
    document.getElementById(errorElementId).innerText = fieldName + " must be at least " + minLength + " characters and at most " + maxLength + " characters";
    field.focus();
    return false;
  }
  return true;
}

function validateEmailFormat(fieldId, errorElementId, fieldName) {
  alert("validateEmailFormat called");
  let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  let field = document.getElementById(fieldId);
  alert(field.value);
  alert(regex.test(field.value));
  if (!regex.test(field.value)) {
    document.getElementById(errorElementId).innerText = "Invalid " + fieldName + " format";
    field.focus();
    return false;
  }
  return true;
}

function validatePasswordStrength(fieldId, errorElementId, fieldName) {
  let regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
  let field = document.getElementById(fieldId); 
  if (!regex.test(field.value)) {
    document.getElementById(errorElementId).innerText = fieldName + " must be at least 8 characters long and include uppercase, lowercase, number, and special character";
    field.focus();
    return false;
  }
  return true;
}

