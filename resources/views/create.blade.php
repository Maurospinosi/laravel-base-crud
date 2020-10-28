<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel base CRUD_Create-page</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
<form  action="{{route('books.store')}}" method="POST">
        @csrf
        @method('POST')
        <div>
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn"  placeholder="Inserisci il codice ISBN...." id="isbn">
        </div>
        <div>
            <label for="name">Titolo</label>
            <input type="text" name="title" placeholder="Inserisci il titolo...." id="name">
        </div>
        <div>
            <label for="author">Autore</label>
            <input type="text" name="author" placeholder="Inserisci il nome dell'autore...." id="author">
        </div>
        <div>
            <label for="genre">Genere</label>
            <input type="text" name="genre" placeholder="Inserisci il genere...." id="genre">
        </div>
        <div>
            <label for="edition">Edizione</label>
            <input type="text" name="edition" placeholder="Inserisci l'edizione...." id="edition">
        </div>
        <div>
            <label for="pages">Pagine</label>
            <input type="number" name="pages" placeholder="Inserisci il numero di pagine...." id="pages">
        </div>
        <div>
            <label for="image">URL</label>
            <input type="text" name="image" placeholder="Inserisci l'URL della copertina...." id="image">
        </div>
        <div>
            <label for="year">Anno</label>
            <input type="date" name="year" placeholder="Inserisci l'anno...." id="year">
        </div>
        <div>
            <a href="books"><input type="submit" value="SAVE"></a>
        </div>
    </form>
    <a href="books">Books-table</a>
</body>
</html>