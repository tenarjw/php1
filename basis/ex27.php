<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Książki</title>
<style> td {padding: 10px; border:1px solid gray;} </style>
</head>
<body>
<?php
$nazwa_pliku = __DIR__.'/books.json'; // plik z książkami na swerwerze
// ewentualne dodanie nowej książki
if (! file_exists($nazwa_pliku) )  $books=[];
else {
    $books = json_decode(file_get_contents($nazwa_pliku), true);
}
$nowa = isset($_GET['title']) || isset($_GET['authors']);
if ($nowa) {
    $books[] = 
        [ 'title' => $_GET['title'],
          'authors' => $_GET['authors']
        ];
    if (is_writable($nazwa_pliku)) 
      file_put_contents( $nazwa_pliku, json_encode($books) );
}
if ($books) { // zwracam tabelę książek
?>    
    <table>
    <?php foreach ($books as $book): ?>
    <tr><td><?= $book['title'] ?></td><td><?= $book['authors'] ?></td></tr>
    <?php endforeach ?>
    </table>
<?php
}
?>
<form action="ex27.php" method="get"> 
<!-- metoda get lub post; get - w adresie URL wartości -->
<h3>Nowa książka</h3>
<div>Autorzy:<input type="text" name="authors" /></div>
<div>Tytuł:<input type="text" name="title" /></div>
<input type="submit" value="Zapisz"/>
</form>
</body>
</html>
