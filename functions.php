<?php

if(!isset($script)){  // $script boş ise ekrana uyarıyı yazdır
    echo "Bu sayfaya erişim yoktur.";
    exit;
}

function getLatestPosts($count = 5) // fonksiyon $count değerini alır. $count verilmediğinde varsayılan 5 tir
{
    $posts = []; // boş array oluştur
    $postTypes = ["urgent", "warning", "normal"]; // post tiplerini postTypes array'ine tanımla

    for($i=1; $i<=$count; $i++) { // $i'yi 1 den başlatarak, $count değerine kadar for içerisinde $i'yi artırarak, işlemleri yap
        do { // hiç sorgulama yapmadan ilk işlemi yap
            $id = rand(1, 1000); // 1 ile 1000 aralığında rastgele bir sayı oluşturup $id 'ye ata
        } while (array_key_exists($id, $posts)); //$posts array'inde $id değerinde başka bir değer varsa döngüye devam et

        $type = $postTypes[rand(0, count($postTypes)-1)]; // $postTypes içerisinden rastgele bir tanesini $type a ata

        $posts[$id] = [
            "title" => "Yazı " . $i,
            "type" => $type
        ]; // $posts array'ine $id key'i ile title ve type değerlerini tanımla
    }

    return $posts; // $posts array'ini fonksiyon çıktısı olarak gönder
}

function getPostDetails($id, $title) // fonksiyon $id ve $title değerleri ile işlem yapar
{
    echo "<h1>".$title." (#".$id.")</h1>"; // Post başlığını yazdır
    echo <<<EOT
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a iaculis justo, ac molestie justo. Integer semper nibh non imperdiet blandit. Integer nec diam eget sapien viverra rutrum ut eu justo. Suspendisse efficitur pretium eleifend. Vivamus ex nibh, euismod eget massa ut, accumsan ullamcorper nisi. Phasellus tristique magna et nibh dictum rhoncus. Phasellus at metus quis mi egestas blandit. Vestibulum lacinia ut tortor nec consectetur. Nulla sed risus ut est imperdiet vulputate ac non quam. Aliquam viverra erat vitae diam commodo, et molestie metus ultricies. Praesent rutrum urna a nisi egestas aliquam sit amet eu eros.
</p>
EOT;
}


function getRandomPostCount($min = 1, $max = 5){ // min ve max değerleri ile işlem yap. değerler verilmemişse 1 ve 5 ile işlem yap
    return rand($min,$max); // min ve max değerleriyle rastgele değer üretip fonksiyon çıktısı olarak gönder
}

