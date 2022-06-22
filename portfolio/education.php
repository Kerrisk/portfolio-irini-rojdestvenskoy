<?php
/**
* Template Name: Образование
* Template Post Type: page
*/
?>
<title>Образование</title>
<?get_header();?>
<body class="white__background">
        <header class="header wrapper">
        <a class="header__logo" href="https://eclarina.ru/"><img src="<?=get_field('logo','options')?>" alt="Логотип Ирины Рождественской"></a>
        <nav class="header__nav">
            <ul class="header__list" id="header__list">
                <li class="header__item"><a class="navodka" href="https://eclarina.ru/portfolio/">Портфолио</a></li>
                <li class="header__item"><a class="navodka navodka_vis1" href="https://eclarina.ru/obrazovanie/">Образование</a></li>
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
<div class="page__info">
<img class="page__img" src="<?=get_field('page-img')?>" alt="Фон">
    <div class="page__info-content">
        <p class="page__title"><?=get_field('page-title')?></p>
        <p class="page__text"><?=get_field('page-text')?></p>
    </div>
</div>
<div class="detail__info">
        <div class="detail__info-content">
            <p class="detail__about-me"><?=get_field('detail-about-me')?></p>
            <p class="detail__title"><?=get_field('detail-title')?></p>
            <p class="detail__text"><?=get_field('detail-text')?></p>
        </div>
        <img class="detail__img" src="<?=get_field('detail-img')?>" alt="Картинка">
    </div>
    </main>
    <?get_footer();?>
</body>
</html>