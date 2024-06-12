<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
<h1>Crear libro</h1>

<form action="{{route('book.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Titulo:
    <br>
    <input type="text" name="title">
</label>
<br>
<label>
    ISBN:
    <br>
    <input type="text" name="isbn">
</label>
<br>
<label>
    Editorial:
    <br>
    <input type="text" name="editorial">
</label>
<br>
<label>
    Paginas:
    <br>
    <input type="number" name="pages">
</label>
<br>
<br>
<button type="submit">Guardar libro</button>
</form>
</body>
</html>