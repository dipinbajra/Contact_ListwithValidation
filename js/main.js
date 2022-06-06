// function returnToPreviousPage(e) {
//     e.preventDefault();


// }

// const validateAllEmail = (email) => {
//     return String(email)
//         .toLowerCase()
//         .match(
//             /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
//         );

// }


// function validateEmail(inputText) {
//     if( !validateAllEmail(inputText.value)) {
//         alert("You have entered an invalid email address!");
//         return false;
//     }

//     return true;

// }
// jQuery.validator.setDefaults({
//     debug: true,
//     success: "valid"});
// rules: {
//     field: {
//       required: true,
//       step: 10
//     }
//   }
// });

// const validatePhoneNumber=(phone)=>{
//   return Number(phone)
//   .match( /^\d{10}$/);
// }


// function phonenumber(inputText)
// {
  
//   if(!validatePhoneNumber(inputText.value))
//   {
//     alert("Number must be of 10 digits");
//     return false;
//     }
  
       
//       else
//       {
//         return true;
//           }
       
        
// }




$(document).ready(function () {
    $("#form1").validate();
  });






