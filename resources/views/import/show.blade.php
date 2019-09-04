<html>
<head>
    <title>Teste Import</title>
</head>

<body>

    @foreach($items as  $item)
        @foreach($item as $val)
        {{--<label>{!! get_object_vars($item) !!}</label>--}}
        <label>{{$val}}</label>
        @endforeach

    @endforeach

</body>
</html>
