<?php
/*
Desde codeigniter debe usted cargar la libreria

$this->load->library("/tablas/bootstrap_table");


El array $functions, tendrá las funciones para cada dato según su nombre de campo,
 
*/

  $nombre_columnas = array(
        "<div style='text-align:rigth'>Rut</div>",
        "<div style='text-align:center'>Cliente</div>",
        "<div style='text-align:center'>Cantidad F&iacute;sica</div>",
        "<div style='text-align:center'>Cantidad Compensada</div>",
        "<div style='text-align:center'>Valor Neto [$]</div>",
        "<div style='text-align:rigth'>% Mes Participaci&oacute;n Valor Neto</div>",
        "<div style='text-align:center'>% Mes Acumulado Valor Neto</div>"
        );
         $functions=array(
        "plata"=>"monto_format_func",
        "QDespMenosQDevu"=>"miles_format_func",
        "QDespMenosQDevuComp"=>"miles_format_func",
             
        "p_part"=>"porc_",
        "p_acumulado"=>"porc_",
        "stkcomp"=>"miles_format_func"
        );
         
          $datos=array(
             array("1-9","Cliente TEST","123000","1233333","$ 56.111","5%","15%")   ,
             array("1-9","Cliente TEST","1000","1243333","$ 56.111","5%","15%")     ,
             array("1-9","Cliente TEST","12000","388888","$ 88","1%","1%")
         );
         
         
         $this->bootstrap_table->Create_Table_A
                 (                 
                 "ranking", // ID de la tabla, para identificar los datos 
                 $nombre_columnas, // array con los titulos de las columnas
                 $datos, // array con los datos 
                 $functions // llamadas a funciones js para procesar los datos en la vista
                 );
         
         $this->data["ranking"]=$this->bootstrap_table->data["ranking"];

/* $this->data["ranking"] podrá ser cargado mediante echo en la vista.

*/