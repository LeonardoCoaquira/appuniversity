<?php
include_once '../notif_info_msgbox.php';

require_once($_SESSION['raiz'] . '/modules/sections/role-access-admin-editor.php');

$sql = "SELECT COUNT(career) AS total FROM careers";

if ($result = $conexion->query($sql)) {
	if ($row = mysqli_fetch_array($result)) {
		if ($row['total'] == 0) {
			Error('Crea como mínimo una carrera antes de agregar alumnos.');
			header('Location: /modules/messenger');
			exit();
		} else {
			$sql = "SELECT COUNT(id_message) AS total FROM messages";

			if ($result = $conexion->query($sql)) {
				if ($row = mysqli_fetch_array($result)) {
					$tpages = ceil($row['total'] / $max);
				}
			}

			if (!empty($_POST['search'])) {
				$_POST['search'] = trim($_POST['search']);
				$_POST['search'] = mysqli_real_escape_string($conexion, $_POST['search']);

				$_SESSION['id_message'] = array();
				$_SESSION['title_message'] = array();
				$_SESSION['content_message'] = array();

				$i = 0;

				$sql = "SELECT * FROM messages";

				if ($result = $conexion->query($sql)) {
					while ($row = mysqli_fetch_array($result)) {
						$_SESSION['id_message'][$i] = $row['id_message'];
						$_SESSION['title_message'][$i] = $row['title_message'];
						$_SESSION['content_message'][$i] = $row['content_message'];

						$i += 1;
					}
				}
				$_SESSION['total_messages'] = count($_SESSION['id_message']);
			} else {
				$_SESSION['id_message'] = array();
				$_SESSION['title_message'] = array();
				$_SESSION['content_message'] = array();

				$i = 0;

				$sql = "SELECT * FROM messages LIMIT $inicio, $max";

				if ($result = $conexion->query($sql)) {
					while ($row = mysqli_fetch_array($result)) {
						$_SESSION['id_message'][$i] = $row['id_message'];
						$_SESSION['title_message'][$i] = $row['title_message'];
						$_SESSION['content_message'][$i] = $row['content_message'];

						$i += 1;
					}
				}
				$_SESSION['total_messages'] = count($_SESSION['id_message']);
			}
		}
	}
}