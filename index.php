<?php

$date = true;
if (!empty($_POST)) {

    include('includes/verificar.php');
    include('includes/submit.php');

    $verificar = new Verificar();
    $error = (empty($verificar->getErrors())) ? false : $verificar->getErrors();
    if($error){new Submit();}
    $date = false;
}
function validarPost($input)
{
    return (!empty($_POST)) ? $_POST[$input] : '';
}

?>

<!DOCTYPE html>

<html lang="es">
<head>

    <title>Aguardiente Llanero</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="author" content="juan2ramos"/>
    <meta name="description" content="Inicio"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1"/>

    <script src="js/prefixfree.min.js"></script>
    <!-- Estilos -->
    <link rel="stylesheet" href="css/normalize.css"/>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic'
          rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css"/>


</head>
<body>
<?php if ($error): ?>
    <div class="error-content">
        <div class="close" id="close"></div>
        <div class="errors">
            <h4>Verifica los siguiente errores</h4>
            <?php
            foreach ($error as $key => $value):
                foreach ($value as $errors):
                    echo('<span>' . $key . ' ' . $errors . '</span>');
                endforeach;endforeach;?>
        </div>
    </div>
<?php endif; ?>

<div id="wrapper">
    <figure><img src="img/a-lo-que-vinimos.png" alt="a lo que vinimos"/></figure>
    <form enctype="multipart/form-data" action="" method="POST" id="form-girls">
        <p>
            Hola, Ingresa tus datos en el siguiente formulario, carga tu fotografía y participa por ser la chica llanero
            2015. enseñale al mundo que hace de nuestros llanos orientales el lugar mas hermoso del Pais con las mujeres
            mas
            lindas... entonces.. <b> ¡A lo que vinimos, Vamos!</b>
        </p>

        <div id="content-1" class="content-questions">
            <input type="text" placeholder="Nombre" name="nombre" value="<?php echo(validarPost('nombre')); ?>"/>
            <input type="text" placeholder="Apellido" name="apellido" value="<?php echo(validarPost('apellido')); ?>"/>
            <input type="text" placeholder="Edad" name="edad" value="<?php echo(validarPost('edad')); ?>"/>
        </div>
        <div id="content-2" class="content-questions">
            <input type="text" placeholder="Ocupación" name="ocupacion"
                   value="<?php echo(validarPost('ocupacion')); ?>"/>
            <input type="email" placeholder="Correo electronico" name="mail"
                   value="<?php echo(validarPost('mail')); ?>"/>
            <input type="text" placeholder="Teléfono" name="telefono" value="<?php echo(validarPost('telefono')); ?>"/>
            <input type="text" placeholder="Celular" name="celular" value="<?php echo(validarPost('celular')); ?>"/>

        </div>
        <div id="content-3" class="content-questions">

            <label>Actualmente cursa alguna carrera técnica, tecnológica o profesional?
                <select name="carrera">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
            </label>

            <label>Tienes algún título universitario?
                <select name="titulo">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
            </label>
            <label>Eres llanera de nacimiento o has vivido en el Meta los últimos 5 años?
                <select name="llanera">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
            </label>
        </div>
        <div id="content-4" class="content-questions">

            <label>Tienes conocimientos sobre la cultura llanera y sus costumbres?
                <select name="conocimientos">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
            </label>
            <label>Te desenvuelves bien ante cámaras y eres expresiva?
                <select name="expresiva">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
            </label>
            <label>Estas dispuesta a viajar y promocionar la marca Aguardiente Llanero durante 1 año en
                todo el territorio nacional?
                <select name="viajar">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
            </label>
            <label for="imagen" name="imagen">Sube tu imagen</label>
            <input name="imagen" type="file" id="myFile" placeholder="Sube tu imagen">

            <input type="submit" value="Registrarse"/>
        </div>
        <div class="content-button">
            <button id="prev">Anterior</button>
            <button id="next" class="show-inline">siguiente</button>
        </div>
    </form>
    <div class="terms">
        * Terminos y condiciones | * Bases del concurso
    </div>
</div>
<?php if ($date): ?>
    <div class="date-form-content" id="date-form-content">
        <div class="date-form">
            <input type="text" placeholder="D" id="day"/>
            <input type="text" placeholder="M" id="month"/>
            <input type="text" placeholder="A" id="year"/>

            <p>*Debes ser mayor de edad para ingresar.</p>

            <div class="content-button">
                <button id="date-submit">Ingresar</button>
            </div>
            <figure><img src="img/a-lo-que-vinimos.png" alt=""/></figure>
        </div>
    </div>
<?php endif ?>
<!-- JavaScript -->
<script src="js/script.js"></script>
</body>


</html>