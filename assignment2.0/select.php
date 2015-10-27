<!DOCTYPE HTML>
<?php

//##############################################################################
//
// main home page for the site 
// 
//##############################################################################
include "top.php";
?>


<html>
    
        <title>SELECT Statements </title>
    <br>  <h1> SELECT STATEMENTS </h1> <br> 

<nav>
    <ol> <li><a href="query1.php">Query 1</a>  SELECT pmkNetId FROM tblTeachers; <a href="q01.sql">q01.SQL</a> </li> 
    <li><a href="query2.php">Query 2 </a>  SELECT fldDepartment FROM tblCourses WHERE fldCourseName LIKE 'Introduction%';  <a href="q02.sql">q02.SQL</a></li> 
     <li><a href="q03.php">Query 3 </a> SELECT * FROM tblSections WHERE fldBuilding = "KALKIN" AND fldStart = '13:10:00';  <a href="q03.sql">q03.SQL</a> </li> 
  <li><a href="q04.php">Query 4 </a> SELECT * FROM tblCourses WHERE fldCourseName = 'Database Design for the Web'; <a href="q04.sql">q04.SQL</a> </li> 
  <li><a href="q05.php">Query 5 </a> SELECT fldFirstName, fldLastName FROM tblTeachers WHERE pmkNetId Like "r%" AND pmkNetId LIKE '%o'; <a href="q05.sql">q05.SQL</a> </li> 
  <li><a href="q06.php">Query 6 </a>SELECT fldCourseName FROM tblCourses WHERE NOT (fldDepartment = "CS") AND fldCourseName LIKE '%data%'; <a href="q06.sql">q06.SQL</a> </li>
  <li><a href="q07.php">Query 7 </a> SELECT DISTINCT fldDepartment FROM tblCourses; <a href="q07.sql">q07.SQL</a> </li>
  <li><a href="q08.php">Query 8 </a>SELECT fldBuilding, COUNT(*) AS fldSection FROM tblSections GROUP BY fldBuilding; <a href="q08.sql">q08.SQL</a> </li>
  <li><a href="q09.php">Query 9 </a> SELECT DISTINCT fldBuilding, fldNumStudents FROM tblSections WHERE fldDays LIKE '%W%' GROUP BY fldBuilding ORDER BY fldNumStudents; <a href="q09.sql">q09.SQL</a> </li>
  <li><a href="q10.php">Query 10 </a>SELECT DISTINCT fldBuilding, fldNumStudents FROM tblSections WHERE fldDays LIKE "%F%" GROUP BY fldBuilding ORDER BY fldNumStudents'; <a href="q10.sql">q10.SQL</a> </li></ol><br>
</nav>
</html>


<?php
include "footer.php";
?>