<?php
namespace App\Core;

class Router
{
    public function run()
   {
      $method = $_SERVER['REQUEST_METHOD'];
      $uri= parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
      
        if ($method =='GET' && $uri == '/Students'){
            echo'<h1>daftar siswa</h1>';
            echo'<p>menampilkan daftar siswa</p>';
        return;
        }
         if ($method =='GET' && $uri == '/Students/create') {
            echo'<h1>Tambah siswa</h1>';
            echo'<p>menampilkan form tambah siswa</p>';
        return;
        }

        http_response_code(404);
        echo'<h1>404 Not Found</h1>';
        
    }
}
