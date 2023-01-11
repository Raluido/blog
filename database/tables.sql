CREATE TABLE users (
    id          int(255) auto_increment not null,
    name        varchar(100) not null,
    surname     varchar(100) not null,
    email       varchar(255) not null,
    password    varchar(255) not null,
    date        date not null,
    CONSTRAINT pk_users PRIMARY KEY(id)
);

CREATE TABLE cathegories (
    id          int(255) auto_increment not null,
    name        varchar(100) not null,
    CONSTRAINT pk_cathegories PRIMARY KEY(id)
);

CREATE TABLE posts (
    id              int(255) auto_increment not null,
    user_id         int(255),
    cathegory_id    int(255),
    title           varchar(255) not null,
    description     MEDIUMTEXT,
    date            date not null,
    CONSTRAINT pk_posts PRIMARY KEY(id),
    CONSTRAINT fk_post_user FOREIGN KEY(user_id) REFERENCES users(id), 
    CONSTRAINT fk_post_cathegory FOREIGN KEY(cathegory_id) REFERENCES cathegories(id)
);