<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';
$mustache = new Mustache_Engine([
        'loader' => new Mustache_Loader_FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/../mustache/')
    ]
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700;800&family=Manrope&display=swap" rel="stylesheet">
    <title>Новости</title>
</head>
<body>
    <!-- шапка -->
    <header class="header">
            <div class="logo_block">
                <img src="img/logo.png" class="logo" alt="Логотип">
                <div>
                    <p class="text_logo">Государственное Унитарное предприятие Ставропольского края</p>
                    <p class="bigText_logo">Ставрополькоммунэлектро</p>
                </div>
            </div>
            <div class="eye_oldVersion">
                <div class="eye_block">
                  <img src="img/eye.png" class="eye" alt="Версия для слабовидящих">
                    <div>
                        <p class="text_eye">Версия для слабовидящих</p>
                    </div>  
                </div>
                <div class="oldVersion_block">
                    <img src="img/arrow-up-right.png" class="oldVersion" alt="Старая версия сайта">
                      <div class="">
                          <p class="text_oldVersion">Старая версия сайта</p>
                      </div>  
                  </div>
            </div>
            <div class="reception_block">
                <img src="img/envelope.png" class="envelope" alt="Интернет приемная">
                <div>
                    <p class="text_reception">Интернет приемная</p>
                </div>  
            </div>
            <div class="personalAcc_block">
                <img src="img/pa.png" class="personalAcc" alt="Личный кабинет">
                <div>
                    <p class="text_personalAcc">Личный кабинет</p>
                </div>  
            </div>
    </header>
    <!-- меню -->
    <section class="mainmenu">
            <ul>
                <li><a href="#">О предприятии</a></li>
                <li><a href="#">Новости</a></li>
                <li><a href="#">Потребителям</a></li>
                <li><a href="#">Закупки</a></li>
                <li><a href="#">Раскрытие информации</a></li>
                <li><a href="#">Контакты</a></li>
                <li><img src="img/search.png" class="menu" alt="Поиск"></li>
            </ul>
    </section>
    <!--  раздел -->
    <section class="section">
        <div class="section_block">
            <p class="text_Msection">Главная</p>
            <p class="text_Ssection">/</p>
            <p class="text_Nsection">Новости</p>
        </div>
    </section>
    <!--  название раздела -->
    <section class="sectionName">
        <div class="sectionName_block">
            <p class="sectionName_text">Новости</p>
        </div>
    </section>
    <!-- фильтры -->
    <section class="newsFilter">
        <div class="newsFilter_block">
            <div class="Filter_allNews">
                <p class="text_Filter_allNews">Все новости</p>
            </div>
            <div class="Filter_yearNews">
                <p class="text_Filter_yearNews">2021</p>
            </div>
        </div>
        <div class="line"></div>
    </section>
    <!-- новости -->
    <?
        $news = [
            'article_block' => [
                [
                    'image' => 'img/news1.png',
                    'date' => '13.07.2020',
                    'title' => 'Правила предоставления коммунальных услуг собственникам и пользователям помещений',
                    'preview' => 'Напоминаем, что в соответствии с Правилами предоставления Правил предоставлени...'
                ],
                [
                    'image' => 'img/news2.png',
                    'date' => '13.07.2020',
                    'title' => 'Правила предоставления коммунальных услуг собственникам и пользователям помещений',
                    'preview' => 'Напоминаем, что в соответствии с Правилами предоставления Правил предоставлени...'
                ],
                [
                    'image' => 'img/news3.png',
                    'date' => '13.07.2020',
                    'title' => 'Правила предоставления коммунальных услуг собственникам и пользователям помещений',
                    'preview' => 'Напоминаем, что в соответствии с Правилами предоставления Правил предоставлени...'
                ],
                [
                    'image' => 'img/news4.png',
                    'date' => '13.07.2020',
                    'title' => 'ГУП СК «Ставрополькоммунэлектро» временно ограничивает личный прием граждан',
                    'preview' => 'В целях предупреждения распространения коронавирусной инфекции (COVID-19...'
                ],
                [
                    'image' => 'img/news5.png',
                    'date' => '13.07.2020',
                    'title' => 'Директор управляющей компании привлечен к уголовной ответственности!',
                    'preview' => 'Шпаковским районным судом Ставропольского края вынесен приговор от 02.04.2019 г. в отношении единственного учредителя...'
                ],
                [
                    'image' => 'img/news4.png',
                    'date' => '13.07.2020',
                    'title' => 'Правила предоставления коммунальных услуг собственникам и пользователям помещений',
                    'preview' => 'Напоминаем, что в соответствии с Правилами предоставления Правил предоставлени...'
                ],
                [
                    'image' => 'img/news1.png',
                    'date' => '13.07.2020',
                    'title' => 'Правила предоставления коммунальных услуг собственникам и пользователям помещений',
                    'preview' => 'Напоминаем, что в соответствии с Правилами предоставления Правил предоставлени...'
                ],
                [
                    'image' => 'img/news2.png',
                    'date' => '13.07.2020',
                    'title' => 'Правила предоставления коммунальных услуг собственникам и пользователям помещений',
                    'preview' => 'Напоминаем, что в соответствии с Правилами предоставления Правил предоставлени...'
                ],
                [
                    'image' => 'img/news3.png',
                    'date' => '13.07.2020',
                    'title' => 'Правила предоставления коммунальных услуг собственникам и пользователям помещений',
                    'preview' => 'Напоминаем, что в соответствии с Правилами предоставления Правил предоставлени...'
                ],
                [
                    'image' => 'img/news10.png',
                    'date' => '13.07.2020',
                    'title' => 'ГУП СК «Ставрополькоммунэлектро» временно ограничивает личный прием граждан',
                    'preview' => 'В целях предупреждения распространения коронавирусной инфекции (COVID-19...'
                ],
                [
                    'image' => 'img/news5.png',
                    'date' => '13.07.2020',
                    'title' => 'Директор управляющей компании привлечен к уголовной ответственности!',
                    'preview' => 'Шпаковским районным судом Ставропольского края вынесен приговор от 02.04.2019 г. в отношении единственного учредителя...'
                ],
                [
                    'image' => 'img/news4.png',
                    'date' => '13.07.2020',
                    'title' => 'Правила предоставления коммунальных услуг собственникам и пользователям помещений',
                    'preview' => 'Напоминаем, что в соответствии с Правилами предоставления Правил предоставлени...'
                ],
            ],
            'btn' => 'Показать ещё',
        ];
    ?>

<?echo $mustache -> render('news_cards', $news)?>

    <section class="pagination">
        <ul>
            <li><img src="img/left arrow.png" alt="Влево"></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">...</a></li>
            <li><a href="#">23</a></li>
            <li><img src="img/right arrow.png" alt="Вправо"></li>
          </ul>
    </section>
    <!-- футер -->
    <footer class="footer">
        <section class="before_line">
            <div class="footer_block">
                <p class="section_title">О предприятии</p>
                <p class="subsection_title">Руководство предприятия</p>
                <p class="subsection_title">Учредительные документы</p>
                <p class="subsection_title">Структура предприятия</p>
                <p class="subsection_title">Персональные данные</p>
                <p class="subsection_title">Стандарты обслуживания</p>
            </div>
            <div class="footer_block">
                <p class="section_title">Потребителям</p>
                <p class="subsection_title">Юридическим лицам</p>
                <p class="subsection_title">Население</p>
            </div>
            <div class="footer_block">
                <p class="section_title">Закупки</p>
                <p class="subsection_title">Положение о закупках</p>
                <p class="subsection_title">План закупок</p>
                <p class="subsection_title">Реестр закупок</p>
                <p class="subsection_title">Сведения о заключенных договорах</p>
                <p class="subsection_title">Реестр договоров</p>
                <p class="subsection_title">НПА по 223-ФЗ</p>
                <p class="subsection_title">Информация, размещенная в соответствии с п. 13 ст. 4 223-ФЗ</p>
            </div>
            <div class="footer_block">
                <p class="section_title">Раскрытие информации</p>
                <p class="subsection_title">Субъекты оптового и розничного рынка</p>
                <p class="subsection_title">Стандарты раскрытия информации</p>
                <p class="subsection_title">Иная информация, подлежащая опубликованию</p>
                <p class="section_title padding_text">Интернет-приемная</p>
                <p class="section_title">Личный кабинет</p>
                <p class="section_title">Контакты</p>
            </div>
        </section>
            <div class="line_footer"></div>
        <section class="after_line">
            <div class="outside FL">
                <img src="img/logo.png" class="Flogo" alt="Логотип">
                <div>
                    <p class="bigText_Flogo">Ставрополькоммунэлектро</p>
                    <p class="text_years">© 1998-2020 ГУП СК «Ставрополькоммунэлектро»</p>
                </div>
            </div>
            <div class="outside">
                <p class="text_persData">Политика в отношении обработки персональных данных</p>
            </div>
            <div class="outside">
                <p class="text_creatWeb">Создание сайта 2021 Slimart</p>
            </div>
            <!-- <div>
                <p class="text_years">© 1998-2020 ГУП СК «Ставрополькоммунэлектро»</p>
            </div> -->
        </section>
    </footer>
</body>
</html>