<?php
namespace Model;
require_once 'Conexion.php';
require_once 'Model/Usuario.php';

class M_Usuario extends Conexion
{
    public function getUsers(){
        $query = parent::con()->query('SELECT * FROM usuarios');
        
        $retorno = [];
        
        while($fila = $query->fetch_assoc()){
            $retorno[] = $fila;
        }
        
        return  $retorno;
    }
    
    public function insertUsuario(Usuario $usuario){
        $sentencia = parent::con()->prepare("INSERT INTO usuarios(username, password, nombre) VALUES (?,?,?)");
        
        $sentencia->bind_param("sss", $usuario->getUsername(), $usuario->getPassword(), $usuario->getNombre());
        
        $sentencia->execute();
        $sentencia->close();
    }
    
    public function deleteUser($username){
        $sentencia = parent::con()->prepare("DELETE from usuarios where username = ?");
        
        $sentencia->bind_param("s",$username);
        
        $sentencia->execute();
        $sentencia->close();
        
    }
    
    public function modifierUser(Usuario $usuario){
        $sentencia = parent::con()->prepare("UPDATE usuarios SET password=?, nombre=? WHERE username='".$usuario->getUsername()."';");
        
        $sentencia->bind_param("sss",$usuario->getPassword(), $usuario->getNombre(), $usuario->getUsername());
        
        $sentencia->execute();
        $sentencia->close();
    }
}

