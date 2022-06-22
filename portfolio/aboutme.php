<?php
/**
* Template Name: Обо мне
* Template Post Type: page
*/
?>
<title>Обо мне</title>
<?get_header();?>
<body class="white__background">
        <header class="header wrapper">
        <a class="header__logo" href="https://eclarina.ru/"><img src="<?=get_field('logo','options')?>" alt="Логотип Ирины Рождественской"></a>
        <nav class="header__nav">
            <ul class="header__list" id="header__list">
                <li class="header__item"><a class="navodka" href="https://eclarina.ru/portfolio/">Портфолио</a></li>
                <li class="header__item"><a class="navodka" href="https://eclarina.ru/obrazovanie/">Образование</a></li>
                <li class="header__item"><a class="navodka navodka_vis1" href="https://eclarina.ru/obo-mne/">Обо мне</a></li>
                <li class="header__item"><a class="navodka" href="https://eclarina.ru/kontakty/">Контакты</a></li>
            </ul>
        </nav>
        <div class="social__hamb">
        <div class="social__net">
            <?php if( have_rows('social','options') ): ?>
            <?php while ( have_rows('social','options') ) : the_row() ?>
            <a class ="<?=the_sub_field('class');?>" href="<?=the_sub_field('link');?>"><img src="<?=the_sub_field('icon');?>"></a>
            <?php endwhile; ?>
            <?php endif; ?> 
        </div>
            <div class="hamb"> 
            <div class="hamb__field" id="hamb"> 
                <span class="bar"></span>
                <span class="bar"></span> 
                <span class="bar"></span>
            </div>
        </div>
        <div class="popup" id="popup"> 
        </div>
    </div>
    </header>
    <main class="wrapper">
        <div class="story__info">
            <div class="story__info-content">
                <p class="story__title"><?=get_field('story-title')?></p>
                <p class="story__text"><?=get_field('story-text')?></p>
            </div>
            <div class="photo__container1">
            <img class="story__image" src="<?=get_field('story-img2')?>" alt="Ирина Рождественская">
            <img class="story__image2" src="<?=get_field('story-img')?>" alt="Фон">
            </div>
        </div>
        <section>
            <img class="story__background" src="<?=get_field('story-background')?>" alt="Фотостудия">
        </section>
        <div class="diplom__info">
                <p class="diplom__text"><?=get_field('diplom-text')?></p>
        </div>

        
    <div class="swiper diploms">
            <div class="swiper-wrapper aboutme">
            <?php if( have_rows('diploms') ): ?>
                <?php while ( have_rows('diploms') ) : the_row('') ?>
            <div class="swiper-slide">
                <img class="rounding" src="<?=the_sub_field('diploms-img');?>" alt="<?=the_sub_field('diplom-label');?>">
            </div>
    <?php endwhile; ?>
    <?php endif; ?> 
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </main>

<?get_footer();?>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        let swiper = new Swiper(".diploms", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: 5, // от 5 отображение
        spaceBetween: 40, // отступ от объектов
        initialSlide: 2, //  с какого объекта начнет
        coverflowEffect: {
            rotate: 0, // вращение вокруг оси 
            stretch: 0,
            depth: 100, // отдаление и увеличение
            modifier: 2, // сужение и позиционирование спереди
            slideShadows: true,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        });
    </script>
</body>
</html>