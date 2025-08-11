<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificando se os campos obrigatórios foram preenchidos
    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['mensagem']) && !empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['mensagem'])) {

        // Validando o e-mail
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error = "O e-mail fornecido não é válido.";
        } else {
            // Configurações de e-mail
            $to = "mindCash.co@gmail.com"; // Substitua pelo endereço de e-mail desejado
            $subject = "Nova mensagem do formulário de contato";

            // Capturando os dados do formulário com segurança
            $name = htmlspecialchars($_POST['nome']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['mensagem']);

            // Formatando a mensagem
            $body = "Nome: $name\nE-mail: $email\n\nMensagem:\n$message";

            // Cabeçalhos do e-mail
            $headers = "From: $email";

            // Enviando o e-mail
            if (mail($to, $subject, $body, $headers)) {
                $success = "Sua mensagem foi enviada com sucesso!";
            } else {
                $error = "Ocorreu um erro ao enviar sua mensagem. Por favor, tente novamente.";
            }
        }
    } else {
        $error = "Por favor, preencha todos os campos obrigatórios.";
    }
}
?>
