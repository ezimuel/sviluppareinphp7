CREATE TABLE session (
    id VARCHAR(128) NOT NULL,
    name VARCHAR(256) NOT NULL,
    value TEXT,
    last_update DATETIME NOT NULL,
    PRIMARY KEY (id, name)
) ENGINE = INNODB;
