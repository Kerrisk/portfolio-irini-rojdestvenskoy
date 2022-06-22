<title>Главная страница</title>
<?get_header();?>
<body>
    <header class="header wrapper">
        <a class="index__logo" href="http://eclarina.ru/"><img src="<?=get_field('logo','options')?>" alt="Логотип Ирины Рождественской"></a>
        <nav class="header__nav">
            <ul class="header__list" id="header__list">
                <li class="header__item"><a class="navodka" href="https://eclarina.ru/portfolio/">Портфолио</a></li>
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
            <div class="hamb__field" id="hamb"> <!-- Специальное поле по клику которому будет срабатывать кнопка гамбургера -->
                <span class="bar"></span>
                <span class="bar"></span> <!--Эти спаны это 3 черточки для бургер меню -->
                <span class="bar"></span>
            </div>
        </div>
        <div class="popup" id="popup"> <!-- это будет окошечко при котором будет выдвигаться окошко с меню-->
        </div>
    </div>
    </header>
<main class="hero wrapper">
    <div class="logo__index">
        <img src="<?=get_field('logo_page')?>" alt="Логотип Ирины Рождественской">
        </div>
    <?php if( have_rows('hero_item-img') ): ?>
            <?php while ( have_rows('hero_item-img') ) : the_row('') ?>
        <div>
            <img class="hero__item-img" src="<?=the_sub_field('photo');?>"alt="<?=the_sub_field('label');?>"> 
            </div>
            <?php endwhile; ?>
    <?php endif; ?> 
    </main>
    <?get_footer();?>
    </body>
</html>
