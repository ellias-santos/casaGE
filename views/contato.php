<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Casa GE</title>
        <link rel="shortcut icon" type="image/icon" href="https://casage.com.br/assets/images/logo-vertical.png">
        <link rel="stylesheet" href="../public/css/style.css">

        <!-- BOOTSTRAP CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- FONT  AWESOME-->
        <script src="https://kit.fontawesome.com/d31ffad7fe.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- LOADER -->
        <?php include "../views/partials/_loader.html" ?>
        <!-- CABECALHO NAVBAR -->
        <?php include "../views/partials/_navbar.html" ?>

        <div class="w-100 bg-light-grey p-5 font-family estrutura-doacao-contato">
            <div class="container">
                <h1>Doação</h1>
                <main class="row mt-3">
                    <div class="col-12 col-lg-6 mb-4">
                        <img src="../public/img/estrutura.jpg" alt="" width="100%" class="mb-3"><br>
                        <i>Descrição da imagem</i>
                        <div class="row mt-3">
                            <div class="col-4"><img src="../public/img/estrutura.jpg" alt="" width="100%" class="mb-3"><br></div>
                            <div class="col-4"><img src="../public/img/estrutura.jpg" alt="" width="100%" class="mb-3"><br></div>
                            <div class="col-4"><img src="../public/img/estrutura.jpg" alt="" width="100%" class="mb-3"><br></div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <h2>Entre em contato conosco: </h2>
                        <p>Para obter mais informações ou esclarecer dúvidas, não hesite em entrar em contato conosco. Estamos à disposição para atendê-lo(a) através de nossos canais de comunicação. Você pode nos ligar pelo telefone (XX) XXXX-XXXX, enviar um e-mail para contato@instituicao.org, ou visitar nossa sede localizada na Rua Exemplo, 123, Bairro Modelo. Nosso horário de atendimento é de segunda a sexta, das 8h às 18h. Aguardamos seu contato!</p>
                        <form action="" method="">
                            <label>Seu nome: </label>
                            <input type="text" placeholder="Seu nome completo" required>

                            <label>Seu e-mail: </label>
                            <input type="email"placeholder="exemplo@email.com" required>

                            <label>Seu telefone: </label>
                            <input type="tel" placeholder="(XX) XXXXX-XXXX" required>

                            <label>Assunto: </label>
                            <input type="tel" placeholder="Sobre o que deseja falar?" required>

                            <label>Mensagem: </label>
                            <textarea id="mensagem" name="mensagem" rows="4" required></textarea>

                            <input type="submit" value="Enviar" onclick="alert('Mensagem enviada com sucesso!')">
                        </form>
                    </div>
                </main>
            </div>
        </div>

        <!-- FOOTER -->
        <?php include "../views/partials/_footer.html" ?>
        <!-- SCRIPT JS -->
        <script src="../public/js/script.js"></script>
        <!-- BOOTSTRAP JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>