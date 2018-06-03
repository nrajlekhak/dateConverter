<?php require 'nep_date.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>



<div class="container-n container-fluid">
    <div class="split left">
        <div class="bs">
        <form action="convert.php" method="post">
         <label class="label label-default" for="bs-year">date in BS:</label> <br>
          <select name="bs-year"  id="bs_year">
                 <?php foreach ($bs as $key => $value) {?>

                <option value="<?php echo $bs[$key][0]; ?>"> <?php echo $bs[$key][0]; ?> </option>
                 <?php }?>
            </select>

            <select name="bs-month"  id="bs_month">
                 <?php for ($start = 1; $start <= 12; $start++) {?>
            <option value="<?php echo $start; ?>"><?php echo $start; ?></option>
                  <?php }?>
            </select>

            <select name="bs-day" id="bs_day">
            </select>
           <br> <input type="submit" class="btn btn-default" name="convert_to_ad" value="convert to AD">
        </form>
         </div>
    </div>

    <div class="split right">
        
<div class="ad">

         <form action="convert.php" method="post">

                <label class="label label-danger" for="ad">Date in A.D.</label> <br>
                <input  type="date" name="ad" /> <br />
                <input type="submit" class="btn btn-default" name="convert_to_bs" value="convert to BS">
         </form>
         </div>
        </div>
    </div>


    <script type="text/javascript" src="day.js"></script>
    <script src="main.js"></script>
</body>
</html>