<!DOCTYPE html>
<html>

<?php include("clientdata/clientincludes/header.php"); ?>
<?php include("clientdata/clientincludes/gamenav.php"); ?>
<?php include("clientdata/clientincludes/userstats.php"); ?>


<?php

  //verify whether the variable ?app is available or not
  //user nagivates to game main page
  //is the user logged in? == We'll come back to that?

  $app_var = $_GET['app']; //essentially what defines our extension to our php file
  $app_default = "ownedhouses";
  $ext = ".php";
  $dir = "clientdata/pages/";

  //Lets look for our app_var variable and if found load the requested page, if not
  //let them know that the page cannot be found and if the variable was not available
  //include the default page for viewing

  if($app_var == null) // checks to see if the app_var is available
  {
    //if the app_var is not available
    include($dir.$app_default.$ext); // includes default page
    echo($dir.$app_var.$ext);

  }else //this means the app_var is present and there is a page being requested
  {
    //okay so there is app_var available lets check to see if the page exists or not if
    //the page exists, let's load it!
    if(file_exists($dir.$app_var.$ext))
    {
        //if it does exists
        //include the file
        include($dir.$app_var.$ext); // includes the requested page from app_var
    }
    else // if it doesn't exist load the default page for now.
    {
      include($dir.$app_default.$ext); // includes the requested page from app_var
    }
  }


?>

<?php include("clientdata/clientincludes/footer.php"); ?>


</html>
