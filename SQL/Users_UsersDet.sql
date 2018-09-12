CREATE TABLE Users (
	userid int NOT NULL AUTO_INCREMENT,
	firstname varchar(100),
	lastname varchar(100),
	username varchar(50) NOT NULL UNIQUE,
	password varchar(255),
	email varchar(255),
	privilages TINYINT, --THIS IS A BIT MASK!
	PRIMARY KEY (id)
);

CREATE TABLE UsersDetail (
	id int NOT NULL AUTO_INCREMENT, --This is just for reference. Table needs a primary key anyway.
	userid int, --Links to Users table
	department varchar(255), --Where they work
	signature blob, 
	PRIMARY KEY (id),
	FOREIGN KEY (userid) REFERENCES Users(userid)
);


-- Privilages Explained:
-- 8 bit mask 0000 0000
-- Each bit represents a role
-- bit 0 (1) - Guest
-- bit 1 (2) - Employee
-- bit 2 (4) - not used
-- bit 3 (8) - not used
-- bit 4 (16) - not used
-- bit 5 (32) - not used
-- bit 6 (64) - Manager
-- bit 7 (128) - ADMIN