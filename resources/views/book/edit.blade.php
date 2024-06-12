<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('book.update', $book)}}"  method="POST">

        @csrf
        @method('put')
        <label>
            Titulo:
            <br>
            <input name="title" type="text" value="{{old('title',$book->title) }}">
            <br>
        </label>
        <br>
        <label>
            ISBN:
            <br>
            <input name="isbn" type="text" value="{{old('isbn',$book->isbn)}}">
            <br>
        </label>
        <br>
        <label>
            editorial:
            <br>
            <input name="editorial" type="text" value="{{old('editorial',$book->editorial)}}">
            <br>
        </label>
        <br>
        <label>
            Paginas:
            <br>
            <input name="pages" type="number" value="{{old('pages',$book->pages)}}">
            <br>
            </label>
            <br>
       
        <button  type="submit">Actualizar libro</button>
       
    </form>
   
</body>
</html>