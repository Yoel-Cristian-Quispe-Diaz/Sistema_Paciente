<?php

$ruta = parse_url($_SERVER["REQUEST_URI"]);

if (isset($ruta["query"])) {

    if (
        $ruta["query"] == "ctrRegPaciente" ||
        $ruta["query"] == "ctrEditPaciente" ||
        $ruta["query"] == "ctrBusPaciente" ||
        $ruta["query"] == "ctrEliPaciente"
    ) {
        $metodo = $ruta["query"];
        $Paciente = new ControladorPaciente();
        $Paciente->$metodo();
    }
}

class ControladorPaciente
{
    static public function ctrInfoPacientes()
    {
        $respuesta = ModeloPaciente::mdlInfoPacientes();
        return $respuesta;
    }

    static public function ctrRegPaciente()
    {
        require "../modelo/pacienteModelo.php";
        $data = array(
            "nombre" => $_POST["nombre"],
            "apellido" => $_POST["apellido"],
            "fecha_nacimiento" => $_POST["fecha_nacimiento"],
            "direccion" => $_POST["direccion"],
            "telefono" => $_POST["telefono"],
            "correo" => $_POST["correo"]
        );

        $respuesta = ModeloPaciente::mdlRegPaciente($data);

        echo $respuesta;
    }

    static public function ctrInfoPaciente($id)
    {
        $respuesta = ModeloPaciente::mdlInfoPaciente($id);
        return $respuesta;
    }

    static public function ctrEditPaciente()
    {
        require "../modelo/pacienteModelo.php";

        // Actualizamos los datos del paciente
        $data = array(
            "nombre" => $_POST["nombre"],
            "apellido" => $_POST["apellido"],
            "fecha_nacimiento" => $_POST["fecha_nacimiento"],
            "direccion" => $_POST["direccion"],
            "telefono" => $_POST["telefono"],
            "correo" => $_POST["correo"],
            "id" => $_POST["id"]
        );

        $respuesta = ModeloPaciente::mdlEditPaciente($data);
        echo $respuesta;
    }

    static public function ctrEliPaciente()
    {
        require "../modelo/pacienteModelo.php";
        $id = $_POST["id"];

        $respuesta = ModeloPaciente::mdlEliPaciente($id);
        echo $respuesta;
    }

    static public function ctrBusPaciente()
    {
        require "../modelo/pacienteModelo.php";
        $apellidoPaciente = $_POST["apellido"];

        $respuesta = ModeloPaciente::mdlBusPaciente($apellidoPaciente);
        echo json_encode($respuesta);
    }
}
