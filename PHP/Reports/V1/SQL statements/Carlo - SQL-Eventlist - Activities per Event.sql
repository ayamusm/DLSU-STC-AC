
-- Event List -- 
SELECT Event.title, Event.description, Event.start_date, Event.end_date, Venue.name
FROM  Event, Venue, Held_at
WHERE Event.event_id = Held_at.event_id AND
	  Venue.name=Held_at.name
-- End Available Seats --

-- Activities Per Event -- 
SELECT DISTINCT Activity.act_id, Event.event_id, event.title AS EventTitle, Activity.title AS ActivityTitle, Activity.start_date, Activity.end_date, Activity.start_time, Activity.end_time
FROM Event JOIN Activity
	ON Activity.FK_event_id = Event.event_id
WHERE Event.event_id = '1'

/****************************************

	$prequery= "SELECT *
				FROM  Event";
	$preresult=mysql_query($prequery);
	$prenum=mysql_numrows($result);
	
	for($i=0; $i<$prenum; $i++){
		$query=	"SELECT DISTINCT *
				FROM Event JOIN Activity
					ON Activity.FK_event_id = Event.event_id
				WHERE Event.event_id = /' " + $row['event_id'] + "/'""
		$result=mysql_query($query); 
*******************************************/		
-- End Attendace Per Event --
