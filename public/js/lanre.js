function adjustNavbar(){
	var navbar = $('.navbar');
	var logo = $('.logo')
	var navigationHeight = $(navbar).height();
	// console.log(navigationHeight);
	// console.log($(this).scrollTop());
	if($(this).scrollTop() >= $(navbar).height()){
		$(navbar).css('background-color' , '#0d5013');
		$(logo).attr('src' , '/images/logo.png');
		$('.scroll-top').removeClass("hide");
		
	}else{
		$(navbar).css('background-color' , 'transparent');
		$(logo).attr('src' , '/images/logo.png');
		$('.scroll-top').addClass("hide");

	}
}

function hideMobileMenu(){
	var menu = $("#responsive-menu");
    var width = $(menu).width();
    $(menu).animate({left: "-=" + width}, function(){$(menu).css('display', 'none');});

    $("#dark-screen").hide('fast');
}

function showMobileMenu(){
	var menu = $("#responsive-menu");
    $(menu).css("display", "block");
    $('#dark-screen').css("display", "block");
    var width = $(menu).width();
    $(menu).animate({left: "+=" + width});
    $('html,body').animate({scrollTop: "0px"}, "fast");
}

$(document).ready(function(){

	//adjustNavbar();

	//green screen should have the same height as main element
	var mainHeight = $("main").height();
	console.log(mainHeight);
	var screen = $(".screen").css("height", mainHeight + "px");



	window.addEventListener('scroll', function(){
		//adjustNavbar();
		addAnimation("what-we-do-left", "fadeInRight");
		addAnimation("what-we-do-right-div", "zoomIn");
		addAnimation("how-we-help", "slideInUp");

		addAnimation("laughing-man", "slideInRight");
		addAnimation("lady", "fadeInRight");
		addAnimation("about-us-div", "fadeInRight");
		addAnimation("blue-screen", "slideInRight");

		addAnimation("mission", "fadeInUp");
		addAnimation("basic", "fadeInUp");
		addAnimation("methodology", "fadeInUp");
		addAnimation("quality", "fadeInUp");
		addAnimation("expertise", "fadeInUp");
		addAnimation("cost", "fadeInUp");
	});

	$('body').scrollspy({target: ".navbar", offset: 500});

 	//========================================================================
	// Relevant for side menu in smaller screens
	//=======================================================================

	  //set the heights of the responsive menu to that of the body
	  $('body').height("100vh");
	  $("#dark-screen").height($('body').height());
	  $("#responsive-menu").height($('body').height());

	  $("#dark-screen").on('click', function(){
	    hideMobileMenu();
	  });

	  $('.navbar-toggler').click(function(){
	    showMobileMenu();
	    
	  });


	  //Now for the links behaviour proper
	  $('.mobile-links > .has-dropdown').on('click', function(){
	    $($(this).data('target')).toggle('slow');
	  })

	  $('.mobile-dropdown-link.has-dropdown').on('click', function(){
	    $(this).find($('.mobile-dropdown-menu')).toggle('slow');
	  })

	  //also if window is resized...
	  $(window).resize(function(){
	    if(window.innerWidth > 768){
	      var menu = $("#responsive-menu");
	      if($(menu).css('display') == 'block'){
	        var width = $(menu).width();
	        $(menu).animate({left: "-=" + width}, function(){$(menu).css('display', 'none');
	        $("#dark-screen").hide('fast');});
	        
	      }    
	    }else{
	      window.location.reload();
	    }
    
    });  

	

	$('.scroll-top').on('click', function(){
		$('body,html').animate({scrollTop: 0}, "slow");
	});

  //=====================================================================================
  // Changing the services in services page
  //=====================================================================================

  //Get all the service-list items
  var serviceList = $('.service-list');
  console.log(serviceList);

  //get all service descriptions
  var serviceDescription = $('.service-content .container');
  console.log(serviceDescription);

  //attach a listener to each of them that calls a given handler (displayService)
  if(serviceList)
	  for (let i = 0; i < serviceList.length; i++) {
	  	$(serviceList[i]).on('click', function(){displayService(i)});  	
	  }


  //======================================================================================
  // End of changing services
  //======================================================================================

});

function displayService(index){

	//get all service-lists
	var serviceList = $('.service-list');


	//get all service descriptions
	var serviceDescription = $('.service-content .container');

	//remove active class from all service-lists
	for (var i = 0; i < serviceList.length; i++) {
		if($(serviceList[i]).hasClass('active')){
			$(serviceList[i]).removeClass('active')
		}
	}

	//set active class on the chosen list item
	$(serviceList[index]).addClass('active');

	//set all descriptions invisible
	for (var i = 0; i < serviceDescription.length; i++) {
		if($(serviceDescription[i]).hasClass('active')){
			$(serviceDescription[i]).removeClass('active')
		}
	}

	//set only the description with matching index to display
	console.log('index' + index)
	$(serviceDescription[index]).addClass('active');

	var description = document.getElementsByClassName('service-desc')[0];
	$('body,html').animate({scrollTop: $(description).offset().top - 100 + "px"}, "slow");
	
}

function addAnimation(className, animationName){
	var elements = document.getElementsByClassName(className);
	console.log('elements: ' + elements);
	for (var i = 0; i < elements.length; i++) {
		console.log("bounding rect: " + elements[i].getBoundingClientRect().top);
		console.log("window height: " + window.innerHeight);

		if(elements[i].getBoundingClientRect().top < window.innerHeight && !$(elements[i]).hasClass(animationName)){
			$(elements[i]).addClass(animationName)
		}
	}

}
