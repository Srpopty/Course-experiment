
CREATE DATABASE `SQLlevel2`  DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
use `SQLlevel2`;

CREATE  table `admin`(
    `id` int(11) not null primary key auto_increment,
    `username` varchar(20) not null ,
    `password` varchar(32) not null
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8 ;

insert into `admin`(`username`,`password`) values ('admin', 'flag{1ts_N0t_0v3r!}');