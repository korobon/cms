//para ejecutar funciones al cargar pagina
document.addEventListener("DOMContentLoaded", function() {
        //efecto loading
        $('#body-container').removeClass('loader');
        $('#loader-container').hide();

        //configuration select2
        $('.select2-selection__rendered').removeAttr('title');

        //tiempo de visualizacion de alertas
        setTimeout(function() {$(".alert").fadeOut();}, 6000);
});

//ejecuta el cambio de idioma
$(document).on('click', '.language', (function() {
    var lang = $(this).attr('id');
    var urlLang = $(this).data('url'); 
    //alert(urlLang+lang);
    $.post(urlLang,{'lang':lang}, function(data){
            location.reload();
    });
}));

//permite cargar el contenido de una notificacion en un modal desde el layout
$(document).on('click', '.link-noti', (function() {
    //alert('holas');
    $.get(
        $(this).data('url'),
        function (data) {
            $('#modal-noti .modal-body').html(data);
            $('#modal-noti').modal();
        }
    );
}));


//para la carga de las vistas create de cualquier modulo
$(document).on('click', '#activity-index-link-new', (function() {
    $(".modal .modal-body").html("");
    $.get(
        $(this).data('url'),
        function (data) {
            $('#body-container').addClass('loader');
            $('#loader-container').show();
            $('#modal-new .modal-body').html(data);
            html5tooltips.refresh();
            $('.selectdropdownlist').select2();
            $('#modal-new').modal();
        }
    );
}));

//para cargar las vistas view de cualquier modulo
$(document).on('click', '.activity_index_link_view', (function() {
    $(".modal .modal-body").html("");
    $.get(
        $(this).data('url'),
        function (data) {
            $('#body-container').addClass('loader');
            $('#loader-container').show();
            $('#modal-view .modal-body').html(data);
            $('#modal-view').modal();
        }
    );
}));

//para cargar las vistas update de cualquier modulo
$(document).on('click', '.activity_index_link_edit', (function() {
    $(".modal .modal-body").html("");
    $.get(
        $(this).data('url'),
        function (data) {
            $('#body-container').addClass('loader');
            $('#loader-container').show();
            $('#modal-edit .modal-body').html(data);
            html5tooltips.refresh();
            $('.selectdropdownlist').select2();
            $('#modal-edit').modal();
        }
    );
}));


//para quitar efecto loading 
$('.modal').on('shown.bs.modal', function (e) {
    $('#body-container').removeClass('loader');
    $('#loader-container').hide();
    $('.select2-selection__rendered').removeAttr('title');
})
