<html>
    <head>
        <title>App Name - @yield('title')</title>
        <script>
            alert('boa tarde!');
        </script>
    </head>
    <body>
        @section('topo')

        <img width="40px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRIi3qU50O0qgNonNBwei5ma2eVTysxCVnb848YKUa-T8e4e6Do" alt="">
            Prefeitura de Belo Horizonte
        @show

        <div class="container">
            @yield('content')
        </div>

        @section('rodape')
          Prefeitura de Belo Horizonte
        @show

    </body>
</html>