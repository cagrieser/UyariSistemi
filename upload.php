<?php
print_r($_FILES);

$size = $_FILES['audio_data']['size'];
$input = $_FILES['audio_data']['tmp_name'];
$output = "id_1" . '.wav';

move_uploaded_file($input, $output);
?>
