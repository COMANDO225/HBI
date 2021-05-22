
<!-- // include_once '../database/conexion.php';
// $objeto = new Conexion();
// $conexion = $objeto->Conectar();
// $consulta = "SELECT id,nombre,subnombre,iconpais,procedencia,fabricante,aplicacion,valores,descripcion,image FROM productos";
// $resultado = $conexion->prepare($consulta);
// $resultado->execute();
// $data = $resultado->fetchAll(PDO::FETCH_ASSOC); -->

<?php require 'views/parte_superior.php';?>


<!-- INICIO DEL CONTENIDO PRINCIPAL -->
<div class="respuesta"></div>
<h1 class="h1 mb-4 text-gray-800">Productos</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3" style="display: flex; justify-content: space-between; align-items: center;">
        <h6 class="m-0 font-weight-bold text-primary">Lista de productos</h6>
        <button id="btnnuevo" class="btn btn-primary "><i class="fas fa-plus"></i><span class="mx-2">Nuevo Producto</span></button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="tablaProductos" class="table table-bordered table-hover" width="100%" cellspacing="0">
                <thead>
                    <tr style="text-transform: capitalize;">
                        <th>id</th>
                        <th>nombre</th>
                        <th>sub nombre</th>
                        <th>iconpais</th>
                        <th>procedencia</th>
                        <th>fabricante</th>
                        <th>aplicacion</th>
                        <th>valores</th>
                        <th>descripcion</th>
                        <th>imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <!-- <tbody>
                    <tr>
                        <td>id</td>
                        <td>nombre</td>
                        <td>subnombre</td>
                        <td>iconpais</td>
                        <td>procedencia</td>
                        <td>fabricante</td>
                        <td>aplicacion</td>
                        <td>valores</td>
                        <td>descripcion</td>
                        <td>imagen</td>
                        <td>
                            <div style='width: 130px;'>
                                <div class='d-flex flex-column' style='width: 110px; margin:auto'>
                                    <button type="button" name='watch' class='d-flex btn btn-success'>
                                        <i class='bi bi-eye-fill'></i>
                                        <span class='mx-2'>Ver</span>
                                    </button>
                                    <button type="button" name="update" class='d-flex btn btn-warning' style='margin: 2px 0;'>
                                        <i class='bi bi-pencil-fill'></i>
                                        <span class='mx-2'>Editar</span>    
                                    </button>
                                    <button type="button" name="delete" class='d-flex btn btn-danger'>
                                        <i class='bi bi-trash-fill'></i>
                                        <span class='mx-2'>Eliminar</span>
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody> -->
            </table>
        </div>
    </div>
</div>
<!-- FIN DEL CONTENDIO PRINCIPAL -->

<!-- Modal -->
<div class="modal fade " id="modalCRUD" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header text-white">
                <h4 class="modal-title h3" id="exampleModalLabel"></h4>
                <button type="button" class="btn-close close" data-dismiss="modal" aria-label="Close">
                    <span class="text-white" aria-hidden="true">×</span>
                </button>
            </div>
            <form id="formProductos" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Hidrobomba - Ejemplo">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="subnombre">Sub Nombre</label>
                            <input type="text" id="subnombre" name="subnombre" class="form-control" placeholder="Modelo LEP - Ejemplo">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="iconpais">Icono de País</label>
                            <select id="iconpais" name="iconpais" class="form-control" >
                                <option selected>ningun-icono...</option>
                                <option>abkhazia</option>
                                <option>afghanistan</option>
                                <option>aland-islands</option>
                                <option>albania</option>
                                <option>algeria</option>
                                <option>american-samoa</option>
                                <option>andorra</option>
                                <option>angola</option>
                                <option>anguilla</option>
                                <option>antigua-and-barbuda</option>
                                <option>argentina</option>
                                <option>armenia</option>
                                <option>aruba</option>
                                <option>australia</option>
                                <option>austria</option>
                                <option>azerbaijan</option>
                                <option>azores-islands</option>
                                <option>bahamas</option>
                                <option>bahrain</option>
                                <option>balearic-islands</option>
                                <option>bangladesh</option>
                                <option>barbados</option>
                                <option>basque-country</option>
                                <option>belarus</option>
                                <option>belgium</option>
                                <option>belize</option>
                                <option>benin</option>
                                <option>bermuda</option>
                                <option>bhutan</option>
                                <option>bolivia</option>
                                <option>bonaire</option>
                                <option>bosnia-and-herzegovina</option>
                                <option>botswana</option>
                                <option>brazil</option>
                                <option>british-columbia</option>
                                <option>british-indian-ocean-territory</option>
                                <option>british-virgin-islands</option>
                                <option>brunei</option>
                                <option>bulgaria</option>
                                <option>burkina-faso</option>
                                <option>burundi</option>
                                <option>cambodia</option>
                                <option>cameroon</option>
                                <option>canada</option>
                                <option>canary-islands</option>
                                <option>cape-verde</option>
                                <option>cayman-islands</option>
                                <option>central-african-republic</option>
                                <option>ceuta</option>
                                <option>chad</option>
                                <option>chile</option>
                                <option>china</option>
                                <option>christmas-island</option>
                                <option>cocos-island</option>
                                <option>colombia</option>
                                <option>comoros</option>
                                <option>cook-islands</option>
                                <option>corsica</option>
                                <option>costa-rica</option>
                                <option>croatia</option>
                                <option>cuba</option>
                                <option>curacao</option>
                                <option>czech-republic</option>
                                <option>democratic-republic-of-congo</option>
                                <option>denmark</option>
                                <option>djibouti</option>
                                <option>dominica</option>
                                <option>dominican-republic</option>
                                <option>east-timor</option>
                                <option>ecuador</option>
                                <option>egypt</option>
                                <option>el-salvador</option>
                                <option>england</option>
                                <option>equatorial-guinea</option>
                                <option>eritrea</option>
                                <option>estonia</option>
                                <option>ethiopia</option>
                                <option>european-union</option>
                                <option>falkland-islands</option>
                                <option>fiji</option>
                                <option>finland</option>
                                <option>france</option>
                                <option>french-polynesia</option>
                                <option>gabon</option>
                                <option>galapagos-islands</option>
                                <option>gambia</option>
                                <option>georgia</option>
                                <option>germany</option>
                                <option>ghana</option>
                                <option>gibraltar</option>
                                <option>greece</option>
                                <option>greenland</option>
                                <option>grenada</option>
                                <option>guam</option>
                                <option>guatemala</option>
                                <option>guernsey</option>
                                <option>guinea</option>
                                <option>guinea-bissau</option>
                                <option>haiti</option>
                                <option>hawaii</option>
                                <option>honduras</option>
                                <option>hong-kong</option>
                                <option>hungary</option>
                                <option>iceland</option>
                                <option>india</option>
                                <option>indonesia</option>
                                <option>iran</option>
                                <option>iraq</option>
                                <option>ireland</option>
                                <option>isle-of-man</option>
                                <option>israel</option>
                                <option>italy</option>
                                <option>ivory-coast</option>
                                <option>jamaica</option>
                                <option>japon</option>
                                <option>jersey</option>
                                <option>jordan</option>
                                <option>kazakhstan</option>
                                <option>kenya</option>
                                <option>kiribati</option>
                                <option>kosovo</option>
                                <option>kwait</option>
                                <option>kyrgyzstan</option>
                                <option>laos</option>
                                <option>latvia</option>
                                <option>lebanon</option>
                                <option>lesotho</option>
                                <option>liberia</option>
                                <option>libya</option>
                                <option>liechtenstein</option>
                                <option>lithuania</option>
                                <option>luxembourg</option>
                                <option>macao</option>
                                <option>madagascar</option>
                                <option>madeira</option>
                                <option>malasya</option>
                                <option>malawi</option>
                                <option>maldives</option>
                                <option>mali</option>
                                <option>malta</option>
                                <option>marshall-island</option>
                                <option>martinique</option>
                                <option>mauritania</option>
                                <option>mauritius</option>
                                <option>melilla</option>
                                <option>mexico</option>
                                <option>micronesia</option>
                                <option>moldova</option>
                                <option>monaco</option>
                                <option>mongolia</option>
                                <option>montenegro</option>
                                <option>montserrat</option>
                                <option>morocco</option>
                                <option>mozambique</option>
                                <option>myanmar</option>
                                <option>namibia</option>
                                <option>nato</option>
                                <option>nauru</option>
                                <option>nepal</option>
                                <option>netherlands</option>
                                <option>new-zealand</option>
                                <option>nicaragua</option>
                                <option>niger</option>
                                <option>nigeria</option>
                                <option>niue</option>
                                <option>norfolk-island</option>
                                <option>northern-cyprus</option>
                                <option>northern-marianas-islands</option>
                                <option>north-korea</option>
                                <option>norway</option>
                                <option>oman</option>
                                <option>ossetia</option>
                                <option>pakistan</option>
                                <option>palau</option>
                                <option>palestine</option>
                                <option>panama</option>
                                <option>papua-new-guinea</option>
                                <option>paraguay</option>
                                <option>peru</option>
                                <option>philippines</option>
                                <option>pitcairn-islands</option>
                                <option>poland</option>
                                <option>portugal</option>
                                <option>puerto-rico</option>
                                <option>qatar</option>
                                <option>rapa-nui</option>
                                <option>republic-of-macedonia</option>
                                <option>republic-of-the-congo</option>
                                <option>romania</option>
                                <option>russia</option>
                                <option>rwanda</option>
                                <option>saba-island</option>
                                <option>sahrawi-arab-democratic-republic</option>
                                <option>saint-kitts-and-nevis</option>
                                <option>samoa</option>
                                <option>san-marino</option>
                                <option>sao-tome-and-prince</option>
                                <option>sardinia</option>
                                <option>saudi-arabia</option>
                                <option>scotland</option>
                                <option>senegal</option>
                                <option>serbia</option>
                                <option>seychelles</option>
                                <option>sicily</option>
                                <option>sierra-leone</option>
                                <option>singapore</option>
                                <option>sint-eustatius</option>
                                <option>sint-maarten</option>
                                <option>slovakia</option>
                                <option>slovenia</option>
                                <option>solomon-islands</option>
                                <option>somalia</option>
                                <option>somaliland</option>
                                <option>south-africa</option>
                                <option>south-korea</option>
                                <option>south-sudan</option>
                                <option>spain</option>
                                <option>sri-lanka</option>
                                <option>st-barts</option>
                                <option>st-lucia</option>
                                <option>st-vincent-and-the-grenadines</option>
                                <option>sudan</option>
                                <option>suriname</option>
                                <option>swaziland</option>
                                <option>sweden</option>
                                <option>switzerland</option>
                                <option>syria</option>
                                <option>taiwan</option>
                                <option>tajikistan</option>
                                <option>tanzania</option>
                                <option>thailand</option>
                                <option>tibet</option>
                                <option>togo</option>
                                <option>tokelau</option>
                                <option>tonga</option>
                                <option>transnistria</option>
                                <option>trinidad-and-tobago</option>
                                <option>tunisia</option>
                                <option>turkey</option>
                                <option>turkmenistan</option>
                                <option>turks-and-caicos</option>
                                <option>tuvalu</option>
                                <option>tuvalu-1</option>
                                <option>uganda</option>
                                <option>ukraine</option>
                                <option>united-arab-emirates</option>
                                <option>united-kingdom</option>
                                <option>united-nations</option>
                                <option>uruguay</option>
                                <option>usa</option>
                                <option>uzbekistn</option>
                                <option>vanuatu</option>
                                <option>vatican-city</option>
                                <option>venezuela</option>
                                <option>vietnam</option>
                                <option>virgin-islands</option>
                                <option>wales</option>
                                <option>yemen</option>
                                <option>zambia</option>
                                <option>zimbabwe</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="procedencia">Procedencia - País</label>
                            <input type="text" id="procedencia" name="procedencia" class="form-control"  placeholder="EE.UU - Ejemplo">
                        </div>
                        <div class="form-group col-md-7">
                            <label for="fabricante">Fabricante</label>
                            <input type="text" id="fabricante" name="fabricante" class="form-control" placeholder="Leo - Ejemplo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="aplicacion">Aplicación</label>
                        <input type="text" id="aplicacion" name="aplicacion" class="form-control" placeholder="Aplicaciones del producto...">
                    </div>
                    <div class="form-group">
                        <label for="valores">Valores Adicionales</label>
                        <input type="text" id="valores" name="valores" class="form-control" placeholder="Valores extras a detallar...">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="Descripción del producto...">
                    </div>
                    <div class="form-group text-center">
                        <div class="input-group mb-3 text-center">
                            <!-- <input type="text" class="form-control" id="imagen" placeholder="imagen"> -->
                            <input type="file" id="producto_image" name="producto_image" class="form-control">
                            <label class="input-group-text" for="imagen"><i class="bi bi-image"></i></label>
                            
                        </div>
                        <span id="producto_uploaded_image" class="d-flex p-0"></span>
                        <small id="passwordHelpBlock" class="form-text text-muted mt-3">
                            Formatos permitidos PNG / JPG / JPEG con un peso maximo de 5MB.
                        </small>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="producto_id" id="producto_id"/>
					<input type="hidden" name="operation" id="operation" />
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="submit" name="btnGuardar" id="btnGuardar" class="btn btn-success" value="Agregar">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Fin Modal -->
<?php require 'views/parte_inferior.php';?>