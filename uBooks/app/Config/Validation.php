<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];



    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------

    public $formularioUsuario=[

        'id'=>'required',
        'nombre'=>'required',
        'correo'=>'required',
        'contraseña'=>'required',
        'telefono'=>'required',
        'direccion'=>'required'
    ]; 

    public $formularioLibro=[
        'nombre_libro'=>'required',
        'nombre_usu'=>'required',
        'autor'=>'required',
        'genero_libro'=>'required',
        'link'=>'required',
    ];
}
