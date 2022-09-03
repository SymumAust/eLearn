const image_input= document.querySelector("#image_input");
var uploaded_image= "";

image_input.addEventListener("change" ,function(){
    const reader = new FileReader();
    reader.addEventListener("load",()=>{
        uploaded_image = reader.result;
        document.querySelector("#display_image").style.backgroundImage = 'url(${uploaded_image})'
    })
    reader.readAsDefault(this.files[0]);
})




var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;