DROP TABLE IF EXISTS post;

CREATE TABLE post (
    title  text      NOT NULL,
    date   datetime  NOT NULL,
    name   text      NOT NULL,
    body   text      NOT NULL
);

INSERT INTO post (title, date, name, body) 
