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

        <div class="capa">
            <h1>Notícias</h1>
        </div>
        <div class="noticias noticias_page">
            <main>
                <div class="noticia-box">
                    <div class="noticia-item">
                        <div class="noticia-item-img">
                            <a href="noticia.php">
                                <img src="../public/img/estrutura.jpg" alt="">
                            </a>
                        </div>
                        <main>
                            <a href="noticia.php">
                                <h1 class="noticia-titulo">Notícia Título</h1>
                            </a>
                            <p class="noticia-desc">Descrição da notícia.</p>
                            <a href="noticia.php"><button>Ler mais <i class="fa-solid fa-arrow-right"></i></button></a>
                        </main>
                    </div>
                </div>
            </main>
        </div>

        <!-- FOOTER -->
        <?php include "../views/partials/_footer.html" ?>
        <!-- SCRIPT JS -->
        <script src="../public/js/script.js"></script>
        <!-- BOOTSTRAP JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>