<!DOCTYPE html>
<html lang="rus">
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Тижневий звіт</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<div align="center" style="margin: 20px;">

				<a href="index.html" class="btn btn-primary" role="button" style="box-shadow: 0 0 10px rgba(0,0,0,0.5);">Повернутися на головну сторінку</a>
			

</div>

<form action="pdf1.php" id="myform" method="post"></form>
	<table align="right">
		
		<tr>
			<td>Директору ДЮСШ з веслування ЧМР</td>
		</tr>
		<tr align="left">
			<td>Романенко В.Г.</td>
		</tr>
		<tr align="left">
			<td>тренера-викладача<input type="text" name="name_one" form="myform"></td>
		</tr>
	</table>
<br>
<br>
<br>
<br>
<table align="center" width=100%>
	<tr align="center">
		<th><h4>ЗВІТ</h4></th>
	</tr>
	<tr align="center">
		<td>за термін роботи з <input type="date" name="name_two" form="myform"> по <input type="date" name="name_three" form="myform"></td>
	</tr>
</table>
<br>
<br>
<br>
<table align="center" width=100%>
	<tr align="center">
		<td style="margin: 50px;"><textarea name="name_four" form="myform" rows="50" cols="100" placeholder="Текст звіту в довільному стилі із зазначенням основних напрямків роботи за вказаний період"></textarea></td>
	</tr>
</table>


<br>
<br>

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
		<th><input type="text" name="name_five" form="myform" id="user_1"></th>
	</tr>
	<tr align="center">
		<th><input type="date" name="name_six" form="myform"></th>
		<th></th>
		<th></th>
	</tr>
</table>
<br>
<br>
<br>
<div align="center" style="margin: 20px;">
<button type="submit" class="btn btn-success btn-lg btn-block" form="myform">Скачати в ПДФ</button>
</div>
<br>
<br>
<br>
</body>
</html>
