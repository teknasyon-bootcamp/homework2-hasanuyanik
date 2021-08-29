<style>
    div{
        padding: 10px 20px;
        box-shadow: 0 0 5px #000;
        margin: 10px auto;
    }
</style>
<?php

$script = "Post"; // Tek post işlemi yapıldığında functions.php  hata vermemesi için "Post" değerini script e ata

require_once "functions.php"; // Daha önce çekilmediyse ve functions.php varsa functions.php yi çağır

$id = (isset($id)) ? $id : 1; // $id değeri tanımlıysa tanımlı değeri değilse 1 değerini $id ye ata
$title = (isset($title)) ? $title : "Başlıksız"; // $title değeri tanımlıysa tanımlı değeri değilse "Başlıksız" değerini $title a ata
$type = (isset($type)) ? $type : "normal"; // $type değeri tanımlıysa tanımlı değeri değilse "normal" değerini $type a ata

$typeColor = ($type == "urgent") ? "red" : (($type == "warning") ? "yellow" : "none"); /*
    type değeri "urgent" ise "red" değerini
    type değeri "warning" ise "yellow" değerini
    bunların dışında ise "none" değerini   typeColor a ata
 */
echo "<div style='background-color:$typeColor'>"; // div oluştur ve arkaplan rengine typeColor değerini yaz
getPostDetails($id,$title); // id ve title değerlerini getPostDetails ile işleme koy
echo "</div>"; // div i kapat
