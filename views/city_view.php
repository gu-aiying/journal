<h1>Информация об городе</h1>
<?php

for ($row_no = 0; $row_no <= $data->num_rows - 1; $row_no++) {
	$data->data_seek($row_no);
	$row = $data->fetch_assoc();
	echo "<p>" . $row['additional'] . "</p>";
}

?>
