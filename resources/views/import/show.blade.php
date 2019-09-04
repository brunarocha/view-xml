<html>
<head>
    <title>Teste Import</title>
</head>

<body>

    @foreach($items as $key => $item)
        @foreach($item as $key => $value)
            <label>{{$key}}</label>

            @if(count($value))
                @foreach($value as $key => $val)
                    <div>
                        <label>
                            <b>{{$key}}</b>: {{$val}}
                        </label>
                    </div>
                @endforeach
            @else
                <div>
                    <label>
                        <b>{{$key}}</b>: {{$value}}
                    </label>
                </div>
            @endif

        @endforeach
    @endforeach

</body>
</html>
