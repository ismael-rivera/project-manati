"use strict";

//---------------Create a Project---------------------------------------------------------------------

$.getJSON( "../inc/data/project_categories.json", function( data ) {

  $.each( data, function( key, val ) {
	   var i;
	   var h1 = Math.ceil(val.length / 2);
	   for (i = 0; i < h1; i++) { 
	   		$( "#h1.checkbox ul" ).append( 
							  '<li><label for="project_category-'+i+'">'+
							  '<input type="checkbox" name="project_category" id="project_category-'+i+'" value="'+i+'">'+
								val[i] +
							  '</label></li>'
	   						);
	   };
	   for (i = h1; i < val.length; i++) { 
	   		$( "#h2.checkbox ul" ).append( 
							  '<li><label for="project_category-'+i+'">'+
							  '<input type="checkbox" name="project_category" id="project_category-'+i+'" value="'+i+'">'+
								val[i] +
							  '</label></li>'
	   						);
	   };
  });
 

});

//----------------------------------------------------------------------------------------------------
