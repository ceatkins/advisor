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
    
        <title>Join Statements </title>
    <br>  <h1> Join STATEMENTS </h1> <br> 

<nav>
    <ol> <li><a href="q01.php">Query 1</a>  SELECT DISTINCT fldCourseName FROM tblCourses, tblEnrolls WHERE fldGrade = 100 AND tblCourses.pmkCourseID = tblEnrolls.fnkCourseID order by fldCourseName; <a href="q01.sql">q01.SQL</a> </li> 
    <li><a href="q02.php">Query 2 </a> select distinct fldDays, fldStart from tblSections, tblTeachers where tblTeachers.fldLastName = 'Snapp' and tblTeachers.pmkNetID = tblSections.fnkTeacherNetId order by fldStart;  <a href="q02.sql">q02.SQL</a></li> 
     <li><a href="q03.php">Query 3 </a> select distinct fldCourseName, fldDays, fldStart from tblSections, tblCourses where tblSections.fnkTeacherNetId = "jlhorton" and tblSections.fnkCourseId = tblCourses.pmkCourseId;  <a href="q03.sql">q03.SQL</a> </li> 
  <li><a href="q04.php">Query 4 </a> SELECT * FROM tblCourses WHERE fldCourseName = 'Database Design for the Web'; <a href="q04.sql">q04.SQL</a> </li> 
  <li><a href="q05.php">Query 5 </a> 'SELECT tblTeachers.fldFirstName, tblTeachers.fldLastName,  count(tblStudents.fldFirstName) as total
FROM tblSections
JOIN tblEnrolls on tblSections.fldCRN  = tblEnrolls.`fnkSectionId`
JOIN tblStudents on pmkStudentId = fnkStudentId
JOIN tblTeachers on tblSections.fnkTeacherNetId=pmkNetId
WHERE fldType != "LAB" group by fnkTeacherNetId ORDER BY total desc' <a href="q05.sql">q05.SQL</a> </li> 
  <li><a href="q06.php">Query 6 </a>SELECT fldCourseName FROM tblCourses WHERE NOT (fldDepartment = "CS") AND fldCourseName LIKE '%data%'; <a href="q06.sql">q06.SQL</a> </li>
</nav>
</html>


<?php
include "footer.php";
?>
