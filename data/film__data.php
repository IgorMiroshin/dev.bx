<?php

$genres = [
    'sci-fi' => 'Фантастика',
    'drama' => 'Драма',
    'adventure' => 'Приключения',
    'animation' => 'Мультфильм',
    'fantasy' => 'Фэнтези',
    'family' => 'Семейный',
    'action' => 'Боевик',
    'thriller' => 'Триллер',
    'comedy' => 'Комедия',
    'music' => 'Музыка',
    'biography' => 'Биография',
    'western' => 'Вестерн',
    'war' => 'Военный',
    'sport' => 'Спорт',
    'history' => 'История'
];

$movies = [
    [
        'id' => 1,
        'title' => 'Интерстеллар',
        'original-title' => 'Interstellar',
        'description' => 'Когда засуха, пыльные бури и вымирание растений приводят человечество к продовольственному кризису, коллектив исследователей и учёных отправляется сквозь червоточину (которая предположительно соединяет области пространства-времени через большое расстояние) в путешествие, чтобы превзойти прежние ограничения для космических путешествий человека и найти планету с подходящими для человечества условиями.',
        'duration' => 169,
        'genres' => ['Фантастика', 'Драма', 'Приключения'],
        'cast' => ['Мэттью МакКонахи', 'Энн Хэтэуэй', 'Джессика Честейн'],
        'director' => 'Кристофер Нолан',
        'age-restriction' => 16,
        'release-date' => 2014,
        'rating' => 8.6,
        'favoriteItem' => true
    ],
    [
        'id' => 2,
        'title' => 'Тайна Коко',
        'original-title' => 'Coco',
        'description' => '12-летний Мигель живёт в мексиканской деревушке в семье сапожников и тайно мечтает стать музыкантом. Тайно, потому что в его семье музыка считается проклятием. Когда-то его прапрадед оставил жену, прапрабабку Мигеля, ради мечты, которая теперь не даёт спокойно жить и его праправнуку. С тех пор музыкальная тема в семье стала табу. Мигель обнаруживает, что между ним и его любимым певцом Эрнесто де ла Крусом, ныне покойным, существует некая связь. Паренёк отправляется к своему кумиру в Страну Мёртвых, где встречает души предков. Мигель знакомится там с духом-скелетом по имени Гектор, который становится его проводником. Вдвоём они отправляются на поиски де ла Круса.',
        'duration' => 105,
        'genres' => ['Мультфильм', 'Фэнтези', 'Приключения', 'Семейный', 'Музыка'],
        'cast' => ['Энтони Гонсалес', 'Гаэль Гарсиа Берналь', 'Бенджамин Брэтт'],
        'director' => 'Ли Анкрич',
        'age-restriction' => 12,
        'release-date' => 2017,
        'rating' => 8.6
    ],
    [
        'id' => 3,
        'title' => 'Начало',
        'original-title' => 'Inception',
        'description' => 'Кобб – талантливый вор, лучший из лучших в опасном искусстве извлечения: он крадет ценные секреты из глубин подсознания во время сна, когда человеческий разум наиболее уязвим. Редкие способности Кобба сделали его ценным игроком в привычном к предательству мире промышленного шпионажа, но они же превратили его в извечного беглеца и лишили всего, что он когда-либо любил.',
        'duration' => 148,
        'genres' => ['Фантастика', 'Боевик', 'Драма'],
        'cast' => ['Леонардо ДиКаприо', 'Джозеф Гордон-Левитт', 'Эллиот Пейдж', 'Том Харди'],
        'director' => 'Кристофер Нолан',
        'age-restriction' => 12,
        'release-date' => 2010,
        'rating' => 8.7
    ],
    [
        'id' => 4,
        'title' => '1+1',
        'original-title' => 'Intouchables',
        'description' => 'Пострадав в результате несчастного случая, богатый аристократ Филипп нанимает в помощники человека, который менее всего подходит для этой работы, – молодого жителя предместья Дрисса, только что освободившегося из тюрьмы. Несмотря на то, что Филипп прикован к инвалидному креслу, Дриссу удается привнести в размеренную жизнь аристократа дух приключений.',
        'duration' => 112,
        'genres' => ['Драма', 'Комедия'],
        'cast' => ['Франсуа Клюзе', 'Омар Си'],
        'director' => 'Оливье Накаш',
        'age-restriction' => 16,
        'release-date' => 2011,
        'rating' => 8.8
    ],
    [
        'id' => 5,
        'title' => 'Джентльмены',
        'original-title' => 'The Gentlemen',
        'description' => 'Один ушлый американец ещё со студенческих лет приторговывал наркотиками, а теперь придумал схему нелегального обогащения с использованием поместий обедневшей английской аристократии и очень неплохо на этом разбогател. Другой пронырливый журналист приходит к Рэю, правой руке американца, и предлагает тому купить киносценарий, в котором подробно описаны преступления его босса при участии других представителей лондонского криминального мира — партнёра-еврея, китайской диаспоры, чернокожих спортсменов и даже русского олигарха',
        'duration' => 113,
        'genres' => ['Комедия', 'Боевик'],
        'cast' => ['Мэттью МакКонахи', 'Чарли Ханнэм', 'Генри Голдинг'],
        'director' => 'Гай Ричи',
        'age-restriction' => 18,
        'release-date' => 2019,
        'rating' => 8.5
    ],
    [
        'id' => 6,
        'title' => 'Одержимость',
        'original-title' => 'Whiplash',
        'description' => 'Эндрю мечтает стать великим. Казалось бы, вот-вот его мечта осуществится. Юношу замечает настоящий гений, дирижер лучшего в стране оркестра. Желание Эндрю добиться успеха быстро становится одержимостью, а безжалостный наставник продолжает подталкивать его все дальше и дальше – за пределы человеческих возможностей. Кто выйдет победителем из этой схватки?',
        'duration' => 106,
        'genres' => ['Драма', 'Музыка'],
        'cast' => ['Майлз Теллер', 'Дж.К. Симмонс'],
        'director' => 'Дэмьен Шазелл',
        'age-restriction' => 16,
        'release-date' => 2013,
        'rating' => 8.3
    ],
    [
        'id' => 7,
        'title' => 'Зеленая книга',
        'original-title' => 'Green Book',
        'description' => '1960-е годы. После закрытия нью-йоркского ночного клуба на ремонт вышибала Тони по прозвищу Болтун ищет подработку на пару месяцев. Как раз в это время Дон Ширли — утонченный светский лев, богатый и талантливый чернокожий музыкант, исполняющий классическую музыку — собирается в турне по южным штатам, где ещё сильны расистские убеждения и царит сегрегация. Он нанимает Тони в качестве водителя, телохранителя и человека, способного решать текущие проблемы. У этих двоих так мало общего, и эта поездка навсегда изменит жизнь обоих.',
        'duration' => 130,
        'genres' => ['Комедия', 'Драма'],
        'cast' => ['Вигго Мортенсен', 'Махершала Али'],
        'director' => 'Питер Фаррелли',
        'age-restriction' => 16,
        'release-date' => 2018,
        'rating' => 8.4
    ],
    [
        'id' => 8,
        'title' => 'Волк с Уолл-стрит',
        'original-title' => 'The Wolf of Wall Street',
        'description' => '1987 год. Джордан Белфорт становится брокером в успешном инвестиционном банке. Вскоре банк закрывается после внезапного обвала индекса Доу-Джонса. По совету жены Терезы Джордан устраивается в небольшое заведение, занимающееся мелкими акциями. Его настойчивый стиль общения с клиентами и врождённая харизма быстро даёт свои плоды. Он знакомится с соседом по дому Донни, торговцем, который сразу находит общий язык с Джорданом и решает открыть с ним собственную фирму. В качестве сотрудников они нанимают нескольких друзей Белфорта, его отца Макса и называют компанию «Стрэттон Оукмонт». В свободное от работы время Джордан прожигает жизнь: лавирует от одной вечеринки к другой, вступает в сексуальные отношения с проститутками, употребляет множество наркотических препаратов, в том числе кокаин и кваалюд. Однажды наступает момент, когда быстрым обогащением Белфорта начинает интересоваться агент ФБР',
        'duration' => 180,
        'genres' => ['Драма', 'Биография', 'Комедия'],
        'cast' => ['Леонардо ДиКаприо', 'Джона Хилл', 'Марго Робби'],
        'director' => 'Мартин Скорсезе',
        'age-restriction' => 18,
        'release-date' => 2013,
        'rating' => 7.9,
        'favoriteItem' => true
    ],
    [
        'id' => 9,
        'title' => 'Джанго освобожденный',
        'original-title' => 'Django Unchained',
        'description' => 'Эксцентричный охотник за головами, также известный как Дантист, промышляет отстрелом самых опасных преступников. Работенка пыльная, и без надежного помощника ему не обойтись. Но как найти такого и желательно не очень дорогого? Освобождённый им раб по имени Джанго – прекрасная кандидатура. Правда, у нового помощника свои мотивы – кое с чем надо сперва разобраться.',
        'duration' => 165,
        'genres' => ['Вестерн', 'Боевик', 'Драма', 'Комедия'],
        'cast' => ['Джейми Фокс', 'Кристоф Вальц', 'Леонардо ДиКаприо'],
        'director' => 'Квентин Тарантино',
        'age-restriction' => 18,
        'release-date' => 2012,
        'rating' => 8.2
    ],
    [
        'id' => 10,
        'title' => 'Хоббит: Нежданное путешествие',
        'original-title' => 'The Hobbit: An Unexpected Journey',
        'description' => 'Хоббит Бильбо Бэггинс пускается в грандиозный поход, целью которого является отвоевание утраченного королевства гномов Эребор у дракона Смауга. Совершенно неожиданно с хоббитом налаживает контакт волшебник Гэндальф Серый. Так Бильбо находит себя и присоединяется к компании тринадцати гномов, возглавляемых легендарным воином Торином Дубощитом. Их путешествие пройдёт через Дикий Край, предательские земли, населенные гоблинами и орками, смертоносными варгами, гигантскими пауками, меняющим шкуры народом и волшебниками.',
        'duration' => 169,
        'genres' => ['Фэнтези', 'Приключения', 'Боевик'],
        'cast' => ['Мартин Фриман', 'Иэн Маккеллен', 'Ричард Армитедж'],
        'director' => 'Питер Джексон',
        'age-restriction' => 6,
        'release-date' => 2012,
        'rating' => 8.1
    ],
    [
        'id' => 11,
        'title' => 'Омерзительная восьмерка',
        'original-title' => 'The Hateful Eight',
        'description' => 'США после Гражданской войны. Легендарный охотник за головами Джон Рут по кличке Вешатель конвоирует заключенную. По пути к ним прибиваются еще несколько путешественников. Снежная буря вынуждает компанию искать укрытие в лавке на отшибе, где уже расположилось весьма пестрое общество: генерал конфедератов, мексиканец, ковбой… И один из них - не тот, за кого себя выдает.',
        'duration' => 187,
        'genres' => ['Вестерн', 'Триллер', 'Драма'],
        'cast' => ['Курт Рассел', 'Сэмюэл Л. Джексон', 'Тим Рот'],
        'director' => 'Квентин Тарантино',
        'age-restriction' => 18,
        'release-date' => 2015,
        'rating' => 7.9
    ],
    [
        'id' => 12,
        'title' => 'Головоломка',
        'original-title' => 'Inside Out',
        'description' => 'Райли — обычная 11-летняя школьница, и, как у каждого из нас, ее поведение определяют пять базовых эмоций: Радость, Печаль, Страх, Гнев и Брезгливость. Эмоции живут в сознании девочки и каждый день помогают ей справляться с проблемами, руководя всеми ее поступками. До поры до времени эмоции живут дружно, но вдруг оказывается, что Райли и ее родителям предстоит переезд из небольшого уютного городка в шумный и людный мегаполис. Каждая из эмоций считает, что именно она лучше прочих знает, что нужно делать в этой непростой ситуации, и в голове у девочки наступает полная неразбериха. Чтобы наладить жизнь в большом городе, освоиться в новой школе и подружиться с одноклассниками, эмоциям Райли предстоит снова научиться работать сообща.',
        'duration' => 95,
        'genres' => ['Мультфильм', 'Семейный', 'Комедия'],
        'cast' => ['Эми Полер', 'Филлис Смит'],
        'director' => 'Пит Доктер',
        'age-restriction' => 6,
        'release-date' => 2015,
        'rating' => 8.0
    ],
    [
        'id' => 13,
        'title' => 'Гарри Поттер и Дары Смерти: Часть II',
        'original-title' => 'Harry Potter and the Deathly Hallows: Part 2',
        'description' => 'В грандиозной последней главе битва между добрыми и злыми силами мира волшебников перерастает во всеобщую войну. Ставки ещё никогда не были так высоки, а поиск убежища – столь сложен. И быть может именно Гарри Поттеру придется пожертвовать всем в финальном сражении с Волан-де-Мортом. Способен ли наш герой спасти мир? И всё закончится здесь.',
        'duration' => 130,
        'genres' => ['Фэнтези', 'Драма', 'Приключения'],
        'cast' => ['Дэниэл Рэдклифф', 'Руперт Гринт', 'Эмма Уотсон'],
        'director' => 'Дэвид Йейтс',
        'age-restriction' => 12,
        'release-date' => 2011,
        'rating' => 8.1
    ],
    [
        'id' => 14,
        'title' => 'Зверополис',
        'original-title' => 'Zootopia',
        'description' => 'Добро пожаловать в Зверополис – современный город, населенный самыми разными животными, от огромных слонов до крошечных мышек. Зверополис разделен на районы, полностью повторяющие естественную среду обитания разных жителей – здесь есть и элитный район Площадь Сахары и неприветливый Тундратаун. В этом городе появляется новый офицер полиции, жизнерадостная зайчиха Джуди Хоппс, которая с первых дней работы понимает, как сложно быть маленькой и пушистой среди больших и сильных полицейских. Джуди хватается за первую же возможность проявить себя, несмотря на то, что ее партнером будет болтливый хитрый лис Ник Уайлд. Вдвоем им предстоит раскрыть сложное дело, от которого будет зависеть судьба всех обитателей Зверополиса.',
        'duration' => 108,
        'genres' => ['Мультфильм', 'Комедия', 'Семейный'],
        'cast' => ['Джиннифер Гудвин', 'Джейсон Бейтман'],
        'director' => 'Байрон Ховард',
        'age-restriction' => 6,
        'release-date' => 2016,
        'rating' => 8.3
    ],
    [
        'id' => 15,
        'title' => 'По соображениям совести',
        'original-title' => 'Hacksaw Ridge',
        'description' => 'Медик американской армии времён Второй мировой войны Дезмонд Досс, который служил во время битвы за Окинаву, отказывается убивать людей и становится первым идейным уклонистом в американской истории, удостоенным Медали Почёта.',
        'duration' => 139,
        'genres' => ['Драма', 'Военный', 'Биография'],
        'cast' => ['Эндрю Гарфилд', 'Сэм Уортингтон'],
        'director' => 'Мэл Гибсон',
        'age-restriction' => 18,
        'release-date' => 2016,
        'rating' => 8.0
    ],
    [
        'id' => 16,
        'title' => 'Ford против Ferrari',
        'original-title' => 'Ford v Ferrari',
        'description' => 'В начале 1960-х Генри Форд II принимает решение улучшить имидж компании и сменить курс на производство более модных автомобилей. После неудавшейся попытки купить практически банкрота Ferrari американцы решают бросить вызов итальянским конкурентам на трассе и выиграть престижную гонку 24 часа Ле-Мана. Чтобы создать подходящую машину, компания нанимает автоконструктора Кэррола Шэлби, а тот отказывается работать без выдающегося, но, как считается, трудного в общении гонщика Кена Майлза. Вместе они принимаются за разработку впоследствии знаменитого спорткара Ford GT40.',
        'duration' => 152,
        'genres' => ['Биография', 'Спорт', 'Драма'],
        'cast' => ['Кристиан Бэйл', 'Мэтт Дэймон'],
        'director' => 'Джеймс Мэнголд',
        'age-restriction' => 16,
        'release-date' => 2019,
        'rating' => 8.2
    ],
    [
        'id' => 17,
        'title' => 'Мстители: Война бесконечности',
        'original-title' => 'Avengers: Infinity War',
        'description' => 'Пока Мстители и их союзники продолжают защищать мир от различных опасностей, с которыми не смог бы справиться один супергерой, новая угроза возникает из космоса: Танос. Межгалактический тиран преследует цель собрать все шесть Камней Бесконечности - артефакты невероятной силы, с помощью которых можно менять реальность по своему желанию. Всё, с чем Мстители сталкивались ранее, вело к этому моменту – судьба Земли никогда ещё не была столь неопределённой.',
        'duration' => 149,
        'genres' => ['Фантастика', 'Боевик', 'Приключения'],
        'cast' => ['Роберт Дауни мл.', 'Крис Хемсворт', 'Марк Руффало'],
        'director' => 'Энтони Руссо',
        'age-restriction' => 16,
        'release-date' => 2018,
        'rating' => 7.9
    ],
    [
        'id' => 18,
        'title' => 'Песнь моря',
        'original-title' => 'Song of the Sea',
        'description' => 'Невероятная история Бена и его сестренки Сирши. Вместе они пускаются в фантастическое путешествие сквозь исчезающий мир магии и древних легенд.',
        'duration' => 93,
        'genres' => ['Мультфильм', 'Драма', 'Приключения', 'Семейный'],
        'cast' => ['Дэвид Роул', 'Брендан Глисон'],
        'director' => 'Томм Мур',
        'age-restriction' => 6,
        'release-date' => 2014,
        'rating' => 8.1
    ],
    [
        'id' => 19,
        'title' => 'Хоббит: Пустошь Смауга',
        'original-title' => 'The Hobbit: The Desolation of Smaug',
        'description' => 'Продолжение путешествия хоббита Бильбо Бэггинса, волшебника Гэндальфа и 13 отважных гномов. Их компания должна добраться до Одинокой горы. А там они встретятся с величайшей опасностью из всех — созданием куда более ужасающим, чем все их прошлые противники, чудовищем, которое проверит на прочность не только их мужество, но крепость их дружбы и правильность выбранного пути, — драконом Смаугом.',
        'duration' => 161,
        'genres' => ['Фэнтези', 'Приключения'],
        'cast' => ['Мартин Фриман', 'Ричард Армитедж', 'Иэн Маккеллен'],
        'director' => 'Питер Джексон',
        'age-restriction' => 12,
        'release-date' => 2013,
        'rating' => 8.0
    ],
    [
        'id' => 20,
        'title' => 'Король говорит!',
        'original-title' => 'The King\'s Speech',
        'description' => 'Сюжет ленты расскажет о герцоге, который готовится вступить в должность британского короля Георга VI, отца нынешней королевы Елизаветы II. После того, как его брат отрекается от престола, герой неохотно соглашается на трон. Измученный страшным нервным заиканием и сомнениями в своих способностях руководить страной, Георг обращается за помощью к неортодоксальному логопеду по имени Лайонел Лог.',
        'duration' => 118,
        'genres' => ['Драма', 'Биография', 'История'],
        'cast' => ['Колин Фёрт', 'Джеффри Раш'],
        'director' => 'Том Хупер',
        'age-restriction' => 16,
        'release-date' => 2010,
        'rating' => 8.0
    ],
    [
        'id' => 21,
        'title' => 'Стражи Галактики',
        'original-title' => 'Guardians of the Galaxy',
        'description' => 'Отважному путешественнику Питеру Квиллу попадает в руки таинственный артефакт, принадлежащий могущественному и безжалостному злодею Ронану, строящему коварные планы по захвату Вселенной. Питер оказывается в центре межгалактической охоты, где жертва — он сам. Единственный способ спасти свою жизнь — объединиться с четверкой нелюдимых изгоев: воинственным енотом по кличке Ракета, человекоподобным деревом Грутом, смертельно опасной Гаморой и одержимым жаждой мести Драксом, также известным как Разрушитель. Когда Квилл понимает, какой силой обладает украденный артефакт и какую опасность он представляет для вселенной, одиночка пойдет на все, чтобы сплотить случайных союзников для решающей битвы за судьбу галактики.',
        'duration' => 121,
        'genres' => ['Фантастика', 'Боевик', 'Приключения'],
        'cast' => ['Крис Пратт', 'Зои Салдана', 'Дэйв Батиста', 'Брэдли Купер'],
        'director' => 'Джеймс Ганн',
        'age-restriction' => 12,
        'release-date' => 2014,
        'rating' => 7.8
    ],
    [
        'id' => 22,
        'title' => 'Человек-паук: Через вселенные',
        'original-title' => 'Spider-Man: Into the Spider-Verse',
        'description' => 'Мы всё знаем о Питере Паркере. Он спас город, влюбился, а потом спасал город снова и снова… Но все это – в нашем измерении. А что если в результате работы гигантского коллайдера откроется окно из одного измерения в другое? Найдется ли в нем свой Человек-паук? И как он будет выглядеть? Приготовьтесь к тому, что в разных вселенных могут быть разные Люди-пауки и однажды им придется собраться вместе для борьбы с почти непобедимым врагом.',
        'duration' => 117,
        'genres' => ['Мультфильм', 'Фантастика', 'Боевик'],
        'cast' => ['Шамеик Мур', 'Джейк Джонсон'],
        'director' => 'Боб Персичетти',
        'age-restriction' => 6,
        'release-date' => 2018,
        'rating' => 8.0
    ],
    [
        'id' => 23,
        'title' => 'Хоббит: Битва пяти воинств',
        'original-title' => 'The Hobbit: The Battle of the Five Armies',
        'description' => 'Когда отряд из тринадцати гномов нанимал хоббита Бильбо Бэгинса в качестве взломщика и четырнадцатого, «счастливого», участника похода к Одинокой горе, Бильбо полагал, что его приключения закончатся, когда он выполнит свою задачу - найдет сокровище, которое так необходимо предводителю гномов Торину. Путешествие в Эребор, захваченное драконом Смаугом королевство гномов, оказалось еще более опасным, чем предполагали гномы и даже Гэндальф - мудрый волшебник, протянувший Торину и его отряду руку помощи.',
        'duration' => 144,
        'genres' => ['Фэнтези', 'Приключения'],
        'cast' => ['Мартин Фриман', 'Иэн Маккеллен', 'Ричард Армитедж'],
        'director' => 'Питер Джексон',
        'age-restriction' => 12,
        'release-date' => 2014,
        'rating' => 7.8
    ],
    [
        'id' => 24,
        'title' => 'Далласский клуб покупателей',
        'original-title' => 'Dallas Buyers Club',
        'description' => 'Реальная история Рона Вудруфа, техасского электрика, у которого в 1985 году обнаружили СПИД. Врачи отвели ему всего 30 дней, но он не пожелал смириться со смертным приговором и сумел продлить свою жизнь, принимая нетрадиционные лекарства, а затем наладил подпольный бизнес по продаже их другим больным.',
        'duration' => 118,
        'genres' => ['Драма', 'Биография'],
        'cast' => ['Мэттью МакКонахи', 'Дженнифер Гарнер'],
        'director' => 'Жан-Марк Валле',
        'age-restriction' => 18,
        'release-date' => 2013,
        'rating' => 7.9
    ],
    [
        'id' => 25,
        'title' => 'Прислуга',
        'original-title' => 'The Help',
        'description' => 'Американский Юг, на дворе 1960-е годы. Скитер только-только закончила университет и возвращается домой, в сонный городок Джексон, где никогда ничего не происходит. Она мечтает стать писательницей, вырваться в большой мир. Но для приличной девушки с Юга не пристало тешиться столь глупыми иллюзиями, приличной девушке следует выйти замуж и хлопотать по дому. Мудрая Эйбилин на тридцать лет старше Скитер, она прислуживает в домах белых всю свою жизнь, вынянчила семнадцать детей и давно уже ничего не ждет от жизни, ибо сердце ее разбито после смерти единственного сына.',
        'duration' => 146,
        'genres' => ['Драма'],
        'cast' => ['Эмма Стоун', 'Виола Дэвис'],
        'director' => 'Тейт Тейлор',
        'age-restriction' => 12,
        'release-date' => 2011,
        'rating' => 8.2
    ],
    [
        'id' => 26,
        'title' => 'Вторая жизнь Уве',
        'original-title' => 'En man som heter Ove',
        'description' => 'Уве - пожилой въедливый ворчун, достающий соседей вечными придирками. Он впадает в ярость при виде брошенного не туда мусора или неправильно припаркованной машины. И кроет на чем свет стоит легкомысленную семейку новосёлов, в которой папаша и гвоздя вбить не способен. Зато Уве умеет всё. В доме и в гараже у него всегда идеальный порядок. Как и в мыслях. Вот только жизнь давно перестала иметь для него смысл.',
        'duration' => 116,
        'genres' => ['Драма', 'Комедия'],
        'cast' => ['Рольф Лассгор', 'Бахар Парс'],
        'director' => 'Ханнес Холм',
        'age-restriction' => 16,
        'release-date' => 2015,
        'rating' => 8.0
    ],
    [
        'id' => 27,
        'title' => 'Достать ножи',
        'original-title' => 'Knives Out',
        'description' => 'На следующее утро после празднования 85-летия известного автора криминальных романов Харлана Тромби виновника торжества находят мёртвым. Налицо — явное самоубийство, но полиция по протоколу опрашивает всех присутствующих в особняке членов семьи, хотя, в этом деле больше заинтересован частный детектив Бенуа Блан. Тем же утром он получил конверт с наличными от неизвестного и заказ на расследование смерти Харлана. Не нужно быть опытным следователем, чтобы понять, что все приукрашивают свои отношения с почившим главой семейства, но Блану достаётся настоящий подарок — медсестра покойного, которая физически не выносит ложь.',
        'duration' => 130,
        'genres' => ['Комедия', 'Драма'],
        'cast' => ['Дэниэл Крэйг', 'Ана де Армас', 'Крис Эванс'],
        'director' => 'Райан Джонсон',
        'age-restriction' => 16,
        'release-date' => 2019,
        'rating' => 8.0
    ],
    [
        'id' => 28,
        'title' => 'Дело храбрых',
        'original-title' => 'Only the Brave',
        'description' => 'История о команде пожарных под названием Granite Mountain Hotshots, столкнувшихся в Аризоне с одним из самых смертоносных пожаров в истории.',
        'duration' => 134,
        'genres' => ['Боевик', 'Драма', 'Биография'],
        'cast' => ['Джош Бролин', 'Майлз Теллер'],
        'director' => 'Джозеф Косински',
        'age-restriction' => 16,
        'release-date' => 2017,
        'rating' => 8.0
    ],
    [
        'id' => 29,
        'title' => 'Судья',
        'original-title' => 'The Judge',
        'description' => 'Успешный адвокат приезжает в родной город на похороны матери и узнаёт, что его отца, городского судью, подозревают в убийстве. Мужчина решает задержаться, чтобы выяснить правду, и постепенно лучше узнаёт родственников, с которыми давно не общался.',
        'duration' => 142,
        'genres' => ['Драма'],
        'cast' => ['Роберт Дауни мл.', 'Роберт Дювалл'],
        'director' => 'Дэвид Добкин',
        'age-restriction' => 18,
        'release-date' => 2014,
        'rating' => 7.9
    ],
    [
        'id' => 30,
        'title' => 'Исчезнувшая',
        'original-title' => 'Gone Girl',
        'description' => 'Всё было готово для празднования пятилетия супружеской жизни, когда вдруг необъяснимо пропала виновница торжества. Остались следы борьбы в доме, кровь, которую явно пытались стереть, и цепочка подсказок в игре «охота за сокровищами» - жена ежегодно устраивала её для своего обожаемого мужа. И похоже, что эти подсказки дают шанс пролить свет на судьбу исчезнувшей.',
        'duration' => 149,
        'genres' => ['Триллер', 'Драма'],
        'cast' => ['Бен Аффлек', 'Розамунд Пайк', 'Нил Патрик Харрис'],
        'director' => 'Дэвид Финчер',
        'age-restriction' => 16,
        'release-date' => 2014,
        'rating' => 8.0
    ],
];