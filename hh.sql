-- Create a new database
CREATE DATABASE exam_results;

-- Use the newly created database
USE exam_results;

-- Create a table to store examination results
CREATE TABLE results (
    id INT AUTO_INCREMENT PRIMARY KEY,
    register_number VARCHAR(20) NOT NULL,
    student_name VARCHAR(50) NOT NULL,
    subject VARCHAR(50) NOT NULL,
    marks INT NOT NULL
);