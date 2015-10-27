select distinct fldDays, fldStart from tblSections, tblTeachers where tblTeachers.fldLastName = 'Snapp' and tblTeachers.pmkNetID = tblSections.fnkTeacherNetId order by fldStart;
