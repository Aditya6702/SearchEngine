<?php
    include 'header.php';
?>

<h1>Search Page</h1>
<div class="article-container">
    <?php
        if(isset($_POST['Search'])){
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM avengers WHERE a_name LIKE '%$search%' OR a_URL LIKE '%$search%' OR appearance LIKE '%$search%' OR notes LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);

            echo"There are ".$queryResult." results!!<br>";

            // if($queryResult > 0){
            //     while($row = mysqli_fetch_assoc($result)){
            //         echo"<a href='article.php?title=".$row['a_title']."&date=".$row['a_date']."'><div class='article-box'>
            //         <h3>".$row['a_title']."</h3>
            //         <p>".$row['a_text']."</p>
            //         <p>".$row['a_date']."</p>
            //         <p>".$row['a_author']."</p>
            //     </div></a>";
            //     }
            if($queryResult > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo"<a href='".$row['a_URL']."'><div class='article-box'>
                    <h3>Name:".$row['a_name']."</h3>
                    <p>Appearance:".$row['appearance']."</p>
                    <p>Year Of Introduction:".$row['year']."</p></br>
                    <p>Notes::</p></br>
                    <p>".$row['notes']."</p>
                    </div></a>";
                }
            
            

            }else{
                echo"Sorry!!!!<br>
                There are no results matching your search";
            }
        }
?>