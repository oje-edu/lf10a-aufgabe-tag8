create table login(
	log_id int not null primary key auto_increment,
	log_user varchar(30) not null,
	log_password varchar(12) not null
)

insert into login values (null, "user", "12345");
insert into login values (null, "tester", "sicher");