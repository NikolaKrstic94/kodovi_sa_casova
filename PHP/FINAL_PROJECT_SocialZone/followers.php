<?php
    require_once 'header.php';
    require_once 'connection.php';
    if(empty($_SESSION['id'])) {
        header('Location: login.php');
    }

    $id = $_SESSION['id']; // ID logovanog korisnika

    if(!empty($_GET['follow'])) {
        $friendId = $conn->real_escape_string($_GET['follow']);

        $sql = "SELECT * FROM followers
                WHERE sender_id = $id
                AND receiver_id = $friendId";

        $result = $conn->query($sql);
        if($result->num_rows == 0) {
            $sql = "INSERT INTO followers(sender_id, receiver_id)
                    VALUE ($id, $friendId)";
            $result1 = $conn->query($sql);
            if(!$result1) {
                echo "<div class='error'>Error: " . $conn->error . "</div>";
            }
        }
    }

    if(!empty($_GET['unfollow'])) {
        $friendId = $conn->real_escape_string($_GET['unfollow']);

        $sql = "DELETE FROM followers
                WHERE sender_id = $id
                AND receiver_id = $friendId";

        $result = $conn->query($sql);
        if(!$result) {
            echo "<div class='error'>Error: " . $conn->error . "</div>";
        }
    }



    $sql = "SELECT u.id, u.username, CONCAT(p.name, ' ', p.surname) AS full_name
            FROM users AS u
            INNER JOIN profiles AS p
            ON u.id = p.user_id
            WHERE u.id != $id
            ORDER BY p.name, p.surname";

    $result = $conn->query($sql);
    if($result->num_rows == 0) {
        echo "<div class='error'>No users in database</div>";
    }
    else {
        echo "<table class='table table-dark'>
         <tr>
         <th>Full Name</th>
         <th>Username</th>
         <th>Action</th>
         </tr>";
        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>".$row['full_name']."</td>";
            echo "<td>".$row["username"]."</td>";
            $friendId = $row['id'];

            // Ispitujemo da li pratim korisnika
            $sql1 = "SELECT * FROM followers
                    WHERE sender_id = $id
                    AND receiver_id = $friendId";
            $result1 = $conn->query($sql1);
            $f1 = $result1->num_rows;  // 0 ili 1

            // Ispitujemo da li korisnik prati mene
            $sql2 = "SELECT * FROM followers
                    WHERE sender_id = $friendId
                    AND receiver_id = $id";
            $result2 = $conn->query($sql2);
            $f2 = $result2->num_rows;  // 0 ili 1

            if($f1 == 0) {
                if($f2 == 0) {
                    $text = "Follow";
                }
                else {
                    $text = "Follow back";
                }
                echo "<td><a href='followers.php?follow=$friendId'>$text</a></td>";
            }
            else {
                echo "<td><a href='followers.php?unfollow=$friendId'>Unfollow</a><td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }



?>

</body>
</html>
