<?php
require_once('studentDB.inc');
class htmltables extends StudentAccess{
    function __construct($database)
    {
        parent::__construct($database);
    }
    
    public function printtable($table) //prints the table in html without hardcoding table headings
    {
            echo "<style>
                    table {
                        font-family: arial, sans-serif;
                        border-collapse: collapse;
                        width: 100%;
                    }

                    td, th {
                        border: 1px solid #dddddd;
                        text-align: left;
                        padding: 8px;
                    }

                    tr:nth-child(even) {
                        background-color: #dddddd;
                    }
                </style>";
                
            
            $response = $this->getanytable("$table");
            $keys = array_keys($response[0]);
            $count =  count(array_keys($response[0]));
            echo "<table><tr>";
            for($i=0;$i<$count;$i++)
            {
                //echo $keys[$i] . " ";
                echo "<th> $keys[$i] </th>";
            }
            echo "</tr>";

            foreach($response as $newresponse)
            {
                echo "<tr><td>";
                echo implode('</td><td> ', $newresponse) . PHP_EOL;
                echo "</td></tr>";

            }
            echo "</table>";
    }
    
    
    public function addarecord($table)
    {
        $values = parent::getanytable($table);
        $keys = array_keys($values[0]);
        $count =  count(array_keys($values[0]));
        echo "<fieldset>";
        echo "<legend align=\"center\"><h3> Add a Record </h3> </legend><br>";
        echo "<form>";
           for($i=0;$i<$count;$i++)
            {
                echo " $keys[$i] : <input = \"text\" name=\"$keys[$i]\" id=\"add_$keys[$i]\"><br>\n";
            }
            echo "<input type=\"button\" value=\"submit\" onclick=\"addrecord();\">";
            echo "</form>";
            echo "</fieldset>";
            echo "<script type=\"text/javascript\" src=\"myjs.js\"></script>";
    //     echo "<body>
    //     <fieldset>
    //     <legend align=\"center\"><h3> Add a Record </h3> </legend><br>
    //     <form>
    //     Course Number  *: <input = \"text\" name=\"courseID\" id=\"add_courseID\"><br>
    //     Class Name     *: <input type = \"text\" name=\"course_name\" id=\"add_course_name\"><br>
    //     Class Semester *: <input type = \"text\" name=\"course_semester\" id=\"add_course_semester\"><br>
    //     Class Professor *: <input type = \"text\" name=\"course_professor\" id=\"add_course_professor\"><br><br>
    //     <input type=\"button\" value=\"submit\" onclick=\"addrecord();\">
    //     </form>
    //     </fieldset>
    //     </body>";
    }
     public function deletearecord($table)
    {
        $values = parent::getanytable($table);
        $keys = array_keys($values[0]);
        $count =  count(array_keys($values[0]));
        echo "<fieldset>";
        echo "<legend align=\"center\"><h3> Delete a Record </h3> </legend><br>";
        echo "<form>";
           for($i=0;$i<$count;$i++)
            {
                //echo $keys[$i] . " ";
                echo " $keys[$i] : <input = \"text\" name=\"$keys[$i]\" id=\"del_$keys[$i]\"><br>\n";
            }
            echo "<input type=\"button\" value=\"submit\" onclick=\"delrecord();\">";
            echo "</form>";
            echo "</fieldset>";
            echo "<script type=\"text/javascript\" src=\"myjs.js\"></script>";
    }
    
}
?>