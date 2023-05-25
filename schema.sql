CREATE DATABASE `php_basic_db`;
GRANT ALL PRIVILEGES ON `php_basic_db`.* TO `php_basic_user`@'localhost' IDENTIFIED BY 'dbpassword01';
FLUSH PRIVILEGES;

create table if not exists users
(
    id         int auto_increment
        primary key,
    name       varchar(255)                        null,
    email      varchar(50)                         not null,
    password   varchar(50)                         not null,
    created_at timestamp default CURRENT_TIMESTAMP not null
);

create table if not exists projects
(
    id      int auto_increment
        primary key,
    name    varchar(255) null,
    user_id int          not null,
    constraint projects_ibfk_1
        foreign key (user_id) references users (id)
            on update cascade on delete cascade
);

create index user_id
    on projects (user_id);

create table if not exists tasks
(
    id          int auto_increment
        primary key,
    title       varchar(255)                        null,
    description varchar(255)                        null,
    status      varchar(50)                         null,
    file_path   varchar(255)                        null,
    user_id     int                                 not null,
    project_id  int                                 not null,
    created_at  timestamp default CURRENT_TIMESTAMP not null,
    constraint tasks_ibfk_1
        foreign key (user_id) references users (id)
            on update cascade on delete cascade,
    constraint tasks_ibfk_2
        foreign key (project_id) references projects (id)
            on update cascade on delete cascade
);

create index project_id
    on tasks (project_id);

create index user_id
    on tasks (user_id);

