$(document).ready(function(){
	$(window).scroll(function(){
		if(this.scrollY > 20 ){
			$('.navbar').addClass("sticky");
			
		}else{
			$('.navbar').removeClass("sticky");
		}

        if(this.scrollY > 500 ){
			$(".scroll-up-btn").addClass("show");
			 $(".scroll-up-btn").click(function(){
		     $("html").animate({scrollTop:0});
	 })
		}else{
			$(".scroll-up-btn").removeClass("show");
		}
		
	})

	// slide-up script
	 $(".scroll-up-btn").click(function(){
		 $('html').animate({scrollTop:0});
	 })
	
	
   //toggle menu/navbar script
   $('.menu-btn').click(function(){
	      $('.navbar .menu').toggleClass("active");
		  $('.menu-btn i').toggleClass("active:before");

   
   })
   
   if(this.scrollY > 0 ){
			$(".scroll-up-btn").addClass("show");
			 $(".scroll-up-btn").click(function(){
		     $("html").animate({scrollTop:0});
	            })
		}else{
			$(".scroll-up-btn").removeClass("show");
		}
		
   

   
});
/*
.images{
	width:45%;
	height:80%;
	position:absolute;
	bottom:0;
	right:100px;
	
}
.images img{
	height:100%;
	position:absolute;
	left:50%;
	bottom:0;
	transform:translateX(-50%);
	transform:bottom 1s, left 1s;
}

.images:hover .shape{
	bottom :40px;
	
}
.images:hover .boy{
	left:45%;
}
*/

/*	*/