function list_profesores(){
    $.ajax({
        url: "controller/profesores/list.php",
    }).done(function(data){
        $(".table-profesores").empty();
        $(".table-profesores").append(data);
    })
}
$(document).on("click",".new-modal-profesor",function(){
    var id = $(this).data("id");
    var url = "controller/profesores/create.php?id="+id;
    $.get(url,function(data){
        $("#form_profesores").empty();
        $("#form_profesores").append(data);
    })
    $("#modal-form-profesores").modal("show");
})
$(document).on("click","#btn_save",function(){
    var data = $("#form_profesores").serialize();
    $.ajax({
        url: 'controller/profesores/accion.php',
        type: 'POST',
        data: data,
        success: function (data) {
            if(data=="true"){
                list_profesores();
                toastr.success("Datos guardados correctamente");
                $('#modal-form-profesores').modal('hide');
            }else{
                toastr.error("Hubo un error");
                list_profesores();
            }
        }
    })
})