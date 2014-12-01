<?php
$error = false;
$date = true;
$showError = false;
$mensaje = '';
if (!empty($_POST)) {

    include('includes/verificar.php');


    $verificar = new Verificar();
    $errorsR = $verificar->getErrors();
    $error = (empty($errorsR)) ? false : $verificar->getErrors();
    if (!$error) {
        include('includes/submit.php');
        new Submit();
        $_POST = "";
        $mensaje = "El registro se realizo con éxito!!";
    }else{$showError = true;}
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
    <meta name="author" content="Unidad de licores del Meta"/>
    <meta name="description" content="Aguardiente llanero - Chica Llanero"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/prefixfree.min.js"></script>
    <!-- Estilos -->
    <link rel="stylesheet" href="css/normalize.css"/>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic'
          rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/response.css"/>
    <link rel="shortcut icon" href="img/favicon.png">
      <meta property="og:title" content="Participa - Chica llanero 2015" />
      <meta property="og:image" content="http://aguardientellanero.com/img/facebook.png" />
      <meta property="og:description" content="Te invitamos a representar la cultura del llano en un concurso que resalta la mujer llanera." />
      <meta property="og:url" content="http://aguardientellanero.com" />


</head>
<body>
<?php if ($error): ?>
    <div class="error-content" id="error-content" data-visual="<?php $showError?>">
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
<div class="mimi"><img id="wraper-img" src="img/paper1.png" alt="a lo que vinimos"/></div>
<div id="wrapper">
    <figure><img  src="img/aguardiente-llanero.png" alt="a lo que vinimos"/></figure>
    <form enctype="multipart/form-data" action="" method="POST" id="form-girls">
        <h3><?php echo($mensaje);?></h3>
        <h1>Convocatoria Chica Llanero 2015</h1>
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
            <button id="next" class="show-inline">Siguiente</button>
        </div>
    </form>
            <div class="ter">®Aguardiente Llanero - Todos los derechos reservados - 2014 - <a title="Diseño Web en Bogotá" href="http://mi-martinez.com/" target="_blank">Diseño Web</a> - <a title="Agencia de publicidad en Bogotá" href="http://mi-martinez.com/" target="_blank">Agencia de Publicidad</a><a href="http://mi-martinez.com/" target="_blank"><img src="img/logomim.png" alt="Agencia de publicidad en Bogotá" style="display: inline;width: 90px;vertical-align: sub;padding-left: 10px;"/></a></div>
    <div class="terms">
        <a href="#modal" title="" class="pop">* Terminos y condiciones | * Bases del concurso</a>
        <div id="modal">
  <a href="#cerrar"></a>
   <div id="modalContent">
        <div class="tituloh1"><h2>Bases del concurso</h2></div>
<ol class="annotation-list">
  <li>Participan únicamente mujeres colombianas entre los 18 y 25 años máximo.</li>
  <li>Altura mínima: 1.55 mts.</li>
  <li>Ser estudiante de estudios superiores técnicos, tecnológicos, universitarios o ser graduada.</li>
  <li>Haber nacido en los llanos o haber vivido en el Meta al menos durante los últimos 5 años.</li>
  <li>Tener conocimiento sobre la cultura llanera y sus costumbres.</li>
  <li>Tener desenvolvimiento ante cámaras y ser expresiva</li>
  <li>Estar dispuesta a viajar y promocionar la marca Aguardiente Llanero durante 1 año por el territorio nacional.</li>
</ol>
      <a href="#cerrar">X</a>
</div>
</div>
    </div>
</div>
<?php if ($date): ?>
    <div class="date-form-content" id="date-form-content" ">        <div class="date-form">
    <div class="logo"><img src="img/aguardiente-llanero.png" alt=""/><div>
            <input type="text" maxlength="2" placeholder="D" id="day"/>
            <input type="text" maxlength="2" placeholder="M" id="month"/>
            <input type="text" maxlength="2" placeholder="A" id="year"/>

            <p style="font-family: 'Lato', sans-serif;color: #3f1010;margin-top: 3px;">*Debes ser mayor de edad para ingresar.</p>

            <div class="content-button">
                <button id="date-submit">Ingresar</button>
            </div>
        </div>
    </div>
<?php endif ?>
<input type="hidden" id="dateE" value="<?php echo($date)?>"/>
<input type="hidden" id="showError" value="<?php echo($showError)?>"/>
<!-- JavaScript -->
<script src="js/script.js"></script>
</body>


</html>