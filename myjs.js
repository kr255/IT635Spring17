function generate()
    {   
        var table = document.getElementById("table_list");
        var table_value = table.options[table.selectedIndex].value;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200)
            {
                document.getElementById("table").innerHTML = this.responseText;
                
            }
            
        };
        xhttp.open("GET", "generatetable.php?table=" + table_value, true);
        xhttp.send();
    }
        
    function addrecord()
    {   
        var courseID = document.getElementById('add_courseID').value;
        var coursename = document.getElementById('add_course_name').value;
        var coursesem = document.getElementById('add_course_semester').value;
        var courseprof = document.getElementById('add_course_professor').value;
        
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200)
            {
                document.getElementById("table").innerHTML = this.responseText;
                
            }
            
        };
        xhttp.open("GET",   "admin.php?addcourseID=" + courseID  + 
                            "&addcourse_name=" + coursename + 
                            "&addcourse_semester=" + coursesem + 
                            "&addcourse_professor=" + courseprof, true);
        xhttp.send();
    }
    function delrecord()
    {   
        var courseID = document.getElementById('del_courseID').value;
        var coursename = document.getElementById('del_course_name').value;
        var coursesem = document.getElementById('del_course_semester').value;
        var courseprof = document.getElementById('del_course_professor').value;
        
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200)
            {
                document.getElementById("table").innerHTML = this.responseText;
                
            }
            
        };
        xhttp.open("GET",   "delcourse.php?delcourseID=" + courseID  + 
                            "&delcourse_name=" + coursename + 
                            "&delcourse_semester=" + coursesem + 
                            "&delcourse_professor=" + courseprof, true);
        xhttp.send();
    }
        function validate()
    {   
        var course_book = document.getElementById("course_book").value;
        var course_name = document.getElementById("course_name").value;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200)
            {
                document.getElementById("demo").innerHTML = this.responseText;
                
            }
            
        };
        xhttp.open("GET", "process.php?course_name=" + course_name + "&course_book=" + course_book, true);
        xhttp.send();
       
        
    }
        function insert_validate()
    {   
        var course_book = escape(document.getElementById("course_book2").value);
        var course_name = escape(document.getElementById("course_name2").value);
        var title_book = escape(document.getElementById("title_book").value);
        var price_book = escape(document.getElementById("price_book").value);
        var contact_book = escape(document.getElementById("contact_book").value);
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200)
            {
                document.getElementById("demo2").innerHTML = this.responseText;
                
            }
            
        };
        xhttp.open("GET", "insertuserbooks.php?course_name2=" + course_name + "&course_book2=" + course_book + "&title_book=" + title_book  + "&price_book=" + price_book  + "&contact_book=" + contact_book, true);
        xhttp.send();
       
        
    }
        function marketplace()
    {   
        var course_name = escape(document.getElementById("course_name").value);
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200)
            {
                document.getElementById("results").innerHTML = this.responseText;
                
            }
            
        };
        xhttp.open("GET", "amazontest.php?course_name=" + course_name, true);
        xhttp.send();
       
        
    }