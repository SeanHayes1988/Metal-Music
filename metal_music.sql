DROP TABLE IF EXISTS genres;

CREATE TABLE genres (
  genre_name char(50) NOT NULL,
  date_of_origin char(30) NULL,
  places_of_origin char(255) NULL,
  notable_bands varchar(1000) NULL,
  comments varchar(1000) NULL,
  PRIMARY KEY (genre_name)
);
/* ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;*/
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table 'genres'
--

LOCK TABLES genres WRITE;
/*!40000 ALTER TABLE 'genres' DISABLE KEYS */;
INSERT INTO genres VALUES ('Heavy Metal ','13 February 1970','Birmingham England UK','Black Sabbath, Motörhead, Judas Priest','Some consider Led Zeppelin and Deep Purple the orginal Heavy Metal Bands');
/*!40000 ALTER TABLE 'genres' ENABLE KEYS */;
UNLOCK TABLES;

--