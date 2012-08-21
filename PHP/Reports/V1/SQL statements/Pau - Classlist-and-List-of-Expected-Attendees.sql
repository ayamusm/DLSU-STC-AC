/*Full Classlist*/
SELECT class1_id, class_section, student_id, first_name, middle_name, last_name, degree_program
FROM Classlist, Student
WHERE Classlist.student_id = Student.student_id


/*List of Expected Attendees*/
SELECT DISTINCT student.student_id, first_name, middle_name, last_name, title
FROM Requires, Activity, Student
WHERE Requires.act_id = Activity.act_id
AND Requires.student_id = Student.student_id