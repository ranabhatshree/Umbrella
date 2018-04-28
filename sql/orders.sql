CREATE TABLE orders(
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name varchar(256) NOT NULL,
	phone varchar(256) NOT NULL,
	email varchar(256) NOT NULL,
	project varchar(256) NOT NULL,
	complete_date varchar(256) NOT NULL,
	city varchar(256) NOT NULL,
	description text NOT NULL,
	ip_address varchar(256) NOT NULL,
	request_date datetime NOT NULL
);