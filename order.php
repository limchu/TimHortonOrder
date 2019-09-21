<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <meta charset="UTF-8">
        <title>Welcome to Tim Horton's</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
        echo "<h2>Thanks for your order. Here it is:</h2>";  
        
        function foo($cNo,$crNo,$sNo,$size,$slang){
            echo $slang;
            
            for($i=0; $i<$cNo; $i++){
             echo "<div id=cont2>
                <img src='imgs/cup.jpg' alt='banner' class='$size'>";

                if($crNo > 0){                  
                    echo "<img src='imgs/plus.jpg' alt='banner'>";
                }
             
                for($k=0; $k<$crNo; $k++){
                    echo "<img src='imgs/cream.jpg' alt='banner'>";
                }
                if($sNo > 0){
                    
                    echo "<img src='imgs/plus.jpg' alt='banner'>";
                }
                for($j=0; $j<$sNo; $j++){
                    echo "<img src='imgs/sugar.jpg' alt='banner'>";
                }                
             echo "</div>";                        
            }
        }
        
        function foo1($cNo,$size){                        
            if($size==value0){
               $price= ($cNo*2.5)*1.13;
               echo "Cost: \$2.5*$cNo+tax=\$$price";
            }
            elseif($size==value1 || value2 || value3){
               $price= ($cNo*1.5)*1.13;
               echo "Cost: \$1.5*$cNo+tax=\$$price";
            }
        }
        
        function slang($type){
            if($type==regular){
            $crNo=1;
            $sNo=1;            
            }
            elseif($type==doubledouble){
            $crNo=2;
            $sNo=2;   
            }
            elseif($type==tripletriple){
            $crNo=3;
            $sNo=3;    
            }
            elseif($type==black){
            $crNo=0;
            $sNo=0;    
            }
            elseif($type==blackOsugar){
            $crNo=0;
            $sNo=1;    
            }
            elseif($type==blackTsugar){
            $crNo=0;
            $sNo=2;    
            }
            else{
            $crNo=0;
            $sNo=3;    
            }
        }

        
        
        $cNo=$_POST['noCof'];
        $crNo=$_POST['noCream'];
        $sNo=$_POST['noSugar'];
        $size=$_POST['size'];
        $type[]=$_POST['type'];
        foo($cNo,$crNo,$sNo,$size,$slang);
        foo1($cNo,$size);
        $slang[]= slang($type); 
        ?>

        

    </body>
</html>
