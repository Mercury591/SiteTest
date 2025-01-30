<?php
// Este arquivo gerencia as transações de pagamento e exibe informações relevantes.

// Inclui o cabeçalho
include '../src/views/header.php';

// Função para processar o pagamento via API do Pagbank
function processPayment($amount) {
    $url = 'https://api.pagbank.com.br/v1/payments';
    $data = [
        'amount' => $amount,
        'currency' => 'BRL',
        'payment_method' => 'credit_card',
        // Adicione outros parâmetros necessários para a API do Pagbank
    ];

    $options = [
        'http' => [
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data),
        ],
    ];

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    if ($result === FALSE) {
        return false;
    }

    return json_decode($result, true);
}

// Lógica para gerenciar pagamentos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $amount = $_POST['amount'];
    $paymentResult = processPayment($amount);

    if ($paymentResult && $paymentResult['status'] === 'success') {
        echo "<p>Pagamento de R$ $amount realizado com sucesso!</p>";
    } else {
        echo "<p>Falha ao processar o pagamento. Tente novamente.</p>";
    }
}

// Exibe o formulário de pagamento
?>
<h2>Realizar Pagamento</h2>
<form method="POST" action="pagamentos.php">
    <label for="amount">Valor:</label>
    <input type="number" name="amount" id="amount" required>
    <button type="submit">Pagar</button>
</form>

<?php
// Inclui o rodapé
include '../src/views/footer.php';
?>