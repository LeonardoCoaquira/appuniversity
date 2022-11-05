<?php
require_once($_SESSION['raiz'] . '/modules/sections/role-access-admin-editor.php');

function unique_id($l = 10)
{
    return substr(md5(uniqid(mt_rand(), true)), 0, $l);
}

$id_generate = 'stdt-' . unique_id(5);
?>
<div class="form-data">
    <div class="head">
        <h1 class="titulo">Nuevo Mensaje</h1>
    </div>
    <div class="body">
        <form name="form-add-students" action="insert.php" method="POST" autocomplete="off" autocapitalize="on">
            <div class="wrap">
                <div class="first">
                    <label for="txtTitle" class="label">Titulo</label>
                    <input id="txtTitle" class="text" style=" display: none;" type="text" name="txtTitle" value="Asunto" maxlength="50" required />
                    <label for="txtMessage" class="label">Mensaje</label>
                    <input id="txtMessage" class="text" type="text" name="txtMessage" value="" placeholder="Mensaje" maxlength="30" required autofocus />
                </div>
        </form>
    </div>
</div>
<div class="content-aside">
    <?php
    include_once "../sections/options-disabled.php";
    ?>
</div>
<script src="/js/modules/students.js" type="text/javascript"></script>

<?php
$promocion = $_POST["txtPromocion"];
$duracion = $_POST["txtDuracion"];
$codigo = $_POST["codigo"];


$sentencia = $bd->prepare("INSERT INTO promociones(promocion,duracion,id_persona) VALUES (?,?,?);");
$resultado = $sentencia->execute([$promocion,$duracion, $codigo ]);

if ($resultado === TRUE) {
    header('Location: agregarPromocion.php?codigo='.$codigo);
} 