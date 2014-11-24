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
insert into test_Movies values (NULL,"Star Wars","Greatest scifi opera of all time.","May the force be with you.","force",11.99);
insert into test_Movies values (NULL,"Star Trek","The Next Generaton is the best.","Engage!","engage,turbolift,warp speed",12.50);
insert into test_Movies values (NULL,"Bladerunner","Ridley Scott's Masterpiece","Do robots dream?","dream,robot,sleep,harrison",13.25);
insert into test_Movies values (NULL,"Lord Of The Rings","One movie to rule them all!","My precious...dvd!","golem,hobbits,hairy feet",221.50);
insert into test_Movies values (NULL,"Pan's Labyrinth","The creepiest kids movie ever.","Srsly its weird","creepy",89.99);
insert into test_Movies values (NULL,"Avatar","Just when you thought movies couldn't get any more cliche!","Titanic for space!","blue people, big trees",31.99);
