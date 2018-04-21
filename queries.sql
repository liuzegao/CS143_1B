# Select all the movie title and year that are shown after 2000
SELECT title,
		year
FROM Movie
WHERE year > 2000; 

# Select the director id and their corresponding movie id;
SELECT 
	did,
	mid
FROM Director
INNER JOIN MovieDirector
ON Director.id = MovieDirector.did;

# Select all the movie title and their corresponding movie genre
SELECT 
	title,
	genre
FROM Movie
INNER JOIN MovieGenre
ON Movie.id = MovieGenre.mid;