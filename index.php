<?php  
/*
    Route
*/

$route = new Route();
echo $route->getView();

class Route {
    public $url;

    public function __construct() {
            $this->url = $_SERVER['REQUEST_URI'];  
            $this->url = str_replace('almoxx/', '', $this->url);
            return $this->url;
    }

    public function getView() {
        $file = $this->url . ".php";
        $file = $file == '/' ? $file = 'index.php' : $file = 'index.php';

        if (file_exists(__DIR__ ."/view/". $file)):
            return file_get_contents(__DIR__ . "/view/". $file);
        endif;

    }

}








?>