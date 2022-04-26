<?php
include('vista/encabezado.php');
?>
<main>
  <div class="container-fluid" style="margin-bottom: 5%;">
    <div class="row">
      <div style="display: flex;
       flex-direction: column;
         align-items: center; margin-top: 3%; margin-bottom: 5%;">
        <h2>Bienvenido a la sección de servicios</h2>
        <p class="lead">
          En <strong>IENEL SAS</strong> contamos con un equipo experto en diseño y contrucción dispuesto a asesorar sus necesitades.
        </p>
        <p class="lead">
          Por eso le ofrecemos nuestra variedad de servicios, todo lo que usted necesita y desea, encuentrelo aquí.
        </p>
        <p class="mb-0">
          Contáctenos para tener el gusto de atenderlo.
        </p>
        <!--Botón solicitud de cotización-->
        <p>Si desea solicitar una cotización oprima "cotización".</p>
        <?php
        if ($tipo_usuario == "") {
        ?>
          <a href="login.php" class="btn btn-light">Cotización</a>
        <?php
        } else {
        ?>
          <a href="#addEmployeeModal" class="btn btn-light" data-toggle="modal"> <span>Cotización</span></a>

        <?php
        }
        ?>

      </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action="solicitud-servicios.php" method="POST">
            <div class="modal-header">
              <h4 class="modal-title">Cotizar</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <input class="form-control" id="idUsuario" type="hidden" value="<?php echo $id; ?>" name="idUsuario" />
              <div class="form-group">

                <label for="tipoUsuario">Servicio deseado</label>
                <select class="form-control" name="servicio" id="servicio">
                  <option value="iluminacion" id="1">Iluminación</option>
                  <option value="Redes de media y baja tensión" id="2">Redes de media y baja tensión</option>
                  <option value="Sistema puesta a tierra" id="3">Sistema puesta a tierra</option>
                  <option value="Sistema protección contra rayos" id="4">Sistema protección contra rayos</option>
                  <option value="Medidas de resistencia y resistividad" id="5">Medidas de resistencia y resistividad</option>
                  <option value="Instalacíones internas" id="6">Instalacíones internas</option>
                  <option value="Calidad de la Energía" id="7">Redes de media y baja tensión</option>
                </select>
              </div>
              <div class="form-group">
                <label>Detalle</label>
                <textarea class="form-control" name="detalle" required></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
              <input type="submit" class="btn btn-success" value="Cotizar">
            </div>
          </form>
        </div>
      </div>
    </div>

    <div id="contenido-servicio" style="margin-top: 5%;">
      <h3>Nuestros Servicios</h3>
      <p class="mb-0">Conozca aquí los detalles infromativos de nuestros servicios.</p>
      <!--Servicio #1-->
      <div class="row" style="margin-bottom: 5%;">

        <div class="col-sm-4" style="padding: 10px">
          <h3>
            Sistema puesta a tierra</h3>
          <img src="assets/sistemaATierra.jpg" width="65%" height="300px" style="object-fit: cover; border-radius: 10px; margin-top: 3%;" alt="" />
        </div>
        <br />

        <div class="col-sm-8" style="padding: 10px;">
          <br />
          <br />
          <p class="lead">
            Diseñamos, construimos y realizamos el mantenimiento de su sistema puesta a tierra. Un apropiado sistema de puesta a tierra brinda seguridad y protección a las instalaciones y sus usuarios frente a fallas eléctricas.
            <br>
          </p>

          <hr>
        </div>
      </div>
      <!--Servicio #2-->
      <div class="row" style="margin-bottom: 5%;">

        <div class="col-sm-4" style="padding: 10px">
          <a href="" id="sistemaPuestaTierra"></a>
          <h3>
            Sistema de protección contra rayos
          </h3>
          <img src="assets/proteccionRayos.png" width="70%" style="margin-top: 3%;" />
        </div>
        <br />

        <div class="col-sm-8" style="padding: 10px;">
          <br />
          <br />
          <p class="lead">
            Realizamos diseños e implementamos los sistemas de protección contra descargas atmosféricas (rayos) de acuerdo a la normatividad vigente NTC 4552.
          </p>
          <hr>
        </div>
      </div>
      <!--Servicio #3-->
      <div class="row" style="margin-bottom: 5%;">

        <div class="col-sm-4" style="padding: 10px; ">

          <h3>
            Instalaciones internas
          </h3>
          <img src="assets/instalacionesInternas.png" width="70%" style="margin-top: 3%;" />
        </div>
        <br />

        <div class="col-sm-8" style="padding: 10px;">
          <br />
          <br />
          <p class="lead">
            Diseñamos y construimos redes eléctricas, de voz y datos , sistemas de automatización y domótica, para instalaciones de uso final en el sector residencial, comercial e industrial. Buscamos soluciones viables, óptimas y a la medida de sus necesidades siguiendo los parámetros establecidos en la normatividad eléctrica vigente, RETIE Y RETILAP. Realizamos mantenimiento preventivo y correctivo en los sistemas eléctricos en general.
          </p>
          <hr>
        </div>
      </div>
      <!--Servicio #4-->
      <div class="row" style="margin-bottom: 5%;">

        <div class="col-sm-4" style="padding: 10px; ">

          <h3>
            Redes de media y baja tensión
          </h3>
          <img src="assets/poste-electrico.png" width="65%" style="margin-top: 3%;" />
        </div>
        <br />

        <div class="col-sm-8" style="padding: 10px;">
          <br />
          <br />
          <p class="lead">
            Ponemos a su disposición el conocimiento de nuestros profesionales para el diseño y construcción de redes eléctricas en baja y media tensión. Así como el trámite y aprobación de los proyectos ante el operador de red.
          </p>
          <hr>
        </div>
      </div>
      <!--Servicio #5-->
      <div class="row" style="margin-bottom: 5%;">

        <div class="col-sm-4" style="padding: 10px; ">

          <h3>
            Iluminación
          </h3>
          <img src="assets/iluminacion1.png" width="70%" style="margin-top: 3%;" />
        </div>
        <br />

        <div class="col-sm-8" style="padding: 10px;">
          <br />
          <br />
          <p class="lead">
            Para el cumplimiento del reglamento técnico de iluminación y alumbrado público RETILAP, nuestra compañía pone a su disposición los recursos necesarios para el diseño y la construcción de acuerdo a las necesidades de su proyecto.
          </p>
          <hr>
        </div>
      </div>
      <!--Servicio #6-->
      <div class="row" style="margin-bottom: 5%;">

        <div class="col-sm-4" style="padding: 10px; ">

          <h3>
            Medidas de resistencia y resistividad
          </h3>
          <img src="assets/medidor-de-electricidad.png" width="65%" style="margin-top: 3%;" />
        </div>
        <br />

        <div class="col-sm-8" style="padding: 10px;">
          <br />
          <br />
          <p class="lead">
            Contamos con los equipos y software necesarios para realizar la caracterización del terreno y/o la medición del sistema de puesta a tierra.
          </p>
          <hr>
        </div>
      </div>
      <!--Servicio #7-->
      <div class="row" style="margin-bottom: 5%;">

        <div class="col-sm-4" style="padding: 10px; ">

          <h3>
            Calidad de energía
          </h3>
          <img src="assets/baterias.png" width="65%" style="margin-top: 3%;" />
        </div>
        <br />

        <div class="col-sm-8" style="padding: 10px;">
          <br />
          <br />
          <p class="lead">
            La creciente demanda de cargas no lineales como equipos electrónicos, de cómputo e iluminación, incrementan las pérdidas de energía, las cuales se traducen en elevados costos de operación que se pueden reducir como resultado de la evaluación técnica realizada por nuestros profesionales.
          </p>
          <hr>
        </div>
      </div>
    </div>

</main>

<?php
include('vista/pie.php');
?>