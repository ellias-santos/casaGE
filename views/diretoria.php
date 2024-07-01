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
    <body class="bg-light-grey font-family">
        <!-- LOADER -->
        <?php include "../views/partials/_loader.html" ?>
        <!-- CABECALHO NAVBAR -->
        <?php include "../views/partials/_navbar.html" ?>

        <div class="w-100 p-5 diretoria">
            <div class="container">
                <div class="titulo">
                    <h1>Diretoria</h1>
                    <p>Relação nominal dos membros que compõe a nova Diretoria e Conselho Fiscal desta instituição, 2022/2023:</p>
                </div>
                <main>
                    <section>
                        <h2><li>Suzamara de Oliveira Nascimento Ribeiro</li></h2>
                        <i>Presidente</i>
                    </section>
                    <section>
                        <h2><li>Eneida Galvão Villela Santos</li></h2>
                        <i>Vice-Presidente</i>
                    </section>
                    <section>
                        <h2><li>Cindy Cristina Povoa da Silva Jesus</li></h2>
                        <i>1ª Secretária</i>
                    </section>
                    <section>
                        <h2><li>Adriano Alberto Oliveira Aparício</li></h2>
                        <i>2º Secretário</i>
                    </section>
                    <section>
                        <h2><li>Neusa Fujita Carbognin</li></h2>
                        <i>1ª Tesoureira</i>
                    </section>
                    <section>
                        <h2><li>Marcos José Vieira Telles</li></h2>
                        <i>2º Tesoureiro</i>
                    </section>
                    <section>
                        <h2><li>Igor Gabriel da Silva Duarte Faria</li></h2>
                        <i>Conselho Fiscal</i>
                    </section>
                    <section>
                        <h2><li>Ageani de Castro Micheleto</li></h2>
                        <i>Conselho Fiscal</i>
                    </section>
                    <section>
                        <h2><li>Beatriz Ribeiro da Silva Duarte Faria</li></h2>
                        <i>Conselho Fiscal (Suplente)</i>
                    </section>
                    <section>
                        <h2><li>Julieta Nadyr de Oliveira</li></h2>
                        <i>Conselho Fiscal (Suplente)</i>
                    </section>
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