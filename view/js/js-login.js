$(document).on("click","#btn_ingresar",function() {
    var data = $(".signin-form").serialize();
    $.ajax({
        url: "../../../controller/login/sign_in/validate.php",
        type: "POST",
        data:data,
        success: function(data){
            if(data=="true"){
                window.location.href="../../../index.php";
            }
            else if (data=="false") {
                alert("Credenciales incorrectas");

                return false;
            }
            else if(data=="false_datos"){
                toastr.error("Ingrese los sus credenciales");
                return false;
            }
        }
    })
})