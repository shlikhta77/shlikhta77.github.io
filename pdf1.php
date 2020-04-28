<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([

	'margin_left' => 30,
	'margin_right' => 10,
	'margin_top' => 20,
	'margin_bottom' => 20,

]);







$name_one = $_POST['name_one'];
$name_two = $_POST['name_two'];
$name_three = $_POST['name_three'];
$name_four = $_POST['name_four'];
$name_five = $_POST['name_five'];
$name_six = $_POST['name_six'];



$data = '<table align="right">
		
		<tr>
			<td>Директору ДЮСШ з веслування ЧМР</td>
		</tr>
		<tr align="left">
			<td>Романенко В.Г.</td>
		</tr>
		<tr align="left">
			<td><p>тренера-викладача</p>'. $name_one .'</td>
		</tr>
	</table>
<br>
<br>
<h4 align="center">ЗВІТ</h4>
	<p align="center"> за термін роботи з&nbsp;'. $name_two .'&nbsp;по&nbsp;'. $name_three .'</p><br>
<br>
<br>
<table align="center" width=100%>
	<tr align="center">
		<td style="margin: 50px;">'. $name_four .'</textarea></td>
	</tr>
</table>


<br>
<br>

<table align="center" width=100%>
	<style>
		#user_1 {

			width: 200px;
		}
	</style>
	<tr align="center">
		<th>Тренер-викладач</th>
		<th>____________________</th>
		<th>'. $name_five .'</th>
	</tr>
	<tr align="center">
		<th>'. $name_six .'</th>
		<th></th>
		<th></th>
	</tr>
</table>';








$mpdf->WriteHTML($data);





$mpdf->Output('ТИЖНЕВИЙ ЗВІТ.pdf', 'D');


exit;