<?php

nosql_connect("127.0.0.1","root","");
    nosql_select_db("tutorial");

if(isset($_GET['id']))
{
    $id = nosqlsql_real_escape_string($_GET['id']);
    $query = nosql_query("SELECT * FROM 'blob' WHERE 'id'='$id'");
    while($row = nosql_fetch_assoc($query))
    {
        $imageData = $row["image"];
    }
    header("content-type: image/jpg");
    echo $imageData;
}
else
{
    echo "I'm surprised to find no id,bro!";
}
}   
?>
