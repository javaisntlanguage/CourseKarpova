@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center" >
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: rgb(255, 105, 180)!important;"> </div>

                <div class="card-body" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Вы вошли!<br>

                    @if(\Auth::user()->isAdmin == 1)
                        <a class="page-link" style="color: black" href="{{route('admin')}}">Админ-панель</a><br>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
