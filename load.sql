LOAD DATA LOCAL INFILE '/home/cs143/data/movie.del' INTO TABLE CS143.Movie FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"';
LOAD DATA LOCAL INFILE '/home/cs143/data/actor1.del' INTO TABLE CS143.Actor FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"';
LOAD DATA LOCAL INFILE '/home/cs143/data/actor2.del' INTO TABLE CS143.Actor FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"';
LOAD DATA LOCAL INFILE '/home/cs143/data/actor3.del' INTO TABLE CS143.Actor FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"';
LOAD DATA LOCAL INFILE '/home/cs143/data/director.del' INTO TABLE CS143.Director FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"';
LOAD DATA LOCAL INFILE '/home/cs143/data/moviegenre.del' INTO TABLE CS143.MovieGenre FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"';
LOAD DATA LOCAL INFILE '/home/cs143/data/moviedirector.del' INTO TABLE CS143.MovieDirector FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"';
LOAD DATA LOCAL INFILE '/home/cs143/data/movieactor1.del' INTO TABLE CS143.MovieActor FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"';
LOAD DATA LOCAL INFILE '/home/cs143/data/movieactor2.del' INTO TABLE CS143.MovieActor FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"';