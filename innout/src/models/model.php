<?php

class model{
    
    //apontando para o bd
    protected static $tableName = '';
    protected static $colums = [];
    protected $value = [];

    public function __construct($arr){

        $this-> loadFromArray($arr);
    

    }
    
    public function loadFromArray($arr){
        //saber se o array esta setado
        if($arr){
        //passar os valores do array para value
            foreach($arr as $key => $value){
                $this ->$key = $value;
                
            }
        }
    }
    
    public function __get($key){
        return $this->values[$key];

    }

    public function __set($key, $value){

        $this-> value[$key] = $value;
    }



    //select
  
    public function getSelect($filters = [] ,$colums = '*'){

        $sql = "SELECT  ${colums} FROM " . static::$tableName . static ::getFilters($filters); 
        return $sql;
    }

    
    //where
    private static function getFilters($filters){

        $sql = '';
        if(count($filters) > 0 ){

            $sql .="WHERE 1 = 1";
            foreach($filters as $colums => $value){

                $sql .=" AND ${colums} = " . static::getFormatedValue($value);
            }
        }

        return $sql;
    }

    
    //tratamento de formato 
    private static function getFormatedValue($value){

        if(is_null($value)){
            return "null";
        }elseif(gettype($value)=== 'string'){
            return "'${value}'";
        }else{
            return $value;
        }
    }    

}