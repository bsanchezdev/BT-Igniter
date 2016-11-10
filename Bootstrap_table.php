<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bootstrap_table
 *
 * @author BSANCHEZ.
 */
require_once 'tab_extend.php';
class Bootstrap_table extends tab_extend{
   
public function create($data_source=null,$table_data=null,$columnas=null,$att=null,$dtogle=null,$functions=null) {
      //  var_dump($table_data);
         $js='<script> /* Benjamin Sanchez Library TABLE BOOTSTRAP*/'
                 . 'var data'.$att["id"].' = '.  json_encode($table_data).';

$(function () {
    $("#'.$att["id"].'").bootstrapTable({
        data: data'.$att["id"].'
    });
});</script>';
        $html='
       <table id="'.$att["id"].'" 
       data-search="'.@$att["data-search"].'"
       data-show-refresh="'.@$att["data-show-refresh"].'"
       data-show-toggle="'.@$att["data-show-toggle"].'"
       data-show-columns="'.@$att["data-show-columns"].'"
       data-unique-id="'.@$att["data-unique-id"].'" 
       data-show-footer="'.@$att["data-show-footer"].'" 
       data-pagination="'.@$att["data-pagination"].'" 
       data-sort-order="'.@$att["data-sort-order"].'"  
       data-page-size="'.@$att["data-page-size"].'" 
       data-sort-name="'.@$att["data-sort-name"].'" 
       data-row-style="rowStyle" 
       '.$dtogle.'
       class="'.@$att["clase"].'" 
       data-url="'.@$att["url"].'"
       border="0"
       style="'.@$att["style"].'">
    <thead style="color:black;">
      
        
         '.$this->data_field($table_data,$columnas,$functions).'
      
    </thead>
    <tbody>
        
    </tbody>
</table>'.$js;
       
        
       return $html;
        
    
        
    }
    
    
    protected function data_field($table_data,$cols,$functions=array()) {
        $dato_html="";
        $nombre_cols=array();
        foreach ($cols as $key => $value) :
            
            $nombre_cols[]=$value;
        endforeach;
        $c=0;
         foreach ($table_data as $key => $value) {
         foreach ($value as $key_ => $value_) {
             
             if (@array_key_exists($key_, $functions)):
                 $func='data-formatter="'.$functions[$key_].'"';
             else:
                 $func="";
             endif;
             
             $dato_html.="<th data-field='".@$key_."' ".@$func." >".@$nombre_cols[@$c]."</th>";
             $c++;
         // echo $key_;
         }
         break;
     }
     
     return "<tr>".$dato_html."</tr>";
    }
    
    
    protected function arreglo_to_utf8($data){
        $new_data=array();
        foreach ($data as $key => $value):
            foreach ($value as $key_ => $value_) {
            $new_data[$key][utf8_encode($key_)]=utf8_encode($value_);
            
            }
        endforeach;
       return $new_data;
    }
}
