<?php

namespace App\Models;

use CodeIgniter\Model;

class modeloUsuario extends Model {

    protected $table='usuario';
    protected $primaryKey = 'identificacion';
    protected $allowedFields = ['nombre','correo','contraseña','telefono','direccion'];
   
}