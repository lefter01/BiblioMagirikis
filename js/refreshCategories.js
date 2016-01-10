$(document).ready(function ()
{
    var interval = setInterval(function(){
        $.ajax({
           url:'showCategories.php',
           success:function(data){
           $('#categories').html(data);   
           }
       });
    },1000);
    
});