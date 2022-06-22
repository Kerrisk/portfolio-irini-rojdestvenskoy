<footer>
        <div class="footer wrapper">
            <a class="decorate" href="<?=get_field('policy_link','options')?>" a target="_blank"=>Политика обработки персональных данных</a>
            <section class="uppercase"><p>@ <?=date('Y')?> <?=get_field('copyright','options')?></p></section>
            <section class="developer"><p><?=get_field('developer','options')?></p></section>
        </div>
        <?wp_footer();?>
    </footer>

<script>
    const hamb = document.querySelector("#hamb");        // считываем кнопку hamb
    const popup = document.querySelector("#popup");      // считываем popup (это будет окошечко при котором будет выдвигаться окошко с меню)
    const header__list = document.querySelector("#header__list").cloneNode(true);  // мы считываем меню которое создали ранее и сразу его копируем в наш popup (глубоким копирование(можно еще попробовать true))
    const body = document.body;

    hamb.addEventListener("click", hambHandler);        // Вешаем обработчик событий при нажатии на кнопку hamb, затем вызываем функцию hambHandler

    function hambHandler(e) {                           // Передаем сюда event
    e.preventDefault();                                 // Сбрасываем стандартное поведение нашей кнопки
    popup.classList.toggle("open");                     // При нажатии на кнопку мы нашей кнопке(popup) добавляем спец метод при 1 нажатии на кнопку добавляется класс open, при 2 нажатии класс убирается (некий переключатель классов)
    hamb.classList.toggle("active");                     // При нажатии на кнопку происходит анимация кнопки
    body.classList.toggle("noscroll");
    renderPopup();                                      // При клике будем ее вызывать
    }
    function renderPopup() {                            // Функция которая будет копировать (почему я создаю отдельную функцию, возможно в дальнейшем я захочу вставлять еще какие то другие элементы, будет служить для создания внешнего вида )
    popup.appendChild(header__list);                    // Метод appendChild позволяет вставить в конец какого-либо другой элемент.
    } 
</script>