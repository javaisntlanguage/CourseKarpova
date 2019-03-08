<style>
    li
    {
        text-align: center;
        list-style-type: none;
        font-size: xx-large;
    }
    ul
    {
        margin-top: 5%;
    }
</style>
<ul>
@foreach($categories as $category)
        <li>
        <a href="/test/{{$category->id}}">{{$category->category_name}}</a>
    </li>
@endforeach
</ul>