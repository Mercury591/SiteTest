<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamentos</title>
    <link rel="stylesheet" href="path/to/your/styles.css">
</head>
<body>
    <?php include '../src/views/header.php'; ?>

    <div class="container">
        <h1>Gerenciar Pagamentos</h1>
        <form action="process_payment.php" method="POST">
            <label for="amount">Valor:</label>
            <input type="text" id="amount" name="amount" required>

            <label for="payment_method">Método de Pagamento:</label>
            <select id="payment_method" name="payment_method" required>
                <option value="credit_card">Cartão de Crédito</option>
                <option value="debit_card">Cartão de Débito</option>
                <option value="paypal">PayPal</option>
            </select>

            <button type="submit">Realizar Pagamento</button>
        </form>

        <h2>Histórico de Pagamentos</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Valor</th>
                    <th>Método</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aqui você pode usar PHP para buscar e exibir os pagamentos do banco de dados -->
            </tbody>
        </table>
    </div>

    <?php include '../src/views/footer.php'; ?>
</body>
</html>