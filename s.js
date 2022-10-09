$(document).ready(function(){
	$(window).scroll(function(){
		if(this.scrollY > 0){
			$('.navbar').addClass("sticky");
			
		}else{
						$('.navbar').removeClass("sticky");

			
		}
	)};
	)};
