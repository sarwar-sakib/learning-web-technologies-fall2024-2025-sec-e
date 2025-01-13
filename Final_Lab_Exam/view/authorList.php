<?php
    session_start();
    require_once("../model/authorModel.php");
    $result = show_authors();
?>
<html>
<head>
    <title>Author List</title>
    <script src="../asset/validation.js"></script>
</head>
<body>
    <h1>Author List</h1>
    <a href="home.php">BACK</a> <br>

    <b>Search Author by Name: </b><br>
    <input type="text" id="search" onkeyup="search_author()"> <br><br>
    
    <table border="1" cellspacing="0" id="table1" class="table">
        <thead>
            <tr>
                <th>Author Name</th>
                <th>Contact No</th>
                <th>User Name</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
          
        <?php 
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $row['author_name']; ?></td>
                <td><?php echo $row['contact_no']; ?></td>
                <td><?php echo $row['user_name']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td>
                    <a href="updateAuthor.php?user_name=<?php echo $row['user_name']?>">UPDATE</a> |
                    <a href="../controller/deleteAuthor.php?user_name=<?php echo $row['user_name']?>">DELETE</a>
                </td>
            </tr>
        <?php } ?>
    </table>

    
</body>
</html>
