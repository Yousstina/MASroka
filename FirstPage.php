<html lang = "en">
    <Head>
    <meta charset ="utf-8">
    <title>Welcome</title>
    <link rel ="stylesheet" href ="CSS/FirstPage.CSS">
    </Head>
    <div id="logo"><a href = "">
        </a>
    </div>
    <div class="header-control">
        <div class="image-control">
            <img src="Images/Logo.png">
        </div>
    <div class="createPost">
        <input type="button" class="button1" value="Create Post"/>
        <!--<input type="text" class="searchBar" placeholder="Search with a keyword">
         <input type="button" class="button2" value="Search">-->
        
        </div>
    </div>
    <div class="Categories">
    <h1>
        Select Category..</h1>
    <table>
        <tr>
            <br>
<form action="CategoryPage.php" method="post">
    <?php
    $db=mysqli_connect('localhost','root','POTO','users');
    $query=mysqli_query($db,"SELECT * FROM categorydb");
     while($array=mysqli_fetch_array($query))
     {
         ?>
         <td><input type="submit" value=<?php echo $array[0]; ?> name=<?php echo $array[0];?> class="button"></td>
         <?php

     }
    ?>

</form>


        </tr>
        
        </table></div>
    
    
    
    
</html>