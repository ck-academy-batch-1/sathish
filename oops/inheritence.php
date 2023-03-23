<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php
       class bakkery{
         function background(){
        echo"<body style='background-color:yellow';></body>";
        
    }
     
}
class content extends bakkery{

    function items(){
         echo "<img src='brownie cake.jpg' height='500' width='500'>";
    }
    use heading;
    
}
   trait heading{
        function title(){
        echo "<h1 style='background-color:azure';>WISDOM BAKKERY</h1>";
        }
   }
$obj=new content();
$obj->title();
$obj->background();
$obj->items();
?>
    
    </body>
</html>
