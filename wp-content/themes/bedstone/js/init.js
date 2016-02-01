jQuery(document).ready(function($){
    console.log('jQuery version: ' + jQuery.fn.jquery); // version
    console.log('jQuery version (aliased): ' + $.fn.jquery); // version, alias confirmation

    var win = $(window),
        body = $(document.body);

    // body events and manipulation
    body
	    .on('click', 'a[rel~="external"]', function(e){
	        // rel="external" opens in new window
	        e.preventDefault();
	        window.open(this.href);
	        return false;
	    })
		.on('click', '.dropdown-toggle', function(e) {
			// bootstrap fix
	    	e.preventDefault();
	        window.location.href = this.href;
	        return false;
	    });


	// Tooltip in site footer
	$('[data-toggle="tooltip"]').tooltip();


	// ======================================================================
	// Mobile Nav
	// ======================================================================
	$('.nav-toggle').click(function() {
        $('body').toggleClass("nav-open");
    });

	$(".fixed-help-bubble").click(function(){
	    $('.fixed-help-text').fadeToggle("slow, easing");
	});

});
