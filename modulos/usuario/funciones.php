   <?php 
   function autogenerado($tabla,$campocodigo,$numcaracteres){
     Global $link;
       //para extraer de la derecha se multiplica por -1
       $numcaracteres=$numcaracteres*(-1);
       $rsTabla=mysqli_query($link, "select count($campocodigo) from $tabla");
       $ATabla=mysqli_fetch_array($rsTabla);
       $nreg=$ATabla[0];
       if($nreg>0) {
         $rsTabla=mysqli_query($link, "select $campocodigo from $tabla");
         mysqli_data_seek($rsTabla,$nreg-1);
         $ATabla=mysqli_fetch_array($rsTabla);
       }
       $cod=$ATabla[0]+1;
       $cod="00000000000000".$cod;
       $generado=substr($cod,$numcaracteres);
       mysqli_free_result($rsTabla);
       return $generado;
   }