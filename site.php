<?php 
  if(!isset($_GET['p']))
{
  $_GET['p']= "main";
}
?>
<!DOCTYPE html>

<head>
    <title>
        Сайт Витебска
    </title>
    <link rel="shortcut icon" href="images/city.ico" type="image/x-icon">
	
    <link rel="stylesheet" type="text/css" href=
	<?php
	switch
	( $_GET['p']){
			case 'bazar':
                echo '"styles/bazar.css"';
								break;
            case 'main':
                echo '"styles/mainstyle.css"';
								break;
			
			
			case 'discussions':
                echo '"styles/discussionsstyle.css"';
								break;
			case 'attractions':
                echo '"styles/attractions.css"';
								break;
	}
	?>
	>
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates|Philosopher&display=swap"
        rel="stylesheet">
</head>


<body>
    <header>
        <div class="mainmenu">
            <nav>
			<ul>
			<li>
				<a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"].'?p=main');?>" class="menubutton <?php if($_GET["p"]=='main'){echo 'menubutton_active';}?>">Главная</a>
			</li>
			<li>
				<a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"].'?p=attractions');?>" class="menubutton <?php if($_GET["p"]=='attractions'){echo 'menubutton_active';}?>">Достопремичательности</a>
			</li>
			<li>    
				<a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"].'?p=bazar');?>" class="menubutton <?php if($_GET["p"]=='bazar'){echo 'menubutton_active';}?>"><div class="menubutton">Славянский базар</a>
            </li>
			<li>   
				<a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"].'?p=discussions');?>" class="menubutton <?php if($_GET["p"]=='discussions'){echo 'menubutton_active';}?>">Если захотели уехать</a>
            </li>
			</ul>
			</nav>
        </div>
    </header>
    <main>

        <?php switch( $_GET['p']){
            case 'main':
                echo '

    <div class="main">
        <div class="maincont">
            <div class="bazar">
                <div class="bazarcont">
                    <h1>Город Витебск</h1>
                    <div class="imagecont">
                        <div class="firstimg">
                            <img src="images/Vitebsk.jpg" width=100% height=100%>
                        </div>
                    </div>
                </div>
            </div>

            <div class="caption">
                Краткая справка
            </div>
            <div class="mainimage">
                <img src="images/Dvina.jpg" width="100%">
                <h1>
                    Река Западная Двина
                    <div class="imgarticle">
                        Протекает в центре города 
                    </div>
                </h1>
            </div>
            <div class="article">
                Витебск — город на северо-востоке Белоруссии, административный центр Витебской области и Витебского района. 
                Расположен в восточной части области на реке Западная Двина. Четвёртый по численности населения (после Минска, 
                Гомеля и Могилёва) город страны. Население — 378 459 человек (на 1 января 2019 года)[3]. Площадь — 134,6 км² 
                (на 16 августа 2017 года).

                Второй по возрасту город Белоруссии (974 год[5]) после Полоцка. Возник на высоких берегах Западной Двины и Витьбы, 
                давшей ему имя, на пути из варяг в греки. По городской легенде XVIII века, основан святой равноапостольной княгиней 
                Ольгой. Город формировался как один из центров объединения славян-кривичей, а удобное географическое положение на 
                пересечении важнейших торговых путей способствовало росту и процветанию его на протяжении последующих веков.
            </div>
        </div>
    </div>
         ';
        break;
        case "bazar":
            echo '
 
    <div class="bazar">
        <div class="bazarcont">
            <h1>Славянский базар</h1>
            <div class="imagecont">
                <div class="firstimg">
                    <img src="images/slavyan.jpg" width=100% height=100%>
                </div>
                <div class="article">
                    Славянский базар — ежегодный международный фестиваль искусств, который проходит в Витебске с 1992 года.

                    Фестиваль задуман как общее культурное мероприятие трех стран: Беларуси, России, Украины. Отличительной
                    чертой фестиваля является международный конкурс исполнителей эстрадной песни и международный детский
                    музыкальный конкурс (с 2003 года). С 1993 года «Славянский базар» является членом FIDOF. Помимо конкурсов,
                    на фестивале широко представлена не только песенная культура, но и разнообразные виды искусств — изобразительное,
                    театральное, кино, народные ремесла. Фестивальные дни включают творческие встречи с различными деятелями
                    мировой культуры, презентации театральных постановок и кинолент, художественные выставки, а также ярмарки
                    с участием мастеров-ремесленников.

                    «Славянский базар в Витебске» позиционирует себя как «долгосрочная, крупномасштабная, межгосударственная 
                    культурная акция Союза России и Беларуси, которая ориентирована на объединение многонациональных творческих 
                    сил, всего самого ценного, чем славится каждая из национальных культур, на взаимодействие и взаимопроникновение 
                    различных культур, духовное единение народов мира, создание мирного сообщества. Фестиваль имеет открытый 
                    массовый характер, способствует возрождению и развитию художественной культуры и искусства в целом». 
                    Фест призван поддерживать молодые таланты и новаторство в искусстве.
                </div>
            </div>
        </div>
    </div>
            '; 
        break;
        case "discussions":
            echo '

    <div class="discussions">
        <div class="discussionscont">

        </div>
    </div>

    <h1>
        Оставить заявку
    </h1>
    <div class="postform">
        <span>
            Ваша заявка
        </span>
        <form class="post">
            <div>
                <div class="postformtext">
                    Напишите нам город, куда вы хотите отправиться и время, в которое готовы улететь. Мы закажем Вам самолет
                    на указанное время и место.
                </div>
                <textarea rows="10" placeholder="Введите текст:" tabindex="1"></textarea>
            </div>
            <p>
                 e-mail:
                <input type="e-mail">
                <input type="submit" title="Опубликовать">
            </p>
            <div>
                <div class="postformtext">
                    Мы пришлем вам электронный билет на Ваш почтовый ящик.
                </div>
            </div>
        </form>
    </div>
            ';
        break;
        case "attractions":
            echo '

    </header>
    <div class="attractions">
        <div class="attractionscont">
            <h1>Фонтан "Слияние трех рек"</h1>
            <div class="images">
                <div class="firstimg">
                    <img src="images/fountain.jpg" width=100% height=100%>
                </div>
                <div class="article">
                    Одной из достопримечательностей и излюбленных мест отдыха жителей города Витебска является фонтан,
                    который в простонародье называют по-разному - "три русалки", "три девушки", "три бабы" и т.п.
                    Правильное название этого фонтана – "Слияние трех рек", знают немногие.
                    Фонтан Хотя построен фонтан сравнительно недавно, местная молодежь с уверенностью скажет, что этому
                    сооружению сотня лет и будут, конечно же, неправы. Старожилы помнят, что в этом месте находились 
                    круглые ванны с небольшими фонтанчиками. Лишь в 1987 году архитектор В.Андaрaлов и скульптор А.Тaросян
                    представили жителям северной столицы свое очередное творение - каскадный фонтан, с тремя аллегорическими фигурами,
                    символизирующие слияние трёх витебских рек: Западной Двины, Витьбы и Лучесы.
                    Если заглянуть еще глубже в историю города Витебска, то это место окажется совсем уж святым.
                    Ведь на фотографиях конца 19 века эту территорию занимает костел св. Антония Падуанского Бернардинского
                    монастыря, по слухам павшего в 1950-е годы жертвой "благоустройства" центра города Витебска.
                </div>
            </div>
        </div>
    </div>
    <div class="attractions">
        <div class="attractionscont">
            <h1>Мемориальный комплекс "Три штыка"</h1>
            <div class="images">
                <div class="firstimg">
                    <img src="images/3.jpg" width=100% height=100%>
                </div>
                <div class="article">
                    У каждого города есть свои знаковые объекты. В Витебске – это мемориальный комплекс "Три штыка", в 
                    котором запечатлен бессмертный подвиг народа. Три штыка величественно возвышаются над городом, 
                    напоминая горожанам вновь и вновь о прожитых суровых годах и о великой жертве советского народа во имя Победы.
                    В списке достопримечательностей Витебска мемориал появился в 1974 году. Тогда на главной городской площади Победы 
                    возвысился символичный мемориальный комплекс "Три штыка" по проекту архитектора Ю.Шпита. Но время шло, город 
                    развивался, и стала очевидной назревающая реконструкция объекта. Масштабная реставрация началась в 2009 году
                    – и спустя год мемориал преобразился. После реконструкции комплекс приобрел современный внешний вид и 
                    оригинальный дизайн. Сегодня мемориал "Освободителям Витебска - советским воинам, партизанам и подпольщикам" 
                    - это огромный комплекс, где каждому элементу отведен свой особый смысл, - будь то площадь, парк, скульптурные 
                    композиции или же бассейны со струящейся водой, которая символизирует пролитые кровь и слезы… И все это служит 
                    своего рода предысторией к великой трагедии, необычным обрамлением центрального монумента комплекса – мемориала 
                    "Три штыка".

                    Сегодня мемориальный комплекс "Три штыка" является главным украшением площади Победы в Витебске. 
                    Издалека трудно не заметить три суживающихся кверху 56-метровых пилона-обелиска трапециевидной формы. 
                    Вверху, на высоте примерно пяти метров, обелиски объединены в единую композицию при помощи монолитного 
                    фриза, на трех гранях которого выполнены рельефы, прославляющие бессмертный подвиг воинов, партизан и 
                    подпольщиков. Но пилоны соединены не только внешне – внутри также имеется кольцо, соединяющее три обелиска, 
                    с надписью "Слава героям". А под ним, на символичном постаменте в форме пятиконечной звезды, зажжен Вечный огонь 
                    – как дань памяти трагическим страницам истории Витебска, мужеству горожан и всего советского народа. Особенно 
                    красив комплекс в вечернее время, когда на город спускаются сумерки. В свете ночных огней мемориал выглядит 
                    еще более торжественно. Особую изысканность комплексу придает оригинальная подсветка каждого его элемента.
                </div>
            </div>
        </div>
    </div>
    <div class="attractions">
        <div class="attractionscont">
            <h1>Дом-музей Марка Шагала</h1>
            <div class="images">
                <div class="firstimg">
                    <img src="images/dom.jpg" width=100% height=100%>
                </div>
                <div class="article">
                    Дом-музей Марка Шагала в Витебске является частью музейного комплекса, посвящённого Марку Шагалу, 
                    одному из величайших представителей художественного авангарда 20 века. Музейный комплекс помимо дома-музея 
                    Марка Шагала в Витебске включает в себя также Арт-центр Марка Шагала в Витебске. Этот комплекс – один из 
                    двух мемориальных музеев Марка Шагала в мире! Второй располагается во французской Ницце и называется 
                    Национальный музей библейского послания Марка Шагала.
                    
                    Экспозиция музея включает предметы, принадлежащие семье Шагалов, копии архивных документов, фотографий 
                    и работ художника, рассказывающие о жизни творца и его семье. Экспозиция включает следующие залы: «Кухня», 
                    «Гостиная», «Бакалейная лавка», «Комната мальчиков», «Красная комната». Интерьер дома был воссоздан по 
                    архивным документам и работам самого Марка Шагала. Руководил работами Юрий Черняк.

                    В перспективе планируется полное восстановление усадьбы семьи Шагалов, а также восстановление деревянной 
                    одно- и двухэтажной каменной застройки в прилегающем квартале. В итоге должна быть воссоздана историческая 
                    среда конца 19 – начала 20 века. В соседних домах планируется устроить рестораны, мини-гостиницы и 
                    сувенирные лавки.

                    Дом-музей Марка Шагала в Витебске привлекает как ценителей творчества Марка Шагала, так и туристов, 
                    выбравших отдых в Беларуси. Кроме того, не обходят его стороной гости и участники Славянского базара 
                    в Витебске.
                </div>
            </div>
        </div>
    </div>
            ';
        break;
        default:
    echo '
        <div>
            <span>Sorry, this part of site is still not working :(</span>
        </div>';
    break;
        }?>
		 <footer>
        <div class="footercont">
            © Ilya M.
        </div>
    </footer>

    </main>


</body>

</html>