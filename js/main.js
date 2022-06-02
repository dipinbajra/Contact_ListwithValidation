function returnToPreviousPage(){
    window.history.back();
    e.preventDefault();
}



function validateEmail(inputText)

{
var mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.value!== mailFormat)
{
    alert("You have entered an invalid email address!");

    returnToPreviousPage();

    return false;
}
else{

alert("validation pass");
document.form1.email
return true;

}
}




