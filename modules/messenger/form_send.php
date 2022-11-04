<?php
require_once($_SESSION['raiz'] . '/modules/sections/role-access-admin-editor.php');
$codigo = $_GET['user_id'];

$sentencia = $bd->prepare("SELECT msg.title_message, msg.content_message
  FROM messages msg 
  INNER JOIN persona per ON msg.codigo = pro.id_persona
  WHERE pro.id_persona = ?;");
$sentencia->execute([$codigo]);
$persona = $sentencia->fetch(PDO::FETCH_OBJ);

    $url = 'https://whapi.io/api/send';
    $data = [
        "app" => [
            "id" => '51921402977',
            "time" => '1654728819',
            "data" => [
                "recipient" => [
                    "id" => '51'.$persona->celular
                ],
                "message" => [[
                    "time" => '1654728819',
                    "type" => 'text',
                    "value" => 'Estimado(a) *'.strtoupper($persona->nombres).' '.strtoupper($persona->apellido_paterno).' '.strtoupper($persona->apellido_materno).'* Por la presente queremos comunicarle: *'.strtoupper($persona->promocion).'*. Mensaje enviado a  *'.$persona->duracion.'*'
                ]]
            ]
        ]
    ];
    $options = array(
        'http' => array(
            'method'  => 'POST',
            'content' => json_encode($data),
            'header' =>  "Content-Type: application/json\r\n" .
                "Accept: application/json\r\n"
        )
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $response = json_decode($result);
    header('Location: agregarPromocion.php?codigo='.$persona->id_persona);
?> 
