DROP DATABASE IF EXISTS project4;
CREATE DATABASE project4;
USE project4; 

CREATE TABLE user
(
	id int auto_increment NOT NULL,
	fname varchar (200),
	lname varchar(200),
	uname varchar(200),
	pword varchar(25),
	primary key(id)
);

CREATE TABLE message
(
	id int auto_increment NOT NULL,
	body varchar (400),
	subject varchar(200),
	user_id int,
	recipient_ids int,
	FOREIGN KEY (user_id) REFERENCES user(id) ON UPDATE CASCADE ON DELETE RESTRICT
	FOREIGN KEY (recipient_ids) REFERENCES user(is) ON UPDATE CASCADE ON DELETE RESTRICT
	primary key(id)
);

CREATE TABLE message_read
(
	id int auto_increment NOT NULL,
	message_id int,
	reader_id int,
	rdate date,
	/*FOREIGN KEY (user_id) REFERENCES user(id) ON UPDATE CASCADE ON DELETE RESTRICT
	*/primary key(id)
);

CREATE TABLE admin
(
	id int auto_increment NOT NULL,
	fname varchar (200),
	lname varchar(200),
	uname varchar(200),
	pword varchar(25),
	primary key(id)
);
