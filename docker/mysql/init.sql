drop user 'user'@'%';
flush privileges;
CREATE USER 'user'@'%' IDENTIFIED BY 'password';
CREATE DATABASE IF NOT EXISTS `user_api_test`;
GRANT ALL PRIVILEGES ON user_api_test.* TO 'user'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;
