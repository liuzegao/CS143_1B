INSERT INTO Movie (title) VALUES  ("ACD");  --Doest not give value to primary key movie id
INSERT INTO Movie (id, title) VALUES  (3, "ACD"); --Duplicate id, the primary key must be uniqe
INSERT INTO Movie (id) VALUES  ("ACD");  --Not an integer value
INSERT INTO Review (name, rating) VALUES  ("ACD",6);  --Rating cannot be larger than 5