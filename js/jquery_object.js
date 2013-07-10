var pairs = {
	sea:"aqua", 
	earth:"brown", 
	sky:"blue", 
	fire:"red"}


function loadVideo() {
	$( pairs ).each(function( key, value ){
		var category = $(this).text();
		var name = pairs.sea;
		if( name == category){
				console.log(name + " is my favorite color.");
			};
	});
};



$("li").click(loadVideo);

/*$.each( obj, function( key, value ) {
  alert( key + ": " + value );
});

if( key == $(this))
		$("#viewer").add(value + "is my favorite color.")
console.log( key );
$.each($("#brands li a"), function() {});

*/