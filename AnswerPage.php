<html lang = "en">
    <Head>
    <meta charset ="utf-8">
    <title>CreatePost</title>
    <link rel ="stylesheet" href ="CSS/AnswerPage.CSS">
    </Head>
    <div id="logo"><a href = "">
        </a>
    </div>
    <div class="header-control">
        <div class="image-control">
            <img src="Images/Logo.png">
        </div>
    </div>

<div class="Categories">
    <h1>
        Please Answer the following questions..</h1>

    <?php
session_start();
include 'classes/post.php';
include 'classes/category.php';
include 'classes/item.php';
include 'classes/User.php';
    $Object1=new Post_Services();
    $Object2=new recommendedQuestions_Database();
    $object3=new itemservice();
    $Object2->set_category($_SESSION['category']);
    $query=$object3->getitems();
    ?>
<form action="" method="post">
    <?php
    while ($id=mysqli_fetch_array($query)) {
        $check= $Object1->choosePost($id[3], $Object2->View_Question($_SESSION['category']));//get category id fy recomended not category no get
        if ($check)
        {
            break;
        }
    }
   ?>

        <input type="Submit" name="submit" class="submit" value="send answers">
</form>
    <?php
    $object4=new notifications();
    if (isset($_POST['submit']))
    {
        echo "isset submit";
        $object4->notify();
    }
    
    ?>
    
</html>