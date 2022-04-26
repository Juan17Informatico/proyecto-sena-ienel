<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>| IENEL S.A.S</title>
    <link rel="shortcut icon" href="assets/icono.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    class Alerta
    {


        public static function errorLogin()
        {
            echo '<script>
        function alerta() {
            swal({
                title: "¡ERROR!",
                text: "Revisa la contraseña o el correo",
                type: "error"
            });
        }
        alerta();
    </script>';
        }
        public static function error()
        {
            echo '<script>
        swal({
        title: "¡ERROR!",
        text: "",
        type: "error",
        });
        </script>';
        }

        public static function registro()
        {
            echo '
            <script>
        function alerta() {
            swal({
                title: "Bienvenido a IENEL",
                text: "Fuiste registrado correctamente",
                timer: 2500,
                showConfirmButton: false
            });
        }
        alerta();
       
    </script>';
        }

        public static function bienvenido()
        {
            echo '<script>
            function alerta() {
                swal({
                    title: "Bienvenido a IENEL",
                    text: "",
                    timer: 3000,
                    showConfirmButton: false
                });
            }
            alerta();
           
        </script>';
        }
        public static function modificar()
        {
            echo '<script>
swal({
title: "Muy bien!",
text: "Registo modificado exitosamente",
icon: "success",
type: "success",
});
</script>';
        }
        public static function eliminado()
        {
            echo '<script>
swal({
title: "Muy bien!",
text: "Registo eliminado exitosamente",
icon: "success",
type: "success",
});
</script>';
        }

        public static function registro2()
        {
            echo '<script>
swal({
title: "Excelente!",
text: "Registro guardado exitosamente",
icon: "success",
type: "success",
});
</script>';
        }

        public static function cotizacion()
        {
            echo '<script>
swal({
title: "Excelente!",
text: "Cotización hecha exitosamente",
icon: "success",
type: "success",
});
</script>';
        }
    }



    ?>
</body>

</html>