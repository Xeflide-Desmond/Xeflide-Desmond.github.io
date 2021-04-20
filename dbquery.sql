create database xef_hub;
create table user_info(
	fname varchar(255) NOT NULL, lname varchar(255) NOT NULL, email varchar(255) NOT NULL, 
    phone_number int(20) NOT NULL, password varchar(255) NOT NULL, confirm_password varchar(255) NOT NULL,
    PRIMARY KEY (email));