function list_profesores(){
    $.ajax({
        url: "controller/profesores/list.php",
    }).done(function(data){
        $(".table-profesores").empty();
        $(".table-profesores").append(data);
    })
}