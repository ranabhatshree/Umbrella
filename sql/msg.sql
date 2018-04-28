CREATE TABLE message(
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	email varchar(256) NOT NULL,
	msg text NOT NULL,
	ip_address varchar(256) NOT NULL,
	sent_date datetime NOT NULL
);