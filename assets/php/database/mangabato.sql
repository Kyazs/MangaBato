DROP DATABASE IF EXISTS mangabato;
CREATE DATABASE mangabato;
USE mangabato;

CREATE TABLE user (
    user_id INT AUTO_INCREMENT NOT NULL,
    username VARCHAR (255) NOT NULL,
    email VARCHAR (255) NOT NULL,
    password VARCHAR (255) NOT NULL,
    registered_date VARCHAR (20) NOT NULL,
    profile_Picture VARCHAR (255),
    biography VARCHAR (255),
    is_admin BOOLEAN DEFAULT FALSE,
    is_deleted BOOLEAN DEFAULT FALSE,
    CONSTRAINT pk_user_id PRIMARY KEY (user_id)
);


CREATE TABLE manga_submission (
    manga_id INT AUTO_INCREMENT NOT NULL,
    user_id INT NOT NULL,
    title VARCHAR (255) NOT NULL,
    genre VARCHAR (50) NOT NULL,
    type VARCHAR (20) NOT NULL,
    status VARCHAR (20) DEFAULT 'pending',
    synopsis VARCHAR (255) NOT NULL,
    cover_img VARCHAR (255) NOT NULL,
    submission_date VARCHAR (20) NOT NULL,
    is_deleted BOOLEAN DEFAULT FALSE,
    CONSTRAINT pk_manga_id PRIMARY KEY (manga_id),
    CONSTRAINT fk_user_id FOREIGN KEY (user_id) REFERENCES user(user_id)
);

CREATE TABLE chapter (
    chapter_id INT AUTO_INCREMENT NOT NULL,
    manga_id INT NOT NULL,
    title VARCHAR (255) NOT NULL,
    release_date VARCHAR (20) NOT NULL,
    number_of_pages INT NOT NULL,
    is_deleted BOOLEAN DEFAULT FALSE,
    CONSTRAINT pk_chapter_n_manga_id PRIMARY KEY (chapter_id, manga_id),
    CONSTRAINT fk_manga_id FOREIGN KEY (manga_id) REFERENCES manga_submission(manga_id)
);

CREATE TABLE page (
    page_id INT AUTO_INCREMENT NOT NULL,
    chapter_id INT NOT NULL,
    page_number INT NOT NULL,
    image_url VARCHAR (255),
    CONSTRAINT pk_page_id PRIMARY KEY (page_id),
    CONSTRAINT fk_chapter_id FOREIGN KEY (chapter_id) REFERENCES chapter(chapter_id)
);


SHOW TABLES;