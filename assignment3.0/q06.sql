'select fldFirstName, fldPhone and fldSalary from tblTeachers where fldSalary < (select avg(fldSalary) from tblTeachers)';
