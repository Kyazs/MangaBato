DROP DATABASE IF EXISTS mangabato;
CREATE DATABASE mangabato;
USE mangabato;

CREATE TABLE user (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    profile_picture VARCHAR(255) NOT NULL,
    biography TEXT NOT NULL,
    is_admin BOOLEAN DEFAULT FALSE,
    is_deleted BOOLEAN DEFAULT FALSE
);

CREATE TABLE manga_status (
    manga_status_id INT AUTO_INCREMENT PRIMARY KEY,
    status_name VARCHAR(50) NOT NULL,
    description VARCHAR(255) NOT NULL
);

CREATE TABLE manga_upload (
    manga_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    status_id INT,
    title VARCHAR(255) NOT NULL,
    type VARCHAR(50) NOT NULL,
    cover_img VARCHAR(255) NOT NULL,
    upload_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    is_deleted BOOLEAN DEFAULT FALSE,
    CONSTRAINT fk_user_id FOREIGN KEY (user_id) REFERENCES user(user_id),
    CONSTRAINT fk_manga_upload_status_id FOREIGN KEY (status_id) REFERENCES manga_status(manga_status_id)
);

CREATE TABLE genre (
    genre_id INT AUTO_INCREMENT PRIMARY KEY,
    genre_name VARCHAR(100) NOT NULL
);

CREATE TABLE manga_genre (
    -- manga_genre_id INT PRIMARY KEY AUTO_INCREMENT,
    manga_id INT,
    genre_id INT,
    CONSTRAINT fk_manga_genre_manga_id FOREIGN KEY (manga_id) REFERENCES manga_upload(manga_id),
    CONSTRAINT fk_manga_genre_genre_id FOREIGN KEY (genre_id) REFERENCES genre(genre_id)
);

CREATE TABLE chapter_status (
    chapter_status_id INT AUTO_INCREMENT PRIMARY KEY,
    chapter_name VARCHAR(50) NOT NULL,
    description VARCHAR(255) NOT NULL
);

CREATE TABLE chapter (
    chapter_id INT AUTO_INCREMENT,
    manga_id INT,
    chapter_status INT,
    chapter_number INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    release_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    is_deleted BOOLEAN DEFAULT FALSE,
    PRIMARY KEY (chapter_id, manga_id),
    CONSTRAINT fk_chapter_manga_id FOREIGN KEY (manga_id) REFERENCES manga_upload(manga_id),
    CONSTRAINT fk_chapter_status FOREIGN KEY (chapter_status) REFERENCES chapter_status(chapter_status_id)
);

CREATE TABLE image (
    image_id INT AUTO_INCREMENT PRIMARY KEY,
    chapter_id INT,
    image_url VARCHAR(255) NOT NULL,
    CONSTRAINT fk_image_chapter_id FOREIGN KEY (chapter_id) REFERENCES chapter(chapter_id)
);