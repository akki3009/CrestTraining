<?php
include 'connection.php';
session_start();
if (!isset($_SESSION['userId'])) {
    header('Location:login.php');
}
$user = $_SESSION['userId'];
if (isset($_POST['column_name'])) {
    $column_name = $_POST['column_name'];
    $order = $_POST['order'];
    if ($order == 'desc') {
        $order = 'asc';
    } else {
        $order = 'desc';
    }

?>
    <div class="table-responsive" id="categoryTable">
        <table class="table my-10" style="width:100%">
            <thead>
                <tr>
                    <th>images</th>
                    <th><i class="fas fa-angle-double-down column_sort" id="vName" data-order=".$order."></i>&nbsp;Name&nbsp;<i class="fas fa-angle-double-up column_sort" id="vName" data-order="desc"></i></th>

                    <th><i class="fas fa-angle-double-down column_sort" id="iOrder" data-order=".$order."></i>&nbsp;Order&nbsp;<i class="fas fa-angle-double-up column_sort" id="iOrder" data-order="desc"></i></th>

                    <th>Status</th>
                    <th>Added Date</th>
                    <th>Modified Date</th>
                    <th colspan="2" class="center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $fetchQuery = "select * from categories where iUserId='" . $user . "' order by " . $column_name . " " . $order;
                $result = mysqli_query($conn, $fetchQuery);
                $folder = "uploads/category/thumbnail/";
                if ($result) {
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td ><img src=" . $folder . $row['vImage'] . " width=70 height=70 ></td>";
                        echo "<td >" . $row['vName'] . "</td>";
                        echo "<td >" . $row['iOrder'] . "</td>";
                        echo "<td >" . $row['tiStatus'] . "</td>";
                        echo "<td >" . $row['tsAddedDate'] . "</td>";
                        echo "<td >" . $row['tsModifiedDate'] . "</td>";
                        echo "<td><input type='button' class='btn btn-success float-right' onClick='updateRow($row[iCategoryId])' value='Update'></td>";
                        echo "<td><input type='button' class='btn btn-danger float-right' onClick='deleteRow($row[iCategoryId])' value=' Delete'></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
<?php
}
?>