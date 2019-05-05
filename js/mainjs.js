//navgation bar

$(window).scroll(function(){
    
    var wscroll = $(window).scrollTop();
    if (wscroll > 150)
        {
            $(".navbar").css("height","100");
            $(".contact h1").css("color","rgba(0,0,0,.3)");
             $(".navbar-nav2 i").css("color","rgba(42, 42, 42, 0.7)");
        }
    else
        {
            $(".navbar").css("height","140");
            $(".contact h1").css("color","#fff");

            $(".navbar-nav2 i").css("color","rgba(0,0,0,1)");
        }
})

//scroll top button


$(".scrolltop").click(function(){
    
    $("body").animate({scrollTop:'0'},4000)
})

$(window).scroll(function(){
    
    var bscroll = $(window).scrollTop();
    if (bscroll < 500)
        {
            $(".scrolltop").css("opacity",1);
        }
    else
        {
            $(".scrolltop").css("opacity",0);

        }
})




// room home slider

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:1,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});


$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});





$(document).keydown(function(e){
    switch (e.which){
    case 38:    //up arrow key
        $("body").finish().animate({
            top: "-=20"
        });
        break;
    case 40:    //bottom arrow key
        $("body").finish().animate({
            top: "+=20"
        });
        break;
    }
});












//breakdown toggle

$(".close1").click(function(){
    
    $(".close1").hide(10);
});

$(".close2").click(function(){
    
    $(".close2").hide(10);
});
$(".close3").click(function(){
        
    $(".close3").hide(10);
});
$(".close4").click(function(){
    
    $(".close4").hide(10);
});
$(".close5").click(function(){
    
    $(".close5").hide(10);
});
$(".close6").click(function(){
    
    $(".close6").hide(10);
});

$("#showbreakdown1").click(function(){
    
    $(".close1").show(100);
});



$("#showbreakdown2").click(function(){
    
    $(".close2").show(100);
});
$("#showbreakdown3").click(function(){
    
    $(".close3").show(100);
});
$("#showbreakdown4").click(function(){
    
    $(".close4").show(100);
});
$("#showbreakdown5").click(function(){
    
    $(".close5").show(100);
});
$("#showbreakdown6").click(function(){
    
    $(".close6").show(100);
});


//
//
//$(window).scroll(function(){
//    
//    header = document.getElementById("fixed-div")
//    var fscroll = $(window).scrollTop();
//    if (fscroll > 500 && fscroll < 1500)
//        {
//            header.classList.add("fixed-top");
//        }
//    else
//        {
//            header.classList.remove("fixed-top");
//        }
//        
//});

$(".delet1").click(function(){
    
    $("#servic1").hide(10);
    
});
$(".delet2").click(function(){
    
    $("#servic2").hide(10);
});
$(".delet3").click(function(){
    
    $("#servic3").hide(10);
});


var slect1
function getselvalue()
{
    slect1 = document.querySelector("#quantity1").value;
    if (slect1 != "select")
    {
        $("#option1").slideDown(200);
    }
    else
        {
            $("#option1").slideUp(200);
        }
}
$("#option1 h4").click(function(){
    
 $(".u-options").slideToggle(200);  
})
var slect2
function getselvalue2()
{
    slect2 = document.querySelector("#quantity2").value;
    console.log(slect2);
    if (slect2 != "select")
    {
        $("#option2").slideDown(200);
    }
    else
        {
            $("#option2").slideUp(200);
        }
}
$("#option2 h4").click(function(){
    
 $(".u-options").slideToggle(200);  
})
var slect3
function getselvalue3()
{
    slect3 = document.querySelector("#quantity3").value;
    console.log(slect3);
    if (slect3 != "select")
    {
        $("#option3").slideDown(200);
    }
    else
        {
            $("#option3").slideUp(200);
        }
}
$("#option3 h4").click(function(){
    
 $(".u-options").slideToggle(200);  
})
var slect4
function getselvalue4()
{
    slect4 = document.querySelector("#quantity4").value;
    console.log(slect5);
    if (slect4 != "select")
    {
        $("#option4").slideDown(200);
    }
    else
        {
            $("#option4").slideUp(200);
        }
}
$("#option4 h4").click(function(){
    
 $(".u-options").slideToggle(200);  
})
var slect5
function getselvalue5()
{
    slect = document.querySelector("#quantity5").value;
    console.log(slect);
    if (slect5 != "select")
    {
        $("#option5").slideDown(200);
    }
    else
        {
            $("#option5").slideUp(200);
        }
}
$("#option5 h4").click(function(){
    
 $(".u-options").slideToggle(200);  
})
var slect6
function getselvalue6()
{
    slect = document.querySelector("#quantity6").value;
    console.log(slect6);
    if (slect6 != "select")
    {
        $("#option6").slideDown(200);
    }
    else
        {
            $("#option6").slideUp(200);
        }
}
 
$("#option6 h4").click(function(){

     $(".u-options").slideToggle(200);  
})


