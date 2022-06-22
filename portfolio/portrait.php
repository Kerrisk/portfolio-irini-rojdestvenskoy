<?php
/**
* Template Name: Портрет
* Template Post Type: page
*/
?>
<title>Портреты</title>
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
            <div class="hr"></div>
            <ul class="header__list"> 
                <li class="header__item2"><a class="navodka2" href="https://eclarina.ru/predmetnaya-semka/">Предметная съемка</a></li>
                <li class="header__item2"><a class="navodka2" href="https://eclarina.ru/priklyucheniya/">Приключения</a></li>
                <li class="header__item2"><a class="navodka_vis2" href="https://eclarina.ru/portret/">Портрет</a></li>
                <li class="header__item2"><a class="navodka2" href="https://eclarina.ru/yarkie-momenty/">Яркие моменты</a></li>
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
    <section class="wrapper">
            <article class="designation">Портрет</article>
        </section>
    <main class="hero2 wrapper">
    
    <?php if( have_rows('hero_item-igm4') ): ?>
            <?php while ( have_rows('hero_item-igm4') ) : the_row('') ?>
        <div>
            <img class="hero__item-img" src="<?=the_sub_field('photo-4');?>"alt="<?=the_sub_field('label-4');?>"> 
            </div>
            <?php endwhile; ?>
    <?php endif; ?> 
    </main>
<?get_footer();?>
</body>
</html>