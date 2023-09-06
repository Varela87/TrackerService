<?php

namespace App\Models;

use App\Config\Database;

class ClientModel
{
    use Database;

    protected $id;
    protected $nombre_completo;
    protected $email;
    protected $telefono;
    protected $direccion;

    public function __construct()
    {
        $this->Connect();
    }

    public function ListClient()
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM `clientes` ORDER BY `clientes`.`id_cliente` DESC");
            $stm->execute();
            return $stm->fetchAll(\PDO::FETCH_OBJ);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    public function OneClient()
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM clientes WHERE `clientes`.`id_cliente` = :id_client");
            $stm->bindParam(':id_client', $this->id, \PDO::PARAM_INT);
            $stm->execute();
            return $stm->fetchAll(\PDO::FETCH_OBJ);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    public function CreateClient()
    {
        try {
            $stm = $this->pdo->prepare(" INSERT INTO `clientes` (`cliente_nombre`, `cliente_email`, `cliente_telefono`, `cliente_direccion`) VALUES (:nombre, :email, :telefono, :direccion) ");
            $stm->bindParam(':nombre', $this->nombre_completo, \PDO::PARAM_STR);
            $stm->bindParam(':email', $this->email, \PDO::PARAM_STR);
            $stm->bindParam(':telefono', $this->telefono, \PDO::PARAM_STR);
            $stm->bindParam(':direccion', $this->direccion, \PDO::PARAM_STR);
            $stm->execute();
            return true;
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    public function DeleteClient()
    {
        try {
            $stm = $this->pdo->prepare("DELETE FROM clientes WHERE `clientes`.`id_cliente` = :id_client");
            $stm->bindParam(':id_client', $this->id, \PDO::PARAM_INT);
            $stm->execute();
            return true;
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }


    public function ExistClient()
    {
        try {
            $sql = "SELECT COUNT(*) FROM `clientes` WHERE `id_cliente` = :id_cliente";
            $stm = $this->pdo->prepare($sql);
            $stm->bindParam(':id_cliente', $this->id, \PDO::PARAM_INT);
            $stm->execute();

            $result = $stm->fetchColumn();

            return $result > 0 ? true : false;
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    //se que es mal editar todos los campos, pero por ahora queda asi
    public function EditClient()
    {
        try {
            $sql = "UPDATE `clientes` SET `cliente_nombre` = :nuevo_nombre, `cliente_email` = :nuevo_email, `cliente_telefono` = :nuevo_telefono, `cliente_direccion` = :nueva_direccion WHERE `id_cliente` = :id_cliente;";

            $stm = $this->pdo->prepare($sql);

            // Asignar valores a los marcadores de posición
            $stm->bindParam(':nuevo_nombre', $this->nombre_completo);
            $stm->bindParam(':nuevo_email', $this->email);
            $stm->bindParam(':nuevo_telefono', $this->telefono);
            $stm->bindParam(':nueva_direccion', $this->direccion);
            $stm->bindParam(':id_cliente', $this->id);

            // Ejecutar la consulta
            $stm->execute();
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }
}
