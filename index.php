<!DOCTYPE html>
<html>
  <head>  
      <title>Class Board</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Harmattan&display=swap" rel="stylesheet">
  </head>
  <body style="font-family:'Harmattan', sans-serif;">


  

  <div class="container">

    <div style="text-align:center;">
      <h4 style="font-family:'Dancing Script', cursive;">Stay Hungry, Stay Foolish..</h4>
    </div>

    <div style = "text-align:center;">
        <h5>Words for the day</h5>
    </div>

    <form action="" method="POST">
        <input type="submit" class="btn btn-primary" name="internationalnews" value="International News">
        <input type="submit" class="btn btn-primary" name="nationalnews" value="National News">
        <input type="submit" class="btn btn-primary" name="andhrapradeshnews" value="Andhra Pradesh News">
        <input type="submit" class="btn btn-primary" name="sportsnews" value="Sports News">
    </form>

    <?php
        if(isset($_POST['nationalnews']))
        {
            

            $command = escapeshellcmd('nationalnews.py');
            $output = shell_exec($command);
            echo "Button Clicked";
            echo $output;


        }

        if(isset($_POST['internationalnews']))
        {
            

            $command = escapeshellcmd('internationalnews.py');
            $output = shell_exec($command);
            echo "Button Clicked";
            echo $output;


        }
        if(isset($_POST['andhrapradeshnews']))
        {
            

            $command = escapeshellcmd('andhrapradeshnews.py');
            $output = shell_exec($command);
            echo "Button Clicked";
            echo $output;


        }

        if(isset($_POST['sportsnews']))
        {
            

            $command = escapeshellcmd('sportsnews.py');
            $output = shell_exec($command);
            echo "Button Clicked";
            echo $output;


        }
  ?>

</div>





<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>