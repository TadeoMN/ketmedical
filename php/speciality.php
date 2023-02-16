<?php
    include "conexion.php";

    if (!empty($conn)) {
        if (isset($_GET["id"]) && !empty($_GET["id"])) {
            $id = $_GET["id"];
            // Consulta
            $sql = "SELECT * FROM ket_especialidad WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->execute(["id" => $id]);

            if ($stmt->rowCount() > 0) {
                $result = $stmt->fetch();

                $id = $result["id"];
                $especialidad = $result["especialidad"];
                $idDoctor = $result["id_doctor"];

                include '../especialidad.php';
//                header("Location: ../especialidad.php?id=" . $result["id"] . "&especialidad=" . $result["especialidad"]. "&idDoctor=" . $result["id_doctor"]);
            } else {
                echo "No se encontraron resultados para el ID especificado";
            }
        } else {
            echo "No se ha especificado un ID válido";
        }
    }