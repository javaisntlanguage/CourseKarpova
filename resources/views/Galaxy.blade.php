<style>
    html {
            background: url("http://fonday.ru/images/tmp/10/9/original/109970niBCRIKyL8kn5M5w4ON5.jpg") no-repeat grey ;
    }
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