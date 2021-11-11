drop table language;

drop table movie_actor;

drop table actor;

drop table movie;

drop table director;

drop table movie_title;

drop table lang;

CREATE TABLE IF NOT EXISTS director
(
    ID   int          not null auto_increment,
    NAME varchar(500) not null,
    PRIMARY KEY (ID)
    );

CREATE TABLE IF NOT EXISTS language
(
    ID   char(2)      not null,
    NAME varchar(256) not null,
    PRIMARY KEY (ID)
    );

CREATE TABLE movie
(
    ID           int not null auto_increment,
    RELEASE_YEAR YEAR,
    LENGTH       int,
    MIN_AGE      int,
    RATING       float,
    DIRECTOR_ID  int,

    PRIMARY KEY (ID),
    FOREIGN KEY FK_MOVIE_DIRECTOR (DIRECTOR_ID)
        REFERENCES director (ID)
        ON UPDATE RESTRICT
        ON DELETE RESTRICT
);

CREATE TABLE movie_title
(
    LANGUAGE_ID char(2)      not null,
    MOVIE_ID    int          not null,
    TITLE       varchar(500) not null,

    PRIMARY KEY (MOVIE_ID, LANGUAGE_ID),
    FOREIGN KEY FK_MT_LANG (LANGUAGE_ID)
        REFERENCES language (ID)
        ON UPDATE RESTRICT
        ON DELETE RESTRICT,
    FOREIGN KEY FK_MT_MOVIE (MOVIE_ID)
        REFERENCES movie (ID)
        ON UPDATE RESTRICT
        ON DELETE RESTRICT
);

CREATE TABLE actor
(
    ID   int          not null auto_increment,
    NAME varchar(500) not null,
    PRIMARY KEY (ID)
);

CREATE TABLE movie_actor
(
    MOVIE_ID int not null,
    ACTOR_ID int not null,
    PRIMARY KEY (MOVIE_ID, ACTOR_ID),
    FOREIGN KEY FK_MA_MOVIE (MOVIE_ID)
        REFERENCES movie (ID)
        ON UPDATE RESTRICT
        ON DELETE RESTRICT,
    FOREIGN KEY FK_MA_ACTOR (ACTOR_ID)
        REFERENCES actor (ID)
        ON UPDATE RESTRICT
        ON DELETE RESTRICT
);

CREATE TABLE genre
(
    ID   int          not null auto_increment,
    NAME varchar(500) not null,
    PRIMARY KEY (ID)
);

CREATE TABLE movie_genre
(
    MOVIE_ID int not null,
    GENRE_ID int not null,
    PRIMARY KEY (MOVIE_ID, GENRE_ID),
    FOREIGN KEY FK_MG_MOVIE (MOVIE_ID)
        REFERENCES movie (ID)
        ON UPDATE RESTRICT
        ON DELETE RESTRICT,
    FOREIGN KEY FK_MG_GENRE (GENRE_ID)
        REFERENCES genre (ID)
        ON UPDATE RESTRICT
        ON DELETE RESTRICT
);

INSERT INTO director (ID, NAME)
VALUES (1, 'Джеймс Кэмерон'),
       (2, 'Ридли Скотт'),
       (3, 'Джон Карпентер'),
       (4, 'Стэнли Кубрик');


INSERT INTO actor (ID, NAME)
VALUES (1, 'Арнольд Шварценеггер'),
       (2, 'Майкл Бин'),
       (3, 'Линда Хэмилтон'),
       (4, 'Сигурни Уивер'),
       (5, 'Том Скеррит'),
       (6, 'Иэн Холм'),
       (7, 'Курт Рассел'),
       (8, 'Кит Дэвид'),
       (9, 'Уилфорд Бримли'),
       (10, 'Джек Николсон'),
       (11, 'Сэм Уортингтон'),
       (12, 'Зои Салдана'),
       (13, 'Джейми Ли Кёртис');

INSERT INTO language(ID, NAME)
VALUES ('ru', 'Русский'),
       ('en', 'English'),
       ('de', 'Deutsch');

INSERT INTO movie (ID, RELEASE_YEAR, LENGTH, MIN_AGE, RATING, DIRECTOR_ID)
VALUES (1, 1984, 108, 16, 8.0, 1),
       (2, 1979, 116, 16, 8.1, 2),
       (3, 1982, 109, 16, 7.9, 3),
       (4, 1982, 144, 18, 7.8, 4),
       (5, 2009, 162, 12, 7.9, 1),
       (6, 1994, 135, 16, 7.8, 1),
       (7, 1986, 137, 16, 8.0, 1);

INSERT INTO movie_title(LANGUAGE_ID, MOVIE_ID, TITLE)
VALUES ('ru', 1, 'Терминатор'),
       ('ru', 2, 'Чужой'),
       ('ru', 3, 'Нечто'),
       ('ru', 4, 'Сияние'),
       ('ru', 5, 'Аватар'),
       ('ru', 6, 'Правдивая ложь'),
       ('ru', 7, 'Чужие'),
       ('en', 1, 'The Terminator'),
       ('en', 2, 'Alien'),
       ('en', 3, 'The Thing'),
       ('en', 6, 'True Lies'),
       ('en', 7, 'Aliens');

INSERT INTO movie_actor (MOVIE_ID, ACTOR_ID)
VALUES (1, 1),
       (1, 2),
       (1, 3),
       (2, 4),
       (2, 5),
       (2, 6),
       (3, 7),
       (3, 8),
       (3, 9),
       (4, 10),
       (5, 11),
       (5, 12),
       (5, 4),
       (6, 1),
       (6, 13),
       (7, 4),
       (7, 2);

INSERT INTO genre (ID, NAME)
VALUES (1, 'фантастика'),
       (2, 'боевик'),
       (3, 'триллер'),
       (4, 'ужасы'),
       (5, 'детектив'),
       (6, 'драма'),
       (7, 'приключения'),
       (8, 'комедия');

INSERT INTO movie_genre(MOVIE_ID, GENRE_ID)
VALUES (1, 1),
       (1, 2),
       (1, 3),
       (2, 4),
       (2, 1),
       (2, 3),
       (3, 4),
       (3, 1),
       (3, 5),
       (4, 3),
       (4, 6),
       (4, 4),
       (4, 5),
       (5, 1),
       (5, 2),
       (5, 6),
       (5, 7),
       (6, 2),
       (6, 3),
       (6, 7),
       (6, 8);
#Териминатор - фантастика, боевик, триллер
#Чужой -   ужасы, фантастика, триллер
#Нечто - ужасы, фантастика, детектив
#Сияние -  триллер, драма, ужасы, детектив
#Аватар -  фантастика, боевик, драма, приключения

#HOMEWORK-6 START

#Вывести список фильмов, в которых снимались одновременно Арнольд Шварценеггер* и Линда Хэмилтон*.

SELECT movie.ID, mt.TITLE, d.NAME
FROM movie
         LEFT JOIN movie_title mt on movie.ID = mt.MOVIE_ID AND mt.LANGUAGE_ID = 'ru'
         LEFT JOIN director d on movie.ID = d.ID
         LEFT JOIN movie_actor ma on movie.ID = ma.MOVIE_ID
WHERE ma.MOVIE_ID in (SELECT MOVIE_ID
                      FROM movie_actor
                               LEFT JOIN actor a on movie_actor.ACTOR_ID = a.ID
                      where a.NAME in ('Арнольд Шварценеггер', 'Линда Хэмилтон') GROUP BY 1) AND d.NAME IS NOT NULL
GROUP BY movie.ID, mt.TITLE, d.NAME;

#Вывести список названий фильмов на англйском языке с "откатом" на русский, в случае если название на английском не задано.

SELECT movie.ID, mt.TITLE FROM movie
LEFT JOIN movie_title mt on movie.ID = mt.MOVIE_ID
WHERE mt.LANGUAGE_ID = 'en' OR NOT EXISTS(SELECT 'x' FROM movie_title WHERE MOVIE_ID = movie.ID AND LANGUAGE_ID='en')
GROUP BY 1,2;


