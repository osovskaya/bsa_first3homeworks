select u.* 
from users as u 
right join users_books as ub 
on u.id=ub.user_id 
group by ub.user_id 
having u.age > 20 and count(ub.book_id) > 5;

select * from users 
where first_name like '%3%' or last_name like '%3%';

select u.* from 
(select ub.user_id 
from users_books as ub 
join books as b on ub.book_id = b.id 
where b.title = 'Book #21') as temp 
right join users as u on temp.user_id = u.id 
where temp.user_id is null;

alter table users 
add column is_active bool;

update users 
set is_active = 1 
where users.id = any 
(select user_id 
from users_books 
group by user_id);

alter table books 
add column is_best_seller bool;

update books 
set is_best_seller = 1 
where books.id = any 
(select book_id 
from users_books 
group by book_id 
having count(book_id) > 10);
