<?php

$config = require __DIR__ . '/config.php';

try {
    $conexion = new PDO(
        "pgsql:host={$config['host']};port={$config['port']};dbname={$config['dbname']}",
        $config['user'],
        $config['password']
    );

    $conexion->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    echo "Conexión exitosa a PostgreSQL";
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
