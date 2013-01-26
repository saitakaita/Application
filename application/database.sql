create table user(
  id integer auto_increment,
  user_name varchar(20) not null,
  password varchar(40) not null,
  created_ar datetime,
  primary key(id),
  unique key user_name_index(user_name)
) ENGINE = INNODB;

create table following(
  user_id INTEGER,
  following_id INTEGER,
  PRIMARY KEY(user_id, following_id)
) ENGINE = INNODB;

create table status(
  id INTEGER AUTO_INCREMENT,
  user_id INTEGER NOT NULL,
  body VARCHAR(255),
  created_at DATETIME,
  PRIMARY KEY(id),
  INDEX user_id_index(user_id)
  
) ENGINE = INNODB;


ALTER TABLE following ADD FOREIGN KEY (user_id) REFERENCES user(id);
ALTER TABLE following ADD FOREIGN KEY (following_id) REFERENCES user(id);
ALTER TABLE status ADD FOREIGN KEY (user_id) REFERENCES user(id);