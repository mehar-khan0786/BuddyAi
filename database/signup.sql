create database chatboot;
use chatboot;

create table users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
);


select * from users;




SELECT * FROM users WHERE email = "khanmehar30032@gmail.com" AND password = 123456;
delete from users where id=8;
