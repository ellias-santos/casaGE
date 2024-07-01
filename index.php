<!DOCTYPE html>
<html lang="pt">
    <meta charset="utf-8">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Casa GE</title>
        <link rel="shortcut icon" type="image/icon" href="https://casage.com.br/assets/images/logo-vertical.png">
        <link rel="stylesheet" href="public/css/style.css">

        <!-- BOOTSTRAP CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- FONT  AWESOME-->
        <script src="https://kit.fontawesome.com/d31ffad7fe.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <!-- LOADER -->
        <?php include "views/partials/_loader.html" ?>
        <!-- CABECALHO NAVBAR -->
        <?php include "views/partials/_navbar.html" ?>
        
        <!-- INTRODUCAO -->
        <main class="intro">
            <article class="darkblue-element">
                <h1 class="title-intro">
                    Somos uma organização de apoio a pessoas com câncer em situação de vulnerabilidade
                </h1>
                <p class="desc-intro">Nossa missão é apoiar pessoas e familiares no enfrentamento ao câncer</p>
                <section class="btn-intro">
                    <button class="btn-intro" onclick="window.location.href = '#about-us';">Conheça nossos serviços</button>
                    <button class="btn-intro" onclick="window.location.href = '#doacao';">Apoie nossa causa</button>
                </section>
            </article>
            <span class="lightblue" />
        </main>

        <!-- "SOBRE NOS" -->
        <div class="container aboutus" id="about-us">
            <main class="row">
                <aside class="col-12 col-lg-6 text-center text-lg-start img-aboutus"><img src="public/img/estrutura.jpg" alt="Casa GE" class="img-aboutus"></aside>
                <article class="col-12 col-lg-6 content-aboutus text-center text-lg-start">
                    <h1 class="title-aboutus">Sobre a Casa GE</h1>
                    <p class="desc-aboutus">A <b>Casa GE</b> (Garra e Esperança) é um centro de acolhimento, apoio social e psicológico a pacientes oncológicos (câncer) localizada na Vila Santos, em Caçapava.</p>
                    <p class="desc-aboutus">Entre tantos projetos que fazemos, os principais são: atendimentos psicologia, social, nutricional e com advogado.</p>
                    <button class="btn-aboutus" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Continuar lendo</button>
                    <section class="collapse" id="collapseExample">
                        <p class="desc-aboutus">A <b>“CASA DE APOIO AO PACIENTE ONCOLÓGICO – CASA GE – GARRA E ESPERANÇA”</b> fundada em agosto de 2005, desenvolve atividades voltadas para a melhoria da qualidade de vida dos pacientes portadores de câncer. É uma associação beneficente de assistência social, sem fins lucrativos, com personalidade jurídica própria, e sem qualquer vinculo com entidades similares.</p>
                        <p class="desc-aboutus">Desde sua fundação até os dias atuais, mais de 2.000 (duas mil) pessoas já passaram pela Instituição em busca de informação, orientação, apoio e esclarecimentos a respeito da doença. Atualmente 556 (quinhentos e cinquenta e seis) pessoas estão cadastradas, onde 152 (cento e cinquenta e dois) são usuários, recebendo apoio social (campanhas de prevenção, palestras, orientações e encaminhamentos), psicológico, apoio assistencial (ambulatorial e material), fraterno e jurídico; sendo esta a prioridade estabelecida.</p>
                    </section>
                </article>
            </main>
            <div class="row objetivos">
                <article class="col-12 col-lg-4 objetivos-individuais">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25%" viewBox="0 0 384 512" style="aspect-ratio: 1/1;"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#26a7e1" d="M173.8 5.5c11-7.3 25.4-7.3 36.4 0L228 17.2c6 3.9 13 5.8 20.1 5.4l21.3-1.3c13.2-.8 25.6 6.4 31.5 18.2l9.6 19.1c3.2 6.4 8.4 11.5 14.7 14.7L344.5 83c11.8 5.9 19 18.3 18.2 31.5l-1.3 21.3c-.4 7.1 1.5 14.2 5.4 20.1l11.8 17.8c7.3 11 7.3 25.4 0 36.4L366.8 228c-3.9 6-5.8 13-5.4 20.1l1.3 21.3c.8 13.2-6.4 25.6-18.2 31.5l-19.1 9.6c-6.4 3.2-11.5 8.4-14.7 14.7L301 344.5c-5.9 11.8-18.3 19-31.5 18.2l-21.3-1.3c-7.1-.4-14.2 1.5-20.1 5.4l-17.8 11.8c-11 7.3-25.4 7.3-36.4 0L156 366.8c-6-3.9-13-5.8-20.1-5.4l-21.3 1.3c-13.2 .8-25.6-6.4-31.5-18.2l-9.6-19.1c-3.2-6.4-8.4-11.5-14.7-14.7L39.5 301c-11.8-5.9-19-18.3-18.2-31.5l1.3-21.3c.4-7.1-1.5-14.2-5.4-20.1L5.5 210.2c-7.3-11-7.3-25.4 0-36.4L17.2 156c3.9-6 5.8-13 5.4-20.1l-1.3-21.3c-.8-13.2 6.4-25.6 18.2-31.5l19.1-9.6C65 70.2 70.2 65 73.4 58.6L83 39.5c5.9-11.8 18.3-19 31.5-18.2l21.3 1.3c7.1 .4 14.2-1.5 20.1-5.4L173.8 5.5zM272 192a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM1.3 441.8L44.4 339.3c.2 .1 .3 .2 .4 .4l9.6 19.1c11.7 23.2 36 37.3 62 35.8l21.3-1.3c.2 0 .5 0 .7 .2l17.8 11.8c5.1 3.3 10.5 5.9 16.1 7.7l-37.6 89.3c-2.3 5.5-7.4 9.2-13.3 9.7s-11.6-2.2-14.8-7.2L74.4 455.5l-56.1 8.3c-5.7 .8-11.4-1.5-15-6s-4.3-10.7-2.1-16zm248 60.4L211.7 413c5.6-1.8 11-4.3 16.1-7.7l17.8-11.8c.2-.1 .4-.2 .7-.2l21.3 1.3c26 1.5 50.3-12.6 62-35.8l9.6-19.1c.1-.2 .2-.3 .4-.4l43.2 102.5c2.2 5.3 1.4 11.4-2.1 16s-9.3 6.9-15 6l-56.1-8.3-32.2 49.2c-3.2 5-8.9 7.7-14.8 7.2s-11-4.3-13.3-9.7z" />
                    </svg><br>
                    <h2 class="objetivos">Nossa missão</h2>
                    <hr>
                    <p>Proporcionar apoio, dignidade e qualidade de vida aos pacientes oncológicos e familiares.</p>
                </article>
                <article class="col-12 col-lg-4 objetivos-individuais">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25%" viewBox="0 0 512 512" style="rotate: 315deg; aspect-ratio: 1/1;"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#26a7e1" d="M156.6 384.9L125.7 354c-8.5-8.5-11.5-20.8-7.7-32.2c3-8.9 7-20.5 11.8-33.8L24 288c-8.6 0-16.6-4.6-20.9-12.1s-4.2-16.7 .2-24.1l52.5-88.5c13-21.9 36.5-35.3 61.9-35.3l82.3 0c2.4-4 4.8-7.7 7.2-11.3C289.1-4.1 411.1-8.1 483.9 5.3c11.6 2.1 20.6 11.2 22.8 22.8c13.4 72.9 9.3 194.8-111.4 276.7c-3.5 2.4-7.3 4.8-11.3 7.2v82.3c0 25.4-13.4 49-35.3 61.9l-88.5 52.5c-7.4 4.4-16.6 4.5-24.1 .2s-12.1-12.2-12.1-20.9V380.8c-14.1 4.9-26.4 8.9-35.7 11.9c-11.2 3.6-23.4 .5-31.8-7.8zM384 168a40 40 0 1 0 0-80 40 40 0 1 0 0 80z" />
                    </svg><br>
                    <h2 class="objetivos">Nossa visão</h2>
                    <hr>
                    <p>Ser referência em proporcionar apoio integral durante o tratamento oncológico.</p>
                </article>
                <article class="col-12 col-lg-4 objetivos-individuais">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25%" viewBox="0 0 384 512" style="aspect-ratio: 1/1;"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#26a7e1" d="M272 384c9.6-31.9 29.5-59.1 49.2-86.2l0 0c5.2-7.1 10.4-14.2 15.4-21.4c19.8-28.5 31.4-63 31.4-100.3C368 78.8 289.2 0 192 0S16 78.8 16 176c0 37.3 11.6 71.9 31.4 100.3c5 7.2 10.2 14.3 15.4 21.4l0 0c19.8 27.1 39.7 54.4 49.2 86.2H272zM192 512c44.2 0 80-35.8 80-80V416H112v16c0 44.2 35.8 80 80 80zM112 176c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-61.9 50.1-112 112-112c8.8 0 16 7.2 16 16s-7.2 16-16 16c-44.2 0-80 35.8-80 80z" />
                    </svg><br>
                    <h2 class="objetivos">Nossos valores</h2>
                    <hr>
                    <p>Solidariedade, Comprometimento, Humanização e Excelência.</p>
                </article>
            </div>
        </div>

        <!-- SERVIÇOS -->
        <main class="servicos">
            <h1 class="servicos">Serviços</h1>
            <h2 class="servicos">Confira nossos principais serviços</h2>
            <article class="row gap-5 w-100 row-servicos">
                <section class="col-12 col-lg-3 servicos-box">
                    <figure class="img-servicos">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50%" viewBox="0 0 512 512" style="aspect-ratio: 1/1;" class="servicos"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#fdfbf9" d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64h96v80c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64z" />
                        </svg>
                    </figure>
                    <h2 class="servicos-box">Ações de prevenção</h2>
                    <p>Realizamos uma série de eventos com temas variados, criamos e divulgamos materiais informativos sobre a conscientização do tratamento do câncer e sua prevenção. Acreditamos que conhecimento e suporte podem salvar vidas.</p>
                </section>
                <section class="col-12 col-lg-3 servicos-box">
                    <figure class="img-servicos">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50%" viewBox="0 0 512 512" style="aspect-ratio: 1/1;" class="servicos"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#fdfbf9" d="M464 256H48a48 48 0 0 0 0 96h416a48 48 0 0 0 0-96zm16 128H32a16 16 0 0 0 -16 16v16a64 64 0 0 0 64 64h352a64 64 0 0 0 64-64v-16a16 16 0 0 0 -16-16zM58.6 224h394.7c34.6 0 54.6-43.9 34.8-75.9C448 83.2 359.6 32.1 256 32c-103.5 .1-192 51.2-232.2 116.1C4 180.1 24.1 224 58.6 224zM384 112a16 16 0 1 1 -16 16 16 16 0 0 1 16-16zM256 80a16 16 0 1 1 -16 16 16 16 0 0 1 16-16zm-128 32a16 16 0 1 1 -16 16 16 16 0 0 1 16-16z" />
                        </svg>
                    </figure>
                    <h2 class="servicos-box">Atendimento Nutricional</h2>
                    <p>Contamos com uma nutricionista para atendimento dos nossos usuários. Monitoramos a nutrição e o bem-estar geral dos pacientes através do aplicativo de uso individual idealizado pelo "Cuidados Oncológicos da Nestlé Health Science" em parceria com a "Meplis Care Monitor".</p>
                </section>
                <section class="col-12 col-lg-3 servicos-box">
                    <figure class="img-servicos">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50%" viewBox="0 0 448 512" style="aspect-ratio: 1/1;" class="servicos"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#fdfbf9" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                        </svg>
                    </figure>
                    <h2 class="servicos-box">Atendimento com Assistente Social</h2>
                    <p>Promovemos o acolhimento e a escuta qualitativa para o conhecimento da situação do assistido. Realizamos visitas domiciliares e entrevistas sociais que geram aproximação à realidade do usuário e dão base às possibilidades de enfrentamento diante das necessidades sociais do paciente.</p>
                </section>
            </article>
            <article class="row gap-5 w-100 row-servicos">
                <section class="col-12 col-lg-3 servicos-box">
                    <figure class="img-servicos">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50%" viewBox="0 0 512 512" style="aspect-ratio: 1/1;" class="servicos"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#fdfbf9" d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64h96v80c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64z" />
                        </svg>
                    </figure>
                    <h2 class="servicos-box">Ações de prevenção</h2>
                    <p>Realizamos uma série de eventos com temas variados, criamos e divulgamos materiais informativos sobre a conscientização do tratamento do câncer e sua prevenção. Acreditamos que conhecimento e suporte podem salvar vidas.</p>
                </section>
                <section class="col-12 col-lg-3 servicos-box">
                    <figure class="img-servicos">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50%" viewBox="0 0 512 512" style="aspect-ratio: 1/1;" class="servicos"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#fdfbf9" d="M464 256H48a48 48 0 0 0 0 96h416a48 48 0 0 0 0-96zm16 128H32a16 16 0 0 0 -16 16v16a64 64 0 0 0 64 64h352a64 64 0 0 0 64-64v-16a16 16 0 0 0 -16-16zM58.6 224h394.7c34.6 0 54.6-43.9 34.8-75.9C448 83.2 359.6 32.1 256 32c-103.5 .1-192 51.2-232.2 116.1C4 180.1 24.1 224 58.6 224zM384 112a16 16 0 1 1 -16 16 16 16 0 0 1 16-16zM256 80a16 16 0 1 1 -16 16 16 16 0 0 1 16-16zm-128 32a16 16 0 1 1 -16 16 16 16 0 0 1 16-16z" />
                        </svg>
                    </figure>
                    <h2 class="servicos-box">Atendimento Nutricional</h2>
                    <p>Contamos com uma nutricionista para atendimento dos nossos usuários. Monitoramos a nutrição e o bem-estar geral dos pacientes através do aplicativo de uso individual idealizado pelo "Cuidados Oncológicos da Nestlé Health Science" em parceria com a "Meplis Care Monitor".</p>
                </section>
                <section class="col-12 col-lg-3 servicos-box">
                    <figure class="img-servicos">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50%" viewBox="0 0 448 512" style="aspect-ratio: 1/1;" class="servicos"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#fdfbf9" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                        </svg>
                    </figure>
                    <h2 class="servicos-box">Atendimento com Assistente Social</h2>
                    <p>Promovemos o acolhimento e a escuta qualitativa para o conhecimento da situação do assistido. Realizamos visitas domiciliares e entrevistas sociais que geram aproximação à realidade do usuário e dão base às possibilidades de enfrentamento diante das necessidades sociais do paciente.</p>
                </section>
            </article>
        </main>

        <!-- DOACAO -->
        <main class="doacao" id="doacao">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 1900 200">
                <path fill="var(--dark-blue)" d="M1907.2,196.8C1335.1-24.1,760.9-72.6-2.4,193.9L-2.5-4.7L1905-1.9L1907.2,196.8z" />
            </svg>
            <article class="container-doacao">
                <section class="box-doacao">
                    <h1>A sua ajuda nos fortalece</h1>
                    <hr style="color: #fff;">
                    <p class="w-100">Para continuarmos nessa caminhada, todo apoio é fundamental. Faça parte dessa causa através da sua doação!</p>
                    <a href="" class="doacao_link"><button class="btn-apoie">Apoie nossa causa</button></a>
                </section>
            </article>
        </main>

        <!-- TRANSPARENCIA -->
        <main id="transparencia">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" x="0px" y="0px" viewBox="0 0 1903 164" style="enable-background:new 0 0 1903 164;">
                <path fill="var(--light-grey)" d="M 0 94 C354-93.3 1306.6 319.9 1903 11.8 l-1 152.2H1.1L0 94.5z" />
            </svg>
            <article class="transparencia">
                <h1>Transparência</h1>
                <main class="container">
                    <section class="row row-transparencia">
                        <figure class="transparencia-item">
                            <a href="https://drive.google.com/file/d/1_KbwM0z2osN4WjbzyxSNl6PH22xHzJyF/view?usp=sharing" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg> Estatuto 2020
                            </a>
                            </figure>
                        <figure class="transparencia-item">
                            <a href="https://drive.google.com/file/d/1s-eLZSVCHPn7WH15XCssq3SYjUM16Eac/view?usp=sharing" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg> Nova Diretoria 2023
                            </a>
                        </figure>
                    </section>
                    <section class="row row-transparencia">
                        <figure class="transparencia-item">
                            <a href="https://drive.google.com/file/d/1J8moL45e-UUuNJpVLyoUhtb5IHaQysZh/view?usp=sharing" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg> Plano SCFV 2018
                            </a>
                        </figure>
                    </section>
                    <section class="row row-transparencia">
                        <figure class="transparencia-item">
                            <a href="https://docs.google.com/document/d/1yww-TPrG-ayliUAfAWmABJO7PkfgnQUh/edit?usp=sharing&ouid=108950049029121975033&rtpof=true&sd=true" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg> Quadro de funcionários da parceria
                            </a>
                        </figure>
                        <figure class="transparencia-item">
                            <a href="https://drive.google.com/open?id=17exgWNtCnIqUY9VCcPKcMzOkGpR96NV3" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg> Termo de Fomento
                            </a>
                        </figure>
                    </section>
                    <section class="row row-transparencia">
                        <figure class="transparencia-item">
                            <a href="https://drive.google.com/file/d/1KhF0Me3ts9tUdLk4ESpWYxm_WrWrMqTs/view?usp=sharing" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg> Termo de colaboração da Prefeitura
                            </a>
                        </figure>
                    </section>
                </main>
            </article>
        </main>

        <!-- BAZAR -->
        <main class="bazar">
            <h1>Bazar Rede</h1>
            <article class="container">
                <h2>Conheça nosso bazar beneficente</h2>
                <p>Criamos um bazar permanente abastecido por doações de roupas, sapatos e produtos usados, em bom estado de conservação e novos, que podem ser entregues em nossa sede. O intuito do Bazar da Rede é gerar um ecossistema de doações, em que cada compra tem seu valor revertido para o financiamento dos programas de auxílio aos pacientes da neoplasia</p>
                <figure class="row">
                    <img src="public/img/estrutura.jpg" alt="">
                    <img src="public/img/estrutura.jpg" alt="">
                    <img src="public/img/estrutura.jpg" alt="">
                    <img src="public/img/estrutura.jpg" alt="">
                    <img src="public/img/estrutura.jpg" alt="">
                    <img src="public/img/estrutura.jpg" alt="">
                </figure>
            </article>
        </main>

        <!-- VOLUNTARIO -->
        <div class="voluntario">
            <main class="container row">
                <aside class="col-12 col-lg-6"><img src="public/img/estrutura.jpg" alt=""></aside>
                <article class="col-12 col-lg-6">
                    <section>
                        <h1>Quer fazer parte da Casa GE?</h1>
                    </section>
                    <section>
                        <h3>Acesse nosso formulário de inscrição e ajude a transformar vida</h3>
                    </section>
                    <figure><a href="http://wa.me/551236556466" target="_blank"><button>Seja um voluntário</button></a></figure>
                </article>
            </main>
        </div>

        <!-- PARCEIROS INSTITUCIONAIS -->
        <div class="parceiros container">
            <h1>Parceiros Institucionais</h1>
            <main class="row justify-content-center">
                <div class="col-4 col-lg-2"><a href=""><img src="public/img/estrutura.jpg" alt=""></a></div>
                <div class="col-4 col-lg-2"><a href=""><img src="public/img/estrutura.jpg" alt=""></a></div>
                <div class="col-4 col-lg-2"><a href=""><img src="public/img/estrutura.jpg" alt=""></a></div>
                <div class="col-4 col-lg-2"><a href=""><img src="public/img/estrutura.jpg" alt=""></a></div>
                <div class="col-4 col-lg-2"><a href=""><img src="public/img/estrutura.jpg" alt=""></a></div>
                <div class="col-4 col-lg-2"><a href=""><img src="public/img/estrutura.jpg" alt=""></a></div>
            </main>
        </div>

        <!-- NOTICIAS -->
        <div class="noticias">
            <h1>Notícias</h1>
            <main>
                <div class="noticia-box">
                    <div class="noticia-item">
                        <div class="noticia-item-img">
                            <a href="views/noticia.php">
                                <img src="public/img/estrutura.jpg" alt="">
                            </a>
                        </div>
                        <main>
                            <a href="views/noticia.php">
                                <h1 class="noticia-titulo">Notícia Título</h1>
                            </a>
                            <p class="noticia-desc">Descrição da notícia.</p>
                            <a href="views/noticia.php"><button>Ler mais <i class="fa-solid fa-arrow-right"></i></button></a>
                        </main>
                    </div>
                </div>
            </main>
        </div>

        <!-- FOOTER -->
        <?php include "views/partials/_footer.html" ?>
        <!-- SCRIPT JS -->
        <script src=" public/js/script.js"></script>
        <!-- BOOTSTRAP JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>