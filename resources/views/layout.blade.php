<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>@yield('titulo')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    </head>
    <body style="background-color: #e3e3e3">
        <div class="container">
                <div class="row">                    
                <div class="col-md-12">
                    <br>
                    </div> 
                    <div class="col-md-12">
                        @yield('conteudo')
                        <br>
                    </div> 
                    <div class="col-md-2">
                        <a style="color: black" href="{{route('requisicoes.index')}}"><i class="fas fa-arrow-right"></i>   Requisicoes</a>
                    </div>
                    <div class="col-md-2">
                        <a style="color: black" href="{{route('requisitantes.index')}}"><i class="fas fa-arrow-right"></i>   Requisitantes</a>
                    </div>
                    <div class="col-md-2">
                        <a style="color: black" href="{{route('materiais.index')}}"><i class="fas fa-arrow-right"></i>   Mateirais</a>
                    </div>
                    <div class="col-md-2">
                        <a style="color: black" href="{{route('tipos_requisitantes.index')}}"><i class="fas fa-arrow-right"></i>   Tipos de Requisitantes</a>
                    </div>
                    <div class="col-md-2">
                        <a style="color: black" href="{{route('tipos_equipamentos.index')}}"><i class="fas fa-arrow-right"></i>   Tipos de Equipamentos</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/all.min.js')}}"></script>
    </body>
</html>