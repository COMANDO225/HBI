<?php require 'views/parte_superior.php';?>


<!-- INICIO DEL CONTENIDO PRINCIPAL -->
<div class="respuesta"></div>
<h1 class="h1 mb-4 text-gray-800">Noticias</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3" style="display: flex; justify-content: space-between; align-items: center;">
        <h6 class="m-0 font-weight-bold text-primary">Lista de Noticias</h6>
        <button id="btnnoticia" class="btn btn-primary "><i class="fas fa-plus"></i><span class="mx-2">Nueva Noticia</span></button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="tablaNoticias" class="table table-bordered table-hover" width="100%" cellspacing="0">
                <thead>
                    <tr style="text-transform: capitalize;">
                        <th>id</th>
                        <th>titulo</th>
                        <th>fecha</th>
                        <th>resumen</th>
                        <th>Descripción</th>
                        <th>imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<!-- FIN DEL CONTENDIO PRINCIPAL -->

<!-- Modal -->
<div class="modal fade " id="modalNOTICIAS" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog .modal-noticia" style="max-width: 1121px;">
        <div class="modal-content">
            <div class="modal-header text-white">
                <h4 class="modal-title h3" id="exampleModalLabel"></h4>
                <button type="button" class="btn-close close" data-dismiss="modal" aria-label="Close">
                    <span class="text-white" aria-hidden="true">×</span>
                </button>
            </div>
            <form id="formNoticias" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="titulo">Titulo de la Noticia</label>
                        <input type="text" id="titulo" name="titulo" class="form-control" placeholder="">
                    </div>
                    <div class="form-row" style="height: 80px; padding-bottom: 1rem;">
                        <div class="form-group col-md-4">
                            <label for="fecha">Fecha</label>
                            <input type="date" id="fecha" name="fecha" class="form-control">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="imagen">Imagen</label>
                            <div class="input-group mb-3">
                                <input type="file" id="noticia_image" name="noticia_image"" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="imagen">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-image"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="resumen">Resumen</label>
                        <textarea type="text" id="resumen" name="resumen" class="form-control" placeholder="Breve Resumen de la noticia..." rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Descripción</label>
                        <textarea name="descripcionNoticia" id="descripcionNoticia" class="form-control"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <span id="noticia_uploaded_image" class="d-flex p-0"></span>
                        <small id="passwordHelpBlock" class="form-text text-muted">
                            Formatos permitidos PNG / JPG / JPEG con un peso maximo de 5MB.
                        </small>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="noticia_id" id="noticia_id"/>
					<input type="hidden" name="operation_noticia" id="operation_noticia"/>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="submit" name="btnGuardarNoticia" id="btnGuardarNoticia" class="btn btn-success" value="AgregarNoticia">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Fin Modal -->
<?php require 'views/parte_inferior.php';?>