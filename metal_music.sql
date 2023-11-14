DROP TABLE IF EXISTS genres;

CREATE TABLE genres (
  genre_name varchar(30) NOT NULL,
  DateofOrigin varchar(30) NULL,
  PlacesofOrigin varchar(50) NULL,
  NotableBands varchar(1000) NOT NULL,
  Comments varchar(1000) NULL,
  PRIMARY KEY (genre_name)
);
/* ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;*/
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table 'genres'
--

LOCK TABLES genres WRITE;
/*!40000 ALTER TABLE 'genres' DISABLE KEYS */;
INSERT INTO genres VALUES (1,'Heavy Metal ','13 February 1970','Birmingham England UK','Black Sabbath, Motörhead, Judas Priest','Some consider Led Zeppelin and Deep Purple the orginal Heavy Metal Bands');
/*!40000 ALTER TABLE 'genres' ENABLE KEYS */;
UNLOCK TABLES;

--