create schema blog;

use blog;

create table `Users`(
	`ID` int primary key auto_increment,
    `username` varchar(50),
    `password` varchar(50)
);

insert into `Users`(`username`, `password`)
values('admin', 123);

create table `Universities` (
	`ID` int primary key auto_increment,
    `Name` varchar(50)
);

create table `Members` (
	`ID` int primary key auto_increment,
    `Firstname` varchar(50),
    `Lastname` varchar(50),
    `Phone` varchar(10),
    `University_ID` int references `Universities`(`ID`)
);

create table `Articles` (
	`ID` int primary key auto_increment,
    `Title` varchar(50),
    `Author` varchar(50),
    `Date` date,
    `Content` text
);

alter table `Members` 
add column (`Age` int);