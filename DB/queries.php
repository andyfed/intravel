<?php
//getLastPostsIdList
$lastPostsIdList_next = 'SELECT id FROM Posts WHERE id < '.$lastId.' LIMIT 20';
$lastPostsIdList_1 = 'SELECT id FROM Posts WHERE id <= '.$lastId.' LIMIT 20';