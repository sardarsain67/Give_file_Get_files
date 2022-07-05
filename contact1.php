<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback form </title>
</head>
<body>
    <center>
<table border=2 bgcolor=yellow>
  <tr bgcolor=pink>
    <th><a href=index.php>Home</a></th>
    <th><a href=gupload1.php>Guest upload</a></th>
    <th><a href=gDownload.php>Guest Download</a></th>
    <th><a href=member.php>Member Section</a></th>
    <th><a href=contact.php>Contact Us</a></th>
</tr>
<tr><td colspan=5 >
    
    <?php
     $name=$_POST['uname'];
     $phn=$_POST['uphn'];
     $feed=$_POST['ufeed'];
     
     $conn=mysql_connect("localhost","root","");
     //select database
     mysql_selectdb("upload_project",$conn);
     //define the sql query
     $sql="select*from feedback";
     //execute the query
     $result=mysql_query($sql);
        $sql="insert into feedback values('$name','$phn','$feed')";

        mysql_query($sql);

        echo"feedback submitted</td>";
        

        
  
     
    ?>
    </table>
</center>
</body>
</html>