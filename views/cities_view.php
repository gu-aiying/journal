<h1>Список красивых городов в России</h1>
<table>
	<tr><th>ID</th><th>Город</th><th>Год основания</th><th>Количество жителей</th><th>Вид</th></tr>
	<?php
for ($row_no = 0; $row_no <= $data->num_rows - 1; $row_no++) {
	$data->data_seek($row_no);
	$row = $data->fetch_assoc();
	echo "<tr><td>" . $row['id_cities'] . "</td><td>" . $row['name'] . "</td><td>" . $row['history'] . "</td><td>" . $row['citizen'] . "</td><td><a href='/journal/cities/city/?id=" . $row['id_cities'] . "' target='_blank'><img src='" . $row['postcard'] . "' width='250'/></a></td></tr>";
}
?>
</table>