function getClickedCategory()
{
     $('#categories').on('click',event,function(){
        //idClicked = event.target.id;
        //alert(idClicked);
       // alert($(event.target).text());
      // $("#message").text($(event.target).text());
      if(event.target.id!="categories")
      {
            alert($(event.target).text()); 
            return $(event.target).text();
      }       
       //$("#message").text("hello");
    });    

}
