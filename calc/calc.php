<?php
$operZnak='';
if(isset($_POST['submit'])){

    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $oper = $_POST['oper'];
	
	// Валидация
if(!$oper || (!$number1 && $number1 != '0') || (!$number2 && $number2 != '0')) {
    $error_result = "Не все поля заполнены";
}
// если все поля формы заполнены, проверяем, являются ли числами введенные пользователем значения
else { 
    if(!is_numeric($number1) || !is_numeric($number2)) { 
        $error_result ="Вы ввели не числа!"; 
    }
    else 
        switch($oper){ 
	    case 'plus': 
	        $result = $number1 + $number2; 
			$operZnak = '+';
	        break;
	    case 'minus': 
	        $result = $number1 - $number2;  
			$operZnak = '-';
	        break;
	    case 'multiply': 
	        $result = $number1 * $number2;
			$operZnak = '*';
	        break;
	    case 'divide': 
	        if( $number2 == '0') 
		    $error_result = "На ноль делить нельзя!"; 
	        else 
	            $result = $number1 / $number2; 
				$operZnak = '/';
	            break;    
        };
};
if(isset($error_result)) {
    echo "Ошибка: ".$error_result;
 }	
else {
$textRes = "Ответ: ";
    $res = $textRes.$number1.$operZnak.$number2."=".$result;
	echo $res;
	
};
};
 ?>