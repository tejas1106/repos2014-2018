create table if not exists customer
(
	c_id int(10) not null auto_increment,
	firstname varchar(50) not null,
	lastname varchar(50) not null,
	gender varchar(10) not null,
	email varchar(100) not null,
	mobile char(10) not null,
	password varchar(60) not null,
	r_id int(10),
	primary key(c_id)
);


create table if not exists employee
(
	e_id int(10) not null auto_increment,
	firstname varchar(50) not null,
	lastname varchar(50) not null,
	gender varchar(10) not null,
	email varchar(100) not null,
	mobile char(10) not null,
	password varchar(60) not null,
	isapproved int(10) not null,
	s_id int(10),
	a_id int(10),
	p_id int(10),
	primary key(e_id)
);

create table if not exists admin
(
	admin_id int(10) not null auto_increment,
	username varchar(50) not null,
	firstname varchar(50) not null,
	lastname varchar(50) not null,
	gender varchar(10) not null,
	email varchar(100) not null,
	mobile char(10) not null,
	password varchar(60) not null,
	primary key(admin_id)
);


create table if not exists training
(
	t_program_id int(10) not null auto_increment,
	t_program_name varchar(100) not null,
	t_program_start_date date not null,
	t_program_period int(10) not null,
	primary key(t_program_id)
);



create table if not exists attendance
(
	a_id int(10) not null auto_increment,
	a_month int(10) not null,
	present_days int(10) not null,
	absent_days int (10) not null,
	primary key(a_id)
);



create table if not exists salary
(
	s_id int(10) not null auto_increment,
	s_month varchar(100) not null,
	s_amount int(10) not null,
	primary key(s_id)
);

create table if not exists feedback
(
	f_id int(10) not null auto_increment,
	front_office_staff int(10) not null,
	ambience int(10) not null,
	food int(10) not null,
	staff int(10) not null,
	house_keeping int(10) not null,
	door_man int(10) not null,
	cleanliness int(10) not null,
	parking int(10) not null,
	pool int(10) not null,
	overall int(10) not null,
	other_comments text,
	primary key(f_id)
);

create table if not exists room
(
	room_id int(10) not null unique,
	room_type varchar(20) not null,
	room_rent int(10) not null,
	isbooked int(10) not null,
	c_id int(10) not null
);


insert into room(room_id,room_type,room_rent,isbooked)
values('100','Apartment','7000','0'),
('101','HONEYMOON SUITE','10000','0'),
('102','NON-AC','3000','0'),
('103','NON-AC','3000','0'),
('104','NON-AC','3000','0'),
('105','NON-AC','3000','0'),
('106','NON-AC','3000','0'),
('107','AC','3000','0'),
('108','AC','5000','0'),
('109','AC','5000','0'),
('110','AC','5000','0'),
('111','AC','5000','0'),
('112','AC','5000','0'),
('114','AC','5000','0'),
('115','SUNSET SUITE','10000','0'),
('116','NON-AC','3000','0'),
('117','NON-AC','3000','0'),
('118','NON-AC','3000','0'),
('119','NON-AC','3000','0'),
('120','NON-AC','3000','0'),
('121','NON-AC','3000','0'),
('128','NON-AC','3000','0'),
('129','NON-AC','3000','0'),
('130','PRIMOSE SUITE','10000','0'),
('122','AC','6000','0'),
('123','AC','6000','0'),
('124','AC','6000','0'),
('125','AC','6000','0'),
('126','AC','6000','0'),
('127','AC','6000','0'),
('136','AC','6000','0'),
('138','MEETING ROOM','8000','0'),
('137','HONEYMOON SUITE','10000','0'),
('131','HERITAGE SUITE','10000','0'),
('132','AC','6000','0'),
('133','AC','6000','0'),
('134','AC','6000','0'),
('135','AC','6000','0'),
('140','NON-AC','4000','0'),
('141','NON-AC','4000','0'),
('142','NON-AC','4000','0'),
('143','NON-AC','4000','0'),
('144','NON-AC','4000','0'),
('145','NON-AC','4000','0'),
('146','NON-AC','4000','0'),
('147','NON-AC','4000','0'),
('148','NON-AC','4000','0'),
('250','AC','7000','0'),
('251','AC','7000','0'),
('252','AC','7000','0'),
('253','AC','7000','0'),
('254','AC','7000','0'),
('255','AC','7000','0'),
('256','AC','7000','0'),
('257','AC','7000','0'),
('258','AC','7000','0');

insert into customer(firstname,lastname,gender,email,mobile,password)
values('Saurabh','Jadhav','male','saurabh.jadhav@ves.ac.in','7845451545','saurabh'),
('Mihir','Joshi','male','mihir.joshi@ves.ac.in','9623151214','mihir'),
('Jayesh','Saita','male','jayesh.saita@ves.ac.in','72133133130','jayesh'),
('Vivek','Mulchandani','male','vivek.mulchandani@ves.ac.in','81211321320','vivek'),
('Vignesh','Zambre','male','vignesh.zambre@ves.ac.in','9692132323','vignesh'),
('Himanshu','Rawlani','male','himanshu.rawlani@ves.ac.in','8587457458','himanshu');

insert into employee(firstname,lastname,gender,email,mobile,password,isapproved,s_id,a_id)
values('Abhishek','Patil','male','abhishek.patil@ves.ac.in','7845451545','abhishek','0',1,1),
('Apoorva','Shrivastava','female','apoorva.shrivastava@ves.ac.in','9623151214','apoorva','0',2,2),
('Sahil','Matlani','male','sahil.matlani@ves.ac.in','72133133130','sahil','0',3,3);

insert into admin(username,firstname,lastname,gender,email,mobile,password)
values('tejas1106','Tejas','Ingale','male','tejasingale1106@gmail.com','9527082165','tejas1106');


insert into training(t_program_name,t_program_start_date,t_program_period)
values('Communication Improvement','2017-08-23',4),
('Ethics Improvement','2018-06-11',5),
('Employee Development','2019-09-20',7);

insert into attendance(a_id,a_month,present_days,absent_days)
values(1,3,25,5),
(2,4,28,2),
(3,4,20,10);


insert into salary(s_id,s_month,s_amount)
values(1,3,15000),
(2,4,20000),
(3,4,8000);
