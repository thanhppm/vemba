//

var count = 10;
function  countDownRedirect(url) {
    var html = $("#count_down_time");
    if(count > 0){
        count--;
        html.html(count);
        setTimeout("countDownRedirect(url)", 1000);
    }else{
        console.log("DONE");
        count = 10;
        window.location.href = url;
    }
}


// Process after load page done
$(document).ready(function () {

    function input_validattion(element,notify,lang){
        var parent =  element.parent();
        if(element.val() === ''){
            if(element.attr("type")==="email"){
                parent.find(".field-obligate").remove();
                parent.append(notify)
            }
            parent.find(".field-obligate").remove();
            element.addClass("input-validation");
            parent.append(notify);
            element.focus();
            return false;
        }else{
            if(element.attr("type")==="email"){
                if(lang === 'en'){
                    var html = '<small class="field-obligate">Wrong email format</small>';
                }else{
                    var html = '<small class="field-obligate">Sai định dạng email</small>';
                }
                var re = /\S+@\S+\.\S+/;
                if(!re.test(element.val())){
                    element.focus();
                    parent.find(".field-obligate").remove();
                    parent.append(html);
                    return false;
                }

            }
        }
        parent.find(".field-obligate").remove();
        element.removeClass("input-validation");
        return true;
    }

    function  modal_action(modalname,open=true){
        if(open){
            $('html').find("#" + modalname).modal("show");
        }else{
            $('html').find("#" + modalname).modal("hide");
        }
    }

    function responsive_element(element,action){
        switch (action) {
            case "show":{
                element.show();
                break;
            }
            default : {
                element.hide();
            }
        }
    }

    modal_action("modal_start_page");


    $("#submit,.submit-form").on("click",function (event) {
        var language  = $(this).attr('lang');
        var form = $(this).parents('form');
        var html = '';
        if(language === 'en'){
             html = '<small class="field-obligate">This field is required.</small>';

        }else{
             html = '<small class="field-obligate">Trường này là bắt buộc.</small>';
        }
        var name = form.find("input[name='name']");

        var phone = form.find("input[name='phone_number']");
        var email = form.find("input[name='email']");
        var check1 = input_validattion(name,html);
        var check2 = input_validattion(email,html,language);
        var check3 = input_validattion(phone,html);
        if(check1&&check2&&check3){
            return;
        }else{
            event.preventDefault();
        }
    });

    $("input").on("click",function () {
        $(this).removeClass("input-validation");
        $(this).parent().find(".field-obligate").remove();
    });

    // Responsive start modal in mobile screen.
    $(window).resize(function () {
        if($(window).width() < 600 ){
                // responsive_element($('#modal_start_page').find(".col-sm-7"))
                responsive_element($('#modal_start_page').find("input[name=company]"))
                responsive_element($('#modal_start_page').find("input[name=job_title]"))
                responsive_element($('#modal_start_page').find("select[name=reason]"))

        }
        else{
            // responsive_element($('#modal_start_page').find(".col-sm-7"),"show")
            responsive_element($('#modal_start_page').find("input[name=company]"),"show");
            responsive_element($('#modal_start_page').find("input[name=job_title]"),"show");
            responsive_element($('#modal_start_page').find("select[name=reason]"),"show");
        }
    });
    if($(window).width() < 600 ){
        // responsive_element($('#modal_start_page').find(".col-sm-7"))
        responsive_element($('#modal_start_page').find("input[name=company]"))
        responsive_element($('#modal_start_page').find("input[name=job_title]"))
        responsive_element($('#modal_start_page').find("select[name=reason]"))
    }


});

$(document).ready(function(){
    $('.choosevemba').click(function(){
    	$("html, body").animate({
        	scrollTop: $('#choosevemba').offset().top 
        }, 2000);
        $('#choosevemba>.child').show();
	})
	
	$('.program').click(function(){
    	$("html, body").animate({
        	scrollTop: $('#program').offset().top 
        }, 2000);
        $('#program>.child').show();
	})
    $('.student').click(function(){
    	$("html, body").animate({
        	scrollTop: $('#student').offset().top 
        }, 2000);
        $('#student>.child').show();
    })
	

	$('.request').click(function(){
    	$("html, body").animate({
        	scrollTop: $('#request').offset().top 
        }, 2000);
        $('#request>.child').show();
	})

	$('.procedure').click(function(){
    	$("html, body").animate({
        	scrollTop: $('#procedure').offset().top 
        }, 2000);
        $('#procedure>.child').show();
    })
    $('.fee').click(function(){
    	$("html, body").animate({
        	scrollTop: $('#fee').offset().top 
        }, 2000);
        $('#fee>.child').show();
    })

    $('.teacher').click(function(){
    	$("html, body").animate({
        	scrollTop: $('#teacher').offset().top 
        }, 2000);
        $('#teacher>.child').show();
	})
    
    $('.leader').click(function(){
    	$("html, body").animate({
        	scrollTop: $('#leader').offset().top 
        }, 2000);
        $('#leader>.child').show();
    })
    $('.language').click(function(){
    	$("html, body").animate({
        	scrollTop: $('#language').offset().top 
        }, 2000);
        $('#language>.child').show();
    })
    $('.campuses').click(function(){
    	$("html, body").animate({
        	scrollTop: $('#campuses').offset().top 
        }, 2000);
        $('#campuses>.child').show();
	})
   $('.website').click(function(){
    	$("html, body").animate({
        	scrollTop: $('#website').offset().top 
        }, 2000);
        $('#website>.child').show();
	})
   $('.upcoming').click(function(){
    	$("html, body").animate({
        	scrollTop: $('#upcoming').offset().top 
        }, 2000);
        $('#upcoming>.child').show();
	})
$('.company').click(function(){
    	$("html, body").animate({
        	scrollTop: $('#company').offset().top 
        }, 2000);
        $('#company>.child').show();
	})



});

// show and hide content
$(document).ready(function(){
    $('.title').click(function() {
        $(this).next().toggle();
    });
    $('.title').on('click', function() {
        var $el = $(this);
        $el.find('i').toggleClass('fa-chevron-down fa-chevron-up');
      });
       
});

// $(document).ready(function(){
// if ($(window).width() < 600 ) {
//     //small screen, load other JS files
//     // $.getScript('/js/script.js', function () {
//         //the script has been added to the DOM, you can now use it's code
//         $('.button-menu').click(function() {
//             $('.menu-item').toggle();
//         });
//     // });
// }
// });


// $(document).ready(function(){
//     function myFunction() {
//         var x = document.getElementById("myLinks");
//         if (x.style.display === "block") {
//             x.style.display = "none";
//         } else {
//             x.style.display = "block";
//         }
//     }
// });

