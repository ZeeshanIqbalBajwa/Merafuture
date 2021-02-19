$(document).ready(function(){
   


    function showWindow(){
        $('#main').show();
        $('html body').css('overflow','hidden');
        //auto hide after 5s
        setTimeout(hideWindow,5000);
    }
    //showWindow()

    function hideWindow(){
        $('#main').hide();
        //stop.scroll
        $('html body').css('overflow','hidden');
    }
    //hideWindow()

//auto open after 2s
    setTimeout(showWindow,2000);

    $("#close-btn").click(fucntion(){
        hideWindow();


    })


});