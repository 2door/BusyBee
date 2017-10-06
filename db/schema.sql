DROP TABLE users;
CREATE TABLE users(user_id integer primary key, username varchar(20), email varchar(50), salt varchar(40), password varchar(40));

DROP TABLE lists;
CREATE TABLE lists(list_id integer primary key, creator integer, title varchar(20), shared blob, notif blob);

DROP TABLE items;
CREATE TABLE items(item_id integer primary key, list_parent integer, title varchar(50), deadline datetime, done blob);

DROP TABLE alarms;
CREATE TABLE alarms(item_parent integer, time datetime);