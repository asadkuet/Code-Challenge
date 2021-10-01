select u.*, avg(t.correct) as avg_correct, max(t.time_taken) as last_time_taken
from user u left join test_result t
on t.user_id = u.user_id
group by u.user_id;
