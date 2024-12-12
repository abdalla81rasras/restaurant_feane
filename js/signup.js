var InputPasswordS = document.getElementById("InputPasswordS");
var ShowPassword2 = document.getElementById("ShowPassword2");


ShowPassword2.addEventListener("click" , function(){

    if(InputPasswordS.type == "password"){
        InputPasswordS.type = "text";
        ShowPassword2.className = "fa fa-eye";
    }else{
        InputPasswordS.type = "password";
        ShowPassword2.className = "fa fa-eye-slash";
    }

});