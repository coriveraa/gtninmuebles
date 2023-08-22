
    let totalPaginas = Number ($(".pagination").attr("totalPaginas"));
    let paginaActual = Number ($(".pagination").attr("paginaActual"));
    let rutaActual = $("#rutaActual").val();
    let rutaPagina = $(".pagination").attr("rutaPagina");

    if($(".pagination").length != 0){


    $(function () {
        window.pagObj = $('#pagination').twbsPagination({
            totalPages: totalPaginas,
            startPage:paginaActual,
            visiblePages: 3,
            first:"Primero",
            last:"Ultimo",
            prev:"<",
            next:">",
           
            onPageClick: function (event, page) {
                console.info(page + ' (from options)');
            }
        }).on('page', function (event, page) {
            // console.info(page + ' (from event listening)');
            if(rutaPagina != ""){

                window.location = rutaActual+rutaPagina+"/"+page;
    
            }else{
    
                window.location = rutaActual+page;
            }
        });
    })
};
