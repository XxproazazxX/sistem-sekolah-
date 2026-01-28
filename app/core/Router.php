<?php
namespace App\Core;

use App\Controllers\StudentsController;
class Router
{
    public function run()
   {
      $method = $_SERVER['REQUEST_METHOD'];
      $uri= parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
      
        if ($method =='GET' && $uri == '/Students'){
            require_once'./app/controllers/Students Controller.php';
           $controller = new StudentsController();
              $controller->index();
            echo'<h1>daftar siswa</h1>';
            echo'<p>menampilkan daftar siswa</p>';
        return;
        }
         if ($method =='GET' && $uri == '/Students/create') {
           require_once'./app/controllers/Students Controller.php';
           $controller = new StudentsController();
              $controller->create();
        return;
        }

        http_response_code(404);
        echo'<h1>404 Not Found</h1>';
        
    }
}
