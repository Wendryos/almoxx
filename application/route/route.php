<?php 
require_once __DIR__ . '/../config/constants.php';

class Route {
    
    public $uri  = array();

    public function __construct() { 

        $this->uri = [
            'index',
            'about',
            'dashboard',
        ];
        
        return $this->uri;
    }

    public function viewGet($request) {
        $request = str_replace("/almoxx/", '', $request);
        if (empty($request)): $request = "index"; endif;


        if (in_array($request, $this->uri)):
            $file = __PATH__ .  "view/{$request}.php";

            if (file_exists($file)):
                return file_get_contents($file);
            else:
                return file_get_contents( __PATH__ . "view/404.php");
            endif;
     
        else:
                return file_get_contents( __PATH__ .  "view/404.php");
        endif;


    }

}

?>