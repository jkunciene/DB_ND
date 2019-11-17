<?php
    require_once('nustatymai.php');
    $prisijungimas = mysqli_connect(DB_HOST,  MYSQL_USER, MYSQL_PASSWORD, DB_NAME   );
    mysqli_set_charset($prisijungimas, 'utf8mb4');
    if( !$prisijungimas )   {
        echo "ERROR:  prisijungti prie DB nepavyko  !!!" . mysqli_connect_error();
    }
    function getPrisijungimas() {
        global $prisijungimas;
        return $prisijungimas;
    }
    getPrisijungimas();

// IDEA: gaunu konkrecia knyga  pagal spec poreiki
        function getBook_ID( $aa ) {
            $manoSQL = "SELECT * FROM books  WHERE id='$aa'   ";
            $rezultataiOBJ = mysqli_query(getPrisijungimas(),  $manoSQL);
            $rezultataiArray = mysqli_fetch_assoc($rezultataiOBJ);
            return $rezultataiArray;
        }

        function getBook_Publisher( $publisher ) {
            $manoSQL = "SELECT * FROM books  WHERE publisher='$publisher'   ";
            $rezultataiOBJ = mysqli_query(getPrisijungimas(),  $manoSQL);
            $rezultataiArray = mysqli_fetch_assoc($rezultataiOBJ);
            return $rezultataiArray;
        }

// IDEA: gauti visa knygu sarasa
function getBooks() {
            $mano_sql_tekstas = "SELECT * FROM books";
            $adminAtsakymai = mysqli_query( getPrisijungimas() , $mano_sql_tekstas);
                    if ( $adminAtsakymai ) {
                 return $adminAtsakymai;
            } else {
                return NULL; //
            }
        }

// IDEA: funkcija skirta sukurti, irasyti knyga i DB
function createBook($book_title, $author, $publish_date, $publisher, $selling_price){
        $mano_sql_tekstas = "INSERT INTO books
                                    VALUES(NULL, '$book_title', '$author', '$publish_date', '$publisher','$selling_price');";
        $arPavyko = mysqli_query(   getPrisijungimas() , $mano_sql_tekstas);
        if ( !$arPavyko ) {echo "EROROR: nepavyko pateikti klausimo." . mysqli_error( getPrisijungimas() ); }
    }

// IDEA: funkcija skirta atnaujinti konkrecios knygos informacija
function updatebook($id, $book_title, $author, $publish_date, $publisher, $selling_price) {

                    $manoSQL = "UPDATE books SET
                                                    book_title = '$book_title',
                                                    author = '$author',
                                                    publish_date = '$publish_date',
                                                    publisher = '$publisher',
                                                    selling_price = '$selling_price'

                                                WHERE id = '$id'
                                                LIMIT 1";
                    $rezultatai = mysqli_query(getPrisijungimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
                    if ( !$rezultatai) {echo "ERROR: nepavyko redaguoti. SQL klaida:" . mysqli_error(getPrisijungimas());}
                }

function deleteBook($kuris) {
          $kuris_apdorotas = mysqli_real_escape_string (getPrisijungimas(), $kuris );
          $mano_sql_tekstas = "DELETE FROM books WHERE id = $kuris_apdorotas  LIMIT 1";
          $rezult = mysqli_query(getPrisijungimas(),  $mano_sql_tekstas );
                }

// IDEA: funkcija grąžina leidejus pagal ID
  function getPublisherID($cid) {
          $manoSQL = "SELECT * FROM publishers WHERE id='$cid' ";
          $atsOBJ = mysqli_query(getPrisijungimas(),  $manoSQL);
          $atsArray = mysqli_fetch_assoc($atsOBJ);
          return $atsArray;
                                }
// IDEA: ši funkcija skirta miestu išvedimui pagal sali,kurioje jie yra
  function getPublisher_pgl_Book($publisher) {

      $mano_sql_tekstas = "SELECT * FROM publishers
                          WHERE publisher_name = '$publisher'";
                          $rezultatai = mysqli_query( getPrisijungimas() , $mano_sql_tekstas);
                          return $rezultatai;}

// IDEA: funkcija skirta sukurti leideja
function createPublisher($publisher_name, $book_title, $author, $printed_quantity, $printing_price){

        $mano_sql_tekstas = "INSERT INTO publishers
                                    VALUES(NULL, '$publisher_name', '$book_title', '$author', '$printed_quantity', '$printing_price');";
        $arPavyko = mysqli_query(   getPrisijungimas() , $mano_sql_tekstas);
        if ( !$arPavyko ) {
             echo "EROROR: nepavyko pateikti klausimo." . mysqli_error( getPrisijungimas() );
        }
}
// IDEA: funkcija leideju info atnaujinimui
function updatePublisher($id, $publisher_name, $book_title, $author, $printed_quantity, $printing_price){

    $manoSQL = "UPDATE publishers SET
                                    publisher_name = '$publisher_name',
                                    book_title = '$book_title',
                                    author = '$author',
                                    printed_quantity = '$printed_quantity',
                                    printing_price = '$printing_price'
                                    WHERE id = '$id'
                                    LIMIT 1 ";
    $rezultatai = mysqli_query(getPrisijungimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
    if ( !$rezultatai) {
        echo "ERROR: nepavyko redaguoti. SQL klaida:" . mysqli_error(getPrisijungimas());}
}
// IDEA: funkcija miesto ištrynimui
    function deletePublisher($kuris) {

        $mano_sql_tekstas = "DELETE FROM publishers WHERE id = $kuris  LIMIT 1";
        $rezult = mysqli_query(getPrisijungimas(),  $mano_sql_tekstas );
    }
