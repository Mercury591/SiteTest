<?php
// Este é o ponto de entrada do site. Ele carrega as configurações necessárias e direciona o usuário para as páginas apropriadas.

require_once '../config/database.php';

// Lógica para determinar qual página carregar
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'registro':
        require_once 'registro.php';
        break;
    case 'downloads':
        require_once 'downloads.php';
        break;
    case 'pagamentos':
        require_once 'pagamentos.php';
        break;
    case 'forum':
        require_once 'forum.php';
        break;
    default:
        // Carregar uma página inicial ou um erro 404
        echo "Página não encontrada.";
        break;
}
?>