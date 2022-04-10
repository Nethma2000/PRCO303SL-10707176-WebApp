$(document).ready(function(){
//add companies

$(document).on("submit","#addform",function(e){
    e.preventDefault();

    //ajax

    $.ajax({
        url:"/CareerNextGenWeb/companyajax.php",
        type:"POST",
        
        data:new FormData(this),
        processData:false,
        contentType:false,
        beforeSend:function(){
            console.log("Wait..Data is Loading...");

        },
        success:function(response){
            console.log(response);
        },

         error:function(_request,error){
           console.log(arguments);
            console.log("Error" + error);
         },




    });

});


});