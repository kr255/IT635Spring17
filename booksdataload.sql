LOAD DATA LOCAL INFILE 'bookdata.csv'
INTO TABLE books
        FIELDS TERMINATED BY ','
            OPTIONALLY ENCLOSED BY '"'
        LINES TERMINATED BY '\n' -- or \r\n
(isbn, name, edition);