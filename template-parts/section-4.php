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
            <div class="section-4__info">
                <div class="space space--50"></div>
                <h2 class="heading--58 color--A98417">Nuestra Historia de Amor</h2>
                <p class="font--baca heading--64 color--333" style="line-height: 64px">our love story</p>
                <div class="space space--10"></div>
                <p class="font--bosque heading--18 color--000 load-more">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet maximus ante. Morbi at lacus ipsum. In id nunc consequat, bibendum eros eget, porta est. Nunc pretium auctor faucibus. Morbi elementum, augue vel scelerisque blandit, ex felis auctor urna, eget consequat felis mauris quis massa.
                </p>
                <div class="space space--20"></div>
                <p class="font--bosque heading--18 color--000 load-more more-content" style="display: none">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet maximus ante. Morbi at lacus ipsum. In id nunc consequat, bibendum eros eget, porta est. Nunc pretium auctor faucibus. Morbi elementum, augue vel scelerisque blandit, ex felis auctor urna, eget consequat felis mauris quis massa.
                </p>
                <div class="space space--20"></div>
                <button class="button button--primary button--center" type="button" data-toggle-more>
                    LEER MÁS
                </button>

                <div class="space space--50"></div>

                <h2 class="heading--64 color--A98417">EVENTOS</h2>
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
                    <img class="" src="<?php echo IMG_BASE . 'dress-code.png'?>" alt="">
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
                    <img class="" src="<?php echo IMG_BASE . 'dress-code.png'?>" alt="">
                    <div class="space space--5"></div>
                    <button type="button" class="button button--primary button--center" data-open-modal="modal-4">TEQUILA SUNSET</button>
                </div>
            </div>
        </div>
    </div>
</section>