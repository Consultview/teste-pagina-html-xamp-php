<?php
// Conexão com o banco de dados
include '../database/conexao.php';

        // Executar consulta SQL
        $sql = "SELECT id, nome, email, status FROM teste";
        $result = mysqli_query($conn, $sql);

        // Iterar pelos resultados e imprimir cada linha da tabela HTML
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["email"] ."</td><td>" . $row["status"] . "</td></tr>";
        }

       ?>