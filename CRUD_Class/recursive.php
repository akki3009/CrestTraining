<?php


$conn = mysqli_connect('localhost', 'root', '', 'project_class');
if ($conn) {
    // echo "Connected";
}
if (!empty($conn->connect_errno)) {
    die("Error " . mysqli_error($conn));
}

getParentChildCategories(0);

function getParentChildCategories($pid)
{
    global $conn;
    $sql = "select * from recurs_category where pid ='" . $pid . "'";
    $result = $conn->query($sql);

    while ($row = mysqli_fetch_object($result)) :
        $i = 0;
        if ($i == 0) echo '<ul>';
        // print_r($i);
        echo '<li>' . $row->name;
        getParentChildCategories($row->id);
        echo '</li>';
        $i++;
        if ($i > 0) echo '</ul>';
    endwhile;
}
//close the connection
mysqli_close($conn);