
${function(){
	$( "#slider1" ).slider({
		orientation:"horizontal",
		max: 100000,
		step: 1000,
			slide: function( event, ui ) {
				$( "#price1" ).val( ui.value );
				}	
		});
	$( "#price1" ).val( $( "#slider-5" ).slider( "value" ) );
}); 

$(function(){
	$("#slider2").slider({
		orientation: "horizontal",
		max: 100,
		step: 1,
			slide: function(event, ui){
				$("#MPG1").val(ui.value);
			}
	});
	$("#MPG1").val($("#slider-6").slider("value"));
});
