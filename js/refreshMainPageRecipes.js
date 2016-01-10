$(document).ready(function ()
{
    var interval = setInterval(function(){
        $.ajax({
           url:'mainPageRecipes.php',
           success:function(data){
           $('#mainPageRecipes').html(data);   
           }
       });
    },1000);
    
});