<?php
include('vista/encabezado.php');
?>
<main>
  <div class="container-fluid">
    <div style="margin-bottom: 10%">
      <img src="assets/portada.png" width="100%" alt="" />
    </div>
    <div class="row" style="margin-bottom: 10%">
      <div style="display: flex;
       flex-direction: column;
         align-items: center; margin-top: 3%;">
        <h2>Bienvenidos a IENEL</h2>
        <p class="lead">
          Somos una empresa especializada en el diseño, construcción de
          redes eléctricas y de telecomunicaciones.
        </p>
        <p class="lead">
          Somos expertos en una óptima implementación y funcionamiento
          en micro proyectos y macro proyectos.
        </p>
        <p class="mb-0">
          Contamos con un equipo experto que estará encantado en
          asesorarlo.
        </p>
      </div>
    </div>
    <div class="row" style="margin-bottom: 10%; margin-right: 2%;">
      <div id="contenido-servicio">
        <h3>Nuestros Servicios</h3>
        <p class="mb-0">
          Nuestros servicios se centran en dos principales Aréas
        </p>
        <div class="row" id="contenido">
          <div class="col-sm-4" style="margin-bottom: 4%">
            <h3>Diseño</h3>
            <img src="assets/engineer-meeting-for-architectural-project-working-with-partner.jpg" width="70%" alt="" />
          </div>
          <br />
          <div class="col-sm-8">
            <br />
            <br />
            <p class="lead">
              Ponemos a su disposición el conocimiento de nuestros
              profesionales para el diseño de
              <strong>redes de media y baja tensión, iluminación</strong>.
            </p>
            <br />

            <p>Y muchos otros servicios.</p>
            <hr />
          </div>
        </div>
        <div class="row" id="contenido">
          <div class="col-sm-4">
            <h3>Construcción</h3>
            <img width="70%" src="assets/man-an-electrical-technician-working-in-switchboard-with-fuses-installation-and-connection-of-electrical-equipment-close-up.jpg" alt="" />
          </div>
          <br />
          <div class="col-sm-8">
            <br />
            <br />
            <p class="lead">
              Nuestros profesionales realizan la construcción de
              la<strong> iluminación</strong> y la construcción de
              <strong>redés eléctricas en baja y media tensión</strong>.
            </p>
            <br />

            <p>Y muchos otros servicios.</p>
            <hr />
          </div>
        </div>

      </div>
    </div>
    <div class="container-fluid" style="margin-bottom: 10%">
      <div class="row">
        <div class="col-sm-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d991.5286913182158!2d-75.60202139445875!3d6.2486048328448405!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc3720d7b928f4a50!2sIENEL%20SAS!5e0!3m2!1ses-419!2sco!4v1633385242460!5m2!1ses-419!2sco" width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col-sm-6">
          <h4>Contacto</h4>
          <form action="datos-informacion_contacto.php" method="POST">
            <div class="form-group">
              <label for="name">Nombre:</label>
              <input type="text" class="form-control" placeholder="Ingresa tú nombre" id="name" name="name"/>
            </div>
            <div class="form-group">
              <label for="email">Correo eléctronico:</label>
              <input type="email" class="form-control" placeholder="Ingresa el correo" id="email" name="email"/>
            </div>
            <div class="form-group">
              <label for="comment">Comentario:</label>
              <textarea class="form-control" rows="5" id="comment" name="comentario"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
include('vista/pie.php');
?>