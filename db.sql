create table users(
	id int auto_increment,
	fullname varchar(40),
	email varchar(60),
	password varchar(255),
	role varchar(10) default 'user',
	created_at datetime default current_timestamp,
	updated_at datetime default current_timestamp on update current_timestamp,
	primary key(id)
);