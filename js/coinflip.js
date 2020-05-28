;(function($) {

	const container = $("div.cointable");
	const btn = $("button#flipCoin");

	btn.off("click").on("click", function() {

		$.ajax({url: "coinflip.php", success: function(result){

	      container.html(result);

	    }});
	});

}(jQuery));