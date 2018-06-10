<?php
$db_con = mysqli_connect("localhost","root","","test");
$page_start=0;
$page_limit=4;
 
if(isset($_GET['pid']))
{
    $id=$_GET['pid'];
    $page_start=($id-1)*$page_limit;
}
Else
{
    $id=1;
}

//Fetch data from table first 10 items which is its limit. 
$query=mysqli_query($db_con, "select * from users LIMIT $page_start, $page_limit");
?>

<table border="1">
<tr><td>User Name</td></tr>
<?php while($result=mysqli_fetch_array($query)) { ?>

 <tr><td><?php echo $result['name']; ?> </td></tr>

<?php } ?>
</table>

<?php
//fetch all the data from database.
$rows=mysqli_num_rows(mysqli_query($db_con,"select * from users"));
//calculate total page number for the given table in the database 
$total=ceil($rows/$page_limit);
//echo $rows.'--'.$total;
if($id!=$total)
{
    ////Go to previous page to show next 10  records.
    echo "<a href='?pid=".($id+1)."' class='button'>NEXT </a> ";
}

if($id>1)
{
    //Go to previous page to show previous 10  records. If its in page 1 then it is inactive
    echo "<a href='?pid=".($id-1)."' class='button'>PREVIOUS</a>";
}
 
?>

<ul class='page'>
<?php
//show all the page link with page number. When click on these numbers go to particular page. 
        for($i=1;$i<=$total;$i++)
        {
            if($i==$id) { echo "<li class='current'>".$i."</li>"; }
             
            else { echo "<li><a href='?pid=".$i."'>".$i."</a></li>"; }
        }
?>
</ul>
