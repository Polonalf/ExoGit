<?php


	function saveAsJson($data) {
		file_put_contents("data.json", json_encode($data));
	}

	function readJson($filename) {
		$content = [];
		if (file_exists($filename)) {
			$content = file_get_contents($filename);
            $content = json_decode($content);
		}

		return $content;
	}

	function getFormData() {
		$tmpArr = ["question" => $_POST["question"] ];
		return $tmpArr;
	}

	$action = isset($_GET['action']) ? $_GET['action'] : '';
	$dataJson = readJson("data.json");

	if ($action == 'form' && isset($_POST['from'])) {
		$dataForm = getFormData();
		$dataJson[] = $dataForm;
		saveAsJson($dataJson);
		header("Location:index.php");
	}

	function DeleteQuestion($question) {
		// Fonction qui parcourt le fichier Json et va supprimer la question donnée en paramètre.
		$Data = readJson("data.json");
		foreach ($Data as $key => $value) {
		 	if $key == $question
		 		$Data.array_slice($data, 1)($key);
		 } each()
 		 saveAsJson($Data);


	}
?>