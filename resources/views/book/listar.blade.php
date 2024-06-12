<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 
    <h1>libros</h1>

    <table>

        @foreach ($books as $book)
        {{-- creo una fila --}}
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->isbn}}</td>
            <td>{{$book->editorial}}</td>
            <td>{{$book->pages}}</td>
            <td><a href="{{route('book.show',$book->id)}}">Mostrar</a></td>
            <td><a href="{{route('book.edit',$book->id)}}">Editar</a></td>
            <td>
                <form action="{{route('book.destroy',$book->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>
                </form>  


            </td>
        </tr>
        @endforeach
    </table>

</body>
</html>