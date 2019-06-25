@extends('layouts.template')
     @section('style')
  @endsection
@section('content')
                <div style="margin-left: 70px;" class="links">
                    @foreach($categories as $category)
                        <li style="font-size: 30px; margin-left: 20px;">
                            <a href="/{{$category->id}}">{{$category->category_name}}</a>
                        </li>
                    @endforeach
                </div>
            </div>
@endsection
