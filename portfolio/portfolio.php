<?php
/**
* Template Name: Портфолио
* Template Post Type: page
*/
?>
<title>Портфолио</title>
<?get_header();?>
<body>
    <header class="header wrapper">
        <a class="header__logo" href="https://eclarina.ru/"><img src="<?=get_field('logo','options')?>" alt="Логотип Ирины Рождественской"></a>
        <nav class="header__nav">
            <ul class="header__list" id="header__list">
                <li class="header__item"><a class="navodka navodka_vis1" href="https://eclarina.ru/portfolio/">Портфолио</a></li>
                <li class="header__item"><a class="navodka" href="https://eclarina.ru/obrazovanie/">Образование</a></li>
                <li class="header__item"><a class="navodka" href="https://eclarina.ru/obo-mne/">Обо мне</a></li>
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
    <div class="swiper slider-works">
        <div class="swiper-wrapper">
        <?php if( have_rows('swiper-work') ): ?>
        <?php while ( have_rows('swiper-work') ) : the_row('') ?>
        <div class="swiper-slide">
            <a href="<?=the_sub_field('work-link');?>" class="work">
            <img class="work__img"src="<?=the_sub_field('work-img');?>"alt="<?=the_sub_field('work-text');?>"> 
                <div class="work__overlay">
                    <h2 class="work__title"><?=the_sub_field('work-title');?></h2>
                </div>
            </a>
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
    let swiper = new Swiper(".slider-works", {
    autoplay: {
        delay: 2500,
        disableOnInteraction: false, // при наведении мышкой останавливает прокрутку слайдера
},
    pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
        clickable: true,
},
});
</script>
</body>
</html>