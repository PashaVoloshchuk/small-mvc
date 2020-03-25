CREATE TABLE `user`(

    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) DEFAULT '',
    `login` VARCHAR(255) DEFAULT '',
    `password` VARCHAR(255) DEFAULT '',
    `status` int(1) DEFAULT 0,
    `date_register` int(11) DEFAULT 0,
    `role` VARCHAR (255) DEFAULT 'guest',





PRIMARY KEY (`id`)
);

CREATE TABLE `user_setting`(
`id` int(11) NOT NULL AUTO_INCREMENT,
`user_id` INT(11) DEFAULT 0,
`name` VARCHAR (255) DEFAULT '',
`params` TEXT,
PRIMARY KEY (`id`)
);


CREATE TABLE `page`(
`id` int(11) NOT NULL AUTO_INCREMENT,
`status` int(1) DEFAULT 0,
`date_create` int(11) DEFAULT 0,
`author` int(11) DEFAULT 0,
`image` VARCHAR(255) DEFAULT '',
`is_index` int(1) DEFAULT 1,
PRIMARY KEY (`id`)
);

CREATE TABLE `page_translate`(
`id` int(11) NOT NULL AUTO_INCREMENT,
`page_id` int(11) DEFAULT 0,
`language` VARCHAR(255) DEFAULT '',
`meta_title` VARCHAR(255) DEFAULT '',
`meta_description` TEXT,
`header` VARCHAR(255) DEFAULT '',
`header2` VARCHAR(255) DEFAULT '',
`content` TEXT,
`short_content` TEXT,

PRIMARY KEY (`id`)
 );


CREATE TABLE `language`(
`id` int(11) NOT NULL AUTO_INCREMENT,
`code` int(11) DEFAULT 0,
`name` VARCHAR (255) DEFAULT '',
`title` VARCHAR (255) DEFAULT '',
`locale` VARCHAR (255) DEFAULT '',
`status` int(1) DEFAULT 0,

PRIMARY KEY (`id`)
 );





