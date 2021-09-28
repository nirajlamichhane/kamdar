$(document).ready(function() {
    var startindex= -1;
    
    resetstarcolor();

    // when clicked on the star
    $('.fa-star').on('click',function(){
        startindex = parseInt($(this).data('index'));
        console.log(startindex)

    });



    // on mouse hover over
    $('.fa-star').mouseover(function() {
        resetstarcolor();
        var index = parseInt($(this).data('index'));
        for (i = 0 ; i <= index; i++) {
            $('.fa-star:eq('+i+')').css('color', 'gold');
            
        }

    });

    // on mouse leave out of the star
    $('.fa-star').mouseleave(function() {
        resetstarcolor();
        if(startindex!=-1){
            for (i = 0 ; i <= startindex; i++) {
                $('.fa-star:eq('+i+')').css('color', 'gold');
                
                
            } 
        }
    });

    $('.submit_review').on('click','#submit',function(){
        var comment= $('.comment').val();
        console.log(comment);

        if (startindex == -1 ){
            finalRating = 1;
        }
        else{
            var finalRating = startindex+1;
            console.log(finalRating)
        }
        

        
       


        if(comment==""){
            alert("please provide a review")
        }

        $('#finalrating').val(finalRating);
        $('#comment').val(comment);

       

        
        3

    });

    
});

function resetstarcolor() {
    $('.fa-star').css('color', 'gray');
    
}