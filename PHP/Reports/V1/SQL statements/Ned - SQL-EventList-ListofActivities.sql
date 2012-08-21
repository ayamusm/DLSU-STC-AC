
--	Event List

SELECT DISTINCT CONCAT( " c/o " + O.name, E.title ) AS "Events List"
FROM event E, Organizer O
WHERE (E.event_id, O.organizer_id)
	IN
	(	--	event id w/ corresponding organizer id
		SELECT *
		FROM Hostedby
	)
ORDER BY ASC
	
--	List of Activities

SELECT title AS "List of Activities" 
FROM activity
ORDER BY ASC
	
--	List of Activities w/ corresponding event

SELECT DISTINCT A.title AS "List of Activities on " + E.title
FROM activity A, event E
WHERE (A.title, E.title)
	IN
	(	--	activity id w/ corresponding event id
		SELECT *
		FROM Belongs
	)
ORDER BY ASC

