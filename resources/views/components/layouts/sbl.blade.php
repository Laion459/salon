<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>FLOR DE LIS</title>

</head>

<body>
<header>

    <div class="menu">

        <label for="menu-toggle">&#9776; Menu</label>
        <nav>
            <ul>
                <li class="logo">

                    <img src="/images/img/White and Black Minimalist Salon Logo 1.png" alt="Logo da Flor de Lis">

                </li>

                <li>
                    <a href="{{ route('home') }}">
                        <div>
                            <p>INICIO</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('history') }}">
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
                        <li><a href="{{ route('services.cortes') }}">Cortes</a></li>
                        <li><a href="{{ route('services.coloracao') }}">Coloração</a></li>
                        <li><a href="{{ route('services.tonalizacao') }}">Tonalização</a></li>
                        <li><a href="{{ route('services.reflexo') }}">Reflexo</a></li>
                        <li><a href="{{ route('services.escova') }}">Escova</a></li>
                        <li><a href="{{ route('services.hidratacao') }}">Hidratação</a></li>
                        <li><a href="{{ route('services.depilacao') }}">Depilação</a></li>
                        <li><a href="{{ route('services.manicure') }}">Manicure</a></li>
                        <li><a href="{{ route('services.maquiagem') }}">Maquiagem</a></li>
                        <li><a href="{{ route('services.sobrancelhas') }}">Sobrancelhas</a></li>
                        <li><a href="{{ route('services.massagem') }}">Massagem</a></li>
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
                    <a href="{{route('contacts')}}">
                        <div>
                            <p>CONTATO</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="blog/blog.html">
                        <div>
                            <p>LOGIN</p>
                        </div>
                    </a>
                </li>
                <li class="logo">

                    <img src="/images/img/White and Black Minimalist Salon Logo 1.png" alt="Logo da Flor de Lis">

                </li>
            </ul>
        </nav>
    </div>
</header>




<footer>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

<script src="https://openlayers.org/en/latest/build/ol.js"></script>

<script src="{{ asset('script/script.js') }}"></script>

</body>

</html>
