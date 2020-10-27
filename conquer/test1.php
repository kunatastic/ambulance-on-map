<!DOCTYPE html> 
<html> 
    <script src="js/jquery-1.11.2.min.js"></script>
    <head> 
        <title> 
            Passing JavaScript variables to PHP 
        </title> 
    </head> 
        
    <body> 
        <h1 style="color:green;"> 
            GeeksforGeeks 
        </h1> 
    </body> 
    <script>
        var loc = {};
        loc.long = 12.5;
        loc.lati = 13.5;

        console.log(loc);

        $.ajax({
            url:"readJson.php",
            method: "post",
            data: loc,
            success: function(res){
                console.log(res);
            }
        })
    </script>
</html> 
