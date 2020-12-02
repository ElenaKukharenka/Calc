<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset = "UTF-8">
</head>
<body>
    
    <form action="calc.php" method="post" ">
        <input type="text" name="number1"  placeholder="Первое число"> 
	<select  name="oper"> 
	    <option value='plus'>+ </option>
	    <option value='minus'>- </option>
	    <option value="multiply">* </option>
	    <option value="divide">/ </option>
	</select>
	<input type="text" name="number2"  placeholder="Второе число"> 
		
	<input class="submit_form" type="submit" name="submit" value="Получить ответ"> 
	</form>

</body>
</html>