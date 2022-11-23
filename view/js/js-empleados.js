

$(document).on("click" , ".new-modal-empleado" , function(){
    var id = $(this).data("id");
    var url = "controller/empleados/create.php?id="+id;
    $.get(url,function(data){
        $("#form_empleado").empty();
        $("#form_empleado").append(data);
    })
    $("#modal-form-empleado").modal("show");
})
function list_empleados(){
    $.ajax({
        url: "controller/empleados/list.php",
    }).done(function(data){
        $(".table-empleado").empty();
        $(".table-empleado").append(data);
    })
}


