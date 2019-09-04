<html>
    <head>
        <title>Teste Import</title>
    </head>

    <body>
        <form action="{{route('read.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" accept=".xml">

            <button type="submit">Enviar</button>
        </form>
    </body>
</html>
