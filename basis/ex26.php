<?php
// prosty przykład - zwraca plik json z książkami
// gdy go nie ma - tworzy przykładowy
$nazwa_pliku = __DIR__.'/books.json';

if (! file_exists($nazwa_pliku) ) {
    // file_exists - czy istnieje; jeśli nie - przykładowe dwie książki
    $books = [
        [ 'title' => 'Pan Tadeusz',
          'authors' => 'Adam Mickiewicz'
        ],
        [ 'title' => 'Przedwiośnie',
          'authors' => 'Stefan Żeromski'
        ]
    ];
    file_put_contents( $nazwa_pliku, json_encode($books) );
} else {
    $books = json_decode(file_get_contents($nazwa_pliku), true);
    // json_decode - tworzy strukturę z łańcucha znaków
    // drugi parametr - czy tablica socjacyjna (słownik)
}

// ewentualne dodanie nowej książki
if (is_writable($nazwa_pliku)) file_put_contents( $nazwa_pliku, json_encode($books) );
// zwracamy:
echo json_encode($books);
