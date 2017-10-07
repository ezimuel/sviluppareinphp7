CREATE TABLE speakers (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name VARCHAR(80) NOT NULL,
    title VARCHAR(80),
    company VARCHAR(80),
    url VARCHAR(255),
    twitter VARCHAR(80)
);

CREATE TABLE talks (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL,
    abstract TEXT,
    day DATE,
    start TIME,
    end TIME
);

CREATE TABLE talks_speakers (
    talk_id INTEGER NOT NULL,
    speaker_id INTEGER NOT NULL,
    FOREIGN KEY (talk_id) REFERENCES talks(id) ON DELETE CASCADE,
    FOREIGN KEY (speaker_id) REFERENCES speakers(id) ON DELETE CASCADE
);
