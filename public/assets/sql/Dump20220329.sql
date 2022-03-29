-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: petso
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `Account`
--

LOCK TABLES `Account` WRITE;
/*!40000 ALTER TABLE `Account` DISABLE KEYS */;
INSERT INTO `Account` VALUES (1,'admin123@petso.com','$10$qZST414pZFJRFuc2qbbhxueCepHRMHEt/klQfutCRGbPlP6v22KAG','admin'),(6,'hamdhi@gmail.com','$2y$10$BOLp1ZeyOT/LatXjpSogburM8GUa8Sc9fsrragPm/gwCyLEwjw5za','user'),(8,'turtleconserve@gmail.com','$2y$10$fuQN3NB3ogtQO2T7QeQc7uhbYI6HAjahHQH/iAyQHWb42QOKd5/ku','org'),(12,'pasindur2@gmail.com','$2y$10$aRK7LKYdyJ6b7Q/xqAnKU.tev.Zn.aGUmwT6J.eytV48HVX03wrji','user'),(13,'john@gmail.com','$2y$10$JeYIZjoTTJgn95u9Rxf9F.6qlJuMqanW9oK5EesGoF5oF69X3y3fi','user'),(14,'pasindur2pj@gmail.com','$2y$10$k5GFiSKmJ33caV/WcS6FXeqrRwAvynx3vvdyG4GZXaIEe0jCqf9q.','user'),(16,'newadmin@petso.com','$2y$10$eogBnBsDKQwpiJCT5Bb/WuLwdeXzmNh.hlkci0g2QNDV2BpUbbnVy','admin'),(17,'amanasamsudeen@gmail.com','$2y$10$0YGiVW4RrYYFPkc24K3t6OFnRHLWHrynSrjsWfe5842hu69dWN6Xq','user'),(18,'azma@buy.com','$2y$10$4h8SpXiLeHgPQ0Wjm20hZeTlxeDMhXLtS80ov3KbR55s78dfejpTm','org'),(19,'sadiq@gmail.com','$2y$10$cXttI8RNYO2DIJ44.mBIVuI9Yh9lVG.Lp2k4/lo9Bav9S2jA3apXa','org'),(20,'sasas@sas.com','$2y$10$vVYs1J6uMhT5h9ewz0l9befW5smFl.oCP6KHmyXEGbebWdMj/1mge','org'),(21,'animalcenter@gmail.com','$2y$10$8alcs/jOORR0892ChUEuYuCSl/RGOBal/U/F/bUsQTBbBXsVE2.eS','org'),(22,'user@petso.com','$2y$10$K8VeFW6Z2MJofuU3ZF1A4ubZ8zXRHKxLZOqshcqSZa96edeQgX6sO','user'),(23,'sadiqzufer@gmail.com','$2y$10$dBsOsW7jTlqGYTrVRtydw.Y7RvcvgC3S0DwjXZHZWRh.p.Bf4Rk8u','user'),(24,'alice@gmail.com','$2y$10$m3NC1tSp.cRE18KI01yWPOf27LHyFZMbz47MetTiewgp2OTijcq5S','user'),(26,'az.admin@petso.com','$2y$10$8p8KmRqn0Ugh4DjwnPN5keLahtPHSuZIg6mmlGTCLNUFMd6hu5Fwu','admin'),(27,'dareba3000@tourcc.com','$2y$10$XjWFfL9fXPvfF2csyt3J7OudTQBVfE6MYeqTowOEClBrASKtyYQci','admin'),(28,'pasindu@gmail.com','$2y$10$2rAFpfgrWwshvriVfLhPT.LDn6VG9GWMHnZEIyLFGB1QG0RJq5DXu','user'),(29,'Pasindu199@gmail.com','$2y$10$hTc.DK1WH7.cuY1o21RkEeg5OL3PQmVBLnoHSDEUN/4QwJ8lHhMs.','user'),(30,'zuferraheem@gmail.com','$2y$10$oMIA9WgBTMb2KQ7OFzP.GOatTQqj59slK.0v6gkDCizIhfwxOrKGi','org'),(31,'bawbaw@gmail.com','$2y$10$Z.JlAfeg/.i8.IXMEuoBwuv1Ebt3Wx/4Rd3Q2cwzewqALo42pSuxC','org'),(32,'azma@gmail.com','$2y$10$XW2ZOodR1OhMBY4/XHqlPe5onul1Qad1O74R1IaxUM7NnbGVZ8CWy','user'),(33,'bowbow@gmail.com','$2y$10$nFLCevHx4s0Q/OitxKWEgepGxXcidiRlsbCXc00DG6qzym.XHfYEW','org');
/*!40000 ALTER TABLE `Account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `Admin`
--

LOCK TABLES `Admin` WRITE;
/*!40000 ALTER TABLE `Admin` DISABLE KEYS */;
INSERT INTO `Admin` VALUES (1,1,'ADMIN','0721354698',NULL,'25-03-2022'),(3,16,'New Admin','012356789',NULL,'25-03-2022'),(6,27,'Opie',NULL,NULL,'27-03-2022');
/*!40000 ALTER TABLE `Admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `Adoption`
--

LOCK TABLES `Adoption` WRITE;
/*!40000 ALTER TABLE `Adoption` DISABLE KEYS */;
INSERT INTO `Adoption` VALUES (1,'amana','No 273 GSO road , Eravur ,Batticaloa, Srilanka','0776198654',NULL),(2,'amana','No 273 GSO road , Eravur ,Batticaloa, Srilanka','0776198654',NULL),(3,'amana','No 273 GSO road , Eravur ,Batticaloa, Srilanka','0776198654',NULL),(4,'amana','No 273 GSO road , Eravur ,Batticaloa, Srilanka','0776198654',NULL),(5,'amana','No 273 GSO road , Eravur ,Batticaloa, Srilanka','0776198654',NULL),(6,'amana','No 273 GSO road , Eravur ,Batticaloa, Srilanka','0776198654',NULL),(7,'amana','batticalo','0776198654',NULL),(8,'amana','batticaloa','0776198654',NULL),(9,'amana','cc','0776198654',NULL),(10,'amana','swer','0776198654',NULL),(11,'amana','xchoooi','0776198654',NULL),(12,'amana','asdd','',NULL),(13,'amana','ccc','0776198654',NULL);
/*!40000 ALTER TABLE `Adoption` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `Animal_Profile`
--

LOCK TABLES `Animal_Profile` WRITE;
/*!40000 ALTER TABLE `Animal_Profile` DISABLE KEYS */;
INSERT INTO `Animal_Profile` VALUES (1,5,'Johnny','Cat','4 years','Cross','Male','An active male cat that grew up with love and care','uploads/animals/sandy-1648275965.jpg','Available','Should be able to provide healthy food at least 3 times','Available','5000','2022-03-20'),(2,5,'Tom','Cat','3 months','Normal','Male','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',NULL,'Available','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Not Available','','2022-03-20'),(3,5,'Sandy','Dog','2 years','Spaniel','Female','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',NULL,'Not Available','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Available','2500','2022-03-20'),(6,5,'Michael','Other',NULL,NULL,'Male','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',NULL,'Not Available','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Available','2000','2022-03-20'),(7,5,'Sally','Dog','3 months','Labrador','Female','aaaa v ssd','uploads/animals/adam-griffith-swkkiitjmyc-unsplash-1648484512.jpg','Available','efev sdvd','Available','5000','2022-03-28'),(8,5,'Dexter','Dog','2 years','Dalmatian','Male','What breeds make the best family dogs? What are the best dog breeds for kids? When adding a new puppy or dog to your family,','uploads/animals/adam-griffith-swkkiitjmyc-unsplash-1648501652.jpg','Available','Many breeds make wonderful family dogs, though some are better suited for suburban and farm families than households living in the city.','Available','2500','2022-03-28');
/*!40000 ALTER TABLE `Animal_Profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `Animal_Report`
--

LOCK TABLES `Animal_Report` WRITE;
/*!40000 ALTER TABLE `Animal_Report` DISABLE KEYS */;
INSERT INTO `Animal_Report` VALUES (30,'A kitten is looking for a home','Community cats within the same territory often form groups called “colonies” and share resources such as food and shelter. Many colonies have dedicated caregivers who provide food and shelter.','Colombo','Dehiwala','Cats','uploads/reports/cat-1648526542.jpg','Azma Imtiaz',NULL,'0761184344','azma@gmail.com',21,'2022-03-29',NULL),(31,'Found a dog litter','Dog is looking weak and famished. Dog is looking weak and famished.Dog is looking weak and famished.Dog is looking weak and famished','Kandy','Katugastota','Dogs','uploads/reports/ani-1648526775.jpg','Azma Imtiaz',NULL,'0712365489','azma@petso.com',21,'2022-03-29',NULL),(32,'Bird broke its wings','Is looking weak and famished.Dog is looking weak and famished.Dog is looking weak and famished.Dog is looking weak and famished','Colombo','Dehiwala','Other','uploads/reports/bird-injureded-1648527353.jpg','Azma',NULL,'0761184344','azma@gmail.com',21,'2022-03-29',NULL);
/*!40000 ALTER TABLE `Animal_Report` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `Bank_Account`
--

LOCK TABLES `Bank_Account` WRITE;
/*!40000 ALTER TABLE `Bank_Account` DISABLE KEYS */;
INSERT INTO `Bank_Account` VALUES (1,5,'Azma Imtiaz','Commercial Bank','Dehiwala','255','80014561238'),(2,5,'Azma','BOC','Kandy','556','52991523121'),(4,5,'Hafzan','NDB','Wellwatta','888','78746512'),(5,5,'Hamdhi','Sampath','Kandy','2333','131231');
/*!40000 ALTER TABLE `Bank_Account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `Complaint`
--

LOCK TABLES `Complaint` WRITE;
/*!40000 ALTER TABLE `Complaint` DISABLE KEYS */;
INSERT INTO `Complaint` VALUES (1,'Requirements for wildlife information system','this is not a good',NULL,NULL),(2,'Requirements for wildlife information system','this is not a good',NULL,NULL),(3,'Rearrange the volunteers','volunteering no satisfied',NULL,NULL),(4,'need more pets for adoption','pets',NULL,NULL),(5,'Rearrange the volunteers','volunteers not active',NULL,NULL);
/*!40000 ALTER TABLE `Complaint` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `Conversation`
--

LOCK TABLES `Conversation` WRITE;
/*!40000 ALTER TABLE `Conversation` DISABLE KEYS */;
INSERT INTO `Conversation` VALUES (6,9,17,'Its not visible in the reported place','2022-03-24',NULL,'06:53:49'),(11,10,17,'Still same situation','2022-03-24',NULL,'07:53:49'),(12,10,17,'Saved','2022-03-24',NULL,'10:53:49'),(13,10,18,'It has move to the next street','2022-03-24',NULL,'22:53:49'),(14,9,17,'Hello','2022-03-25',NULL,'05:53:49'),(15,10,17,'lol','2022-03-25',NULL,'07:04:05'),(16,9,17,'Hello','2022-03-25',NULL,'05:44:21'),(17,11,16,'Nice','2022-03-25',NULL,'05:00:35'),(18,9,18,'Hello World','2022-03-28',NULL,'08:44:00');
/*!40000 ALTER TABLE `Conversation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `Donation`
--

LOCK TABLES `Donation` WRITE;
/*!40000 ALTER TABLE `Donation` DISABLE KEYS */;
INSERT INTO `Donation` VALUES (18,8,500.00,'LKR','Someee',NULL,NULL,NULL,'2022-03-28'),(19,8,2500.00,NULL,NULL,NULL,NULL,NULL,'2021-03-28'),(20,8,600.00,NULL,NULL,NULL,NULL,NULL,'2020-03-28'),(21,8,5000.00,NULL,NULL,NULL,NULL,NULL,'2019-03-28'),(22,8,7800.00,'LKR','Tom','VISA','Tom','somrthing','2022-03-28'),(27,8,5000.00,'LKR','sdc','VISA','','','2022-03-28'),(28,8,5000.00,'LKR','sdc','VISA','','','2022-03-28');
/*!40000 ALTER TABLE `Donation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `Fundraiser`
--

LOCK TABLES `Fundraiser` WRITE;
/*!40000 ALTER TABLE `Fundraiser` DISABLE KEYS */;
INSERT INTO `Fundraiser` VALUES (4,27,'Description here, Description here',2333.00,0.00,'2022-01-18','2022-01-20',2,'uploads/projects/vaccination-card---front-1641923460.jpeg','Pending','Ongoing'),(5,29,'Nlah skcmskcscsocms csicnsic cscnsjc csj sckdbs o  d  rrt r',1232.00,0.00,'2022-03-28','2022-03-30',1,'uploads/projects/ebony-x-neurale-1647246066.png','Complete','Complete'),(8,32,'efe vewgewg rbrbr',15000.00,17800.00,'2022-03-30','2022-04-05',1,NULL,'Pending','Complete'),(9,33,'A community cat, also sometimes referred to as feral, stray, or wild, are free-roaming cats who call the outdoors their home. They are members of the domestic cat species but vary in terms of their level of socialization or friendliness. Many community cats are not socialized to humans and prefer to keep their distance',50000.00,0.00,NULL,NULL,1,'uploads/projects/ani-1648525133.jpg','Pending','Ongoing'),(10,34,'A community cat, also sometimes referred to as feral, stray, or wild, are free-roaming cats who call the outdoors their home. They are members of the domestic cat',150000.00,0.00,NULL,NULL,1,'uploads/projects/clean-1648525297.jpg','Pending','Ongoing');
/*!40000 ALTER TABLE `Fundraiser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `Org_Animal`
--

LOCK TABLES `Org_Animal` WRITE;
/*!40000 ALTER TABLE `Org_Animal` DISABLE KEYS */;
INSERT INTO `Org_Animal` VALUES (5,'Cats'),(5,'Dogs'),(6,'Cats'),(7,'Cats'),(8,'Cats'),(9,'Cats'),(9,'Dogs'),(9,'Rabbits'),(9,'Turtles'),(10,'Cats'),(10,'Dogs'),(10,'Rabbits'),(11,'Cats'),(11,'Dogs'),(12,'Cats'),(12,'Dogs'),(13,'Cats'),(13,'Dogs'),(13,'Rabbits'),(13,'Turtles');
/*!40000 ALTER TABLE `Org_Animal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `Organization`
--

LOCK TABLES `Organization` WRITE;
/*!40000 ALTER TABLE `Organization` DISABLE KEYS */;
INSERT INTO `Organization` VALUES (5,8,'Turtle Conserve','0761184344','0112345678','123, kandy','some road','Dehiwala','Colombo','yes','','','','uploads/hands-1648495679.jpg','','pending',NULL,'12/03/2020'),(6,18,'Baw Baw','2321','3213213','123, kandy','some road','Dehiwala','Colombo','0','','','','','uploads/vaccination-card---back-1641658791.jpeg','pending',NULL,'12/03/2020'),(7,6,'adotees','0775561783','0652249456','234, era road','wattala','Kayts','Jaffna','yes','adopties.lk','adoptee','adoptee12','adoptes@',NULL,'pending','amanasamsudeen@gmail.com','12/03/2020'),(8,19,'Sad','11111111','11111111','sasa','','Mahiyyawa','Kandy','','','','','','','pending',NULL,NULL),(9,20,'sassasas','2121212','','Colombo','','','','yes','saa','sasa','sasasa','','','pending',NULL,NULL),(10,21,'Animal Care Center','0112232889','','Colombo 7','','opel','saab','yes','animalcenter.com','facebook.com/animal_center','instagram.com/animal_center','','','pending',NULL,NULL),(11,30,'Animal','0775561783','0662231798','120/45','','Ukuwela','Matale','yes','animalscare.com','animalscare.facebook.com','','uploads/cover-1648492042.jpg','','pending','zuferraheem@gmail.com',NULL),(12,31,'Baw Baw Club','07611884344','','12,Dehiwala','','volvo','saab','yes','','','','','','pending',NULL,NULL),(13,33,'Bow','0775561783','','Colombo','Dehiwel','Dehiwala','Colombo','yes','bowbow.com','facebook/bowbow.com','','','','pending',NULL,'2022-03-28');
/*!40000 ALTER TABLE `Organization` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `Organization_Animal_Report`
--

LOCK TABLES `Organization_Animal_Report` WRITE;
/*!40000 ALTER TABLE `Organization_Animal_Report` DISABLE KEYS */;
INSERT INTO `Organization_Animal_Report` VALUES (1,5,9,'Accepted'),(2,5,10,'Ignored'),(3,5,11,'Pending'),(6,7,24,'Pending'),(7,7,25,'Pending'),(8,7,26,'Pending'),(9,7,27,'Pending'),(10,5,29,'Pending'),(11,5,30,'pending'),(12,13,30,'pending');
/*!40000 ALTER TABLE `Organization_Animal_Report` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `Project`
--

LOCK TABLES `Project` WRITE;
/*!40000 ALTER TABLE `Project` DISABLE KEYS */;
INSERT INTO `Project` VALUES (17,'Dogs Are Friends',5,'Stray animal sterilization','2021-12-24','2022-03-30','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,','Ongoing','True','False','uploads/projects/clean.jpg'),(26,'Something here',5,'Environment Cleaning','2022-01-11','2022-03-30','Something here Something here','Rejected','False','False','uploads/projects/clean.jpg'),(27,'Some Project',5,'Animal rescue','2022-01-11','2022-04-02','Description here, Description here','Ongoing','True','True','uploads/projects/clean.jpg'),(28,'Lets keep clean',5,'Environment Cleaning','2022-03-10','2022-03-30','This will be held on 16th of March at colombo.','Completed','True','False','uploads/projects/clean.jpg'),(29,'Turtle rescue',5,'Animal rescue','2022-03-14','2022-03-31','Nlah skcmskcscsocms csicnsic cscnsjc csj sckdbs o  d  rrt r','Approved','True','True','uploads/projects/clean.jpg\r '),(32,'Recycle plastic',5,'Other','2022-03-28','2022-04-07','fcafc vevedv fsvds','Ongoing','False','True',NULL),(33,'Save kittens in Kandy',5,'Animal rescue','2022-03-29','2022-04-29','A community cat, also sometimes referred to as feral, stray, or wild, are free-roaming cats who call the outdoors their home. They are members of the domestic cat species but vary in terms of their level of socialization or friendliness. Many community cats are','Pending','False','True','uploads/projects/cat-1648525133.jpg'),(34,'Sterilize stray dogs in town',5,'Stray animal sterilization','2022-03-29','2022-05-25','A community cat, also sometimes referred to as feral, stray, or wild, are free-roaming cats who call the outdoors their home. They are members of the domestic cat species but vary in terms of their level of socialization or friendliness. Many community cats are not','Pending','False','True','uploads/projects/adam-griffith-swkkiitjmyc-unsplash-1648525297.jpg');
/*!40000 ALTER TABLE `Project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `Sponsorship`
--

LOCK TABLES `Sponsorship` WRITE;
/*!40000 ALTER TABLE `Sponsorship` DISABLE KEYS */;
INSERT INTO `Sponsorship` VALUES (1,NULL,NULL,'2022-03-15','2022-03-10',NULL,NULL),(2,NULL,NULL,'2022-03-11','2022-03-19',NULL,NULL);
/*!40000 ALTER TABLE `Sponsorship` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
INSERT INTO `User` VALUES (9,6,'Hamdhi','012356789',NULL,NULL,NULL,NULL,'active','27-03-2022'),(12,12,'Pasindu Rupasinghe','0719864712','139/1/c, Bangalamale Waththa','Kandy','Katugastota',NULL,'active','27-03-2022'),(13,13,'John Doe','0123456789',NULL,NULL,NULL,NULL,'active','27-03-2022'),(14,14,'Pasindu Rupasinghe','0719864712',NULL,NULL,NULL,NULL,'active','27-03-2022'),(15,17,'','','No 273 GSO road , Eravur ,Batticaloa, Srilanka','batticaloa','Eravur',NULL,'active','27-03-2022'),(16,22,'user','0775561783',NULL,NULL,NULL,NULL,'active','27-03-2022'),(17,23,'Saadique','0775561783',NULL,NULL,NULL,'uploads/profiles/love_cat.jpg','active','27-03-2022'),(18,24,'Alice','0776677676',NULL,NULL,NULL,'','active','27-03-2022'),(19,28,'Pasindu Rupasinghe','079864712','139/1/c, Bangalamale Waththa','Kandy','Katugastota',NULL,'active','28-03-2022'),(20,29,'Pasindu Rupasinghe','071986747',NULL,NULL,NULL,NULL,'active','28-03-2022'),(21,32,'Azma Imtiaz','0761184344',NULL,NULL,NULL,NULL,'active','28-03-2022');
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `Volunteer_Application`
--

LOCK TABLES `Volunteer_Application` WRITE;
/*!40000 ALTER TABLE `Volunteer_Application` DISABLE KEYS */;
INSERT INTO `Volunteer_Application` VALUES (2,NULL,'aaa',NULL,'641961698v','No 273 GSO road , Eravur ,Batticaloa, Srilanka','0789876543','2022-03-08',NULL,NULL,'2022-03-26','vol','madhusha_6@hotmail.com','','',''),(3,NULL,'aaa',NULL,'641961698v','No 273 GSO road , Eravur ,Batticaloa, Srilanka','0789876543','2022-03-08',NULL,NULL,'2022-03-26','vol','madhusha_6@hotmail.com','','',''),(4,NULL,'Amana',NULL,'987065432','','0789876543','2022-03-16',NULL,NULL,'2022-03-26','volunteer','admin123@petso.com','volunteer','petso','worker'),(5,NULL,'Amana',NULL,'641961698v','ccc','0789876543','2022-03-31',NULL,NULL,'2022-03-28','sss','turtleconserve@gmail.com','volunteer','petso','worker'),(6,NULL,'Amana',NULL,'641961698v','ccc','0789876543','2022-03-31',NULL,NULL,'2022-03-28','sss','turtleconserve@gmail.com','volunteer','petso','worker'),(7,NULL,'Amana',NULL,'987065432','batticaloa','0652240134','2022-03-31',NULL,NULL,'2022-03-29','volunteer','admin123@petso.com','volunteer','abd','worker'),(8,NULL,'Amana',NULL,'987065432','batticaloa','0652240134','2022-03-31',NULL,NULL,'2022-03-29','volunteer','admin123@petso.com','volunteer','abd','worker');
/*!40000 ALTER TABLE `Volunteer_Application` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `Volunteer_Opportunity`
--

LOCK TABLES `Volunteer_Opportunity` WRITE;
/*!40000 ALTER TABLE `Volunteer_Opportunity` DISABLE KEYS */;
INSERT INTO `Volunteer_Opportunity` VALUES (24,17,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,','Kandy','Kandy','2021-12-28','2021-12-30','Not specified','Not specified','Weekends','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,','2021-12-25','2021-12-26',NULL,NULL,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,',NULL,NULL),(30,27,'Description here, Description here','Description here, Description here','Kandy','Kandy','2022-01-17','2022-01-19','Not specified','Not specified','Weekends','Description here, Description here','2022-01-17','2022-01-21',NULL,NULL,'',NULL,'uploads/projects/vaccination-card---back-1641923460.jpeg'),(31,28,'','','Colombo','Colombo','2022-03-16','2022-03-17','8:00AM','4:00PM','Weekdays','','2022-03-11','2022-03-14',NULL,NULL,'',NULL,NULL),(32,29,'Nlah skcmskcscsocms csicnsic cscnsjc csj sckdbs o  d  rrt r','Nlah skcmskcscsocms csicnsic cscnsjc csj sckdbs o  d  rrt r','Ampara','Horana','2022-03-23','2022-03-25','Not specified','Not specified','Daily','Nlah skcmskcscsocms csicnsic cscnsjc csj sckdbs o  d  rrt r','2022-03-16','2022-03-19',NULL,NULL,'',NULL,'uploads/rabbit.jpg');
/*!40000 ALTER TABLE `Volunteer_Opportunity` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-29 10:38:46
