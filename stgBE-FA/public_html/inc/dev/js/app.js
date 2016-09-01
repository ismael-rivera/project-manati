"use strict";

//----------------------------------------------------------------------------------------------------

$.getJSON( "../inc/data/project_index.json", function( data ) {
  var col1 = [];
  var col2 = [];
  var col3 = [];
  $.each( data, function( key, val ) {

	if(key < 268){   
      col1.push( "<li id='" + key + "'><a class='project_list' href='#'>" + val.name + "</a></li>" );
	}
	if((key > 268) && (key < 530)){   
      col2.push( "<li id='" + key + "'><a class='project_list' href='#'>" + val.name + "</a></li>" );
	}
	if(key > 530){   
      col3.push( "<li id='" + key + "'><a class='project_list' href='#'>" + val.name + "</a></li>" );
	}
  });
 
  $( "<ul/>", {"class": "my-new-list", html: col1.join( "" )}).appendTo( "#allprojects #col1" );
  $( "<ul/>", {"class": "my-new-list", html: col2.join( "" )}).appendTo( "#allprojects #col2" );
  $( "<ul/>", {"class": "my-new-list", html: col3.join( "" )}).appendTo( "#allprojects #col3" );

});

//----------------------------------------------------------------------------------------------------
