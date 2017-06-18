
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<form action="" method="post">
	選擇商品:
	<select name="item">
		<option value="S001">Excalibur:$9999999999</option>
		<option value="S002">Arondight:$999999999</option>
		<option value="S003">Excalibur Gallatin:$99999999</option>
		<option value="S004">Enuma Elish:$999999999999</option>
	</select>
		<input type="text" size="5" name="Quantity" value="1"/>
		<input type="submit" value="訂購"/>
	</form>
</body>
</html>

<?php
	session_start();
	if(isset($_POST["item"])){
		$item=$_POST["item"];
		$_SESSION["ID"]=$item;
		$_SESSION["quantity"]=$_POST["Quantity"];
		
		switch($Item){
				case 'A001':
				$_SESSION["name"]="Excalibur";
				$_SESSION["price"]=9999999999;
				break;
				case 'A002':
				$_SESSION["name"]="Arondight";
				$_SESSION["price"]=999999999;
				break;
				case 'A003':
				$_SESSION["name"]="Excalibur Gallatin";
				$_SESSION["price"]=99999999;
				break;

				case 'A004':
				$_SESSION["name"]="Enuma Elish";
				$_SESSION["price"]=999999999999;
				break;
		}

		header("Location: savecart.php");
	}
?>