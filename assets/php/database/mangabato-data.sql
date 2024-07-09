INSERT INTO user(username, email, password, biography, is_admin)
        VALUE ('asf', 'johncasper.bit@gmail.com', 'asf', 'idk man were cooked', '1'),
            ('admin', 'admin@gmail.com', 'admin', 'im admin', '1'),
            ('user', 'user@gmail.com', 'user', 'lorem ipsum 999', '');

INSERT INTO manga_status(status_name, description) 
            VALUE ('Pending', 'Your manga is still pending. wait for admin approval'),
                ('Approved', 'Congrats Your manga has been approved!!'),
                ('Declined', 'your manga has been declined');

INSERT INTO genre(genre_name)
            VALUE ('action'),('adventure'),('comedy'),('drama'),('fantasy'),('historical'),
                 ('horror'),('isekai'),('martial arts'),('mecha'),('mystery'),('psychology'),
                  ('romance'),('school life'),('sci-fi'),('shonen AI'),('shoujo AI'),('sports'),
                   ('supernatural'),('thriller'),('tragedy');

INSERT INTO chapter_status(chapter_name, description) 
            VALUE ('Pending', 'Your manga is still pending. wait for admin approval'),
                ('Approved', 'Congrats Your manga has been approved!!'),
                ('Declined', 'your manga has been declined');

SELECT m.*,  s.status_name FROM manga_upload AS m INNER JOIN manga_status AS s ON m.status_id = s.manga_status_Id

SELECT * FROM user;

use mangabato;
desc manga_upload;
SELECT
    u.cover_img,
    u.user_id,
    u.manga_id,
    u.title,
    u.type,
    GROUP_CONCAT(g.genre_name) AS genre_names,
    u.synopsis,
    u.upload_date,
    ms.status_name
FROM
    manga_upload AS u
INNER JOIN
    manga_genre AS mg ON u.manga_id = mg.manga_id
INNER JOIN
    genre AS g ON mg.genre_id = g.genre_id
INNER JOIN
    manga_status AS ms ON u.status_id = ms.manga_status_id
GROUP BY
    u.cover_img,
    u.user_id,
    u.manga_id,
    u.title,
    u.type,
    u.synopsis,
    u.upload_date,
    ms.status_name;

SELECT m.manga_id, m.title, c.chapter_number, c.title, c.release_date, cs.chapter_name FROM manga_upload AS m 
INNER JOIN chapter AS c ON m.manga_id = c.manga_id
INNER JOIN chapter_status AS cs ON c.chapter_status = cs.chapter_status_id
ORDER BY c.release_date asc;

SELECT m.cover_img, m.manga_id, m.title, m.type, stat.status_name, m.upload_date FROM manga_upload AS m INNER JOIN manga_status AS stat ON m.status_id = stat.manga_status_id WHERE m.user_id = 5 AND m.is_deleted = 0 AND m.status_id = 1 OR m.status_id = 2;

select * from manga_status;

UPDATE manga_upload SET status_id = 2 WHERE manga_id = 9;


SELECT * FROM image where chapter_id = 5;

select * from manga_upload;
SELECT * FROM user;

SELECT * FROM image AS i LEFT JOIN chapter AS c ON i.chapter_id = c.chapter_id WHERE c.chapter_id = 2;

SELECT m.cover_img, m.manga_id, m.title, m.upload_date, c.chapter_number, cs.chapter_name as status FROM manga_upload m INNER JOIN chapter c ON m.manga_id = c.manga_id  INNER JOIN chapter_status AS cs ON c.chapter_status = cs.chapter_status_id WHERE m.user_id = 3;
-- INSERT INTO manga_upload()
SELECT * FROM MANGA_GENRE;

SELECT * FROM chapter_status;

select * from manga_upload;
SELECT * FROM manga_status;

SELECT manga_genre.manga_id, gen.genre_name 
FROM manga_genre 
INNER JOIN genre AS gen ON manga_genre.genre_id = gen.genre_id;


