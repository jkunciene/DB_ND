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

// IDEA: gaunu konkrecia knyga  pagal ID
        function getBook_ID( $aa ) {
            $manoSQL = "SELECT * FROM books  WHERE id='$aa'   ";
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
        function createBook($book_title, $author, $publish_date, $selling_price){
        $mano_sql_tekstas = "INSERT INTO books
                                    VALUES(NULL, '$book_title', '$author', '$publish_date', '$selling_price');";
        $arPavyko = mysqli_query(   getPrisijungimas() , $mano_sql_tekstas);
        if ( !$arPavyko ) {echo "EROROR: nepavyko pateikti klausimo." . mysqli_error( getPrisijungimas() ); }
    }

// IDEA: funkcija skirta atnaujinti konkrecios knygos informacija
                function updatebook($id, $book_title, $author, $publish_date, $selling_price) {

                    $manoSQL = "UPDATE books SET
                                                    book_title = '$book_title',
                                                    author = '$author',
                                                    publish_date = '$publish_date',
                                                    selling_price = '$selling_price',

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

// IDEA: funkcija grąžina miestus pagal ID
  function getCityID($cid) {
          $manoSQL = "SELECT * FROM citytable WHERE id='$cid' ";
          $atsOBJ = mysqli_query(getPrisijungimas(),  $manoSQL);
          $atsArray = mysqli_fetch_assoc($atsOBJ);
          return $atsArray;
                                }
// IDEA: ši funkcija skirta miestu išvedimui pagal sali,kurioje jie yra
  function getCity_pgl_countryID($nr) {
      $id_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $nr );
      $mano_sql_tekstas = "SELECT * FROM citytable
                          WHERE idcountry = '$id_apdorotas'";
                          $rezultatai = mysqli_query( getPrisijungimas() , $mano_sql_tekstas);
                          return $rezultatai;}
// IDEA: funkcija skirta sukurti Miesta
function createCity($city, $cityarea, $citypopulation, $citycode, $idcountry){
        $city_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $city );
        $cityarea_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $cityarea );
        $citypopulation_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $citypopulation );
        $citycode_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $citycode );
        $idcountry_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $idcountry );
        $mano_sql_tekstas = "INSERT INTO citytable
                                    VALUES(NULL, '$city_apdorotas', '$cityarea_apdorotas', '$citypopulation_apdorotas', '$citycode_apdorotas', NOW(),'$idcountry_apdorotas');";
        $arPavyko = mysqli_query(   getPrisijungimas() , $mano_sql_tekstas);
        if ( !$arPavyko ) {
             echo "EROROR: nepavyko pateikti klausimo." . mysqli_error( getPrisijungimas() );
        }
}
// IDEA: funkcija miestu info atnaujinimui
function updateCity($id, $city, $cityarea, $citypopulation, $citycode, $idcountry){
$id_apdorotas = mysqli_real_escape_string (getPrisijungimas(), $id );
$city_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $city );
$cityarea_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $cityarea );
$citypopulation_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $citypopulation );
$citycode_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $citycode );
$idcountry_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $idcountry );
    $manoSQL = "UPDATE citytable SET
                                    city = '$city_apdorotas',
                                    cityarea = '$cityarea_apdorotas',
                                    citypopulation = '$citypopulation_apdorotas',
                                    citycode = '$citycode_apdorotas',
                                    cityUPdata = NOW(),
                                    idcountry = '$idcountry_apdorotas'
                                    WHERE id = '$id_apdorotas'
                                    LIMIT 1 ";
    $rezultatai = mysqli_query(getPrisijungimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
    if ( !$rezultatai) {
        echo "ERROR: nepavyko redaguoti. SQL klaida:" . mysqli_error(getPrisijungimas());}
}
// IDEA: funkcija miesto ištrynimui
    function deleteCity($kuris) {
        $kuris_apdorotas = mysqli_real_escape_string (getPrisijungimas(), $kuris );
        $mano_sql_tekstas = "DELETE FROM citytable WHERE id = $kuris_apdorotas  LIMIT 1";
        $rezult = mysqli_query(getPrisijungimas(),  $mano_sql_tekstas );
    }
