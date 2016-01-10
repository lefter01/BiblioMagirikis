<html>
    <head>
        <meta charset="UTF-8">
        <title>COOK</title>        
        <link type="text/css" rel="stylesheet" href="css/index.css">
    </head>
    <body>
    <div id="wrapper">
    <ul>
        <li id="searchbutton">
            <form action="search.php" method="POST">
                <input type="text" id="search" name="search">
            <input id="search" type="submit" value="Search">   
            </form>
        </li>
        <li id="pagelinks">
            <a href="showAllRecipes.php">All Recipes</a>
            <a href="showCategories.php">Categories</a>
            <a href="showExecutingTime.php">Executing Time</a>
            <a href="newRecipe.php">Add New Recipe</a>        
        </li> 
    </ul>
    </div>
    <div>
    <ul>
       
    </ul>         
    </div>
       
        <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="js/refreshMainPageRecipes.js"></script>
    </body>
</html>
