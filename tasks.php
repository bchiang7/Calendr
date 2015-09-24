<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Calendr</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/calendr.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Graduate' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- JQuery 1.7.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    
    <!-- JQueryUI 1.8.16 -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
    
    <!-- Custom JS -->
    <script src="js/tasks.js"></script>
    
    <!-- Custom CSS -->
    <link href="css/tasks.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Calendr</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Go</button>
                </form>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> User Name <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="login.html"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="#add" class="" data-toggle="modal" data-target="#add" data-toggle="tooltip" data-placement="right" title="Add Something">
                            <i class="fa fa-fw fa-plus-circle fa-3x"></i>
                        </a>
                    </li>
                    <li>
                        <a href="index.html" data-toggle="tooltip" data-placement="right" title="Dashboard"><i class="fa fa-fw fa-dashboard fa-3x"></i></a>
                    </li>
                    <li>
                        <a href="calendar.html" data-toggle="tooltip" data-placement="right" title="Calendar"><i class="fa fa-fw fa-calendar fa-3x"></i></a>
                    </li>
                    <li>
                        <a href="assignments.html" data-toggle="tooltip" data-placement="right" title="Assignments"><i class="fa fa-fw fa-file-text fa-3x"></i></a>
                    </li>
                    <li class="active">
                        <a href="tasks.html" data-toggle="tooltip" data-placement="right" title="Tasks"><i class="fa fa-fw fa-check-square-o fa-3x"></i></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            <div class="spacer"></div>
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <!-- Panel -->
                    <div class="col-md-7 col-md-offset-2 panel panel-default">
                      <div class="panel-body panel-task-view">
                        <h2>Tasks</span></h2>
                        <div class="spacer"></div>
                        <div class="col-md-6">
                            <div class="well" style="max-height: 500px; min-width: 550px; overflow: auto;">
                                <!-- this is where the actual tasks are -->
                                <div class="checkbox">
                                	<ul id="activeTasks">
                                		<li><input class="removeTask" type="checkbox">
                						Get groceries
                                		</li>
                                        <li><input class="removeTask" type="checkbox">
                                        Get tickets for concert
                                        </li>
                                        <li><input class="removeTask" type="checkbox">
                                        Walk the dog
                                        </li>
                                        <li><input class="removeTask" type="checkbox">
                                        Print assignment
                                        </li>
                                        <li><input class="removeTask" type="checkbox">
                                        Return library book
                                        </li>
                                        <li><input class="removeTask" type="checkbox">
                                        Buy batteries
                                        </li>
                                	</ul>
                                	<div id="addAnother_on">
                                    	<form class="form-inline">
                                            <div class="form-group">
                                                <input type="text" id="taskText" class="form-control" placeholder="i.e. Buy Milk">
                                                <div id="addTask"><a class="btn btn-primary" href="#">Add</a></div>
                                            </div>
                                        </form>
    								</div>
    								<div id="addAnother_off"><a href="#">Add another task</a></div>    								
                                </div>
                                <div class="spacer"></div>
                                <h4>Completed Tasks:</h4>
                                <div class="checkbox">
                                	<ul id="removedTasks"></ul>
                                </div>
                                <div id="clearRemoved"><i><a href="#">(Clear)</a></i></div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- MODALS -------------------------------------------------------------------------------------------------------------->

    <!-- ADD BUTTON MODAL -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Add A New...</h4>
          </div>
          <div class="modal-body">
            <ul style="list-style:none;">
                <li><button type="button" class="btn btn-default btn-lg" data-toggle="modal" href="#event-modal">Event</button></li>
                <div class="spacer"></div>
                <li><button type="button" class="btn btn-default btn-lg" data-toggle="modal" href="#course-modal">Course</button></li>
                <div class="spacer"></div>
                <li><button type="button" class="btn btn-default btn-lg" data-toggle="modal" href="#assignment-modal">Assignment</button></li>
            </ul>
          </div>
          <div class="modal-footer">
              <a href="#" data-dismiss="modal" class="btn">Cancel</a>
          </div>
        </div>
      </div>
    </div>


    <!-- ADD EVENT MODAL -->
    <div class="modal fade" id="event-modal" tabindex="-1" role="dialog" aria-labelledby="event-modal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Add A New Event</h4>
          </div>
          <div class="modal-body">
            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="basic-addon1">Name</span>
              <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
            </div>
            <div class="spacer"></div>
            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="basic-addon1">Location</span>
              <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
            </div>
            <div class="spacer"></div>

            <div class="checkbox">
              <label>
                <input type="checkbox" value="">All Day</label>
            </div>

            <div class="spacer"></div>
            <h4>Time:</h4>
            <div class="form-group">
                <div class="container">
                    <div class="form-group row">
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="inputKey" placeholder="00:00">
                        </div>
                        <label for="inputValue" class="col-md-1 control-label">to</label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="inputValue" placeholder="00:00">
                        </div>
                    </div>
                </div>
            </div>
            <h4>On</h4>
            <div class="form-group">
                <div class="container">
                    <div class="form-group row">
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="inputKey" placeholder="MM/DD/YY">
                        </div>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="form-group">
                <div class="container">
                    <div class="form-group row">
                        <div class="col-md-8">
                            <div class="col-md-4">
                                <h4>Repeats</h4>
                                <label class="checkbox-inline">
                                  <input type="checkbox" id="inlineCheckbox1" value="option1"> Daily
                                </label>
                                <label class="checkbox-inline">
                                  <input type="checkbox" id="inlineCheckbox2" value="option2"> Weekly
                                </label>
                            </div>
                            <div class="col-md-4">
                                <h4>Until</h4>
                                <input type="text" class="form-control" id="inputKey" placeholder="MM/DD/YY">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4>Color:</h4>
            <div class="btn-group btn-group-lg">
              <button type="button" class="btn btn-default">Color</button>
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Red</a></li>
                <li><a href="#">Orange</a></li>
                <li><a href="#">Yellow</a></li>
                <li><a href="#">Green</a></li>
                <li><a href="#">Blue</a></li>
                <li><a href="#">Purple</a></li>
                <li><a href="#">Pink</a></li>
              </ul>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <a type="button" class="btn btn-primary" href="calendar2.html">Add Event</a>
          </div>
        </div>
      </div>
    </div>

    <!-- ADD COURSE MODAL -->
    <div class="modal fade" id="course-modal" tabindex="-1" role="dialog" aria-labelledby="course-modal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Add A New Course</h4>
          </div>
          <div class="modal-body">
            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="basic-addon1">Course Name</span>
              <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
            </div>
            <div class="spacer"></div>
            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="basic-addon1">Professor</span>
              <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
            </div>
            <div class="spacer"></div>
            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="basic-addon1">Location</span>
              <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
            </div>
            <div class="spacer"></div>
            <h4>Meets:</h4>
            <label class="checkbox-inline">
              <input type="checkbox" name="inlineCheckboxOptions" id="inlineCheckbox1" value="option1"> Sun
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="inlineCheckboxOptions" id="inlineCheckbox2" value="option2"> Mon
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="inlineCheckboxOptions" id="inlineCheckbox3" value="option3"> Tues
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="inlineCheckboxOptions" id="inlineCheckbox1" value="option1"> Wed
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="inlineCheckboxOptions" id="inlineCheckbox2" value="option2"> Thurs
            </label>
            <label class="rcheckbox-inline">
              <input type="checkbox" name="inlineCheckboxOptions" id="inlineCheckbox3" value="option3"> Fri
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="inlineCheckboxOptions" id="inlineCheckbox3" value="option3"> Sat
            </label>
            <div class="spacer"></div>
            <h4>Time:</h4>
            <div class="form-group">
                <div class="container">
                    <div class="form-group row">
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="inputKey" placeholder="00:00">
                        </div>
                        <label for="inputValue" class="col-md-1 control-label">to</label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="inputValue" placeholder="00:00">
                        </div>
                    </div>
                </div>
            </div>
            <h4>Start Date to End Date</h4>
            <div class="form-group">
                <div class="container">
                    <div class="form-group row">
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="inputKey" placeholder="MM/DD/YY">
                        </div>
                        <label for="inputValue" class="col-md-1 control-label">to</label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="inputValue" placeholder="MM/DD/YY">
                        </div>
                    </div>
                </div>
            </div>
            <h4>Color:</h4>
            <div class="btn-group btn-group-lg">
              <button type="button" class="btn btn-default">Color</button>
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Red</a></li>
                <li><a href="#">Orange</a></li>
                <li><a href="#">Yellow</a></li>
                <li><a href="#">Green</a></li>
                <li><a href="#">Blue</a></li>
                <li><a href="#">Purple</a></li>
                <li><a href="#">Pink</a></li>
              </ul>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <a type="button" class="btn btn-primary" href="assignmentsC.html">Add Course</a>
          </div>
        </div>
      </div>
    </div>

    <!-- ADD ASSIGNMENT MODAL -->
    <div class="modal fade" id="assignment-modal" tabindex="-1" role="dialog" aria-labelledby="assignment-modal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Add A New Assignment</h4>
          </div>
          <div class="modal-body">
            <div class="btn-group btn-group-lg">
              <button type="button" class="btn btn-default">Course Name...</button>
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Human Computer Interaction</a></li>
                <li><a href="#">Object Oriented Design</a></li>
                <li><a href="#">Foundations of Psych</a></li>
                <li><a href="#">Cognition</a></li>
                <li class="divider"></li>
                <li><a href="#">No Course In Particular</a></li>
              </ul>
            </div>
            <div class="spacer"></div>
            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="basic-addon1">Name</span>
              <input type="text" class="form-control" placeholder="Assignment Name" aria-describedby="basic-addon1">
            </div>
            <div class="spacer"></div>
            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="basic-addon1">Due Date</span>
              <input type="text" class="form-control" placeholder="MM/DD/YY" aria-describedby="basic-addon1">
            </div>
            <div class="spacer"></div>
            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="basic-addon1">Due Time</span>
              <input type="text" class="form-control" placeholder="00:00" aria-describedby="basic-addon1">
            </div>
            <div class="spacer"></div>
            <textarea class="form-control" rows="3">Description</textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <a type="button" class="btn btn-primary" href="assignments2.html">Add Assignment</a>
          </div>
        </div>
      </div>
    </div>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
