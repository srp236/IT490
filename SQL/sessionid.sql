CREATE TABLE IF NOT EXISTS sessionid(
   sessionid VARCHAR(60),
   username VARCHAR(60),
   created timestamp default CURRENT_TIMESTAMP,
   PRIMARY KEY(sessionID),
   FOREIGN KEY(username) REFERENCES usertable(username)
);
