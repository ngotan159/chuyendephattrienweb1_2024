-- Tạo cơ sở dữ liệu db_3036
CREATE DATABASE IF NOT EXISTS db_3036;
USE db_3036;

-- Tạo bảng posts
CREATE TABLE IF NOT EXISTS posts (
    id INT(11) NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL, 
    post_date DATE NOT NULL,
    tags VARCHAR(255),
    PRIMARY KEY (id)
);

-- Thêm dữ liệu vào bảng posts
INSERT INTO posts (title, post_date, tags) VALUES
('We denounce with righteous indignation and dislike men who are ...', '2019-09-21', 'Full Damage, Ideas'),
('Pleasures and praising pains was born and will give you ...', '2019-09-21', 'Pc&Laptops'),
('Pleasures and praising pains was born and will give you ...', '2019-09-21', 'Pin Number, Unlocked'),
('We denounce with righteous indignation and dislike men who are ...', '2019-09-21', 'Full Damage, Ideas'),
('Pleasures and praising pains was born and will give you ...', '2019-09-21', 'Pc&Laptops, Unlocked'),
('Pleasures and praising pains was born and will give you ...', '2019-09-21', 'Pin Number, Unlocked'),
('We denounce with righteous indignation and dislike men who are ...', '2019-09-21', 'Full Damage, Ideas'),
('Pleasures and praising pains was born and will give you ...', '2019-09-21', 'Pc&Laptops, Unlocked');


