<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Woxs</title>
    @include('landing.includes.style')

</head>
<body>
<main>
    @include('landing.includes.header')
    <section id="section-1">
        <div class="wrapper">
            <!--            <div class="landing_img">-->
            <!--                <img class="img1" src="src/img/1.png" alt="">-->
            <!--                <img class="img2" src="src/img/arni.png" alt="">-->
            <!--                <img class="img3" src="src/img/2.png" alt="">-->
            <!--                <img class="img5" src="src/img/3.png" alt="">-->
            <!--                <span class="idea-text1">превращаем</span>-->
            <!--                <img class="img6" src="src/img/idea.png">-->
            <!--                <span class="idea-text2">в результат</span>-->
            <!--                <img class="img4" src="src/img/shape1.png" alt="">-->
            <!--            </div>-->
            <div class="landing_img">
                <img class="arni" src="{{url('/')}}/assets/landing/img/arni_idea.png" alt="arni">
            </div>
        </div>
    </section>
    <section id="section-2">
        <div class="wrapper">
            <div class="text-1">
                <span class="item1">Не</span>
                <span class="item2">просто</span>
                <span class="item3">студия!</span>
            </div>
            <div class="text-2">
                <span>Наш спектр услуг позволяет решать задачи для любого бизнеса. От дизайна визитки, обеспечения безопасности корпоративных сетей и серверов, до конструирование аппаратных решений.</span>
            </div>
        </div>
    </section>
    <section id="section-3">
        <div class="wrapper">
            <div class="services d-flex space-between align_center">
                <div class="item-1">
                    <p class="text-1">Ознакомтесь с нашими <br> комплексными предложениями!</p>
                    <img class="img5" src="{{url('/')}}/assets/landing/img/3.png" alt="">
                    <div class="btn call">
                        <button class="solutions_btn" type="button">Комплексные решения</button>
                    </div>
                    <p class="text-2">Отличный вариант получить весь необходимый результат, за меньшие деньги</p>
                </div>
                <div class="item-2">
                    <p>Посмотрите наш перечень услуг, он действительно впечатляет!</p>
                    <div class="btn">
                        <button class="btn gradient service" type="button">Услуги</button>
                    </div>
                </div>
                <img class="img" src="{{url('/')}}/assets/landing/img/shape4.png" alt="">
            </div>

        </div>
    </section>
    <section id="section-4">

        <div class="wrapper">
            <div class="container solutions element">
                <div class="solution_item item1 element_title">
                    <div class="element__text">
                        Комплексные решения
                    </div>
                    <div class="top-border">
                    </div>
                    <div class="solution_title title_item1">
                        <h3>Стартап</h3>
                    </div>
                    <div class="solution_content">
                        <div class="solution_text">
                            <p>Мы отлично понимаем амбиции и возможности начинающего бизнеса! </p>
                            <p>А еще лучше мы знакомы с теми трудностями, которые вас на этом пути ожидают </p>
                            <p>Набор учитывает в себе все необходимое для успешного старта вашего бизнеса </p>
                        </div>
                        <div class="bottom" data-id="solution_nav_1">Узнать что внутри</div>
                    </div>
                </div>
                <div class="solution_item item2">
                    <div class="top-border">
                    </div>
                    <div class="solution_title title_item2">
                        <h3>Уже в интернете</h3>
                    </div>
                    <div class="solution_content">
                        <div class="solution_text">
                            <p>Бизнес который стоял на месте - вымер.</p>
                            <p>Принеси информацию первым, предоставить не просто товар, а эмоцию - значит
                                выжить</p>
                        </div>
                        <div class="bottom" data-id="solution_nav_2">Узнать что внутри</div>
                    </div>
                </div>
                <div class="solution_item item3">
                    <div class="top-border">
                    </div>
                    <div class="solution_title title_item3">
                        <h3>Гигант</h3>
                    </div>
                    <div class="solution_content">
                        <div class="solution_text">
                            <p>Бизнес который стоял на месте - вымер.</p>
                            <p>Принеси информацию первым, предоставить не просто товар, а эмоцию - значит
                                выжить</p>
                        </div>
                        <div class="bottom" data-id="solution_nav_3">Узнать что внутри</div>
                    </div>
                </div>
            </div>
            <div class="container solutions last">
                <div id="solution_nav_1" class="solution_nav item1 startup">

                    <div class="solution_text list">
                        <ul>
                            <li>
                                <h4 class="title_list">Branding</h4>
                                <p>Придумать и реализовать все необходимое для современного бренда</p>
                                <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                            </li>
                            <li>
                                <h4 class="title_list">DEV</h4>
                                <p>Разработать приложение для всех популярных платформ</p>
                                <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                            </li>
                            <li>
                                <h4 class="title_list">WEB</h4>
                                <p>Создать сайт, интернет-магазин или целевую страницу любой сложности</p>
                                <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                            </li>
                            <li>
                                <h4 class="title_list">SEO & SMM</h4>
                                <p>Настроить максимально эффективное продвижение</p>
                                <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                            </li>
                            <li>
                                <h4 class="title_list">ADS</h4>
                                <p>Подготовить всю графику для рекламной кампании, и виде тоже</p>
                                <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                            </li>
                            <li>
                                <h4 class="title_list">PRINT</h4>
                                <p>Больше никаких злых печатников, вылетов и тиффов. Мы умеем говорить с ними на
                                    одном языке</p>
                                <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="bottom-border item1">
                        <div class="circle-btn">
                            <i class="fa-solid fa-angles-down"></i>
                        </div>
                    </div>
                    <div class="information item1">
                        <h4 class="click">Больше информации</h4>
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                </div>
                <div id="solution_nav_2" class="solution_nav item2 startup">
                    <div class="solution_text list">
                        <ul>
                            <li>
                                <h4 class="title_list">Branding</h4>
                                <p>Придумать и реализовать все необходимое для современного бренда</p>
                                <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                            </li>
                            <li>
                                <h4 class="title_list">DEV</h4>
                                <p>Разработать приложение для всех популярных платформ</p>
                                <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                            </li>
                            <li>
                                <h4 class="title_list">WEB</h4>
                                <p>Создать сайт, интернет-магазин или целевую страницу любой сложности</p>
                                <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                            </li>
                            <li>
                                <h4 class="title_list">SEO & SMM</h4>
                                <p>Настроить максимально эффективное продвижение</p>
                                <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                            </li>
                            <li>
                                <h4 class="title_list">ADS</h4>
                                <p>Подготовить всю графику для рекламной кампании, и виде тоже</p>
                                <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                            </li>
                            <li>
                                <h4 class="title_list">PRINT</h4>
                                <p>Больше никаких злых печатников, вылетов и тиффов. Мы умеем говорить с ними на
                                    одном языке</p>
                                <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="bottom-border item2">
                        <div class="circle-btn">
                            <i class="fa-solid fa-angles-down"></i>
                        </div>
                    </div>
                    <div class="information item2">
                        <h4>Больше информации</h4>
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                </div>
                <div id="solution_nav_3" class="solution_nav item3 startup">
                    <div class="solution_text list">
                        <ul>
                            <li>
                                <h4 class="title_list">Branding</h4>
                                <p>Придумать и реализовать все необходимое для современного бренда</p>
                                <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                            </li>
                            <li>
                                <h4 class="title_list">DEV</h4>
                                <p>Разработать приложение для всех популярных платформ</p>
                                <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                            </li>
                            <li>
                                <h4 class="title_list">WEB</h4>
                                <p>Создать сайт, интернет-магазин или целевую страницу любой сложности</p>
                                <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                            </li>
                            <li>
                                <h4 class="title_list">SEO & SMM</h4>
                                <p>Настроить максимально эффективное продвижение</p>
                                <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                            </li>
                            <li>
                                <h4 class="title_list">ADS</h4>
                                <p>Подготовить всю графику для рекламной кампании, и виде тоже</p>
                                <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                            </li>
                            <li>
                                <h4 class="title_list">PRINT</h4>
                                <p>Больше никаких злых печатников, вылетов и тиффов. Мы умеем говорить с ними на
                                    одном языке</p>
                                <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="bottom-border item3">
                        <div class="circle-btn">
                            <i class="fa-solid fa-angles-down"></i>
                        </div>
                    </div>
                    <div class="information item3">
                        <h4>Больше информации</h4>
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                </div>
                <div class="container services element_title_services">
                    <div class="element__text">
                        Услуги
                    </div>
                    <div class="services item1">
                        <img src="{{url('/')}}/assets/landing/img/item1.png" alt="1">
                        <h4>Разработка</h4>
                        <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                    <div class="services item2">
                        <img src="{{url('/')}}/assets/landing/img/item2.png" alt="1">
                        <h4>SEO & SMM</h4>
                        <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                    <div class="services item3">
                        <img src="{{url('/')}}/assets/landing/img/item3.png" alt="1">
                        <h4>Smart предприятие</h4>
                        <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                    <div class="services item4">
                        <img src="{{url('/')}}/assets/landing/img/item4.png" alt="1">
                        <h4>Design</h4>
                        <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>

                    <img class="img2_b" src="{{url('/')}}/assets/landing/img/item2_b.png">
                    <img class="img3_b" src="{{url('/')}}/assets/landing/img/item3_b.png">
                </div>
                <img class="img1_b" src="{{url('/')}}/assets/landing/img/item1_b.png">
            </div>


        </div>

    </section>
    <section id="section-5">
        <div class="wrapper">
            <div class="sub_title">
                <h4>Юридическая и финансовая ответственность</h4>
            </div>
            <div class="content">
                <div class="not_trap">
                    <!--         <img class="not_trap_color" src="src/img/i_color.png" alt="trap">
                             <img class="not_trap_black" src="src/img/i_black.png" alt="trap">
                             <img class="not_trap_img" src="src/img/not_trap.png" alt="trap">-->
                    <img class=trap_img" src="{{url('/')}}/assets/landing/img/trap.png" alt="trap">
                </div>
                <div class="title">
                    <h2 class="title_item_1">It's</h2>
                    <h3 class="title_item_2">not</h3>
                    <h2 class="title_item_3">a trap!</h2>
                </div>
            </div>
            <div class="content_text">
                <h4>Не обязательно верить на слово</h4>
                <h3><span>Договор</span> - ваша лучшая защита</h3>
                <p>Одно из лучших преимуществ работы со студией - наличие договора о обязанности сторон.</p>
                <p>Все аспекты работы чётко и понятно описаны проекным контрактом.</p>
                <div class="btn">
                    <button class="btn gradient treaty" type="button">Ознакомится с примером</button>
                </div>
            </div>
        </div>

    </section>
    <section id="blog" class="index">

        <div class="wrapper">
            <div class="sub_title">
                <h4>Блог</h4>
            </div>
            <div class="last-news-title">
                <h4>Последние публикации</h4>
            </div>
            <div class="news">
                <div class="card news-item">
                    <img src="{{url('/')}}/assets/landing/img/news1.png" class="header-img" alt="news1">
                    <div class="title_news">
                        <div class="title">
                            <h4>Разработка сайта:</h4>
                        </div>
                        <div class="subtitle">
                            <h4>С чего начать?</h4>
                        </div>
                    </div>
                    <div class="description">
                        <p>
                            Разработка собственного сайта может преследовать одну из нескольких целей: реклама
                            услуг, создание блога или продающего ресурса, предоставление важной информации, открытие
                            полезной системы или службы. Разные цели определяют сложность проекта и затраты,
                            необходимые для того, чтобы запуск сайта стал возможен. Читайте более подробно про
                            классификации сайтов по видам и типам в этой статье.
                        </p>
                    </div>
                    <div class="news-footer">
                        <div class="news-date">
                            <p>15.02.2023</p>
                        </div>
                        <div class="news-read-more">
                            <p>Читать дальше...</p>
                        </div>
                    </div>
                </div>

                <div class="card news-item">
                    <img src="{{url('/')}}/assets/landing/img/news2.png" class="header-img" alt="news2">
                    <div class="title_news">
                        <div class="title">
                            <h4>Настройка сайта:</h4>
                        </div>
                        <div class="subtitle">
                            <h4>Зачем?</h4>
                        </div>
                    </div>
                    <div class="description">
                        <p>
                            Разработка собственного сайта может преследовать одну из нескольких целей: реклама
                            услуг, создание блога или продающего ресурса, предоставление важной информации, открытие
                            полезной системы или службы. Разные цели определяют сложность проекта и затраты,
                            необходимые для того, чтобы запуск сайта стал возможен. Читайте более подробно про
                            классификации сайтов по видам и типам в этой статье.
                        </p>
                    </div>
                    <div class="news-footer">
                        <div class="news-date">
                            <p>15.02.2023</p>
                        </div>
                        <div class="news-read-more">
                            <p>Читать дальше...</p>
                        </div>
                    </div>
                </div>

                <div class="card news-item">
                    <img src="{{url('/')}}/assets/landing/img/news3.png" class="header-img" alt="news1">
                    <div class="title_news">
                        <div class="title">
                            <h4>Дизайн сайта:</h4>
                        </div>
                        <div class="subtitle">
                            <h4>Что делать чтобы было хорошо?</h4>
                        </div>
                    </div>
                    <div class="description">
                        <p>
                            Разработка собственного сайта может преследовать одну из нескольких целей: реклама
                            услуг, создание блога или продающего ресурса, предоставление важной информации, открытие
                            полезной системы или службы. Разные цели определяют сложность проекта и затраты,
                            необходимые для того, чтобы запуск сайта стал возможен. Читайте более подробно про
                            классификации сайтов по видам и типам в этой статье.
                        </p>
                    </div>
                    <div class="news-footer">
                        <div class="news-date">
                            <p>15.02.2023</p>
                        </div>
                        <div class="news-read-more">
                            <p>Читать дальше...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    @include('landing.includes.footer')
</main>
</body>
</html>
