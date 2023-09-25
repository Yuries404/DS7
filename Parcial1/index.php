<html>
    <head>
        <title>Parcial nº1 Yurianys</title>
    </head>
    <body>
        <?php
            $i=1;
            $min=1;
            $max=100;


            if(array_key_exists('enviar', $_POST)){
                
                if($_REQUEST['num']!=""){
                    $m_size = $_REQUEST['num'];
                    if($m_size>=6){
                        $unit =1;
                        echo "<table border=1>";
                        
                        for ($n1=1; $n1<=$m_size; $n1++)
                        {
                            echo "<tr>";
                        
                        for($n2=1;$n2<=$m_size;$n2++)
                        {   
                            if($n1<= 2 && $n2<=2 || $n1>=$m_size-1 || $n2>=$m_size-1){
                            
                                $num_ran=mt_rand($min, $max); 
                                echo"<td bgcolor=#ffafcc>",$num_ran,"</td>";
                            }
                            else{
                                echo "<td>",0,"</td>";
                            }
        
                        }  
                        $unit = $unit +1;
                        echo "</tr>";
                        }
                        echo "</table>";
                    }
                    else{
                        echo "Ingrese un Numero mayor a 6, porfavor";
                    }
                }
            }
            ?>
        <FORM ACTION="index.php" METHOD="POST">

            <br><br>Ingrese el tamaño de la matriz : <input type="text" name="num"><br><br>
            <input type="submit" name= "enviar" value="Ingresar">

        </FORM>
  
    </body>

</html>