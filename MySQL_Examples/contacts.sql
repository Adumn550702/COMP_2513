
/*create database if it doesn't already exist*/
CREATE DATABASE IF NOT EXISTS `contacts`;

/*change into db context*/
USE `contacts`;

CREATE USER 'contacts_user'@'localhost' IDENTIFIED BY 'passw0rd';

GRANT ALL PRIVILEGES ON * . * TO 'contacts_user'@'localhost';



/*drop the contact table if it already exists*/
DROP TABLE IF EXISTS `contact`;

/*create the contact table*/
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `added` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
);

/*populate the contact able with fake records*/
INSERT INTO `contact` (`firstname`, `lastname`, `email`) VALUES
('Cirstoforo','Tomeo','ctomeo0@businessweek.com'),
('Logan','Ciric','lciric1@fema.gov'),
('Beverie','Jopp','bjopp2@flavors.me'),
('Marcelo','Coaster','mcoaster3@naver.com'),
('Kerianne','Morat','kmorat4@hibu.com'),
('Gasparo','Crewther','gcrewther5@upenn.edu'),
('Almira','Grocock','agrocock6@unblog.fr'),
('Nevin','Schuh','nschuh7@cnn.com'),
('Rickey','Bann','rbann8@unc.edu'),
('Patrick','Egell','pegell9@whitehouse.gov'),
('Chucho','Pepperill','cpepperilla@dropbox.com'),
('Chandra','Lowres','clowresb@t.co'),
('Blake','Jurewicz','bjurewiczc@shutterfly.com'),
('Kore','Carabet','kcarabetd@exblog.jp'),
('Ruy','McHugh','rmchughe@parallels.com'),
('Roderic','Shildrake','rshildrakef@economist.com'),
('Patrice','Taunton.','ptauntong@ehow.com'),
('Baxter','Grzegorek','bgrzegorekh@buzzfeed.com'),
('Cristine','Urry','curryi@usnews.com'),
('Cordey','Broddle','cbroddlej@who.int'),
('Rafi','MacIlory','rmaciloryk@histats.com'),
('Willi','Grinham','wgrinhaml@fastcompany.com'),
('Dulcie','Alwin','dalwinm@cdc.gov'),
('Rasia','Zuenelli','rzuenellin@prnewswire.com'),
('Padget','Littrik','plittriko@macromedia.com'),
('Hillie','Sexten','hsextenp@blogs.com'),
('Tomasine','Muckle','tmuckleq@is.gd'),
('Layla','Kleimt','lkleimtr@discuz.net'),
('Sherwynd','McKenzie','smckenzies@fema.gov'),
('Aeriel','Garaway','agarawayt@sbwire.com'),
('Kyrstin','Coultar','kcoultaru@godaddy.com'),
('Doralin','Eye','deyev@imdb.com'),
('Christy','Rookwell','crookwellw@delicious.com'),
('Kinsley','Rives','krivesx@tamu.edu'),
('Gabriella','Tapton','gtaptony@hc360.com'),
('Dedie','Domenico','ddomenicoz@hud.gov'),
('Rochella','Klais','rklais10@theguardian.com'),
('Tiphanie','Lansly','tlansly11@gnu.org'),
('Celinka','Timbrell','ctimbrell12@ucoz.com'),
('Noami','Bracegirdle','nbracegirdle13@soundcloud.com'),
('Ingamar','Degoey','idegoey14@alexa.com'),
('Giffer','Seegar','gseegar15@usda.gov'),
('Nadya','Jaze','njaze16@europa.eu'),
('Bonita','Baudinelli','bbaudinelli17@163.com'),
('Brittney','Helsby','bhelsby18@typepad.com'),
('North','Froschauer','nfroschauer19@pbs.org'),
('Arabele','Biasetti','abiasetti1a@who.int'),
('Marie-ann','Born','mborn1b@usa.gov'),
('Ave','Brolly','abrolly1c@nps.gov'),
('Leena','Flacknoe','lflacknoe1d@freewebs.com'),
('Rosalinda','Lyptratt','rlyptratt1e@bloglines.com'),
('Kally','Mioni','kmioni1f@github.com'),
('Gayle','Doody','gdoody1g@youtu.be'),
('Laurie','Cozins','lcozins1h@unc.edu'),
('Nathaniel','Goodbourn','ngoodbourn1i@diigo.com'),
('Leona','Heustace','lheustace1j@vkontakte.ru'),
('Sylvester','Cinelli','scinelli1k@github.com'),
('Morgan','Woolliams','mwoolliams1l@gov.uk'),
('Lamont','McLagain','lmclagain1m@jimdo.com'),
('Katharine','Mulvaney','kmulvaney1n@mapquest.com'),
('Winthrop','Friatt','wfriatt1o@patch.com'),
('Janis','Le Borgne','jleborgne1p@netscape.com'),
('Dorree','Moth','dmoth1q@msn.com'),
('Kinna','Muschette','kmuschette1r@discuz.net'),
('Lilith','Gingles','lgingles1s@reference.com'),
('Kendrick','Castagnasso','kcastagnasso1t@linkedin.com'),
('Julio','Niesing','jniesing1u@sun.com'),
('Jacintha','Janczak','jjanczak1v@cisco.com'),
('Willetta','Deschlein','wdeschlein1w@google.co.uk'),
('Jennie','Gainor','jgainor1x@vk.com'),
('Bonni','Quemby','bquemby1y@histats.com'),
('Barnard','Findlater','bfindlater1z@hatena.ne.jp'),
('Emmalyn','Andrysiak','eandrysiak20@yandex.ru'),
('Kristien','Demsey','kdemsey21@mysql.com'),
('Dorelia','Cornils','dcornils22@hud.gov'),
('Hermione','Lyster','hlyster23@constantcontact.com'),
('Lev','Fold','lfold24@nba.com'),
('Annadiana','Onslow','aonslow25@marketwatch.com'),
('Saunders','Cassel','scassel26@tripod.com'),
('Dasie','Corben','dcorben27@php.net'),
('Nikolaos','Navaro','nnavaro28@chronoengine.com'),
('Maison','Golby','mgolby29@mashable.com'),
('Norrie','Larmet','nlarmet2a@weibo.com'),
('Galina','Skully','gskully2b@google.com'),
('Jewelle','Bjerkan','jbjerkan2c@samsung.com'),
('Estrella','Mudge','emudge2d@yellowbook.com'),
('Zandra','Garfitt','zgarfitt2e@craigslist.org'),
('Will','Alwen','walwen2f@webnode.com'),
('Koo','Grimditch','kgrimditch2g@sitemeter.com'),
('Smith','Trott','strott2h@newyorker.com'),
('Andrei','Attenbarrow','aattenbarrow2i@wikia.com'),
('Jeniffer','Minigo','jminigo2j@mysql.com'),
('Merilyn','Bodiam','mbodiam2k@pcworld.com'),
('Andi','Huckstepp','ahuckstepp2l@smh.com.au'),
('Herbie','Columbine','hcolumbine2m@trellian.com'),
('Clarie','Bowditch','cbowditch2n@cnn.com'),
('Granthem','O''Reagan','goreagan2o@dailymail.co.uk'),
('Rodrique','Le Provest','rleprovest2p@ycombinator.com'),
('Zita','Aizic','zaizic2q@goo.gl'),
('Gauthier','Week','gweek2r@slideshare.net');


SELECT id, firstname, lastname, email, added FROM contact;
