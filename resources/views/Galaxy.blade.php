<!--<style>-->
@extends('template')
@section('style')
    .galaxy_content li
    {
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
            {{$galaxy->sp_object_name}}
        </li>
    @endforeach
</ul>
</div>
@endsection