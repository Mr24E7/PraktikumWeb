<?php
function fahrenheit_to_celsius($given_value)
{
	$celsius=5/9*($given_value-32);
	return $celsius ;
}
function fahrenheit_to_kelvin($given_value)
{
	$kelvin=fahrenheit_to_celsius($given_value) + 273.15;
	return $kelvin ;
}
function fahrenheit_to_reamur($given_value)
{
	$reamur=4/9*($given_value-32);
	return $reamur ;
}
function celsius_to_fahrenheit($given_value)
{
	$fahrenheit=$given_value*9/5+32;
	return $fahrenheit ;
}
function celsius_to_kelvin($given_value)
{
	$kelvin=$given_value+273.15;
	return $kelvin ;
}
function celsius_to_reamur($given_value)
{
	$reamur=4/5*($given_value);
	return $reamur ;
}
function kelvin_to_fahrenheit($given_value)
{
	$fahrenheit=9/5*($given_value-273.15)+32;
	return $fahrenheit ;
}
function kelvin_to_celsius($given_value)
{
	$celsius=$given_value-273.15;
	return $celsius ;
}
function kelvin_to_reamur($given_value)
{
	$reamur=4/5*($given_value-273.15);
	return $reamur ;
}
function reamur_to_fahrenheit($given_value)
{
	$fahrenheit=9/5*$given_value+32;
	return $fahrenheit ;
}
function reamur_to_celsius($given_value)
{
	$celsius=5/4*$given_value;
	return $celsius ;
}
function reamur_to_kelvin($given_value)
{
	$kelvin=5/4*$given_value+273.15;
	return $kelvin ;
}
?>
<html>
<head>
</head>
<body>
<h1>Soal 3</h1>
	<form action="" method="post">
	<table>
		<tr>
			<td>
			Nilai:
				<input type="text" name="given_value">
			</td>
		</tr>
		<tr>
			<td>
			dari:<br>
				<input type="radio" name="first_temp_type_name" value="fahrenheit">Fahrenheit<br>
				<input type="radio" name="first_temp_type_name" value="celsius">Celsius<br>
				<input type="radio" name="first_temp_type_name" value="kelvin">Kelvin<br>
				<input type="radio" name="first_temp_type_name" value="reamur">Reamur<br><br>
			</td>
		</tr>
		<tr>
			<td>
			Ke:<br>
				<input type="radio" name="second_temp_type_name" value="fahrenheit">Fahrenheit<br>
				<input type="radio" name="second_temp_type_name" value="celsius">Celsius<br>
				<input type="radio" name="second_temp_type_name" value="kelvin">Kelvin<br>
				<input type="radio" name="second_temp_type_name" value="reamur">Reamur<br>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="btn" value="Konversi">
			</td>
		</tr>
		<tr>
			<td>

<?php
if(isset($_POST['btn']))

{
    $first_temp_type_name=$_POST['first_temp_type_name'];
    $second_temp_type_name=$_POST['second_temp_type_name'];
    $given_value=$_POST['given_value'];
	
    if ($first_temp_type_name=='fahrenheit') 
    {
        if ($second_temp_type_name=='celsius') 
        {
            $celsius=fahrenheit_to_celsius($given_value);
            echo "<h1><b>Hasil Konversi : $given_value Fahrenheit = $celsius &degC</h1></b>";
        }  elseif ($second_temp_type_name=='kelvin') 
        {
            $kelvin=fahrenheit_to_kelvin($given_value);
            echo "<h1><b>Hasil Konversi : $given_value Fahrenheit = $kelvin &degK</h1></b>";
        }  elseif ($second_temp_type_name=='reamur') 
        {
            $reamur=fahrenheit_to_reamur($given_value);
            echo "<h1><b>Hasil Konversi : $given_value Fahrenheit = $reamur &degR</h1></b>";
        } else 
        {
            echo "<h1><b>Hasil Konversi : $given_value &degF</h1></b>";
        }
    }
    if ($first_temp_type_name=='celsius') 
    {
        if ($second_temp_type_name=='fahrenheit') 
        {
            $fahrenheit=celsius_to_fahrenheit($given_value);
	        echo "<h1><b>Hasil Konversi : $given_value Celsius  = $fahrenheit &degF</h1></b>";
        }  elseif ($second_temp_type_name=='kelvin') 
        {
            $kelvin=celsius_to_kelvin($given_value);
            echo "<h1><b>Hasil Konversi : $given_value Celsius   = $kelvin &degK</h1></b>";
        }  elseif ($second_temp_type_name=='kelvin') 
        {
            $reamur=celsius_to_reamur($given_value);
            echo "<h1><b>Hasil Konversi : $given_value Celsius = $reamur &degR</h1></b>";
        } else 
        {
            echo "<h1><b>Hasil Konversi : $given_value &degC</h1></b>";
        }
    }
    if ($first_temp_type_name=='kelvin') 
    {
        if ($second_temp_type_name=='fahrenheit') 
        {
            $fahrenheit=kelvin_to_fahrenheit($given_value);
            echo "<h1><b>Hasil Konversi : $given_value Kelvin  = $fahrenheit &degF</h1></b>";
        }  elseif ($second_temp_type_name=='celsius') 
        {
            $celsius=kelvin_to_celsius($given_value);
            echo "<h1><b>Hasil Konversi : $given_value Kelvin  = $celsius &degC</h1></b>";
        }  elseif ($second_temp_type_name=='kelvin') 
        {
            $reamur=kelvin_to_reamur($given_value);
            echo "<h1><b>Hasil Konversi : $given_value Kelvin = $reamur &degR</h1></b>";
        } else 
        {
            echo "<h1><b>Hasil Konversi : $given_value &degK</h1></b>";
        }
    }
	 if ($first_temp_type_name=='reamur') 
    {
        if ($second_temp_type_name=='fahrenheit') 
        {
            $fahrenheit=reamur_to_fahrenheit($given_value);
            echo "<h1><b>Hasil Konversi : $given_value Reamur  = $fahrenheit &degF</h1></b>";
        }  elseif ($second_temp_type_name=='celsius') 
        {
            $celsius=reamur_to_celsius($given_value);
            echo "<h1><b>Hasil Konversi : $given_value Reamur  = $celsius &degC</h1></b>";
        }  elseif ($second_temp_type_name=='kelvin') 
        {
            $kelvin=reamur_to_kelvin($given_value);
            echo "<h1><b>Hasil Konversi : $given_value Reamur = $kelvin &degK</h1></b>";
        } else 
        {
            echo "<h1><b>Hasil Konversi : $given_value &deg R</h1></b>";
        }
    } 
}
				?>
			</td>
		</tr>
	</table>
	</form>
</body>
</html>