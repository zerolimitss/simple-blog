<?php

class Application
{
    protected $name_controller ;
    protected $method;
    protected $params;

    public function __construct()
    {
        $this->name_controller = BASE_CONTROLLER;

        $url = $_SERVER['REQUEST_URI'];
        $url = substr($url,1);
        $arr = explode('/',$url);

        if(!empty($arr[0])) {
            $this->method = strip_tags(trim($arr[0]));

            if(!empty($arr[1]) && !empty($arr[2])) {
                array_shift($arr);
                $ke = [];
                $ve = [];
                foreach ($arr as $k=>$v) {
                    if($k%2 === 0){
                        $ke[]=strip_tags(trim(($v)));
                    }else{
                        $ve[]=$v;
                    }
                }
                if(!$this->params = array_combine($ke,$ve)){
                    throw new Exception("Не правильный адресс",$url);
                }
            }
        }
        else{
            $this->method ='index';
        }

    }

    public function run()
    {
        if(class_exists($this->name_controller)){
            $controller = new $this->name_controller;
            if(method_exists($controller,$this->method))
                $controller->{$this->method}($this->params);
        }else{
            throw new Exception();
        }
    }
}