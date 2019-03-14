@extends('layouts.admin')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <canvas class="my-4 w-100" id="myChart" width="900" height="0"></canvas>
        <h2>{{$x}}</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    @foreach($columns as $value)
                        <th>{{$value}}</th>
                    @endforeach
                </tr>
                </thead>
                <tbody>
                @foreach($oneTable as $cols)
                    <tr>
                        @foreach($columns as $val)
                            <th>{{$cols->$val}}</th>
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        @if($x == "sp_objects" or $x == "categories" )
            <button class="js-show-form form-control">Добавить запись</button>
            <form class="js-form hidden" method="post">
                {{ csrf_field() }}
                @foreach($columns as $val)
                    <label>
                        {{$val}}
                        <input type="text" name="{{$val}}" class="form-control"/>
                    </label>
                @endforeach
                <label>
                    <button class="form-control">Отправить</button>
                </label>
            </form>
        @endif
    </main>

@endsection