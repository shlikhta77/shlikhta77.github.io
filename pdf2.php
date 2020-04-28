<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([

	'margin_left' => 10,
	'margin_right' => 10,
	'margin_top' => 20,
	'margin_bottom' => 20,
	'format' => 'A4-L',

]);







$name_1 = $_POST['name_1'];
$name_2 = $_POST['name_2'];
$name_3 = $_POST['name_3'];
$name_4 = $_POST['name_4'];
$name_5 = $_POST['name_5'];
$name_6 = $_POST['name_6'];
$name_7 = $_POST['name_7'];
$name_8 = $_POST['name_8'];
$name_9 = $_POST['name_9'];
$name_10 = $_POST['name_10'];
$name_11 = $_POST['name_11'];
$name_12 = $_POST['name_12'];
$name_13 = $_POST['name_13'];
$name_14 = $_POST['name_14'];
$name_15 = $_POST['name_15'];
$name_16 = $_POST['name_16'];
$name_17 = $_POST['name_17'];
$name_18 = $_POST['name_18'];
$name_19 = $_POST['name_19'];
$name_20 = $_POST['name_20'];
$name_21 = $_POST['name_21'];
$name_22 = $_POST['name_22'];
$name_23 = $_POST['name_23'];
$name_24 = $_POST['name_24'];
$name_25 = $_POST['name_25'];
$name_26 = $_POST['name_26'];
$name_27 = $_POST['name_27'];
$name_28 = $_POST['name_28'];
$name_29 = $_POST['name_29'];
$name_30 = $_POST['name_30'];
$name_31 = $_POST['name_31'];
$name_32 = $_POST['name_32'];
$name_33 = $_POST['name_33'];
$name_34 = $_POST['name_34'];
$name_35 = $_POST['name_35'];
$name_36 = $_POST['name_36'];
$name_37 = $_POST['name_37'];
$name_38 = $_POST['name_38'];
$name_39 = $_POST['name_39'];
$name_40 = $_POST['name_40'];
$name_41 = $_POST['name_41'];
$name_42 = $_POST['name_42'];
$name_43 = $_POST['name_43'];
$name_44 = $_POST['name_44'];
$name_45 = $_POST['name_45'];
$name_46 = $_POST['name_46'];
$name_47 = $_POST['name_47'];
$name_48 = $_POST['name_48'];
$name_49 = $_POST['name_49'];
$name_50 = $_POST['name_50'];
$name_51 = $_POST['name_51'];
$name_52 = $_POST['name_52'];
$name_53 = $_POST['name_53'];
$name_54 = $_POST['name_54'];
$name_55 = $_POST['name_55'];
$name_56 = $_POST['name_56'];
$name_57 = $_POST['name_57'];
$name_58 = $_POST['name_58'];
$name_59 = $_POST['name_59'];
$name_60 = $_POST['name_50'];
$name_61 = $_POST['name_61'];
$name_62 = $_POST['name_62'];
$name_63 = $_POST['name_63'];
$name_64 = $_POST['name_64'];
$name_65 = $_POST['name_65'];
$name_66 = $_POST['name_66'];




$data = '<table align="right" style="margin: 20px">
		
		<tr>
			<th><p  style="align: left;">Директору ДЮСШ з веслування ЧМР</p></th>
		</tr>
		<tr>
			<th><p  style="align: left;">Романенко В.Г.</p></th>
		</tr>
	</table>
<br>
<table align="center" width=70%>
	<tr align="center">
		<th><h4>РАПОРТ</h4></th>
	</tr>
</table>
<br>
<table align="center" width=70% style="margin: 10px;">
	
	<tr style="margin: 20px">
		<th>від тренера</th>
		<td>'. $name_1 .'</td>
	</tr>
	<tr style="margin: 20px">
		<th>відділення</th>
		<td>'. $name_2 .'</td>
	</tr>
	<tr style="margin: 20px">
		<th>станом на</th>
		<td>'. $name_3 .'</td>
	</tr>
	<tr style="margin: 20px">
		<th style="text-align: justify;" colspan="2"><p>у групі '. $name_4 .' пройшли повністю вступні/перевідні заліки та за станом  здоров’я можуть бути зараховані  в  ДЮСШ  на '. $name_5 .' навчальний рік такі учні:</th>
	</tr>
</table>
<table align="center" style="margin: 20px; border: 5px solid #000000;" cellpadding="10">
<style>
#th, #td {
border: 2px solid #000000;
}

</style>
	<tr>
		<th id="th">№ з/п</th>
		<th id="th">Прізвище та ім’я спортсмена</th>
		<th id="th">Рік народження</th>
		<th id="th">Розряд</th>
		<th id="th">Рік зарахування в  ДЮСШ № наказу</th>
		<th id="th">№ наказу на присвоєння розряду</th>
		<th id="th">Місце навчання</th>
	</tr>
	<tr>
		<td id="td">1</td>
		<td id="td">'. $name_6 .'</td>
		<td id="td">'. $name_7 .'</td>
		<td id="td">'. $name_8 .'</td>
		<td id="td">'. $name_9 .'</td>
		<td id="td">'. $name_10 .'</td>
		<td id="td">'. $name_11 .'</td>
	</tr>
	<tr>
		<td id="td">2</td>
		<td id="td">'. $name_12 .'</td>
		<td id="td">'. $name_13 .'</td>
		<td id="td">'. $name_14 .'</td>
		<td id="td">'. $name_15 .'</td>
		<td id="td">'. $name_16 .'</td>
		<td id="td">'. $name_17 .'</td>
	</tr>
	<tr>
		<td id="td">3</td>
		<td id="td">'. $name_18 .'</td>
		<td id="td">'. $name_19 .'</td>
		<td id="td">'. $name_20 .'</td>
		<td id="td">'. $name_21 .'</td>
		<td id="td">'. $name_22 .'</td>
		<td id="td">'. $name_23 .'</td>
	</tr>
	<tr>
		<td id="td">4</td>
		<td id="td">'. $name_24 .'</td>
		<td id="td">'. $name_25 .'</td>
		<td id="td">'. $name_26 .'</td>
		<td id="td">'. $name_27 .'</td>
		<td id="td">'. $name_28 .'</td>
		<td id="td">'. $name_29 .'</td>
	</tr>
	<tr>
		<td id="td">5</td>
		<td id="td">'. $name_30 .'</td>
		<td id="td">'. $name_31 .'</td>
		<td id="td">'. $name_32 .'</td>
		<td id="td">'. $name_33 .'</td>
		<td id="td">'. $name_34 .'</td>
		<td id="td">'. $name_35 .'</td>
	</tr>
	<tr>
	<td id="td">6</td>
		<td id="td">'. $name_36 .'</td>
		<td id="td">'. $name_37 .'</td>
		<td id="td">'. $name_38 .'</td>
		<td id="td">'. $name_39 .'</td>
		<td id="td">'. $name_40 .'</td>
		<td id="td">'. $name_41 .'</td>
	</tr>
	<tr>
	<td id="td">7</td>
		<td id="td">'. $name_42 .'</td>
		<td id="td">'. $name_43 .'</td>
		<td id="td">'. $name_44 .'</td>
		<td id="td">'. $name_45 .'</td>
		<td id="td">'. $name_46 .'</td>
		<td id="td">'. $name_47 .'</td>
	<tr>
	<td id="td">8</td>
		<td id="td">'. $name_48 .'</td>
		<td id="td">'. $name_49 .'</td>
		<td id="td">'. $name_50 .'</td>
		<td id="td">'. $name_51 .'</td>
		<td id="td">'. $name_52 .'</td>
		<td id="td">'. $name_53 .'</td>
	</tr>
	<tr>
	<td id="td">9</td>
		<td id="td">'. $name_54 .'</td>
		<td id="td">'. $name_55 .'</td>
		<td id="td">'. $name_56 .'</td>
		<td id="td">'. $name_57 .'</td>
		<td id="td">'. $name_58 .'</td>
		<td id="td">'. $name_59 .'</td>
	</tr>
	<tr>
	<td id="td">10</td>
		<td id="td">'. $name_60 .'</td>
		<td id="td">'. $name_61 .'</td>
		<td id="td">'. $name_62 .'</td>
		<td id="td">'. $name_63 .'</td>
		<td id="td">'. $name_64 .'</td>
		<td id="td">'. $name_65 .'</td>
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
		<th>'. $name_66 .'</th>
	</tr>
</table>';








$mpdf->WriteHTML($data);





$mpdf->Output('Рапорт на зарахування.pdf', 'D');


exit;