# About
This is a PHP application that logins a user, User can enter his details and then user is displayed his details.

# Pre-requisites:

## Environment:
PHP, MySQL, Apache
For Mac, use [MAMP](https://www.mamp.info/en/downloads/), by default port 8889

## DB Setup:
1. In your MySQL, create a DB, named mytestdb
2. Create two tables:
  
  a. LOGIN_DETAILS
  ```
  CREATE TABLE LOGIN_DETAILS(
  USERNAME VARCHAR(30) NOT NULL PRIMARY KEY,
  PASSWORD VARCHAR(50) NOT NULL );
  ```
  
  b. USER_DETAILS
  ```
  CREATE TABLE USER_DETAILS(
  USERID INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  MY_NAME VARCHAR(30) NOT NULL,
  MY_AGE INT(3) NOT NULL,
  SEX VARCHAR(10) ,
  USERNAME VARCHAR(30) NOT NULL);
  ```
