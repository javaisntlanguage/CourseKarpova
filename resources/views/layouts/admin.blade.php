
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Косметика {{\Auth::user()->name}}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .hidden {
            display: none;
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{asset('css/alertify.css')}}" type="text/css" rel="stylesheet" />

</head>
<body style="background-color: rgb(255, 192, 203)!important;">
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow" style="background-color: rgb(255, 20, 147)!important;">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{route('welcome')}}">Косметика</a>


</nav>

<div class="container-fluid" >
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky" style="background-color: rgb(255, 182, 193)!important;">
                <ul class="nav flex-column" >
                    @foreach($tables as $table)
                        @if(head($table) == 'categories' or head($table) == 'sp_objects' or head($table) == 'users')
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin')}}/{{head($table)}}">
                            <span data-feather="file"></span>
                            {{head($table)}}
                        </a>
                    </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </nav>
       @yield('content')
    </div>
</div>
</body>

<script src="{{asset('js/alertify.js')}}"></script>
@include('inc.messages')
<script>
    (function main() {
        document.addEventListener('DOMContentLoaded', DOMContentLoaded);

        function DOMContentLoaded() {
            var buttonNode = document.querySelector('.js-show-form');
            buttonNode.addEventListener('click', showForm);
        }

        function showForm() {
            var node = document.querySelector('.js-form');
            node.classList.remove('hidden');
        }
    })();
</script>
</html>
