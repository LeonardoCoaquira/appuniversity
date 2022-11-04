<?php
require_once($_SESSION['raiz'] . '/modules/sections/role-access-admin-editor.php');
?>
<div class="form-gridview">
	<table class="default">
		<?php
		if ($_SESSION['total_users'] != 0) {
			echo '
                    <tr>
                    <th>Nombre</th>
			';
			if ($_SESSION['permissions'] != 'editor') {
				echo '<th class="center"><a class="icon">send</a></th>';
			}
			echo '
					</tr>
			';
		}
		for ($i = 0; $i < $_SESSION['total_users']; $i++) {
			echo '
		    		<tr>
						<td>' . $_SESSION["student_name"][$i] . '</td>
						<td>
							<form action="" method="POST">
								<button class="btndelete" name="btn" value="form_send" type="submit"></button>
							</form>
						</td>
					</tr>
				';
		}
		?>
	</table>
	<?php
	if ($_SESSION['total_users'] == 0) {
		echo '
				<img src="/images/404.svg" class="data-not-found" alt="404">
		';
	}
	if ($_SESSION['total_users'] != 0) {
		echo '
				<div class="pages">
					<ul>
		';
		for ($n = 1; $n <= $tpages; $n++) {
			if ($page == $n) {
				echo '<li class="active"><form name="form-pages" action="" method="POST"><button type="submit" name="page" value="' . $n . '">' . $n . '</button></form></li>';
			} else {
				echo '<li><form name="form-pages" action="" method="POST"><button type="submit" name="page" value="' . $n . '">' . $n . '</button></form></li>';
			}
		}
		echo '
					</ul>
				</div>
		';
	}
	?>
</div>
<div class="content-aside">
	<?php
	include_once '../notif_info.php';
	include_once "../sections/options.php";
	?>
</div>