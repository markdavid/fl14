# nmListView.sql 05/16/2011

drop table if exists test_Movies;
create table test_Movies
( MovieID int unsigned not null auto_increment primary key,
MovieName varchar(60),
Description text,
MetaDescription varchar(255),
MetaKeywords varchar(255),
Price decimal(5,2)
);
insert into test_Movies values (NULL,”Contact”,”Greatest scifi opera of all time.","May the force be with you.","force",11.99);
insert into test_Movies values (NULL,”Dark City”,”The Next Generaton is the best.","Engage!","engage,turbolift,warp speed",12.50);
insert into test_Movies values (NULL,”Return to Oz”,”A modern classic“,”This is a really great movie“,”movie,good, watch,fun”,13.25);
insert into test_Movies values (NULL,”Return of the King”,”One movie to rule them all!","My precious...dvd!","golem,hobbits,hairy feet",221.50);
insert into test_Movies values (NULL,”The Hobbit“,”A modern classic“,”This is a really great movie“,”movie,good, watch,fun”,13.25);
insert into test_Movies values (NULL,”Labyrinth”,”Just when you thought movies couldn't get any more cliche!","Titanic for space!","blue people, big trees",31.99);
insert into test_Movies values (NULL,”Superman”,”A modern classic“,”This is a really great movie“,”movie,good, watch,fun”,13.25);
insert into test_Movies values (NULL,”Batman”,”Just when you thought movies couldn't get any more cliche!","Titanic for space!","blue people, big trees",31.99);
insert into test_Movies values (NULL,”Batman Returns”,”A modern classic“,”This is a really great movie“,”movie,good, watch,fun”,13.25);
insert into test_Movies values (NULL,”Batman Begins”,”Just when you thought movies couldn't get any more cliche!","Titanic for space!","blue people, big trees",31.99);
insert into test_Movies values (NULL,”Batman The Dark Knight”,”A modern classic“,”This is a really great movie“,”movie,good, watch,fun”,13.25);31.99);
insert into test_Movies values (NULL,”Firefly”,”Just when you thought movies couldn't get any more cliche!","Titanic for space!","blue people, big trees",31.99);
insert into test_Movies values (NULL,”Star Wars: Empire Strikes Back”,”A movie everyone should watch!”,”Titanic for space!","people, big guns, bang bang”,31.99);
insert into test_Movies values (NULL,”Star Wars: Return of the Jedi”,”A modern classic“,”This is a really great movie“,”movie,good, watch,fun”,13.25);
insert into test_Movies values (NULL,”Iron Man”,”Just when you thought movies couldn't get any more cliche!","Titanic for space!","blue people, big trees",31.99);
insert into test_Movies values (NULL,”Iron Man 2”,”A modern classic“,”This is a really great movie“,”movie,good, watch,fun”,13.25);
insert into test_Movies values (NULL,”Iron Man 3”,”A movie everyone should watch!”,”Titanic for space!","people, big guns, bang bang”,31.99);
insert into test_Movies values (NULL,”Avengers”,”A modern classic“,”This is a really great movie“,”movie,good, watch,fun”,13.25);
insert into test_Movies values (NULL,”Guardians of the Galaxy”,”A movie everyone should watch!”,”Titanic for space!","people, big guns, bang bang”,31.99);
insert into test_Movies values (NULL,”The Fly”,”A modern classic“,”This is a really great movie“,”movie,good, watch,fun”,13.25);
