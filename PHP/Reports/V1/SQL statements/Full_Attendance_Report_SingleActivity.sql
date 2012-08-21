/*

	This SQL query will output:

	ID#				|	Attendees
	201207407231	|	Monroe, John Turkey
	201207413241	|	Smith, Duck Jenny

*/

/* Students who attended */
SELECT DISTINCT S.student_id id, S.last_name l_n, S.first_name f_n, S.middle_name m_n
FROM Activity A1, Student S
WHERE A1.act_id = 1
	AND ( A1.act_id, S.student_id )
		IN
			(
				SELECT act_id, student_id
				FROM Stud_Attends
			)
			
UNION

/* Professors who attended */
SELECT DISTINCT P.user_id id, P.last_name l_n, P.first_name f_n, P.middle_name m_n
FROM Activity A2, Professor P
WHERE A2.act_id = 1
	AND ( A2.act_id, P.user_id )
		IN
			(
				SELECT act_id, user_id
				FROM Prof_Attends
			)