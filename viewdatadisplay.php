<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">

<?php
session_start();
$userid = $_SESSION['userid'];

$dbConn = new PDO("mysql:host=localhost;dbname=php_hostel","root","");
$query = "select*from tblinfo where status=1 and userid=$userid";
$stat = $dbConn->prepare("$query");
$stat->execute();
$result = $stat->fetchall();
$dbConn = null;
$count=0;

    echo "<h1 align='center' > All Records </h1>
    <table align='center' border='1' class='table table-striped' style= 'width:100%' id='mytable'>
    <thead>
    <tr>
            <th> Sr No#</th>
            <th> Name </th>
            <th> Roll no </th>
            <th> Address </th>
            <th> Room no </th>
            <th> Current </th>
            <th> Department </th>
            <th> Course </th>
            <th> Complaint </th>
            <th> Download </th>
            <th> Update </th>
            <th> Delete </th>
    </tr>
    </thead><tbody>";

foreach($result as $r){

    //$arg = base64_encode((bindec(hex2bin($r['id'] + 27))) . "$" . md5(rand(1,1000)));
    $arg = base64_encode((bin2hex(decbin($r['id'] + 2000))) . "$" . md5(rand(1,1000)));
    
echo "<tr>
        <td>" . ++$count . "</td>
        <td>" .$r['name']. "</td>
        <td>" .$r['rollno']. "</td>
        <td>" .$r['address']. "</td>
        <td>" .$r['roomno']. "</td>
        <td>" .$r['current']. "</td>
        <td>" .$r['department']. "</td>
        <td>" .$r['course']. "</td>
        <td>" .$r['complaint']. "</td>
        <td> <a href=./upload/$r[file] > Download </a> </td>
        <td>
        <form action='viewupdate.php' method='post'>
            <input type='hidden' name='id' value='$arg'>
            <button class='btn btn-outline-primary' type='submit' name='update' > Update </button></td>
        </form>
        </td>
        <td>
        <form action='delete.php' method='post'>
            <input type='hidden' name='id' value='$arg'>
            <button class='btn btn-outline-danger' type='submit' name='delete' > Delete </button></td>
        </form>
        </td>
    </tr>";
}
echo "</tbody></table>"
?>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
    $('#mytable').DataTable();
});
</script>