<?php
include "top.php";

//print '<h2>Database: ' .CEATKINS_UVM_Courses_Testing. '</h2>';
// print out a list of all the tables and their description
// make each table name a link to display the record
print '<section id="tables2" class="float_left">';
print '<table>';
$query = 'SELECT * FROM tblStudents ORDER by fldLastName, fldFirstName LIMIT count, (Count + 10)';
    $info2 = $thisDatabaseReader->select($query, "", 0, 1, 0, 0, false, false);
     print 'Total Records = '; 
  echo count($info2);
$query = 'SHOW TABLES';
//now print out each record
    $columns = 8;
    
    $highlight = 0; // used to highlight alternate rows
    foreach ($info2 as $rec) {
        $highlight++;
        if ($highlight % 2 != 0) {
            $style = ' odd ';
        } else {
            $style = ' even ';
        }
        print '<tr class="' . $style . '">';
        for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $rec[$i] . '</td>';
        }
        print '</tr>';
    }
    // all done
    print '</table>';
    print '</aside>';
print '</article>';
include "footer.php";
?>