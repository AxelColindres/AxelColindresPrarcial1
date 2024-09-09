<?php

namespace App\Controllers;
use App\Models\ClientesModel;

class ClientesController extends BaseController
{
    public function verClientes(): string
    {
        $clientes = new ClientesModel();
        $datos['datos']=$clientes->findAll();
        return view('inicio',$datos);
    }

    public function insertarCliente():string
    {
        return view('nuevo_cliente');
    }

    public function guardarCliente()
    {
        $clientes = new ClientesModel();
        $datos = [
            'cliente_id' => $this->request->getPost('txtClienteID'),
            'nombre' => $this->request->getPost('txtNombre'),    
            'apellido' => $this->request->getPost('txtApellido'),
            'fecha_nacimiento' => $this->request->getPost('txtFechaNac'),    
            'fecha_sucripcion' => $this->request->getPost('txtFechaSub'),
            'correo_electronico' => $this->request->getPost('txtCorreo'),
            'telefono_movil' => $this->request->getPost('txtTelefono')
        ];    
        print_r($datos);
        $clientes->insert($datos);
        return redirect()->route('ver_clientes');
    }

    public function eliminarCliente($cod=null)
    {
        $clientes = New ClientesModel();
        $clientes->delete(['cliente_id'=>$cod]);
        return $this -> verClientes();
    }

    public function actualizarCliente($cod=null)
    {
        $clientes = new ClientesModel();
        $datos['datos']=$clientes->where(['cliente_id'=>$cod])->first();
        return view('actualizar_cliente',$datos);
    }

    public function modificarCliente()
    {
        $clientes = new ClientesModel();
        $datos = [
            'cliente_id' => $this->request->getPost('txtClienteID'),
            'nombre' => $this->request->getPost('txtNombre'),    
            'apellido' => $this->request->getPost('txtApellido'),
            'fecha_nacimiento' => $this->request->getPost('txtFechaNac'),    
            'fecha_sucripcion' => $this->request->getPost('txtFechaSub'),
            'correo_electronico' => $this->request->getPost('txtCorreo'),
            'telefono_movil' => $this->request->getPost('txtTelefono')
        ];    
        $clientes->update($datos['cliente_id'],$datos);
        return $this->verClientes();
    }
}


