/*
table for assignment a9
contact_database.sql

*/

drop table if exists contact_database;

create table contact_database
( CustomerID int unsigned not null auto_increment primary key,
LastName varchar(50),
FirstName varchar(50),
Email varchar(80),
FavColor varchar(80)
);

insert into contact_database values (NULL,"Kirk","Jim","jimisawesome@awesomeness.com","Awesome");
insert into contact_database values (NULL,"Drones","Indiana","indiana@thatsnotaplane.com","Stealth Black");
insert into contact_database values (NULL,"Stewart","Martha","martha@fedpen.gov","Blackberry Leaf Green");
insert into contact_database values (NULL,"Cosby","Bill","dad@cuzisaidso.com","Blue");
insert into contact_database values (NULL,"Swift","Taylor","cutesy1989@example.com","Suuuper Hot Pink");
insert into contact_database values (NULL,"Snowden","Edward","eddierocks@russia.com","Moscow Grey");
insert into contact_database values (NULL,"Knowles","Beyonce","bey@ringonit.com","I woke up like this blond");
insert into contact_database values (NULL,"Obama","Barack","obama@notyourmomma.com","White, like my house");
insert into contact_database values (NULL,"I dont neeed a last name","Modonna","madge@england.com","Red");
insert into contact_database values (NULL,"Python","Monty","thefull@monty.com","Spam Pink");