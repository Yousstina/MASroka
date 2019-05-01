<html lang = "en">
    <Head>
    <meta charset ="utf-8">
    <title>Category</title>
    <link rel ="stylesheet" href ="CSS/CategoryPage.CSS">
    </Head>
    <div id="logo"><a href = "">
        </a>
    </div>
    <div class="header-control">
        <div class="image-control">
            <img src="Images/Logo.png">
        </div>
    <div class="createPost">
        <a href="createpost.php" ><input type="submit" class="button1" value="Create Post"/></a>
<form action="" method="post">
        <input type="text" name="search" class="searchBar" placeholder="Search with a keyword">
         <input type="submit" name="searchb" class="button2" value="Search">
        </form>
        </div>
    </div>
    <div class="Wall">
    </div>

    <?php

    include 'classes/Post.php';
    session_start();
        $opost = new Post_Services();
    $db=mysqli_connect('localhost','root','POTO','users');
    $query=mysqli_query($db,"SELECT * FROM categorydb");
    while($array=mysqli_fetch_array($query)) {
        if (isset($_POST[$array[0]])) {
            $_SESSION['category'] = $array[0];
        }
    }
        if(!empty($_SESSION['category']))
        {
            echo $_SESSION['category'];
            $opost->Set_Category($_SESSION['category']);
           echo $opost->getcategory();
        }

        $opost->View(true);

    ?>
    
    
    
</html>
