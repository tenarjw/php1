CREATE TABLE IF NOT EXISTS sessions (
  id integer NOT NULL PRIMARY KEY AUTOINCREMENT,
  unique_id string NOT NULL,
  user_id integer NOT NULL,
  lastaccess DATETIME DEFAULT(STRFTIME('%Y-%m-%d %H:%M:%f', 'NOW')),
  page string NOT NULL
);
 
CREATE TABLE IF NOT EXISTS users (
  uid integer NOT NULL PRIMARY KEY  AUTOINCREMENT,
  username string NOT NULL,
  password string NOT NULL,
  role integer NOT NULL
);