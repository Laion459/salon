@extends('components.layouts.sbl')
<br><br><br><br><br>
<div class="logoPrincipal"><img src="images/img/White and Black Minimalist Salon Logo 1.png" alt="Logo da Flor de Lis">
</div>

<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-inner">
        <!-- Carrossel de imagens -->
        <div class="carousel-item active">
            <img src="images/img/img cortadas nuevas/8.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/img/img cortadas nuevas/2.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/img/img cortadas nuevas/11.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/img/img cortadas nuevas/9.jpeg" class="d-block w-100" alt="...">
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
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
        <!-- Ícone de seta para a esquerda -->
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
             class="bi bi-arrow-left-square" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                  d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
        </svg>
        <span class="visually-hidden"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
        <!-- Ícone de seta para a direita -->
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
             class="bi bi-arrow-right-square" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                  d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
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
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5947.351934653607!2d-48.379344155459705!3d-27.445930273121252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95276b59ab8a3075%3A0x1793e6ffe9a9aa97!2sFlor%20De%20Lis%20sal%C3%A3o%20de%20beleza!5e1!3m2!1spt-BR!2sbr!4v1708608906833!5m2!1spt-BR!2sbr"
        width="1300" height="500" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<div class="logoPrincipal"><img src="images/img/White and Black Minimalist Salon Logo 1.png" alt="Logo da Flor de Lis">
</div>

@extends('components.layouts.sbl2')
