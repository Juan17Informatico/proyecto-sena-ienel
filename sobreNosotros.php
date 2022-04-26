<?php
include('vista/encabezado.php');
?>

<main>


    <div class="container-fluid">
        <div class="row">
            <div style=" display: flex;
                flex-direction: column;
                align-items: center; margin-top: 3%; text-align: center;">
                <h2>¿Quiénes somos?</h2>
                <p class="lead">
                    Somos una empresa que brinda ingeniería de calidad, especializados en electricidad
                    y telecomunicaciones, con gran experticia en la aplicación de distintas técnicas que nos permite ofrecer
                    servicios de calidad en cada proyecto.
                </p>
                <img src="assets/Logo Ienel bmp.bmp" width="500px" alt="" />
                <h3>UN POCO DE NUESTRA HISTORIA</h3>
                <p class="lead">
                    En el 2016 inició el sueño de crear la empresa IENEL S.A.S,
                    por parte de cuatro amigos e ingenieros electricistas,
                    con el propósito de contribuir a la industria y la sociedad,
                    mediante labor de ingeniería y la generación de empleo, han sido varios años de trabajo arduo
                    con fin de ofrecer servicios de calidad a cada cliente.

                </p>
                <div class="contenedorS">
                    <ul class="sliderS">
                        <li id="slide1">
                            <img src="assets/img-slide.jpg" alt="">
                        </li>
                        <li id="slide2">
                            <img src="assets/img-slide2.jpeg" alt="">
                        </li>
                        <li id="slide3">
                            <img src="assets/img-slide3.jpg" alt="">
                        </li>
                        <li id="slide4">
                            <img src="assets/img-slide4.png" alt="">
                        </li>
                    </ul>
                    <ul class="menu">
                        <li>
                            <a href="#slide1"></a>
                            <a href="#slide2"></a>
                            <a href="#slide3"></a>
                            <a href="#slide4"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</main>

<?php
include('vista/pie.php');

?>