<?php
require_once "alertas/alerta.php";
require "datos/conexion.php";
session_start();

$errorMsg = "";


$_SESSION['Ingreso'] = false; //

if ($_POST) {
  //
  $email = $_POST['email'];
  $password = $_POST['password'];
  $tipoid = $_POST['tipoUsuario'];

  if (empty($email)) { //Nos evalua si la variable email si esta vacia
    $errorMsg = "Por favor ingrese el correo electronico";
  } else if (empty($password)) { //Nos evalua si la variable password si esta vacia
    $errorMsg = "Por favor ingrese Password";
  } else if (empty($tipoid)) { //Nos evalua si la variable tipoid si esta vacia
    $errorMsg = "Por favor seleccione rol "; //Revisar rol vacio
  } else if ($email and $password and $tipoid) {

    try { //

      $sql = "SELECT idUsuario, tipoUsuario, nombre, pass FROM usuario WHERE correo = '$email';";

      $resultado = $mysqli->query($sql);
      $num = $resultado->num_rows;

      if ($num > 0) {
        $row = $resultado->fetch_assoc();
        $password_bd = $row['pass'];
        $pass_c = sha1($password);

        if ($password_bd == $pass_c) {
          $_SESSION['idUsuario'] = $row['idUsuario'];
          $_SESSION['nombre'] = $row['nombre'];
          $_SESSION['tipoUsuario'] = $row['tipoUsuario'];

          if ($_SESSION['tipoUsuario'] == "Admin"  && $tipoid == "Admin") {
            Alerta::bienvenido();
            header("refresh:2;administrar-clientes.php");
            $_SESSION['Ingreso'] = true;
          } else if ($_SESSION['tipoUsuario'] == "Persona"  && $tipoid == "Persona") {
            Alerta::bienvenido();
            header("refresh:2;index.php");
            $_SESSION['Ingreso'] = true;
          } else if ($_SESSION['tipoUsuario'] == "Empresa" && $tipoid == "Empresa") {
            Alerta::bienvenido();
            header("refresh:2;index.php");
            $_SESSION['Ingreso'] = true;
          } else {
            $errorMsg = "No existe usuario";
          } //
        } else {
          $errorMsg = "Verifica el correo o la contraseña.";
        }
      } else {
        $errorMsg = "No existe usuario";
      }
    } catch (PDOException $e) {
      $e->getMessage();
    }
  } else {
    $errorMsg = "ERROR";
  }
} else {
  $errorMsg = "";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Iniciar sesión</title>
  <link rel="shortcut icon" href="assets/icono.png">
  <link href="cssProyecto/styles.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body style="background-image: url('assets/login.jpg');">
  <div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
      <main>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5">
              <div class="card shadow-lg border-0 rounded-lg mt-5" style="background-color: #f5f5f5;">
                <div class="card-header">
                  <h3 class="text-center font-weight-light my-4">
                    Iniciar sesión
                  </h3>
                </div>
                <div class="card-body">
                  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="form-floating mb-3">
                      <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="email" required />
                      <label for="inputEmail">Correo electrónico</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="password" required />
                      <label for="inputPassword">Contraseña</label>
                    </div>
                    <div class="form-floating mb-3">
                      <select class="form-control" name="tipoUsuario" id="tipoid">
                        <option value="Empresa" id="1">Empresa</option>
                        <option value="Persona" id="2">Persona</option>
                        <option value="Admin">Administrador</option>
                      </select>
                      <label for="tipoid"> Tipo de usuario </label>
                    </div>
                    <div class="form">
                      <p class="text-danger">
                        <?php
                        if (!empty($errorMsg)) {

                        ?>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                          </svg>
                        <?php
                          echo $errorMsg;
                        }
                        ?>
                      </p>
                    </div>
                    <div class="form-check mb-3">
                      <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                      <label class="form-check-label" for="inputRememberPassword">Recordar contraseña</label>
                    </div>
                    <div class="
                          d-flex
                          align-items-center
                          justify-content-between
                          mt-4
                          mb-0
                        ">
                      <a class="small" href="password.html">Olvidaste tu contraseña?</a>
                      <button type="submit" class="btn btn-outline-danger btn-block">Iniciar sesión</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center py-3">
                  <div class="small">
                    <a href="register.php">¿Necesitas una cuenta? Registrate!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>

    <footer class="py-4 bg-light mt-auto">
      <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
          <div class="text-muted" style="margin-bottom: 1%">
            Todos los derechos reservados &copy; IENEL SAS 2021
          </div>

          <div>
            <a href="#">Privacy Policy</a>
            &middot;
            <a href="#">Terms &amp; Conditions</a>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-between small">
          <div class="text-muted">
            ienel@ienel.co| Tel.: (+574) 5909272 | Cel.: 3116850669
          </div>
          <div>
            <li class="et-social-icon et-social-facebook">
              <a href="https://es-la.facebook.com/ienelsas" target="_blank" class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" style="color: black" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>
              </a>
            </li>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
</body>

</html>