CREATE DATABASE cellminer;
USE cellminer;

CREATE TABLE Carrier (
  name varchar(60) NOT NULl,
  address varchar(15) NOT NULL,
  UNIQUE KEY name (name)
);

CREATE DATABASE db756;
USE db756;

CREATE TABLE incomeid (
  id varchar(9) NOT NULl,
  income varchar(10) NOT NULL,
  PRIMARY KEY (id);
);

INSERT INTO incomeid (id, income) VALUES ('100000000','42368.95');
INSERT INTO incomeid (id, income) VALUES ('100000001','85332.1');
INSERT INTO incomeid (id, income) VALUES ('100000002','62125.78');
INSERT INTO incomeid (id, income) VALUES ('100000003','25331.12');
INSERT INTO incomeid (id, income) VALUES ('100000004','13248.26');
INSERT INTO incomeid (id, income) VALUES ('100000005','123012.12');
INSERT INTO incomeid (id, income) VALUES ('100000006','38422.82');
INSERT INTO incomeid (id, income) VALUES ('100000007','72333.22');
INSERT INTO incomeid (id, income) VALUES ('100000008','53684.12');
INSERT INTO incomeid (id, income) VALUES ('100000009','8362.11');