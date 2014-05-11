CREATE DATABASE cellminer;
USE cellminer;

CREATE TABLE Carrier (
  name varchar(60) NOT NULl,
  address varchar(15) NOT NULL,
  UNIQUE KEY name (name)
);