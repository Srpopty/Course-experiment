
CREATE DATABASE IF NOT EXISTS `SQLlevel2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
use `SQLlevel2`;

CREATE  table `users`(
    `id` int(11) not null primary key auto_increment,
    `username` varchar(20) not null ,
    `password` varchar(32) not null
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8 ;

insert into SQLlevel2.users(`username`,`password`) values ('admin', 'flag{1ts_N0t_0v3r!}');
