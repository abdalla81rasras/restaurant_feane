var InputPassword = document.getElementById("InputPassword");
var ShowPassword = document.getElementById("ShowPassword");

ShowPassword.addEventListener("click" , function(){
    
    if(InputPassword.type == "password"){
        InputPassword.type = "text";
        ShowPassword.className = "fa fa-eye";
    }else{
        InputPassword.type = "password";
        ShowPassword.className = "fa fa-eye-slash";
    }
    
});