<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="../assets/icons/book.ico" />
    <script src="../js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="../css/sweet-alert.css">
    <link rel="stylesheet" href="../css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="../js/modernizr.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../js/main.js"></script>
</head>
<body>
<?php
    include("../config/config.php");
    include("../acciones/acciones_adm.php");

    $empleados = obtenerEmpleados($conexion);
    $totalEmpleados = $empleados->num_rows;
    ?>

    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile nav-lateral-scroll">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                sistema bibliotecario
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset" style="padding: 10px 0; color:#fff;">
                <figure>
                    <img src="../assets/img/logo.png" alt="Biblioteca" class="img-responsive center-box" style="width:55%;">
                </figure>
                <p class="text-center" style="padding-top: 15px;">Sistema Bibliotecario</p>
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="../home_adm.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Listas <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="admin.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Listas de administradores</a></li>
                            <li><a href="adm_users.php"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>&nbsp;&nbsp;Listas de Usuario</a></li>
                            <li><a href="adm_rec.php"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Listas administrador de recursos</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Libros y catálogo <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="../autor/autor_añadir.php"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Autor</a></li>
                            <li><a href="../catalogo/nuevo_libro.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo libro</a></li>
                            <li><a href="../catalogo/catalogo_vista.php"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Catálogo</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-alarm zmdi-hc-fw"></i>&nbsp;&nbsp; Préstamos y reservaciones <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="../libros/administrador/libros_disponibles.php"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i>&nbsp;&nbsp;Libros desponibles</a></li>
                            <li>
                                <a href="../libros/administrador/libros_ocupados.php"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i>&nbsp;&nbsp;Libros Ocupados<span class="label label-danger pull-right label-mhover"></span></a>
                            </li>
                            <li>
                                <a href="../libros/administrador/libros_reservados.php"><i class="zmdi zmdi-timer zmdi-hc-fw"></i>&nbsp;&nbsp; Libros Reservaciones <span class="label label-danger pull-right label-mhover"></span></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="report.php"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes y estadísticas</a></li>
                    <li><a href="advancesettings.html"><i class="zmdi zmdi-wrench zmdi-hc-fw"></i>&nbsp;&nbsp; Configuraciones avanzadas</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <figure>
                   <img src="../assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                <span class="all-tittles">Administrador</span>
                </li>
                <li  class="tooltips-general exit-system-button" data-href="index.html" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                </li>
                <li  data-placement="bottom" title="Buscar libro">
                    <a href="searchbook.php"> <h2><i class="zmdi zmdi-search"></i></h2></a>
                </li>
                <li  class="tooltips-general btn-help" data-placement="bottom" title="Ayuda">
                    <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
                </li>
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
                <li class="desktop-menu-button hidden-xs" style="float: left !important;">
                    <i class="zmdi zmdi-swap"></i>
                </li>
            </ul>
        </nav>
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema bibliotecario <small>Listas de administradores</small></h1>
            </div>
        </div>
        <section class="full-reset text-center" style="padding: 40px 0;">
           <div class="table-responsive">
    <table class="table table-hover" id="table_empleados">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Contraseña</th>
                <th scope="col">CLAVE_ADM</th>

            </tr>
        </thead>
        <t>
            <?php
            foreach ($empleados as $empleado) { ?>
                <tr id="empleado_<?php echo $empleado['id_nombre']; ?>">
                    <th scope='row'><?php echo $empleado['id_nombre']; ?></th>
                    <td><?php echo $empleado['NOMBRE']; ?></td>
                    <td> <?php echo $empleado['CORREO']; ?></td>
                    <td><?php echo $empleado['CONTRASEÑA']; ?></td>
                    <td><?php echo $empleado['CLAVE_ADM']; ?></td>
                </tr>
            <?php } ?>
        </t body>
    </table>
</div>
        </section>
        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                </div>
                <div class="modal-body">
                Si tienes una duda específica, nuestro equipo de soporte está listo para ayudarte. Puedes contactarnos a través de Lexis@gmail.com.mx para obtener asistencia personalizada.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                </div>
            </div>
          </div>
        </div>
        <footer class="footer full-reset">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Acerca de</h4>
                        <p>
                        Esta biblioteca digital es un proyecto destinado a preservar y difundir el patrimonio cultural y académico. Los contenidos están disponibles para fines educativos y de investigación.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Desarrollador</h4>
                        <ul class="list-unstyled">
                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; Lexis <i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright full-reset all-tittles">© 2025 Lexis</div>
        </footer>
    </div>
</body>
</html>