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
    @foreach($galaxies as $galaxy)
        <li>
            {{$galaxy->sp_object_name}}
        </li>
    @endforeach
</ul>