<?php 
$places = [
    [
        "id" => "hoteles",
        "name" => "HOTELES"
    ],
    [
        "id" => "bares",
        "name" => "BARES & PUBS"
    ],
    [
        "id" => "restaurantes",
        "name" => "RESTAURANTES"
    ],
    [
        "id" => "boutiques",
        "name" => "BOUTIQUES"
    ],
    [
        "id" => "postres",
        "name" => "BRUNCH & POSTRES"
    ],
    [
        "id" => "salones",
        "name" => "SALONES DE BELLEZA"
    ]
];
$placesCartagena = [
    [
        "img" => "cartagena-1.png",
        "name" => "Teatro Heredia",
        "copy" => "Magníﬁco de estilo ecléctico diseñado por Luis Felipe Jaspe, el mismo arquitecto que creó la Torre del Reloj de Cartagena.",
    ],
    [
        "img" => "cartagena-2.png",
        "name" => "Murallas de Cartagena",
        "copy" => "Fortiﬁcación que tardó más de cien años en completarse, llevada a cabo por etapas desde 1586 hasta 1699, abarcando el perímetro del centro de la ciudad vieja, San Diego y Getsemaní.",
    ],
    [
        "img" => "cartagena-3.png",
        "name" => "Torre del Reloj",
        "copy" => "Famosa puerta de entrada a la ciudad amurallada, caracterizada por su portada barroca de piedra que precede a una imponente estructura.",
    ],
    [
        "img" => "cartagena-7.jpg",
        "name" => "Isla de Barú",
        "copy" => "Zona costera situada a 45 minutos en barco, conocida por sus paradisíacas playas casi vírgenes de arena blanca, aguas transparentes y arrecifes de coral.",
    ],
    [
        "img" => "cartagena-7.png",
        "name" => "Castillo San Felipe",
        "copy" => "Uno de los emplazamientos más famosos, correspondiente a un castillo construido en el siglo XVII, considerado la obra más destacada de la ingeniería militar española en América.",
    ],
    [
        "img" => "cartagena-9.png",
        "name" => "Cerro de la Popa",
        "copy" => "Punto más alto de Cartagena, una posición estratégica que permite unas vistas privilegiadas tanto de la ciudad vieja como del mar Caribe, la isla de Tierrabomba y La Boquilla.",
    ],
];
?>
<section class="section-5" id="cartagena">
    <div class="section-5__bckg">
        <div class="container">
            <div class="section-5__content">
                <div class="section-5__info">
                    <h2 class="heading--64 color--D6B77A strogke-width-5">CARTAGENA</h2>
                    <p class="font--bonvivant heading--48 color--222" style="line-height: 20px">places to visit</p>
                    <div class="space space--50"></div>
                    <p class="font--bosque heading--18 color--000">
                    Estamos encantados de celebrar nuestra boda en Cartagena, la joya costera de Colombia. Esta ciudad, declarada Patrimonio de la Humanidad por la UNESCO, es uno de los tesoros culturales más importantes de Sudamérica. Las murallas de Cartagena de Indias adornan el centro histórico, conocido como "la ciudad amurallada", donde podrá descubrir plazas, calles adoquinadas y exquisitos y vibrantes edificios coloniales. <br>
                    La mejor forma de conocer Cartagena es paseando por ella, sumergiéndose en el laberinto de callejuelas y exuberantes plazas verdes. Recomendamos alojarse en la ciudad amurallada, donde todo está a un paso. Las calles están llenas de música en directo, espléndidos restaurantes y extravagantes bares, que contribuyen a la vibrante atmósfera de Cartagena.
                    </p>
                </div>
            </div>
            <div class="space space--50"></div>
            <div class="section-5__card">
                <div class="section-5__card-grid">
                    <div class="section-5__card-img">
                        <img class="img" src="<?php echo IMG_BASE . 'img-7.webp'?>" alt="">
                    </div>
                    <div class="section-5__card-info">
                        <h2 class="heading--36 color--4E6585 stroke--width-5">RESTAURANTE <br> NAMI</h2>
                        <div class="space space--10"></div>
                        <p class="font--bosque heading--18 color--000">Cra 2 # 5 - 100</p>
                        <p class="font--bosque heading--18 color--000">Centro Histórico, Cartagena</p>
                        <div class="space space--20"></div>
                        <p class="font--bosque heading--22 color--4A4A49">+57 318 5557070</p>
                        <div class="space space--20"></div>
                        <div class="line line--medium"></div>
                        <div class="space space--50"></div>
                        <a href="https://www.instagram.com/nami.restaurante/" target="_blank" class="button button--primary button--medium">VER</a>
                    </div>
                </div>
            </div>
            <div class="space space--50"></div>
            <div class="section-5__card">
                <div class="section-5__card-grid reverse">
                    <div class="section-5__card-img">
                        <img class="img" src="<?php echo IMG_BASE . 'img-8.webp'?>" alt="">
                    </div>
                    <div class="section-5__card-info">
                        <h2 class="heading--36 color--4E6585 stroke--width-5">LA CASA <br> DE SOCORRO</h2>
                        <div class="space space--10"></div>
                        <p class="font--bosque heading--18 color--000">Calle 25 # 8B - 112</p>
                        <p class="font--bosque heading--18 color--000">Getsemani, Cartagena</p>
                        <div class="space space--20"></div>
                        <p class="font--bosque heading--22 color--4A4A49">+57 315 7186666</p>
                        <div class="space space--20"></div>
                        <div class="line line--medium"></div>
                        <div class="space space--50"></div>
                        <a href="https://www.instagram.com/restaurantelacasadesocorro/?hl=es" target="_blank" class="button button--primary button--medium">VER</a>
                    </div>
                </div>
            </div>
            <div class="space space--50"></div>
            <div class="section-5__links">
                <?php foreach ($places as $key => $place) { ?>
                    <a href="/cartagena/#<?php echo $place['id'] ?>" class="heading--36 stroke--width-5 color--4E6585">
                        <?php echo $place['name'] ?>
                    </a>
                <?php } ?>
            </div>
        </div>
        <div class="space space--30"></div>
        <div class="sectionPlaces">
            <div class="sectionPlaces__wrapper">
                <div class="slickPlaces">
                    <?php foreach ($placesCartagena as $idx => $cartagena) { ?>
                        <div class="sectionPlaces__padding">
                            <div class="sectionPlaces__item">
                                <img src="<?php echo IMG_BASE . $cartagena['img']; ?>" alt="">
                                <div class="sectionPlaces__info">
                                    <h3 class="font--bosque heading--22 color--4E6585 uppercase"><?php echo $cartagena['name']; ?></h3>
                                    <div class="space space--20"></div>
                                    <div class="line line--small"></div>
                                    <div class="space space--20"></div>
                                    <p class="font--bosque heading--18 color--4D4D4D"><?php echo $cartagena['copy']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>