<?php
class HomeController
{
    protected $view;
    
    public function __construct(\Slim\Views\Twig $view) {
        $this->view = $view;
    }
    
    public function showHome($request, $response, $args) {
      // your code here
      // use $this->view to render the HTML
      return $this->view;//$response;
    }
}
?>