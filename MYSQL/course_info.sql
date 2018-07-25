--Drop database if exists Courses; 

--create database Courses;

USE Courses; 

-- DROP TABLE IF EXISTS `courseinfo`;
-- CREATE TABLE `courseinfo` (
--   `courseID` varchar(5) NOT NULL,
--   `course_name` varchar(255) NOT NULL,
--   `course_semester` varchar(255),
--   `course_professor` varchar(255),
--   PRIMARY KEY (`courseID`)
-- );

-- DROP TABLE IF EXISTS `books`;
-- CREATE TABLE `books`(
--   `isbn` char(13) NOT NULL,
--   `name` varchar(255) NOT NULL,
--   `date` date NOT NULL,
--   `author` varchar(255) NOT NULL,
--   `Edition` char(10),
--   PRIMARY KEY (`isbn`)
-- );

DROP TABLE IF EXISTS `class`;
CREATE TABLE `class_table`(
  `courseID` varchar(5) NOT NULL,
  `textbook` varchar(255),
  `required` char(1),
  `isbn` char(13),
  PRIMARY KEY (`courseID`),
  FOREIGN KEY (`isbn`) REFERENCES `books`(`isbn`)
);






