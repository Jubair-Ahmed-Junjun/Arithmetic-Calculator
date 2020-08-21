<?php
$result ='';
if (isset($_POST['btn']))
{
    require_once 'calculate.php';
    $calculator = new calculate();
    $result = $calculator->MyCalculator($_POST);
}
?>

<html>
    <head>
        <title>Calculator</title>
    </head>

<body>
   <form action="" method="POST">
       <table>
           <tr>
               <th>First Number</th>
               <th>
                   <input type="text" name="first_number" value="<?php echo $_POST['first_number'];?>">
               </th>
           </tr>

           <tr>
               <th>Second Number</th>
               <th>
                   <input type="text" name="second_number" value="<?php echo $_POST['second_number'];?>">
               </th>
           </tr>

           <tr>
               <th>Result</th>
               <th>
                   <input type="number" name="result" value="<?php echo $result;?>">
               </th>
           </tr>

           <tr>
               <th></th>
               <th>
                   <input type="submit" name="btn" value="+">
                   <input type="submit" name="btn" value="-">
                   <input type="submit" name="btn" value="*">
                   <input type="submit" name="btn" value="/">
                   <input type="submit" name="btn" value="%">
               </th>
           </tr>
       </table>
   </form>
</body>
</html>
