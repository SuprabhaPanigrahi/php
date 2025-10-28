function validate_registration_form() {
  // alert("Registration form submitted!");
  
   
  //let fullname = document.forms[0]['fullname'].value;
  // let fullname = document.getElementById('fullname');
  //let fullname = document.querySelector('#fullname').value;
  //let fullname = document.querySelector('input[name="fullname"]').value;

  //1. Blank Field Validation
  // a. Full Name cannot be blank
    // if(fullname.value==""){
    //   //alert("Full Name cannot be blank");
    //   // Swal.fire({
    //   //   icon: 'error',
    //   //   title: 'Oops...',
    //   //   text: 'Full Name cannot be blank',
    //   //   didOpen: () => {
    //   //      if (fullname) {
    //   //           fullname.focus();
    //   //       }
    //   //   }
    //   // });
      
    //   // fullname.classList.add('error-input');
    //   // fullname.setAttribute('placeholder', 'Full Name cannot be blank');
    //   document.getElementById('fullname_error').innerText = "Full Name cannot be blank";
    //   return false;
    // }
    return blankValidation('fullname', 'fullname_error', 'Full Name');
        //b. Full Name must be alphabetic
    let regex = /^[A-Za-z\s]+$/;
    
    if(!regex.test(fullname.value)){
      document.getElementById('fullname_error').innerText = "Full Name must be alphabetic";
      document.getElementById('fullname').focus();
      return false;
    }
    //c. Full Name must be at least 3 characters and at most 30 characters
    if(fullname.value.length < 3 || fullname.value.length > 30){
      document.getElementById('fullname_error').innerText = "Full Name must be at least 3 characters and at most 30 characters";
      fullname.focus();
      return false;
    }
    
    
    return true;
}

function clearErrorMessage(elementId) {
  
  document.getElementById(elementId).innerText = "";
}

function blankValidation(fieldId, errorElementId, fieldName) {
  let field = document.getElementById(fieldId);
  if (field.value.trim() === "") {
    document.getElementById(errorElementId).innerText = fieldName + " cannot be blank";
    field.focus();
    return false;
  }
  return true;
}