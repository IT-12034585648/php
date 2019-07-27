CREATE TABLE kadaidb.person(
   id int(11) not null primary key auto_increment
  ,name varchar(50)
  ,age int(11)
  ,created_at timestamp not null default current_timestamp
);

insert into kadaidb.person(
   name
  ,age
)
values(
   "tanaka taro"
  ,24
);