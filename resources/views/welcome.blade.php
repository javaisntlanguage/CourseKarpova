@extends('template')
     @section('style')
  @endsection
@section('content')
                <div class="links">
                    @foreach($categories as $category)
                        <li>
                            <a href="/{{$category->id}}">{{$category->category_name}}</a>
                        </li>
                    @endforeach
                </div>
            </div>
@endsection
