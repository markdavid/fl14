# nmListView.sql 05/16/2011

drop table if exists test_Muffins;
create table test_Muffins
( MuffinID int unsigned not null auto_increment primary key,
MuffinName varchar(60),
Description text,
MetaDescription varchar(255),
MetaKeywords varchar(255),
Price decimal(5,2)
);
insert into test_Muffins values (NULL,"Apple","An apple muffin a day keeps the doctor away!","Apple muffins are our specialty.","apple",.99);
insert into test_Muffins values (NULL,"Banana Nut","Bananas and walnuts combine in a rich and rewarding muffin!","Go ape over our banana nut muffins!","banana,walnut,banana nut",1.50);
insert into test_Muffins values (NULL,"Blueberry","Our wildly popular traditional blueberry muffin.","Our Blueberry muffins are made from fresh blueberries.","blueberry,berry,anti-oxidant",1.25);
insert into test_Muffins values (NULL,"Chocolate","The chocoholics love us for this one!","Keep our chocolate muffins on hand for emergencies!","chocolate,chocolate chip",1.50);
insert into test_Muffins values (NULL,"Bran","Our bran muffins are a favorite among our regular customers!","Our bran muffins keep you going!","bran",.99);
insert into test_Muffins values (NULL,"Raspberry","A truly decadent raspberry streusel muffin!","Rasberry streusel for special occasions!","raspberry streusel,raspberry,berry",1.99);
