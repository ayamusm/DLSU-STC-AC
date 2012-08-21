
--------------------------------------
-- 		Event name of activity		--
--------------------------------------

SELECT DISTINCT E.title title
FROM Event E JOIN Belongs B
	ON E.event_id = B.event_id
WHERE B.act_id = 1

---------------------------------------




---------------------------------------
--			available seats			 --
---------------------------------------

SELECT VEN_CAP.name venue, VEN_CAP.v_cap - CNT.a_hcnt avail 
FROM
	(
	SELECT V.name name, V.capacity v_cap
	FROM Venue V JOIN Held_at H
		ON V.name = H.name
	WHERE H.act_id = 1
	) AS VEN_CAP

	,
	
	(
	SELECT DISTINCT COUNT( HCNT.id ) a_hcnt
	FROM
		(
			/* Students who attended */
			SELECT DISTINCT S.student_id id
			FROM Activity A1, Student S
			WHERE A1.act_id = 1
				AND ( A1.act_id, S.student_id )
					IN
						(
							SELECT DISTINCT act_id, student_id
							FROM Stud_Attends
						)
			 
			UNION
			 
			/* Professors who attended */
			SELECT DISTINCT P.user_id id
			FROM Activity A2, Professor P
			WHERE A2.act_id = 1
				AND ( A2.act_id, P.user_id )
					IN
						(
							SELECT DISTINCT act_id, user_id
							FROM Prof_Attends
						)
		) AS HCNT
	) AS CNT