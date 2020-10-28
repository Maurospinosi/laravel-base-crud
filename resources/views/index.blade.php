<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel base CRUD</title>
<link rel="stylesheet" href="../css/app.css">
</head>
<body>
    <table>
        <tr>
            <th>ISBN</th>
            <th>TITLE</th> 
            <th>AUTHOR</th>
            <th>GENRE</th>
            <th>EDITION</th>
            <th>PAGES</th>
            <th>IMAGE</th>
            <th>YEAR</th>
        </tr>
        @foreach ($books as $book)
            <tr>
                <th>{{$book["isbn"]}}</th>
                <th>{{$book["title"]}}</th>
                <th>{{$book["author"]}}</th>
                <th>{{$book["genre"]}}</th>
                <th>{{$book["edition"]}}</th>
                <th>{{$book["pages"]}}</th>
                <th> <img src=" {{$book["image"]}}" alt="copertina_libro"></th>
                <th>{{$book["year"]}}</th>
            </tr>
        @endforeach    
    </table>
</body>
</html>