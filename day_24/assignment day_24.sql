create database day_24
use day_24

create table users (
	id_user int auto_increment primary key,
    name varchar(50) not null,
    email varchar(50) not null unique,
    password varchar(100) not null
)

create table courses(
	id_course int auto_increment primary key,
    name varchar(50) not null,
    price int(10) not null,
    kuota int(5) not null,
    id_category int,
    id_user int,
    foreign key (id_category) references categories(id_category),
    foreign key (id_user) references users(id_user)
)

create table categories (
	id_category int auto_increment primary key,
    name varchar(50) not null
)
INSERT INTO users (name, email, password) VALUES
('Andi Saputra','andi@gmail.com','password123'),
('Budi Santoso','budi@gmail.com','password123'),
('Citra Lestari','citra@gmail.com','password123'),
('Dedi Pratama','dedi@gmail.com','password123'),
('Eka Putri','eka@gmail.com','password123'),
('Fajar Nugroho','fajar@gmail.com','password123'),
('Gina Maharani','gina@gmail.com','password123'),
('Hadi Kurniawan','hadi@gmail.com','password123'),
('Indra Wijaya','indra@gmail.com','password123'),
('Joko Susilo','joko@gmail.com','password123'),
('Kartika Dewi','kartika@gmail.com','password123'),
('Lukman Hakim','lukman@gmail.com','password123'),
('Maya Sari','maya@gmail.com','password123'),
('Nanda Putra','nanda@gmail.com','password123'),
('Oki Prasetyo','oki@gmail.com','password123');

INSERT INTO courses (name, price, kuota, id_category, id_user) VALUES
('Laravel Fundamental', 250000, 30, 1, 1),
('React JS Complete Guide', 300000, 25, 1, 2),
('UI UX Design Basic', 200000, 40, 2, 3),
('Figma for Beginner', 150000, 35, 2, 4),
('Digital Marketing 101', 220000, 30, 3, 5),
('SEO Mastery', 270000, 20, 3, 6),
('NodeJS Backend Development', 320000, 25, 1, 7),
('Advanced CSS & Tailwind', 210000, 30, 2, 8),
('Social Media Marketing', 190000, 40, 3, 9),
('Fullstack Web Development', 500000, 15, 1, 10);

INSERT INTO categories (name) VALUES
('Programming'),
('Design'),
('Marketing');

-- pernjelasan erd
-- User → Banyak Course
-- Artinya satu student bisa mengambil banyak course.

-- Category → Banyak Course
-- Artinya satu kategori bisa memiliki banyak course.

-- 1.1
SELECT * 
FROM courses;

-- 1.2
SELECT name, price
FROM courses;

-- 1.3
SELECT *
FROM courses
WHERE price BETWEEN 50000 AND 200000;

-- 1.4
SELECT *
FROM courses
WHERE kuota = 0 OR price > 500000;

-- 1.5
SELECT *
FROM courses
ORDER BY price DESC
LIMIT 5;

-- 2.1
SELECT COUNT(*) AS total_users
FROM users;     

-- 2.2
SELECT COUNT(*) AS total_courses
FROM courses;

-- 2.3
SELECT categories.name AS category_name,
       COUNT(courses.id_course) AS total_course
FROM categories
LEFT JOIN courses 
ON categories.id_category = courses.id_category
GROUP BY categories.id_category;   

-- 2.4
SELECT categories.name AS category_name,
       AVG(courses.price) AS average_price
FROM categories
LEFT JOIN courses 
ON categories.id_category = courses.id_category
GROUP BY categories.id_category;

-- 2.5
SELECT categories.name,
       COUNT(courses.id_course) AS total_course
FROM categories
JOIN courses 
ON categories.id_category = courses.id_category
GROUP BY categories.id_category
HAVING COUNT(courses.id_course) > 3;

-- 3.1
SELECT courses.name AS course_name,
       categories.name AS category_name
FROM courses
INNER JOIN categories 
ON courses.id_category = categories.id_category;

-- 3.2
SELECT categories.name AS category_name,
       courses.name AS course_name
FROM categories
LEFT JOIN courses
ON categories.id_category = courses.id_category;

-- 3.3
SELECT users.name AS instructor,
       courses.name AS course_name
FROM users
LEFT JOIN courses
ON users.id_user = courses.id_user;

-- 3.4
SELECT courses.name AS course_name,
       users.name AS instructor
FROM courses
INNER JOIN users
ON courses.id_user = users.id_user;

-- 3.5 
SELECT users.name AS instructor,
       COUNT(courses.id_course) AS total_courses
FROM users
LEFT JOIN courses
ON users.id_user = courses.id_user
GROUP BY users.id_user; 