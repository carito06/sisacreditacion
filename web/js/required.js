(function( $ ){
	$.fn.numerico = function() {
		var az = "abcdefghijklmn?opqrstuvwxyz";
		az += az.toUpperCase();
		az += "!@#$%^&*()+=[]\\\';,/{}|\":<>?~`- ";	
		  	
		return this.each (function() {
			$(this).keypress(function (e){
				if (!e.charCode) k = String.fromCharCode(e.which);
				else k = String.fromCharCode(e.charCode);
										
				if (az.indexOf(k) != -1) e.preventDefault();
				if (e.ctrlKey&&k=='v') e.preventDefault();
									
			});