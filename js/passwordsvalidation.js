var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");
  //received password value insert into variable
function validatePassword(){
	// if two password values are different, show alert passwords not match
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Пароли не совпадают");
  } else {
    confirm_password.setCustomValidity('');
  }
}
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;