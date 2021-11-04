//hamburger ----------->
const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;
menuBtn.addEventListener('click', () => {
    if(!menuOpen){
        menuBtn.classList.add('open');
        menuOpen =true;
    } else{
        menuBtn.classList.remove('open');
        menuOpen = false;
    }
}); 
// end hamburger


//slider
$(function(){
    $(".top").slick({
      dots: false,
      vertical: false,
      centerMode: true,
      autoplay:true,
      autoplaySpeed:4000,
      slidesToShow: 1,
      slidesToScroll: 1,
      nextArrow:'.nextt',
     prevArrow:'.prevv',
    });

    $(".Specials").slick({
        dots: false,
        vertical: false,
        centerMode: true,
        autoplay:true,
        autoplaySpeed:4000,
        slidesToScroll: 3,
        nextArrow:'',
       prevArrow:'',
       responsive:[
        {
          breakpoint:300,
          settings:{
            slidesToShow:1,
            slidesToScroll:3,
          }
        },
        {
          breakpoint:768,
          settings:{
            slidesToShow:1,
            slidesToScroll:3,
          }
        },
        {
          breakpoint:900,
          settings:{
            slidesToShow:1,
            slidesToScroll:3,
          }
        },
        {
          breakpoint:1024,
          settings:{
            slidesToShow:2,
            slidesToScroll:3,
          }
        },
        
       
     ]

      });

      $(".performers").slick({
        dots: false,
        vertical: false,
        centerMode: true,
        autoplay:true,
        autoplaySpeed:4000,
        slidesToShow: 2,
        slidesToScroll: 3,
        nextArrow:'',
        prevArrow:'',
        responsive:[
          {
            breakpoint:768,
            settings:{
              slidesToShow:1,
              slidesToScroll:3,
            }
          },
          {
            breakpoint:900,
            settings:{
              slidesToShow:1,
              slidesToScroll:3,
            }
          },
          {
            breakpoint:1024,
            settings:{
              slidesToShow:1,
              slidesToScroll:3,
            }
          },
       ]


      });
});

//tabs
var tabButtonn=document.querySelectorAll(".btt")
var tabPanell=document.querySelectorAll(".tabsPanell")

function showPanels(panelIndex,colorCode) {
    tabButtonn.forEach(function(node){
        node.style.backgroundColor="";
        node.style.color="";
    });
     tabPanell[panelIndex].style.backgroundColor=colorCode;
     tabPanell[panelIndex].style.color="white";
     tabPanell.forEach(function(node){
        node.style.display="none";
    });
    tabPanell [panelIndex].style.display="block";
    tabPanell [panelIndex].style.backgroundColor=colorCode;
}
showPanels(0,'rgb(255, 255, 255)');

//testimonials
var tabButton=document.querySelectorAll(".bt")
var tabPanel=document.querySelectorAll(".tabsPanel")

function showPanel(panelIndex,colorCode) {
    tabButton.forEach(function(node){
        node.style.backgroundColor="";
        node.style.color="";
    });
     tabPanel[panelIndex].style.backgroundColor=colorCode;
     tabPanel[panelIndex].style.color="white";
     tabPanel.forEach(function(node){
        node.style.display="none";
    });
    tabPanel [panelIndex].style.display="block";
    tabPanel [panelIndex].style.backgroundColor=colorCode;
}
showPanel(0,'rgb(255, 255, 255)');