<?php
// ================= DATABASE CONNECTION =================
$conn = mysqli_connect("localhost", "root", "", "student");
if(!$conn){
    die("Database connection failed");
}

// ================= PAGINATION SETUP =================
$limit = 5;
$page  = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $limit;

// ================= SEARCH =================
$search = isset($_GET['search']) ? $_GET['search'] : "";

// ================= MAIN QUERY =================
if($search != ""){
    $query = "SELECT * FROM school 
              WHERE name LIKE '%$search%' 
              LIMIT $start, $limit";
}else{
    $query = "SELECT * FROM school 
              LIMIT $start, $limit";
}

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search + Pagination</title>
</head>
<body>

<h2>User List</h2>

<!-- ================= SEARCH FORM ================= -->
<form method="GET">
    <input type="text" name="search" placeholder="Search name"
           value="<?php echo $search; ?>">
    <button>Search</button>
</form>

<br>

<!-- ================= DATA TABLE ================= -->
<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>
            <td>{$row['sid']}</td>
            <td>{$row['name']}</td>
          </tr>";
}
?>
</table>

<!-- ================= PAGINATION LINKS ================= -->
<?php
if($search != ""){
    $total_query = "SELECT * FROM school
                    WHERE name LIKE '%$search%'";
}else{
    $total_query = "SELECT * FROM school";
}

$total = mysqli_num_rows(mysqli_query($conn, $total_query));
$pages = ceil($total / $limit);

echo "<br>";
for($i = 1; $i <= $pages; $i++){
    echo "<a href='?page=$i&search=$search'>$i</a> ";
}
?>

</body>
</html>
