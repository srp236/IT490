CREATE TABLE IF NOT EXISTS forumscore(
   forumid int auto_increment, 
   username VARCHAR(60),
   score INT,
   posts INT,
   comments INT,
   likes INT,
   recipes INT,
   PRIMARY KEY(forumid),
   FOREIGN KEY(username) REFERENCES users(username),
);
