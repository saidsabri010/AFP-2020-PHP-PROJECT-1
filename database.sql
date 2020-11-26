DROP TABLE IF EXISTS users;
CREATE TABLE users (
  user_id int(10)  PRIMARY KEY,
  username varchar(100) NOT NULL UNIQUE,
  email varchar(100) NOT NULL UNIQUE,
  password VARCHAR(40) NOT NULL   
) ENGINE=InnoDB DEFAULT CHARSET=utf8; 

CREATE TABLE blog (
	blog_id	int(11) NOT NULL,
	title	varchar(100) NOT NULL,
	post	varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

