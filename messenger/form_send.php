<?php
require_once($_SESSION['raiz'] . '/modules/sections/role-access-admin-editor.php');
$codigo = $_GET['user'];

$sentencia = $bd->prepare("SELECT msg.title_message, msg.content_message , msg.id_user, st.name , st.surnames,st.phone
FROM messages msg 
INNER JOIN students st ON st.user = msg.id_user
WHERE msg.id_user  = ?;");
$sentencia->execute([$codigo]);
$persona = $sentencia->fetch(PDO::FETCH_OBJ);

    $url = 'https://whapi.io/api/send';
    $data = [
        "app" => [
            "id" => '51921402977',
            "time" => '1654728819',
            "data" => [
                "recipient" => [
                    "id" => '51'.$persona->phone
                ],
                "message" => [[
                    "time" => '1654728819',
                    "type" => 'text',
                    "value" => 'Estimado(a) *'.strtoupper($persona->name).' '.strtoupper($persona->surname).'* Por la presente queremos comunicarle: *'.strtoupper($message->title_message).'*. Mensaje enviado a  *'.$message->content_message.'*'
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
