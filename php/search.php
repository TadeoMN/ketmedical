<?php
    include "conexion.php";

    if (!empty($conn)) {
        if (isset($_POST["datum"]) && $_POST["datum"] == 'search' && isset($_POST["searching"]) && $_POST["searching"] != '') {
            $search_term = $_POST["searching"];
            $sql = "SELECT * FROM ket_especialidad WHERE especialidad LIKE '" . $search_term . "%'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            echo '<div class="row">';
                echo '<div class="col-sm-4 p-0"><h5>Especialidad</h5></div>';
                echo '<div class="col-sm-4 p-0"><h5>Doctor</h5></div>';
                echo '<div class="col-sm-4 p-0"><h5>Categoria</h5></div>';
            echo '</div>';

            echo '<div class="row">';
                echo '<div class="col-12 col-sm-4 p-0">';
            if ($stmt->rowCount() > 0) {
                $results = $stmt->fetchAll();
                foreach ($results as $row) {
                    echo '<p class="card-text"><a href="php/speciality.php?id=' . $row["id"] . '">' . $row["especialidad"] . '</a></p>';
                }
            } else {
                echo '<p class="card-text">No hay resultados</p>';
            }
                echo '</div>';

                echo '<div class="col-12 col-sm-4 p-0">';

            $sql = "SELECT id, nombre FROM ket_doctores WHERE nombre LIKE '%" . $search_term . "%'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $results = $stmt->fetchAll();
                foreach ($results as $row) {
                    echo '<p class="card-text"><a href="' . $row["id"] . '">' . $row["nombre"] . '</a></p>';
                }
            } else {
                    echo '<p class="card-text">No hay resultados</p>';
            }
                echo '</div>';

                echo '<div class="col-12 col-sm-4 p-0">';
            $sql = "SELECT id, nombre FROM ket_categoria WHERE nombre LIKE '" . $search_term . "%'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $results = $stmt->fetchAll();
                foreach ($results as $row) {
                    echo '<p class="card-text"><a href="' . $row["id"] . '">' . $row["nombre"] . '</a></p>';
                }
            } else {
                echo '<p class="card-text">No hay resultados</p>';
            }
                echo '</div>';
            echo '</div>';
        }
    }