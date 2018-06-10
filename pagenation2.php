<?php
$conn = mysqli_connect("localhost","root","","test");

$page_start=0;
$page_limit=10;

if(isset($_GET['page_id']))
{
    $id=$_GET['page_id'];
    $page_start=($id-1)*$page_limit;
}
else
{
    $id=1;
}

//To Fetch data from table first 10 records which is its limit. 
$query=mysqli_query($conn, "select * from users LIMIT $page_start, $page_limit");
?>

<table border="1">
<tr><td>Title</td></tr>
<?php while($result = mysqli_fetch_array($query)) { ?>

	<tr><td><?php echo $result['name']; ?></td></tr>

<?php } ?>
</table>

<?php

//Get  records Count from table.
$qur = mysqli_query($conn,"select count(*) as row_count from users");
$row = mysqli_fetch_array($qur);

/*******calculate total page number for the given table in the database *************/
$total = ceil($row['row_count']/$page_limit);

if($id!=$total)
{
    //Go to next page to show next 10  records.
echo "<a href='?page_id=".($id+1)."' class='button'>NEXT </a> ";
}

if($id>1)
{
    //Go to previous page to show previous 10  records. If its in page 1 then it is inactive

echo "<a href='?page_id=".($id-1)."' class='button'>PREVIOUS</a>";
}

?>

<ul class='page'>
<?php
//show all the page link with page number. When click on these numbers go to particular //page. 
for($i=1;$i<=$total;$i++)
        {
if($i==$id) { echo "<li>".$i."</li>"; }

else { echo "<li><a href='?page_id=".$i."'>".$i."</a></li>"; }
        }
?>
</ul>
