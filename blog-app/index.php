<?php

$kategori = array("Macera", "Dram", "Komedi", "Korku");
$film_baslik = "Film Listesi";

array_push($kategori, "Fantastik");
sort($kategori);

$filmler = array(
    "1" => array(
        "baslik" => "Paper Lives",
        "aciklama" => "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)",
        "resim" => "1.jpeg",
        "yorumSayisi" => "Yorum: 55",
        "begeniSayisi" => "Beğeni: 85",
        "vizyon" => "Viyonda: Evet",
        "url" => "https://www.imdb.com/title/tt13045890/",
    ),
    "2" => array(
        "baslik" => "Walking Dead",
        "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
        "resim" => "2.jpeg",
        "yorumSayisi" => "Yorum: 55",
        "begeniSayisi" => "Beğeni: 85",
        "vizyon" => "Viyonda: Evet",
        "url" => "https://www.imdb.com/title/tt1520211/",
    )
);

$yeni_film = array(
    "baslik" => "Lucifer",
    "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
    "resim" => "3.jpeg",
    "yorumSayisi" => "Yorum: 55",
    "begeniSayisi" => "Beğeni: 85",
    "vizyon" => "Viyonda: Evet",
    "url" => "https://www.imdb.com/title/tt4052886/?ref_=nv_sr_srsg_0_tt_7_nm_1_q_lucif",
);

$filmler["0"] = $yeni_film;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                   <?php
                    foreach ($kategori as $kategoriler) {
                        echo "<li class=\"list-group-item\">$kategoriler</li>";
                    }
                   ?>
                </ul>
            </div>
          <div class="col-9">
          <h3 class="text-center"><?php echo $film_baslik ?></h3>
      
          <?php foreach ($filmler as $film): ?>
          <div class="card mb-3">
              <div class="row">
      
                  <div class="col-3">
                      <img class="img-fluid" src="img/<?php echo $film['resim']; ?>">
                  </div>
                  <div class="col-9">
                      <div class="card-body">
                          <h5 class="card-title"><?php echo $film['baslik']; ?></h5>
                          <p class="card-text">
                              <?php echo ucfirst(strtolower(substr($film['aciklama'], 0, 50))) . '...'; ?>
                          </p>
                          <div>
                              <span class="badge bg-success">Yapım Tarihi: 03.12.2021</span>
                              <span class="badge bg-success"><?php echo $film['yorumSayisi']; ?></span>
                              <span class="badge bg-success"><?php echo $film['begeniSayisi']; ?></span>
                              <span class="badge bg-success"><?php echo $film['vizyon']; ?></span>
                          </div>
                      </div>
                  </div>
      
              </div>
          </div>
          <?php endforeach; ?>
      
      </div>
      
        </div>
    </div>
</body>

</html>