DROP TABLE IF EXISTS linkdata;

CREATE TABLE
    linkdata (
        id int(11) NOT NULL AUTO_INCREMENT,
        l_url varchar(255) NOT NULL,
        l_title varchar(100) NOT NULL,
        l_comment varchar(255) NOT NULL,
        l_date datetime NOT NULL,
        PRIMARY KEY (id)
    );
