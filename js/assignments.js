$(document).ready( function() {
	
	var courseSelected = "";
	    
	$(".add-course-button").on("click", function() {
		var dayArray = ['Sun', 'Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat'];
		var $li = '<li><a href="#" class="list-group-item"><h4 class="list-group-item-heading course-name">'+ $("#add-course-name").val() +'</h4><div class="btn-group btn-group-xs days" role="group" aria-label="...">' + getDays(dayArray) + '</div><p class="list-group-item-text">'+ $("#course-time-from").val() + ' - ' + $("#course-time-to").val() + ':</p></a></li>';
		
		var fieldsAreEmpty = $("#add-course-name").val() == '' || $("#add-course-time-from").val() == '' || $("#add-course-time-to").val() == '';
		
		// if fields are empty, launch an alert
		if (fieldsAreEmpty) {
			$('#add-course-empty-fields').show();
		} else {
			$('#courses-list').append($li);
			$('#course-modal').modal('hide');
			// reset the checkboxes to unchecked
			$('#course-modal input').removeAttr('checked');
			// now, reset everything else
			$('#course-modal input').val('');
			$('#add-course-empty-fields').hide();
		}		
	});
	
	$('.testid').click(function() {
		setChosen();
	});
	
	function setChosen() {
		courseSelected = "hello";
	};
	
	function getChosen() {
		return courseSelected;
	};
	
	// when the assignment choose course menu is shown, populate
	// the options from the current on-page courses
	$('#assignment-choose-course').on("show.bs.dropdown", function() {
		$('.course-name', '#courses-list').each( function (index) {
			var $li = '<li><a href="#" class="testid">' + $(this).text() + '</a></li>';
    		$('#assignments-courses-menu').append($li);
		});
		
		$('#assignments-courses-menu').append('<li class="divider"></li>');
		$('#assignments-courses-menu').append('<li><a data-toggle="modal" href="#course-modal">Add a new course</a></li>');
	});
		
	
	$('#assignment-courses-menu-sel').on("click", function() {
		$('.course-name', '#courses-list').each( function (index) {
			var $li = '<option>' + $(this).text() + '</option>';
    		$('#assignments-courses-menu-sel').append($li);
		});
	});
	
	// when the assignment choose course menu is hidden, clear the list
	$('#assignment-choose-course').on("hide.bs.dropdown", function() {
    	$('#assignments-courses-menu').empty();
	});
	
	
	
	/**
	 * Return a string containing li representations of all the courses 
	 * in the courses panel
	 * @return the string repr. of the courses
	 */
	 var getCourses = function() {
		 var result = '';
		 
		 $('#courses-list').each( function(index) {
		 	result += '<li><a href="#">' + $(this).text() + '</a></li>';
		 });
		 
		 return result;
	 };
	
	/**
	 * Return a string containing buttons for the given array of days with
	 * proper 'active' state
	 * @param days: the array of days
	 * @return the string representation of the buttons
	 */
	var getDays = function(days) {
		// generate a matching boolean array for days
		var boolArray = [];
		for (i = 0; i < days.length; i++) {
			boolArray[boolArray.length] = false;
		}
		
		// set the booleans
		for (i = 0; i < days.length; i++) {
			boolArray[i] = document.getElementById(days[i] + 'Checkbox').checked;
		}			
		
		// init the result string
		var $result = '';
		
		// generate the proper button based on the bools and add to the result string
		for (i = 0; i < days.length; i++) {
			if (boolArray[i]) {
				$result += '<button type="button" class="btn btn-default active">' + days[i] + '</button>';
			} else {
				$result += '<button type="button" class="btn btn-default">' + days[i] + '</button>';
			}
		}
		
		return $result;
	};
	
	/**
	 * Set the shown course to be what was selected
	 */
	 var setAssignmentCourseMenu = function(courseName) {
	 	courseSelected = courseName;
	 };
	 
	 /**
	  * Add assignment button handler
	  */
	 $('.add-assignment-button').on("click", function() {
		var $li = '<li class="list-group-item"> <span style="display:inline;"> <h4 style="display: inline;"> <span class="glyphicon glyphicon-file"></span> ' + $('#add-assignment-name').val() + ' </h4> <h6 style="display: inline;">Due ' + $('#add-assignment-due-date').val();
		// we have some different behavior depending on whether a time is given
		if ($('#add-assignment-due-time').val() != '') {
			$li += ' at ' + $('#add-assignment-due-time').val();
		}
			 
			 // now finish off the rest of the new li:
		$li += '</h6> <h5>' + getChosen() + '</h5> </span>' + $('#add-assignment-desc').val() + '<span class="pull-right"> <button class="btn btn-xs btn-info" id="assignment-edit"> <span class="glyphicon glyphicon-pencil"></span> </button> <button class="btn btn-xs btn-warning assignment-delete"> <span class="glyphicon glyphicon-trash"></span> </button> </span></li>';
		 
		var fieldsAreEmpty = $('#add-assignment-desc').val() == '' || $('#add-assignment-due-date').val() == '' || $('#add-assignment-name').val() == '';		
		
		// if fields are empty, launch an alert
		if (fieldsAreEmpty) {
			$('#add-assignment-empty-fields').show();
		} else {
			$('#assignments-list').append($li);
			$('#assignment-modal').modal('hide');
			// now, reset everything 
			$('#assignment-modal input').val('');
			$('#assignment-modal textarea').val('');
			$('#add-assignment-empty-fields').hide();
		}
		
	 });
	 
	 /**
	  * Deleting assignments
	  */
	$('#assignments-list').on("click", '.assignment-delete', function() {
		var conf = confirm("Do you really want to delete this assignment?");
		if (conf) {
			$(this).closest('li').remove();
		}
	});
});
