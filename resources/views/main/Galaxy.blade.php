<!--<style>-->
@extends('layouts.template')
@section('style')
    .galaxy_content
    {
    margin-top: 200%;
    }
    .galaxy_content li
    {
        padding-top: 10%;
        text-align: center;
        list-style-type: none;
        font-size: xx-large;
    }
    .galaxy_content ul
    {
        margin-top: 5%;
    }
@endsection
<!--</style>-->
@section('content')
<div class="galaxy_content">
<ul>
    @foreach($galaxies as $galaxy)
        <li>
            <img width="500" height="400" src={{$galaxy->image}}>
            <p>{{$galaxy->sp_object_name}}</p>
        </li>
    @endforeach
</ul>
</div>
@endsection