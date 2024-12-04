<?php
// Processamento do formulário após envio
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Coleta os dados do formulário
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $servico = $_POST['servico'];

    // Exemplo de como você poderia processar (salvar ou enviar por e-mail)
    // Para simplificação, estamos apenas exibindo as informações
    echo "<h2>Agendamento Confirmado</h2>";
    echo "<p><strong>Nome:</strong> " . htmlspecialchars($nome) . "</p>";
    echo "<p><strong>Data:</strong> " . htmlspecialchars($data) . "</p>";
    echo "<p><strong>Hora:</strong> " . htmlspecialchars($hora) . "</p>";
    echo "<p><strong>Serviço:</strong> " . htmlspecialchars($servico) . "</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de Corte</title>
</head>
<body>
    <h1>Agende seu Corte de Cabelo</h1>

    <form action="" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="data">Data:</label>
        <input type="date" id="data" name="data" required><br><br>

        <label for="hora">Hora:</label>
        <input type="time" id="hora" name="hora" required><br><br>

        <label for="servico">Escolha o Serviço:</label>
        <select name="servico" id="servico" required>
            <option value="Corte e Barba">Corte e Barba</option>
            <option value="Tintura">Tintura</option>
            <option value="Finalização">Finalização</option>
            <option value="Química Capilar">Química Capilar</option>
            <option value="Lavagem">Lavagem</option>
            <option value="Tranças">Tranças</option>
        </select><br><br>

        <button type="submit">Agendar</button>
    </form>
</body>
</html>
