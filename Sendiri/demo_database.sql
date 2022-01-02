CREATE TABLE users (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(50) NOT NULL UNIQUE,
  userpassword VARCHAR(255) NOT NULL,
  userlevel INT NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
  );