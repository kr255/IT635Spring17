LOAD DATA LOCAL INFILE 'classdata.csv'
INTO TABLE class_table
        FIELDS TERMINATED BY ','
            OPTIONALLY ENCLOSED BY '"'
        LINES TERMINATED BY '\n' -- or \r\n
(courseID, textbook, required, isbn);