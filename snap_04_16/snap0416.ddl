drop table if exists task
drop table if exists tweet

create table task (
                      taskId binary(20) not null,
                      taskTitle varchar(255) not null,
                      taskStartDate datetime null,
                      taskDueDate datetime null,
                      taskStatus varchar(64) not null,
                      taskPriority varchar(64)not null,
                      taskDescription varchar(256) null,
                      primary key (taskId)

);
create table tweet (
                       tweetId binary (16),
                       tweetProfiled varchar(128),
                       tweetContent varchar(128),
                       tweetDate binary (64),
                       tweetProfileAtHandle varchar(128),
                       primary key (tweetId)
);