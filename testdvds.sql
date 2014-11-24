# nmListView.sql 05/16/2011

drop table if exists test_Dvds;
create table test_Dvds
( DvdID int unsigned not null auto_increment primary key,
DvdName varchar(60),
Description text,
MetaDescription varchar(255),
MetaKeywords varchar(255),
Price decimal(5,2)
);
insert into test_Dvds values (NULL,"Lord_Of_The_Rings”,”Thelordofallfantasymovies.”,”One ring to rule them all.”,”LOTR,fantasy,ring”,299.99);
insert into test_Dvds values (NULL,”Star_Wars”,”The greatest space opera of all time.”,”May the force be with you!”,”star,wars,scifi,space,opera”,221.50);
insert into test_Dvds values (NULL,”Bladerunner”,”A dark scifi classic with Harrison Ford”,”Direct by Ridley Scott”,”harrison,ford,ridley,scott,robots”,111.25);
insert into test_Dvds values (NULL,”Aliens”,”The original scifi horror masterpiece!”,”In space no one can hear you scream!”,”scream,space”,111.50);
insert into test_Dvds values (NULL,”Pans_Labyrinth”,”The creepiest childrens story ever told!“,”Srsly its super creepy”,”creepy”,44.99);
insert into test_Dvds values (NULL,”Star_Trek:_The_Next_Generation”,”The best version of Star Trek ever made as agreed upon by everyone who knows things!”,”TNG is awesome!”,”engage,parsec,quantum,turbo,lift”,111.99);

