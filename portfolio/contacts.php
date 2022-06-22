<?php
/**
* Template Name: Контакты
* Template Post Type: page
*/
?>
<title>Контакты</title>
<?get_header();?>
<body class="white__background">
    <header class="header wrapper">
        <a class="header__logo" href="https://eclarina.ru/"><img src="<?=get_field('logo','options')?>" alt="Логотип Ирины Рождественской"></a>
        <nav class="header__nav">
            <ul class="header__list" id="header__list">
                <li class="header__item"><a class="navodka" href="https://eclarina.ru/portfolio/">Портфолио</a></li>
                <li class="header__item"><a class="navodka" href="https://eclarina.ru/obrazovanie/">Образование</a></li>
                <li class="header__item"><a class="navodka" href="https://eclarina.ru/obo-mne/">Обо мне</a></li>
                <li class="header__item"><a class="navodka navodka_vis1" href="https://eclarina.ru/kontakty/">Контакты</a></li>
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
        <div class="contacts__info">
            <div class="contacts__info-content">
                <p class="contacts__title"><?=get_field('contacts-text')?></p>
                <div class="contacts__forma">
                    <div class="name__mail">
            <form action="mail.php" method="post">
                <input type="text" class="contacts__name" name="user_name" required placeholder="Ваше имя">
                    <input type="email" class="contacts__mail" name="user_mail" required placeholder="Электронный адрес">
                    </div>
                    <div class="contacts__text-block">
                    <textarea  class="contacts__text" rows="5" name="user_text" placeholder="Пожалуйста, введите ваше сообщение здесь..."></textarea>
                    <input class="contacts__button" type="submit" value="Отправить">
                    </div>
            </form>
                </div>
            </div>
            <div class="photo__container2">
            <img class="contacts__img" src="<?=get_field('contacts-img')?>" alt="Ирина Рождественская">
            <img class="contacts__img2" src="<?=get_field('contacts-background')?>" alt="Фон">
            </div>
        </div>
        <section>
            <p class="team__text">Моя команда</p>
        </section>

        <?php if( have_rows('contacts-team') ): ?>
            <?php while ( have_rows('contacts-team') ) : the_row('') ?>
        <div class="team__guys">
        <div><img class="team__img" src="<?=the_sub_field('contacts-photo');?>" alt="<?=the_sub_field('contacts-label');?>"> 
            <p class="name"><?=the_sub_field('contacts-fio');?></p>
            <p class="job"><?=the_sub_field('contacts-job');?></p>
            <p class="line"></p>
            <aside class="full__info"><?=the_sub_field('contacts-info');?></aside>
        </div>
            <?php endwhile; ?>
    <?php endif; ?> 
    </main>
<?get_footer();?>
</body>
</html>