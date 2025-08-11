<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configurações de e-mail
    $to = "minloocompany@gmail.com"; // Substitua pelo endereço de e-mail desejado
    $subject = "Nova mensagem do formulário de contato";
    
    // Capturando os dados do formulário
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
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
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- FIM GOOGLE FONTES -->
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- FIM BOOTSTRAP ICONS -->
    
    <link rel="stylesheet" href="style.css">
    
   

    <title>Genius&Finny</title>
</head>
<body>

    <header>
        <div class="interface">
            <div class="logo">
                <a href="#">
                    <img src="images/logo.png" alt="Logo Finny">
                </a>
            </div><!--logo-->

            <nav class="menu-desktop">
                <ul>
                    <li><a href="index.html">Início</a></li>
                    <li><a href="finny.html">Finny</a></li>
                    <li><a href="sobrenos.html">Sobre nós</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </nav>

            
            <div class="btn-contato">
                <a href="index.html">
                    <button>Voltar</button>
                </a>
            </div><!--btn-contato-->

            <div class="btn-abrir-menu" id="btn-menu">
                <i class="bi bi-list"></i>
            </div>

            <div class="menu-mobile" id="menu-mobile">
                <div class="btn-fechar">
                    <i class="bi bi-x-lg"></i>
                </div>

                <nav>
                    <ul>
                        <li><a href="inicio.html">Início</a></li>
                        <li><a href="finny.html">Finny</a></li>
                        <li><a href="sobrenos.html">Sobre nós</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="contato.php">Contato</a></li>
                    </ul>
                </nav>

           
            </div><!--menu-mobile-->
            <div class="overlay-menu" id="overlay-menu"></div>
        </div><!--interface-->
    </header>

    <main>
        <section id="#inicio" class="topo-do-site">
            <div class="interface">
                <div class="flex">
                    <div class="txt-topo-site">
                        <h1> FALE <span> CONOSCO </span></h1>
                        <p>  </p>
                        <div class="btn-contato">


                            <section class="formulario">
                                <div class="interface">
                                    <a href="envia.php"></a>
                                    <h2 class="titulo"><span></span></h2>
                                    <?php if (isset($success)): ?>
                                    <div class="message success"><?php echo $success; ?></div>
                                   <?php endif; ?>

                                   <?php if (isset($error)): ?>
                                   <div class="message error"><?php echo $error; ?></div>
                                  <?php endif; ?>
                    
                                    <form action="envia.php" method="post">
                                        <input type="text" name="" id="" placeholder="Seu nome completo:" required>
                                        <input type="text" name="" id="" placeholder="Seu e-mail:" required>
                                        <input type="text" name="" id="" placeholder="Seu celular:">
                                        <textarea name="" id="" placeholder="Sua mensagem" required></textarea>
                                        <div class="btn-enviar"><input type="submit" value="ENVIAR"></div>
                                    </form>
                                </div><!--interface-->
                            </section><!--formulario-->
                    
                        </main>
                    



                           
                                                
                        
</body> 
</html>