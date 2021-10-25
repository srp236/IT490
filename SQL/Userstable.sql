CREATE TABLE IF NOT EXISTS users(
    --id             INT              auto_increment,
    fname          VARCHAR(60)      NOT NULL, 
    lname          VARCHAR(60)      NOT NULL,
    username       VARCHAR(60)      NOT NULL,
    email          VARCHAR(60)      NOT NULL,
    password       VARCHAR(60)      NOT NULL,
    --rawPassword    VARCHAR(60),
    created timestamp default CURRENT_TIMESTAMP,
    --modified timestamp default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    PRIMARY KEY(id),
    UNIQUE (username),
    UNIQUE (email)
);
