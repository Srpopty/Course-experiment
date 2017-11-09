
CREATE DATABASE IF NOT EXISTS `sqllevel2`  DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
use `sqllevel2`;

CREATE  table `admin`(
    `id` int(11) not null primary key auto_increment,
    `uname` varchar(20) not null ,
    `passwd` varchar(32) not null
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8 ;

insert into `admin`(`uname`,`passwd`) values ('admin', 'flag{1t_i5_N0t_0v3r}');
