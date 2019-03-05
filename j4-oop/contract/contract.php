<?php

abstract class onlinegetway{
    protected $aptions;

    public function __construct()
    {
        $this->aptions=array(
          'mellat'=> array(
              'merchandid'=> '126f4d1e51',
              'username' => 'jiejeiww',
              'password'=> 's5ee78'
          ),
          'saman'=> array(
                'api_key'=> 'dkedow',
          ),
           'parsian'=>array(
                'username'=> 'jdijfhweie',
                'password' => 'ejeiww6w4'
            )
        );
        
   }
   abstract function sendRequest();
   abstract function verifyRequest();

}

class Melat extends onlinegetway{
   protected $getweay;
   protected $melatOption;

   public function __construct()
   {
       $this->getweay='mellat';
       parent::__construct();
       $this->melatOption=$this->aptions[$this->getweay];

   }

    function sendRequest()
    {
        var_dump($this->melatOption);
    }

    function verifyRequest()
    {
    }

}
$melat=factory::make('melat');
$melat->sendRequest();

class factory{
    public static function make($class)
    {
        $className=ucfirst($class);
        if (!class_exists($className)){
            return false;
        }else{
            $object=new $className;
            return $object;
        }
    }
}