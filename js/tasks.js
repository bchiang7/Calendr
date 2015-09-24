$(document).ready( function() {
    
	// Hide the addAnother state on load
    $("#addAnother_on").hide();
    
	// When the add-another button is clicked, we'll switch
	// visibility of the two states (link vs textbox & button) and
	// set focus to the textbox
    $("#addAnother_off").on( "click", function() {
        $("#addAnother_off").hide();
        $("#addAnother_on").show();
		
		$("#taskText").focus();
    });
    
	// When the add button is clicked, add new task, reset textbox and addAnother divs. 
    $("#addTask").on("click", function () {
        var $li = $('<li><input class="removeTask" type="checkbox"></input>' + $("#taskText").val() + '</li>');
        if ($('#taskText').val().length > 0) {
            $("#activeTasks").append($li);
        
            document.getElementById('taskText').value='';
            $("#addAnother_off").show();
            $("#addAnother_on").hide();
        }
        

        
        //return false;
    });
    
    // when an item in the active list is checked, we add it to removed
    $('#activeTasks').on('change', '.removeTask', function () {
        var queueSize = 15;
        var $toMove = $(this).closest('li');
        $(this).closest('li').remove();
    
        // simple implementation of fifo queue
        if ($('#removedTasks li').size() >= queueSize) {
            // remove the first
            $('#removedTasks li').first().remove();
            // add the new item
            $('#removedTasks').append($toMove);
        }
        // if the queue isn't full then just add the item
        else {
            $('#removedTasks').append($toMove);
        }
    
        return false;
    });
    
    // if user wants to restore the task we put it back in active
    $('#removedTasks').on('change', '.removeTask', function () {
        var $toMove = $(this).closest('li');
        $(this).closest('li').remove();
        
        // don't care about the number of active tasks, we just add
        // it at the end
        $('#activeTasks').append($toMove);
    });
    
    // If the user hits enter while in the textbox, activate the add button
    $('#taskText').keypress(function(e){
      if(e.keyCode==13)
      $('#addTask').click();
    });
	
	// clear removed tasks when clear button is clicked
    $("#clearRemoved").on("click", function() {
      $('#removedTasks').empty();
    });
});
