<?php

$script = "PostList"; // Post Listeleme işlemi yapıldığında functions.php  hata vermemesi için "PostList" değerini script e ata

require "functions.php"; // functions.php varsa functions.php yi çağır

$postCount = getRandomPostCount(2,10); // getRandomPostCount ile min-max değerleri arasında üretilen değeri postCount a ata

$posts = getLatestPosts($postCount); // postCount kadar post u getLatestPosts ile çekip posts a ata

foreach ($posts as $id=>$value) { // posts değişkenindeki değerleri foreach ile listele
    $title = $value["title"]; // value içindeki title değerini title değişkenine ata
    $type = $value["type"]; // value içindeki type değerini type değişkenine ata
    include "post.php"; // post.php yi buraya çağır
}

