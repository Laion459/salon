<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>FLOR DE LIS</title>

</head>

<body>
<header>

    <div class="menu">

        <label for="menu-toggle">&#9776; Menu</label>
        <nav>
            <ul>
                <li class="logo">
                    <a href="agenda/agenda.html">
                        <img src="img/White and Black Minimalist Salon Logo 1.png" alt="Logo da Flor de Lis">
                    </a>
                </li>

                <li>
                    <a href="index.html">
                        <div>
                            <p>INICIO</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="historico/historico.html">
                        <div>
                            <p>HISTORICO</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div>
                            <p>SERVICOS</p>
                        </div>
                    </a>
                    <ul>
                        <li><a href="servicos/cortes.html">CORTES</a></li>
                        <li><a href="servicos/coloracao.html">COLORACAO</a></li>
                        <li><a href="servicos/tonalizacao.html">TONALIZACAO</a></li>
                        <li><a href="servicos/reflexo.html">REFLEXO</a></li>
                        <li><a href="servicos/escova.html">ESCOVA</a></li>
                        <li><a href="servicos/hidratacao.html">HIDRATACAO</a></li>
                        <li><a href="servicos/depilacao.html">DEPILACAO</a></li>
                        <li><a href="servicos/manicure.html">MANICURE E PEDICURE</a></li>
                        <li><a href="servicos/maquiagem.html">MAQUIAGEM</a></li>
                        <li><a href="servicos/sobrancelhas.html">SOBRANCELHA</a></li>
                        <li><a href="servicos/massagem.html">MASSAGEM</a></li>
                    </ul>
                </li>
                <li>
                    <a href="blog/blog.html">
                        <div>
                            <p>BLOG</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="contato/contato.html">
                        <div>
                            <p>CONTATO</p>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<br><br><br><br><br>
<a href="agenda/agenda.html"><div class="logoPrincipal"><img src="img/White and Black Minimalist Salon Logo 1.png" alt="Logo da Flor de Lis"></div>

</a>

<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-inner">
        <!-- Carrossel de imagens -->
        <div class="carousel-item active">
            <img src="img/img cortadas nuevas/8.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/img cortadas nuevas/2.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/img cortadas nuevas/11.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/img cortadas nuevas/9.jpeg" class="d-block w-100" alt="...">
        </div>
    </div>
    <div class="carousel-indicators">
        <!-- Indicadores do carrossel -->
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 4"></button>
    </div>

    <!-- Botões de navegação -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <!-- Ícone de seta para a esquerda -->
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
        </svg>
        <span class="visually-hidden"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <!-- Ícone de seta para a direita -->
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-right-square" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
        </svg>
        <span class="visually-hidden"></span>
    </button>
</div>

<div id="map-container">
    <!-- Informações do salão complementar ao mapa -->
    <div id="info-container">
        <p>Estética Flor de Lis</p>
        <p>Estrada Vereador Onildo Lemos, 256, Sala 1</p>
        <p>Terça a Sábado, 9:00 - 19:00</p>
    </div>

    <!-- Mapa -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5947.351934653607!2d-48.379344155459705!3d-27.445930273121252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95276b59ab8a3075%3A0x1793e6ffe9a9aa97!2sFlor%20De%20Lis%20sal%C3%A3o%20de%20beleza!5e1!3m2!1spt-BR!2sbr!4v1708608906833!5m2!1spt-BR!2sbr" width="1300" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<a href="agenda/agenda.html"><div class="logoPrincipal"><img src="img/White and Black Minimalist Salon Logo 1.png" alt="Logo da Flor de Lis"></div>

</a>


<footer>
    <div class="footer-content">
        <div class="footer-left">
            <p>© Estetica FLOR DE LIS. Desde 1996. Todos os direitos reservados 2024.</p>
            <p>
                <span style="font-weight:bold;">e-mail: </span>
                <a
                    href="mailto:pbbruninha@hotmail.com?subject=Duvida sobre o salao&body=Ola, tenhu uma duvida sobre `digite sua duvida aqui`">pbbruninha@hotmail.com</a>
                <br>
                CNPJ: 36.663.699/0001-17
            </p>

        </div>
        <div class="footer-right">
            <p>Siga-nos nas redes sociais!</p>
            <ul class="social-icons">
                <li>
                    <a href="https://www.facebook.com/profile.php?id=100068844317427&mibextid=LQQJ4d"
                       rel="noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                             class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/esteticaflordelissantinho?igsh=MWI5dWNxdzRoZml3dw=="
                       rel="noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                             class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <p class="four-locations">
        <a href="agenda/agenda.html" rel="noreferrer noopener">Nossa Unidade</a>
        de atendimento. Escolha a sua data e agende seu horário.
    </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

<script src="https://openlayers.org/en/latest/build/ol.js"></script>

<script src="script.js"></script>

</body>

</html>
