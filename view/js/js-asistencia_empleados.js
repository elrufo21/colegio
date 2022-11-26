function list_asistencia_empleados(){
    $.ajax({
        url: "controller/asistencia_empleado/list.php",
    }).done(function(data){
        $(".table-asistencia_empleado").empty();
        $(".table-asistencia_empleado").append(data);
    })
}
$(document).on("click" , ".new-modal-asistencia_empleado" , function(){
    var id = $(this).data("id");
    var url = "controller/asistencia_empleado/create.php?id="+id;
    $.get(url,function(data){
        $("#form_asistencia_empleado").empty();
        $("#form_asistencia_empleado").append(data);
    })
    $("#modal-form-asistencia_empleado").modal("show");
})