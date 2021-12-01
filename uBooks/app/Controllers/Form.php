<?php

namespace App\Controllers;
use App\Models\modeloLibro;

class Form extends BaseController
{
    public function index()
    {
        return view('form');
    }


    public function registrarLibro(){
       
        //SE RECIBEN LOS DATOS DEL FORMULARIO
        $nombre_libro=$this->request->getPost("nombre_libro");
        $nombre_usu=$this->request->getPost("nombre_usu");
        $autor=$this->request->getPost("autor");
        $genero_libro=$this->request->getPost("genero_libro");
        $link=$this->request->getPost("link");

        //aplico las validaciones
        if($this->validate('formularioLibro')){

           try{

            //creo un objeto del modelo de productos
            $modelo=new modeloLibro();

            //se crea un arreglo con los datos recibidos
            $datos=array(
                "nombre_libro"=> $nombre_libro,
                "nombre_usu"=>$nombre_usu,
                "autor"=>$autor,
                "genero_libro"=>$genero_libro,
                "link"=>$link,
            );

            
            $modelo->insert($datos);

            $mensaje="exito agregando libro..";
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

    public function buscar(){

        try{

            //creo un objeto del modelo de productos
            $modelo=new modeloLibro();

            $resultado=$modelo->findAll();

            $productos=array("productos"=>$resultado);

            return view('listarLibros',$productos);


           }catch(\Exception $error){

               $mensaje=$error->getMessage();
               return redirect()->to(site_url('/from'))->with('mensaje',$mensaje);
               
           }

    }
}
