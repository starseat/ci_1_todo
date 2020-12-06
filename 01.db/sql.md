create table items (
    id int(10) not null auto_increment, 
    content varchar(256) null, 
    created_on date null, 
    due_date date null, 
    `use` int(1) not null default 1, 
    primary key(id)
) COLLATE='utf8mb4_unicode_ci' ENGINE=InnoDB;

insert into items (content, created_on, due_date) values ('첫번째 미팅', now(), DATE_ADD(NOW(), INTERVAL 7 DAY));
insert into items (content, created_on, due_date) values ('스터디', DATE_ADD(NOW(), INTERVAL 8 DAY), DATE_ADD(NOW(), INTERVAL 14 DAY));
