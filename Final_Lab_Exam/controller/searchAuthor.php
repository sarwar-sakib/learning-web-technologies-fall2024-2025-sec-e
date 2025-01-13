<?php 
require_once("../model/authorModel.php");  
$search = $_REQUEST['search'];  
$result = show_authors(); 

$author_found = false; 
while ($row = mysqli_fetch_assoc($result)) {
    if (strpos(strtolower($row['author_name']), strtolower($search)) !== false) {
        echo "
            <tr>
                <td>{$row['author_name']}</td> 
                <td>{$row['contact_no']}</td>
                <td>{$row['user_name']}</td>
                <td>{$row['password']}</td>
                <td>
                    <a href='../view/updateAuthor.php?user_name={$row['user_name']}'> UPDATE </a> |
                    <a href='../controller/deleteAuthor.php?user_name={$row['user_name']}'> DELETE </a>
                </td>
            </tr>
        ";
        $author_found = true;
    } 
}

if (!$author_found) {
    echo "Not Found";
}
?>
