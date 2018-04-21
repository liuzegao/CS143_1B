INSERT INTO Movie (title) VALUES  ("ACD");  # Doest not give value to primary key movie id
INSERT INTO Movie (id, title) VALUES  (3, "ACD"); # Duplicate id, the primary key must be unique
INSERT INTO Movie (id) VALUES  ("ACD");  # Not an integer value
INSERT INTO Director(last, dob) VALUES  ("ACD",2019);  # Director must be born before 2019