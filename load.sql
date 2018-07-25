LOAD DATA LOCAL INFILE 'data.csv'
INTO TABLE courseinfo
        FIELDS TERMINATED BY ','
            OPTIONALLY ENCLOSED BY '"'
        LINES TERMINATED BY '\n' -- or \r\n
(courseID, course_name, course_semester, course_professor);