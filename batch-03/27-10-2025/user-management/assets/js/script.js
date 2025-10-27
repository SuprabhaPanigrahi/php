function validate_registration_form() {
  // alert("Registration form submitted!");
  
   
  //let fullname = document.forms[0]['fullname'].value;
  let fullname = document.getElementById('fullname').value;
  //let fullname = document.querySelector('#fullname').value;
  //let fullname = document.querySelector('input[name="fullname"]').value;

  //1. Blank Field Validation
  // a. Full Name cannot be blank
    if(fullname==""){
      //alert("Full Name cannot be blank");
      document.getElementById('fullname').focus();
      document.getElementById('fullname_error').innerText = "Full Name cannot be blank";
      return false;
    }
    //b. Full Name must be alphabetic
    let regex = /^[A-Za-z\s]+$/;
    if(!regex.test(fullname)){
      document.getElementById('fullname').focus();
      document.getElementById('fullname_error').innerText = "Full Name must be alphabetic";
      return false;
    }
    return true;
}

function clearErrorMessage(elementId) {
  
  document.getElementById(elementId).innerText = "";
}