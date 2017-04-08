$(function ()
{	
	var header = document.getElementById("top-nav");

	$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    	if(scroll > 200)
		{
			header.style.transition = "0.5s";
			header.style.margin = "-300px 0 0 0";
		}

		else if(scroll < 200)
		{
			header.style.transition = "0.5s";
			header.style.margin = "0px";
		}
	});
});

$('.Info-1').hide();
$('.knop').on('click',
    function()
    {
        $('.Shows-1, .Info-1').toggle()
    }
);

$('.Info-2').hide();
$('.Shows-2, .Info-2').on('click',
    function()
    {
        $('.Shows-2, .Info-2').toggle()
    }
);

$('.Info-3').hide();
$('.Shows-3, .Info-3').on('click',
    function()
    {
        $('.Shows-3, .Info-3').toggle()
    }
);

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}