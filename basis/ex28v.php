<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Książki</title>
<style> td {padding: 10px; border:1px solid gray;} </style>
</head>
<body>
<?php
if (count($books)>0) {
?>    
    <table>
    <?php foreach ($books as $book): ?>
    <tr><td><?= $book['title'] ?></td><td><?= $book['authors'] ?></td></tr>
    <?php endforeach ?>
    </table>
<?php
}
?>
<form action="ex28c.php" method="get"> 
<!-- metoda get lub post; get - w adresie URL wartości -->
<h3>Nowa książka</h3>
<div>Autorzy:<input type="text" name="authors" /></div>
<div>Tytuł:<input type="text" name="title" /></div>
<input type="submit" value="Zapisz"/>
</form>
</body>
</html>
