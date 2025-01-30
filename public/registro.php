<?php
// Este arquivo contém a lógica e o formulário para o registro de novos usuários.

require_once '../config/database.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Aqui você deve adicionar a lógica para inserir o usuário no banco de dados
    // Exemplo: chamar um método do modelo para registrar o usuário

    // Redirecionar ou exibir mensagem de sucesso
}

// Inclui o cabeçalho
include '../src/views/header.php';
?>

<h2>Registro de Usuário</h2>
<form method="post" action="registro.php">
    <label for="username">Nome de Usuário:</label>
    <input type="text" id="username" name="username" required>
    
    <label for="password">Senha:</label>
    <input type="password" id="password" name="password" required>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <input type="submit" value="Registrar">
</form>

<?php
// Inclui o rodapé
include '../src/views/footer.php';
?>