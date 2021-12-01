<?php

namespace App\Controllers;
use App\Models\modeloUsuario;
class Signin extends BaseController
{
    public function index()
    {
        return view('signin');
    }


    public function registrar(){
       

        //SE RECIBEN LOS DATOS DEL FORMULARIO
        $id=$this->request->getPost("id");
        $nombre=$this->request->getPost("nombre");
        $correo=$this->request->getPost("correo");
        $contraseña=$this->request->getPost("contraseña");
        $telefono=$this->request->getPost("telefono");
        $direccion=$this->request->getPost("direccion");

        //aplico las validaciones
        if($this->validate('formularioUsuario')){

           try{

            //creo un objeto del modelo de productos
            $modelo=new modeloUsuario();

             //se crea un arreglo con los datos recibidos
            $datos=array(
                "identificacion"=> $id,
                "nombre"=>$nombre,
                "correo"=>$correo,
                "contraseña"=>$contraseña,
                "telefono"=>$telefono,
                "direccion"=>$direccion,
            );

            
            $modelo->insert($datos);

            $mensaje="exito agregando Usuario..";
            return redirect()->to(site_url('/signin'))->with('mensaje',$mensaje);


           }catch(\Exception $error){

               $mensaje=$error->getMessage();
               return redirect()->to(site_url('/signin'))->with('mensaje',$mensaje);
               
           }

        }else{
            $mensaje="Revise por favor, hay datos obligatorios";
    
            return redirect()->to(site_url('/signin'))->with('mensaje',$mensaje);

        }

    }

}


