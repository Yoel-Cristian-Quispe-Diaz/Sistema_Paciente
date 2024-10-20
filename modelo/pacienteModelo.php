<?php
require_once "conexion.php";

class ModeloPaciente
{
    static public function mdlInfoPacientes()
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM pacientes");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    static public function mdlRegPaciente($data)
    {
        // Creamos variables para los datos
        $nombre = $data["nombre"];
        $apellido = $data["apellido"];
        $fecha_nacimiento = $data["fecha_nacimiento"];
        $direccion = $data["direccion"];
        $telefono = $data["telefono"];
        $correo = $data["correo"];

        // Consulta para insertar los datos del paciente
        $stmt = Conexion::conectar()->prepare("INSERT INTO pacientes (nombre, apellido, fecha_nacimiento, direccion, telefono, correo) VALUES ('$nombre', '$apellido', '$fecha_nacimiento', '$direccion', '$telefono', '$correo')");
        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }

    static public function mdlInfoPaciente($id)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM pacientes WHERE id = $id");
        $stmt->execute();
        return $stmt->fetch();
    }

    static public function mdlEditPaciente($data)
    {
        // Asignamos los valores del array a las variables correspondientes
        $nombre = $data["nombre"];
        $apellido = $data["apellido"];
        $fecha_nacimiento = $data["fecha_nacimiento"];
        $direccion = $data["direccion"];
        $telefono = $data["telefono"];
        $correo = $data["correo"];
        $id = $data["id"];

        // Consulta para actualizar los datos del paciente
        $stmt = Conexion::conectar()->prepare("UPDATE pacientes SET nombre = '$nombre', apellido = '$apellido', fecha_nacimiento = '$fecha_nacimiento', direccion = '$direccion', telefono = '$telefono', correo = '$correo' WHERE id = $id");
        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }

    static public function mdlEliPaciente($id)
    {
        // Consulta para eliminar un paciente
        $stmt = Conexion::conectar()->prepare("DELETE FROM pacientes WHERE id = $id");
        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }

    static public function mdlBusPaciente($apellidoPaciente)
    {
        // Buscamos el paciente por el apellido
        $stmt = Conexion::conectar()->prepare("SELECT * FROM pacientes WHERE apellido = '$apellidoPaciente'");
        $stmt->execute();
        return $stmt->fetch();
    }
}
