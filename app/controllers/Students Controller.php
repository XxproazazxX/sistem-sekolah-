<?php
namespace App\Controllers;

class StudentsController { 
    public function index()
    {
        echo'<h1>daftar siswa</h1>';
        echo'<p>menampilkan daftar siswa</p>';
    }
    
    public function create()
    {

     echo'<h1>Tambah siswa</h1>';
            echo'<p>menampilkan form tambah siswa</p>';
    }

    public function show(string $id)
    {
      echo'Detail siswa';
      echo "<p>Menampilkan detail siswa ID : {$id}</p>";
    }
}