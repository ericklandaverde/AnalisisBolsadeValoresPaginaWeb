<?php
	if (isset($_POST['tag'])) {
		try {
			$conn = require_once 'connect.php';

			$sql = "SELECT * FROM americanmovil";
			$result = $conn->prepare($sql) or die ($sql);

			if (!$result->execute()) return false;

			if ($result->rowCount() > 0) {
				$json = array();
				while ($row = $result->fetch()) {
					$json[] = array(
						'Fecha' => $row['Fecha'],
						'PrecioApertura' =>$row['PrecioApertura'],
						'Maximo' => $row['Maximo'],
						'Minimo' => $row['Minimo'],
						'Cierre' =>$row['Cierre'],
						'Volumen' => $row['Volumen'],
						'CierreAjustado' => $row['CierreAjustado']
					);
				}

				$json['success'] = true;
				echo json_encode($json);
			}
		} catch (PDOException $e) {
			echo 'Error: '. $e->getMessage();
		}
	}

?>