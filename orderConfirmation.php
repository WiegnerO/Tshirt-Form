<!-- EECS1012: orderConfirmation.php (Lab #5)-->
<!-- (CC) Michael S. Brown -->
<!DOCTYPE html>
<html>
<head>
<style>
  #previousorders {
    width: 70%;
    border: dashed 2px black;
    background-color: silver;
    padding: 10px;
  }
  #previousorders p {
      padding: 0px;
      margin-top: 0px;
      margin-bottom: 0px;
      font-family: monospace;
    }
  #container {
    width: 80%;
    padding: 10px;
    background-color: LightSkyBlue;
    margins: auto;
    border: solid 5px black;
    font-size: 1.25em;
  }
  .orderitem {
    color: blue;
    font-family: monospace;
    font-size: 1.5em;
  }
  #message  {
    background-color: silver;
    border: 2px black solid;
    font-family: monospace;
    font-size: 1.24em;
    height: 100px;
    width: 50%;
  }
</style>
</head>
<body>
  <?php
  /* turn on error message for debugging */
  ini_set('display_errors', 1); # only need to call these functions
  error_reporting(E_ALL);       # one time

  /* REMOVE comments to see all data passed to this PHP program, this is useful for debugging.
    print_r($_GET);
    */

  /* Recall all data is passed from the form to this PHP file as an associative array */
  /* that is defined in variable $_GET.  This is a simple example to help you get
     started. */
    $name = $_GET["name"];
    $item = $_GET["sizeandprice"];
    $color = $_GET["color"];
    $cardnumber = $_GET["cardnumber"];
    $carddate = $_GET["carddate"];
    $creditCard = $_GET["cardtype"];
    $gift = isset($_GET["gift"]);


    /* Since "gift" is a checkbox, it ,ight not be set by the user.  in this case the variable will not be defined .  You can use PHP "isset()" function to test if it was set or not in the $_GET. */


    /*  You should assign the rest of the variables here, in particular there are several other parmemeters passed from the Forms: color, size and price, credit card type, card number, date.  Look at the form names carefully. */

  ?>

   <div id="container">
   <?php

    print "<h2> Confirmation of your &quoteCat Fails Video&quote T-shirt order! </h2> \n";

    print "<p> Name: <span class=\"orderitem\"> $name </span> </p>";
    print "<p> Item: <span class=\"orderitem\"> $item  ($color) </span> </p>";
    print "<p> Credit card: <span class=\"orderitem\"> $creditCard </span> </p>";
    print "<p> Card number: <span class=\"orderitem\"> $cardnumber </span> </p>";

    print "<p> Expiration date: <span class=\"orderitem\">$carddate</span> </p>";


    if ($gift  == "on") {
      $message = $_GET["message"];
        print "<p> Gift Message:</p>";
      print "<p id=\"message\"> $message </p>";
    }


    ?>

  <div id="previousorders">
    <h2> Previous Orders </h2>
    <?php

      $ordersFile = file("orders.txt");
      foreach ($ordersFile as $line)
      {
        print "<p> $line </p>";
      }
      //this is to input in the orders.txt doc a new line
      $contents ="$name, $item, $color, $cardnumber \n";
      file_put_contents("orders.txt",$contents,FILE_APPEND);

    ?>
  </div>
</div> <!-- end container -->

</body>
</html>

<div id="comments">
   <?php
      /* Write your code at ....... to output the file "task1.txt" content's here */

.......

        ?>
</div>
