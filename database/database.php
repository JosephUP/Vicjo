<?php
session_start();

//  Conectar a la base de datos (reemplazar con tus credenciales)
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

//  Si la conexión falla
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//  Obtener los datos del POST
$username = $_POST['user'];
$password = $_POST['password'];

//  Preparar la consulta SQL para evitar inyección SQL
$stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

//  Validar si el usuario existe y la contraseña coincide
if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        //  Usuario autenticado
        $_SESSION['user_id'] = $row['id'];
        echo json_encode(array('success' => true));
    } else {
        //  Contraseña incorrecta
        echo json_encode(array('success' => false));
    }
} else {
    //  Usuario no encontrado
    echo json_encode(array('success' => false));
}

$stmt->close();
$conn->close();

?>