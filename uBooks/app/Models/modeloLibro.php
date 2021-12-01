<?php

namespace App\Models;

use CodeIgniter\Model;

class modeloLibro extends Model {

    protected $table='libros';
    protected $primaryKey = 'id_libro';
    protected $allowedFields = ['nombre_libro','nombre_usu','autor','genero_libro','link'];
   
}