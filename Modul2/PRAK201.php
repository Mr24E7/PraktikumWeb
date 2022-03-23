<!DOCTYPE html>
<html>
<head> 
</head>
<body>
<div class="box">
        <h3>Masukkan Hasil Yang Diinginkan</h3>
        <form action="" method="post">           
            <input type="text" name="a"><br>
            <input type="text" name="b"><br>
            <input type="text" name="c"><br>
            <input type="submit" name="submit" value="Urutkan">
        </form>
 
        <?php  
        if(isset($_POST['submit'])){
            $a=$_POST['a'];
            $b=$_POST['b'];
            $c=$_POST['c'];
            $huruf=array($a,$b,$c); 	
			
            sort($huruf);  
            echo "</br>";
            echo "<div class='hasil'> HASIL : ";
            
            $jumlah=count($huruf);  
            for($x=0;$x<$jumlah;$x++)  
            {  
                echo $huruf[$x];  
                echo " ";  
            }  	
            echo "</div>";
 
        }
        ?>  
    </div>
</body>
</html>
