$(document).ready(function () {
  $("#btnnuevo").click(function () {
    // Se reinicia el form cada que hace en el boton de agregar
    $("#formProductos")[0].reset();
    // $("#formProductos").trigger("reset");
    // Agregar titulo de nuevo producto
    $(".modal-title").text("Nuevo Producto");
    // Cambia el color del cabezal del modal de agregar producto
    $(".modal-header").css("background-color", "var(--primary)");
    // Al dark click en agregar producto el modal se mostrará
    $("#modalCRUD").modal("show");
    // el input tipo submit tomara valor de agregar
    $("#btnGuardar").val("Agregar");
    // el input hidde tomara valor de agregar
    $("#operation").val("Agregar");
    // El span de imagen estara vacio
    $("#producto_uploaded_image").html("");
  });

  var dataTable = $("#tablaProductos").DataTable({
    serverSide: true,
    order: [],
    ajax: {
      // url:'../database/traerProducto.php',
      url: "../dashboard/traerProducto.php",
      type: "POST",
    },
    language: {
      sProcessing: "Procesando...",
      sLengthMenu: "Mostrar _MENU_ productos",
      sZeroRecords: "No se encontraron resultados",
      sEmptyTable: "Ningún dato disponible en esta tabla",
      sInfo:
        "Mostrando productos del _START_ al _END_ de un total de _TOTAL_ productos",
      sInfoEmpty: "Mostrando productos del 0 al 0 de un total de 0 productos",
      sInfoFiltered: "(filtrado de un total de _MAX_ productos)",
      sSearch: "Buscar:",
      sInfoThousands: ",",
      sLoadingRecords: "Cargando...",
      oPaginate: {
        sFirst: "Primero",
        sLast: "Último",
        sNext: "Siguiente",
        sPrevious: "Anterior",
      },
      oAria: {
        sSortAscending:
          ": Activar para ordenar la columna de manera ascendente",
        sSortDescending:
          ": Activar para ordenar la columna de manera descendente",
      },
      buttons: {
        copy: "Copiar",
        colvis: "Visibilidad",
      },
    },
  });

  $(document).on("submit", "#formProductos", function (event) {
    event.preventDefault();
    var nombre = $("#nombre").val();
    var subnombre = $("#subnombre").val();
    var iconpais = $("#iconpais").val();
    var procedencia = $("#procedencia").val();
    var fabricante = $("#fabricante").val();
    var aplicacion = $("#aplicacion").val();
    var valores = $("#valores").val();
    var descripcion = $("#descripcion").val();
    var extension = $("#producto_image").val().split(".").pop().toLowerCase();
    if (extension != "") {
      if (jQuery.inArray(extension, ["gif", "png", "jpg", "jpeg"]) == -1) {
        alert("El archivo no es una imagen valida");
        $("#producto_image").val("");
        return false;
      }
    }
    if (
      nombre != "" &&
      subnombre != "" &&
      iconpais != "" &&
      procedencia != "" &&
      fabricante != "" &&
      aplicacion != "" &&
      valores != "" &&
      descripcion != ""
    ) {
      $.ajax({
        // url:"../database/insertProducto.php",
        url: "../dashboard/insertProducto.php",
        method: "POST",
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function (data) {
          alert(data);
          $("#formProductos")[0].reset();
          $("#modalCRUD").modal("hide");
          dataTable.ajax.reload();
        },
      });
    } else {
      alert("Todos los campos son requeridos");
    }
  });

  // ----------------------------------------------------------
  // ----------------  EDITAR USUARIOOOO ----------------------
  // ----------------------------------------------------------
  $(document).on("click", ".update", function () {
    var producto_id = $(this).attr("id");
    $.ajax({
      // url:"../database/traerProducto_Solo.php",
      url: "../dashboard/traerProducto_Solo.php",
      method: "POST",
      data: { producto_id: producto_id },
      dataType: "json",
      success: function (data) {
        $("#modalCRUD").modal("show");

        $("#nombre").val(data.nombre);
        $("#subnombre").val(data.subnombre);
        $("#iconpais").val(data.iconpais);
        $("#procedencia").val(data.procedencia);
        $("#fabricante").val(data.fabricante);
        $("#aplicacion").val(data.aplicacion);
        $("#valores").val(data.valores);
        $("#descripcion").val(data.descripcion);

        $(".modal-title").text("Editar Producto");
        $(".modal-header").css("background-color", "var(--warning)");
        $("#producto_id").val(producto_id);
        $("#producto_uploaded_image").html(data.producto_image);
        $("#btnGuardar").val("Editar");
        $("#operation").val("Editar");
      },
    });
  });

  // ----------------------------------------------------------
  // ------------------ ELIMINAR USUARIO ----------------------
  // ----------------------------------------------------------

  $(document).on("click", ".delete", function () {
    var producto_id = $(this).attr("id");
    if (confirm("¿Estás seguro de que quieres eliminar esto?")) {
      $.ajax({
        // url:"../database/deleteProducto.php",
        url: "../dashboard/deleteProducto.php",
        method: "POST",
        data: { producto_id: producto_id },
        success: function (data) {
          alert(data);
          dataTable.ajax.reload();
        },
      });
    } else {
      return false;
    }
  });


// &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%&&
// ------------------ PROPIEDADES DE NOTICIAS ------------------
// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%&&
// &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
  $("#btnnoticia").click(function () {
    // Se reinicia el form cada que hace en el boton de agregar
    $("#formNoticias")[0].reset();
    // $("#formProductos").trigger("reset");
    // Agregar titulo de nuevo producto
    $(".modal-title").text("Nueva Noticia");
    // Cambia el color del cabezal del modal de agregar producto
    $(".modal-header").css("background-color", "var(--primary)");
    // Al dark click en agregar producto el modal se mostrará
    $("#modalNOTICIAS").modal("show");
    // el input tipo submit tomara valor de agregar
    $("#btnGuardarNoticia").val("AgregarNoticia");
    // el input hidde tomara valor de agregar
    $("#operation_noticia").val("AgregarNoticia");
    // El span de imagen estara vacio
    $("#noticia_uploaded_image").html("");
  });

  var dataTable = $("#tablaNoticias").DataTable({
    serverSide: true,
    order: [],
    ajax: {
      // url:'../database/traerProducto.php',
      url: "../dashboard/traerNoticia.php",
      type: "POST",
    },
    language: {
      sProcessing: "Procesando...",
      sLengthMenu: "Mostrar _MENU_ productos",
      sZeroRecords: "No se encontraron resultados",
      sEmptyTable: "Ningún dato disponible en esta tabla",
      sInfo:
        "Mostrando productos del _START_ al _END_ de un total de _TOTAL_ productos",
      sInfoEmpty: "Mostrando productos del 0 al 0 de un total de 0 productos",
      sInfoFiltered: "(filtrado de un total de _MAX_ productos)",
      sSearch: "Buscar:",
      sInfoThousands: ",",
      sLoadingRecords: "Cargando...",
      oPaginate: {
        sFirst: "Primero",
        sLast: "Último",
        sNext: "Siguiente",
        sPrevious: "Anterior",
      },
      oAria: {
        sSortAscending:
          ": Activar para ordenar la columna de manera ascendente",
        sSortDescending:
          ": Activar para ordenar la columna de manera descendente",
      },
      buttons: {
        copy: "Copiar",
        colvis: "Visibilidad",
      },
    },
  });

  $(document).on("submit", "#formNoticias", function (event) {
    event.preventDefault();
    var titulo = $("#titulo").val();
    var fecha = $("#fecha").val();
    var resumen = $("#resumen").val();
    var descripcionNoticia = $("#descripcionNoticia").val();
    var extension = $("#noticia_image").val().split(".").pop().toLowerCase();
    if (extension != "") {
      if (jQuery.inArray(extension, ["gif", "png", "jpg", "jpeg"]) == -1) {
        alert("El archivo no es una imagen valida");
        $("#noticia_image").val("");
        return false;
      }
    }
    if (
      titulo != "" &&
      fecha != "" &&
      resumen != "" &&
      descripcionNoticia != ""
    ) {
      $.ajax({
        // url:"../database/insertProducto.php",
        url: "../dashboard/insertNoticia.php",
        method: "POST",
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function (data) {
          alert(data);
          $("#formNoticias")[0].reset();
          $("#modalNOTICIAS").modal("hide");
          dataTable.ajax.reload();
        },
      });
    } else {
      alert("Todos los campos son requeridos");
    }
  });

  $(document).on("click", ".updateNoticia", function () {
    var noticia_id = $(this).attr("id");
    $.ajax({
      url: "../dashboard/traerNoticia_Solo.php",
      method: "POST",
      data: { noticia_id: noticia_id },
      dataType: "json",
      success: function (data) {
        $("#modalNOTICIAS").modal("show");

        $("#titulo").val(data.titulo);
        $("#fecha").val(data.fecha);
        $("#resumen").val(data.resumen);
        $("#descripcionNoticia").val(data.descripcionNoticia);

        $(".modal-title").text("Editar Noticia");
        $(".modal-header").css("background-color", "var(--warning)");
        $("#noticia_id").val(noticia_id);
        $("#noticia_uploaded_image").html(data.noticia_image);
        $("#btnGuardarNoticia").val("Editar Noticia");
        $("#operation_noticia").val("EditarNoticia");
      },
    });
  });

  $(document).on("click", ".deleteNoticia", function () {
    var noticia_id = $(this).attr("id");
    if (confirm("¿Estás seguro de que quieres eliminar esta noticia?")) {
      $.ajax({
        // url:"../database/deleteProducto.php",
        url: "../dashboard/deleteNoticia.php",
        method: "POST",
        data: { noticia_id: noticia_id },
        success: function (data) {
          alert(data);
          dataTable.ajax.reload();
        },
      });
    } else {
      return false;
    }
  });

});
