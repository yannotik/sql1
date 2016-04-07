CREATE database users_db;

DROP database users_db;

CREATE TABLE
    `users` (
        `id` INT(11) NOT NULL AUTO_INCREMENT,
        `name` CHAR(35),
        `surname` CHAR(35),
        `email` CHAR(60) NOT NULL,
        `password` CHAR(100) NOT NULL,
        `age` INT(6),
        `is_active` INT(10),
        `is_admin` INT(10),
        PRIMARY KEY(`id`)
    );

DELETE FROM users where id = 1;

DROP table users;

INSERT INTO users VALUE (NULL, 'Anna', 'Antonyuk', 'anna@mail.com', 111, 26, 1, 0);

DELETE users_db;


CREATE table users;
SELECT * FROM users;
UPDATE users SET name = 'Ivan' WHERE id = 2;
DELETE users_db;