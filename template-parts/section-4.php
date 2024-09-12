<?php 
$gallery = [
    [
        "img" => "gallery-1.png"
    ],
    [
        "img" => "gallery-2.png"
    ],
    [
        "img" => "gallery-3.png"
    ],
    [
        "img" => "gallery-4.png"
    ],
    [
        "img" => "gallery-5.png"
    ]
]
?>
<section class="section-4">
    <div class="section-4__wrapper">
        <div class="section-4__container">
            <div class="slickGallery">
                <?php foreach ($gallery as $key => $img) { ?>
                    <div class="section-4__img">
                        <div class="section-4__bckg">
                            <img class="img" src="<?php echo IMG_BASE . $img['img']?>" alt="">
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="section-4__info" id="historia">
                <div class="space space--50"></div>
                <h2 class="heading--58 color--A98417">Nuestra Historia de Amor</h2>
                <p class="font--baca heading--64 color--333" style="line-height: 64px">our love story</p>
                <div class="space space--10"></div>
                <p class="font--bosque heading--18 color--000 load-more">
                En una noche de enero en Cartagena, Eduardo y Megumi se conocieron en un encuentro improbable, parecía que la vida había jugado traviesamente con ellos hasta encontrarlos, quién diría que un shot de tequila y un “usame” darían inicio a esta historia de amor

                </p>
                <div class="space space--20"></div>
                <p class="font--bosque heading--18 color--000 load-more more-content" style="display: none">
                5 días fueron suficientes para decidir construir una relación a distancia, entre aviones y calendarios pasaron los años construyendo sueños juntos y separados, la distancia en esta historia no fue villana y aunque parecía que estar juntos no se daría la vida volvió a hacer de las suyas mostrándoles una salida.

                </p>
                <div class="space space--20"></div>
                <p class="font--bosque heading--18 color--000 load-more more-content" style="display: none">
                Hoy nuevamente en Cartagena después de 9 años de travesía, agradecidos con los azares de la vida, son ellos quienes deciden estar juntos y formar una familia.

                </p>
                <div class="space space--20"></div>
                <button class="button button--primary button--center" type="button" data-toggle-more>
                Ver más
                </button>

                <div class="space space--50"></div>

                <h2 class="heading--64 color--A98417" id="eventos">EVENTOS</h2>
                <p class="font--baca heading--64 color--333" style="line-height: 64px">events</p>
            </div>

            <div class="space space--20"></div>
        </div>

        <div class="section-4__box">
            <img class="img" src="<?php echo IMG_BASE . 'img-5.webp'?>" alt="">
            <div class="section-4__grid">
                <div class="box">
                    <h2 class="heading--40 color--A98417">Welcome Party</h2>
                    <p class="font--baca heading--32 color--666">fiesta de bienvenida</p>
                    <div class="space space--30"></div>
                    <p class="heading--24-medium color--000">Diciembre 9, 2024</p>
                    <div class="space space--20"></div>
                    <p class="heading--24-medium color--000">4:00 P.M.</p>
                    <div class="space space--20"></div>
                    <p class="heading--24-medium color--000"style="line-height: normal">Muelle de la Bodeguita</p>
                    <div class="space space--20"></div>
                    <a class="button button--primary button--center" href="">QUEREMOS SOPRENDERTE</a>
                    <div class="space space--25"></div>
                    <p class="heading--16 color--4E6585">
                        VUELVE Y DESCUBRE AQUÍ LA LOCACIÓN Y MÁS INFO EL DÍA DEL EVENTO!
                    </p>
    
                    <div class="space space--50"></div>
    
                    <h2 class="heading--32 color--A98417">VESTIMENTA</h2>
                    <p class="font--baca heading--32 color--666">dress code</p>
                    <img class="" src="<?php echo IMG_BASE . 'vestimenta-2.png'?>" alt="">
                    <div class="space space--5"></div>
                    <button type="button" class="button button--primary button--center" data-open-modal="modal-3">SEMI-FORMAL</button>
                </div>
    
                <div class="box">
                    <h2 class="heading--40 color--A98417">Good Bye Party</h2>
                    <p class="font--baca heading--32 color--666">fiesta de despedida</p>
                    <div class="space space--30"></div>
                    <p class="heading--24-medium color--000">Diciembre 13, 2024</p>
                    <div class="space space--20"></div>
                    <p class="heading--24-medium color--000">8:00 A.M.</p>
                    <div class="space space--20"></div>
                    <p class="heading--24-medium color--000"style="line-height: normal">Pendiente...</p>
                    <div class="space space--20"></div>
                    <a class="button button--primary button--center" href="">QUEREMOS SOPRENDERTE</a>
                    <div class="space space--25"></div>
                    <p class="heading--16 color--4E6585">
                        VUELVE Y DESCUBRE AQUÍ LA LOCACIÓN Y MÁS INFO EL DÍA DEL EVENTO!
                    </p>
    
                    <div class="space space--50"></div>
    
                    <h2 class="heading--32 color--A98417">VESTIMENTA</h2>
                    <p class="font--baca heading--32 color--666">dress code</p>
                    <img class="" src="<?php echo IMG_BASE . 'vestimenta-3.png'?>" alt="">
                    <div class="space space--5"></div>
                    <button type="button" class="button button--primary button--center" data-open-modal="modal-4">TEQUILA SUNSET</button>
                </div>
            </div>
        </div>
    </div>
</section>