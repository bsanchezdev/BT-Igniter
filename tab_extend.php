<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tab_extend
 *
 * @author BSANCHEZ
 */
class tab_extend {
   
    
    
    public function Create_Table_A($id="",$cols=null,$ds=array(),$functions=null,$page_size=10,$url=null)
        {
      //  var_dump($this);
        
            $att=array("id"=>"$id",
        "style"=>"color: black;background-color: white;",
        "data-show-refresh"=>"false",
        "data-show-toggle"=>"true",
        "data-show-columns"=>"true",
        "data-search"=>"true",
        "data-page-size"=>$page_size,
        "data-pagination"=>"true",
        "clase"=>"display table table-condensed table-striped",
        "url"=>$url);
    
    
    //data-toggle="table" 
    
    
     $this->data[$id] =  $this->create
             ("url",
             $this->arreglo_to_utf8($ds),
             $cols,
             $att,
             'data-toggle="'.$id.'"',
             $functions);

  //  print_r($this->data[$id] );
    }
}
