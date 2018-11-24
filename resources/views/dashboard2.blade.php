<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Church Information Management System ~ Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="{{asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{asset('assets/css/material-dashboard.css?v=1.2.0') }}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('assets/css/demo.css') }}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons" rel="stylesheet" type="text/css"> -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons"
      rel="stylesheet">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a hrefs="{{URL::to('dashboard2')}}" class="simple-text">
                   CIMS ~ Dashboard
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active" id="userDashboard">
                        <!-- <a href="{{URL::to('dashboard')}}"> -->
                         <a  href="{{URL::to('dashboard2')}}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li id="userProfile">
                    <!-- <a href="{{URL::to('user')}}"> -->
                     <a href="#">
                        <i class="material-icons">person</i>
                        <p>Register Member</p>
                    </a>
                    </li>
                    <li id="allMembers">
                        <!-- <a href="{{URL::to('allmembers')}}"> -->
                        <a href="#">
                            <i class="material-icons">content_paste</i>
                            <p>All Members</p>
                        </a>
                    </li>
                    <li id="assignAccomodation">
                        <!-- <a href="{{URL::to('allmembers')}}"> -->
                        <a href="#">
                            <i class="material-icons">content_paste</i>
                            <p>Accomodation</p>
                        </a>
                    </li>
                    <li id="entries">
                        <a href="#">
                            <i class="material-icons">library_books</i>
                            <p>Add Entries</p>
                        </a>
                    </li>
                    @if(Session::get('level')=='Administrator')
                    <li id="exportimport">
                        <a href="#">
                            <i class="material-icons">library_books</i>
                            <p>Export/Import Data</p>
                        </a>
                    </li>
                    <li id="sms">
                        <a href="#">
                            <i class="material-icons">library_books</i>
                            <p>Send SMS</p>
                        </a>
                    </li>
                    <li id="offering">
                        <a href="#">
                            <i class="material-icons">library_books</i>
                            <p>Offerings</p>
                        </a>
                    </li>
                    <li id="attendance">
                        <a href="#">
                            <i class="material-icons">library_books</i>
                            <p>Attendance</p>
                        </a>
                    </li>
                    <li id="buildstatslink">
                        <a href="#">
                            <i class="material-icons">bubble_chart</i>
                            <p>Reports</p>
                        </a>
                    </li>
                    @endif
                    <li>
                        <a href="{{URL::to('logout')}}">
                            <i class="material-icons text-gray">exit_to_app</i>
                            <p>Log out</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button><?php date_default_timezone_set('Africa/Nairobi')?>
                        <span class="navbar-brand"> Welcome {{ucfirst(Session::get('fullname')) }} Today is {{date("l jS F Y, h:i A.")}}</span>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">This system is still under construction</a>
                                    </li>
                                    <li>
                                        <a href="#">Don't share your password with anyone</a>
                                    </li>
                                    <li>
                                        <a href="#">Please Contact us for support</a>
                                    </li>
                                    <li>
                                        <a href="#">Complete data entry leads to accurate reports</a>
                                    </li>
                                    <li>
                                        <a href="#">Enjoy!</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid" id="tifstats">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">people</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Total Members</p>
                                    <h3 class="title">{{$countMembers}}
                                        <small>people</small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    <i class="material-icons">date_range</i> Since last Refresh
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="material-icons">landscape</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Countries</p>
                                    <h3 class="title">{{$countCountries}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    <i class="material-icons">date_range</i> Since last Refresh
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                
                                <div class="card-content">
                                    <span>Females</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="right">Males</span>
                                    <h3 class="title">{{$countFemales}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $countMales}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    <i class="material-icons">date_range</i> Since last Refresh
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                <i class="material-icons">store</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Churches</p>
                                    <h3 class="title">{{$countChurches}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    <i class="material-icons">date_range</i> Since last Refresh
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-chart" style="background:#fff;">
                                    <!-- <div id="chart_users_with_gender" style="height: 250px;"></div> -->
                                    <canvas id="chart_users_with_gender" height="100"></canvas>
                                </div>
                                <div class="card-content">
                                    <h4 class="title">BUILD CONFERENCE - 2018</h4>
                                    <p class="category">
                                        <span class="text-success">
                                        <select id="changeDashboard" class="form-control show-tick">
                                            <option selected="selected">Select Year </option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="zgact">ZGACT Youth Camp</option>
                                        </select>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Accomodation starts here -->
                <!-- <div class="container-fluid" id="accomodationdiv" style="display:none;">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Members without Rooms</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table id="memberstable" class="table table-hover memberstable">
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   -->
                 <!--Accomodation ends here  -->
                 <!-- Reports -->
                 <div class="container-fluid" id="buildstats" style="display:none;">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-content">
                                <span>Females</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="right">Males</span>
                                <h3 class="title">{{$countFemalesTz}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $countMalesTz}}</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <strong>TANZANIA</strong>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-content">
                                <span>Females</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="right">Males</span>
                                <h3 class="title">{{$countFemalesKn}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $countMalesKn}}</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <strong>KENYA</strong>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                
                                <div class="card-content">
                                    <span>Females</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="right">Males</span>
                                    <h3 class="title">{{$countFemalesBn}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $countMalesBn}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <strong>BURUNDI</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                            <div class="card-content">
                            <span>Females</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="right">Males</span>
                            <h3 class="title">{{$countFemalesRn}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $countMalesRn}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <strong>RWANDA</strong>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-content">
                                <span>Females</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="right">Males</span>
                                <h3 class="title">{{$countFemalesMs}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $countMalesMs}}</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <strong>MAURITIUS</strong>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-content">
                                <span>Females</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="right">Males</span>
                                <h3 class="title">{{$countFemalesZim}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $countMalesZim}}</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <strong>ZIMBABWE</strong>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                
                                <div class="card-content">
                                    <span>Females</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="right">Males</span>
                                    <h3 class="title">{{$countFemalesEthio}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $countMalesEthio}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <strong>ETHIOPIA</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                            <div class="card-content">
                                <span>Females</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="right">Males</span>
                                <h3 class="title">{{$countFemalesCn}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $countMalesCn}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <strong>CONGO</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-content"> 
                                <span>Females</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="right">Males</span>
                                <h3 class="title">{{$countFemalesUg}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$countMalesUg}}</h3>
                            </div>
                            <div class="card-footer">   
                                <div class="stats">
                                    <strong>UGANDA</strong>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- Reports -->
                <div class="container-fluid" id="tifsilver" style="display:none;">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">All Registered Members</h4>
                            </div>
                            <div class="card-content table-responsive">
                                <table id="memberstable" class="table table-hover memberstable">
                                    <thead class="text-warning">
                                        <th>No</th>
                                        <th>Full Name</th>
                                        <th>Gender</th>
                                        <th>Mobile</th>
                                        <th>Church</th>
                                        <th>Region</th>
                                        <th>Country</th>
                                        <th>Date Registered</th>
                                        <th>Action</th>
                                        
                                    </thead>
                                    <tbody>
                                        @if($allmembers)
                                        <?php $n=1; ?>
                                            @foreach($allmembers as $members)
                                            <tr>
                                                <td><?php echo $n;?></td>
                                                <td>{{$members->mem_firstname}} {{$members->mem_lastname}}</td>
                                                <td>{{$members->mem_gender}}</td>
                                                <td>{{$members->mem_mobile}}</td>
                                                <td>{{$members->mem_church}}</td>
                                                <td><span class="badge">{{$members->mem_region}}</span></td>
                                                <td>{{$members->mem_country}}</td>
                                                <td>{{$members->registered_at}}</td>
                                                <td style="color:#A43FB8;cursor:pointer;">
                                                        <a  data-fullname="{{$members->mem_firstname}} {{$members->mem_lastname}}" id = "viewPersonDetails" data-gender="{{$members->mem_gender}}" data-mobile="{{$members->mem_mobile}}" data-email="{{$members->mem_email}}" data-church="{{$members->mem_church}}" data-region="{{$members->mem_region}}" data-country="{{$members->mem_country}}" data-allergy="{{$members->mem_allergy}}" data-positioninchurch="{{$members->mem_positioninchurch}}" data-accomodation="{{$members->mem_accomodation}}" data-backdrop="static" data-keyboard="false" data-agegroup="{{$members->mem_agegroup}}" data-boardingday="{{$members->mem_bod}}" data-toggle="modal" data-target="#viewMember"><i class="material-icons">
                                                        visibility
                                                        </i></a>
                                                        <a data-firstname="{{$members->mem_firstname}}" data-lastname="{{$members->mem_lastname}}" id = "editPersonDetails" data-gender="{{$members->mem_gender}}" data-mobile="{{$members->mem_mobile}}" data-email="{{$members->mem_email}}" data-church="{{$members->mem_church}}" data-region="{{$members->mem_region}}" data-country="{{$members->mem_country}}" data-allergy="{{$members->mem_allergy}}" data-backdrop="static" data-keyboard="false" data-positioninchurch="{{$members->mem_positioninchurch}}" data-accomodation="{{$members->mem_accomodation}}" data-agegroup="{{$members->mem_agegroup}}" data-boardingday="{{$members->mem_bod}}" data-toggle="modal" data-target="#editMember"><i class="material-icons">
                                                        edit
                                                        </i></a>
                                                        <a data-firstname="{{$members->mem_firstname}}" data-lastname="{{$members->mem_lastname}}" data-region="{{$members->mem_region}}" data-memid="{{$members->mem_id}}" data-backdrop="static" data-keyboard="false" data-country="{{$members->mem_country}}" id = "deletePersonDetails" data-toggle="modal" data-target="#deleteMember"><i class="material-icons">
                                                        delete_forever
                                                        </i></a> 
                                                </td>
                                            </tr>
                                            <?php $n++; ?> 
                                            @endforeach
                                        @else
                                            <tr><td>No Members Registered</td></tr>
                                        @endif
                                        
                                    </tbody>
                                </table>
                                <div class="modal fade" id="editMember" tabindex="-1" role="dialog" aria-labelledby="editMemberLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="editMemberLabel"><center>Edit Member Details</center></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body editPersons">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label"></label>
                                                                        <input type="text" name="efirstname" id="efirstname" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group label-floating">
                                                                        <input type="text" name="elastname" id="elastname" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group label-floating">
                                                                        <label class="control-label"></label>
                                                                        <input type="text" name="emobile" id="emobile" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                            </div>
                                    </div>
                              </div>
                              <!-- End of EditMemberModal -->
                              <div class="modal fade viewPerson" id="viewMember" tabindex="-1" role="dialog" aria-labelledby="viewMemberLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="viewMemberLabel"><center>Member Details</center></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body viewPersons">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    Full Name: <div id="fullname"></div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    Gender: <div id="gender"></div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    Mobile: <div id="mobilephone"></div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    Email: <div id="email"></div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    Church: <div id="churchname"></div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    Region: <div id="regionname"></div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    Country: <div id="countryname"></div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    Allergy: <div id="anyallergy"></div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    Position in Church: <div id="pic"></div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    Boarding/Day: <div id="bod"></div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    Age Group: <div id="ag"></div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    Accomodation: <div id="acc"></div>
                                                                </div>
                                                            </div>                         
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                        </div>
                                            </div>
                                    </div>
                              </div>
                              <!-- End of ViewMemberModal -->
                              <div class="modal fade" id="deleteMember" tabindex="-1" role="dialog" aria-labelledby="deleteMemberLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteMemberLabel"><center>Delete Member</center></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <form class="deletemember" method="post" action="/deletemember" id="deletemember">
                                                            {{csrf_field()}}
                                                            <div class="modal-body deletemember">
                                                                    <div class="isa_derror" style="border: 2px solid #fff;height:40px;background:red;border-radius:8px;padding-top:10px;color:#fff;font-size:12px;margin-top:-25px;margin-bottom:3px;text-align:center;display:none;">
                                                                    <i class="fa fa-times-circle"></i>
                                                                    </div>
                                                                    <div class="isa_dsucc" style="border: 2px solid #fff;height:40px;background:green;border-radius:8px;padding-top:10px;color:#fff;font-size:12px;margin-top:-25px;margin-bottom:3px;text-align:center;display:none;">
                                                                    <i class="fa fa-times-circle"></i>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                        Are you sure you want to delete <strong><span id="dfirstname"></span>&nbsp;<span id="dlastname"></span>?</strong>
                                                                            <input style="display:none;" type="text" name="memid" id="memid" class="form-control"><div id="memid"></div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" id="deletebuildmember" class="btn btn-primary">Delete</button>
                                                            </div>
                                                        </form>
                                            </div>
                                    </div>
                              </div>
                              <!-- End of DeleteMemberModal -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </div>
                <div class="container-fluid" id="tifuser" style="display:none;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Register Member Here - BUILD CONFERENCE 2018</h4>
                                </div>
                                <div class="card-content">
                                <form class="savemember" method="post" action="savememberbuild" id="savemember">
							        {{csrf_field()}}
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="isa_error" style="border: 2px solid #fff;height:40px;background:red;border-radius:8px;padding-top:10px;color:#fff;font-size:12px;margin-top:-25px;margin-bottom:3px;text-align:center;display:none;">
                                                <i class="fa fa-times-circle"></i>
                                                </div>
                                                <div class="succ" style="border: 2px solid #fff;height:40px;background:green;border-radius:8px;padding-top:10px;color:#fff;font-size:12px;margin-top:-25px;margin-bottom:3px;text-align:center;display:none;">
                                                <i class="fa fa-times-circle"></i>
                                                </div>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">First Name</label>
                                                    <input type="text" class="form-control" id="firstname" name="firstname">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" class="form-control"  id="lastname" name="lastname">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <select class="form-control show-tick" name ="gender" id="gender">
                                                    <option selected="selected">Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Mobile</label>
                                                    <input type="text" name="mobile" id="mobile" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email</label>
                                                    <input type="email" name="email" id="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                @if($memberChurches)
                                                    <select class="form-control show-tick" name="church" >
                                                        <option selected="selected" disabled="disabled">Select Church</option>
                                                    @foreach($memberChurches as $memberChurch)
                                                        <option value="{{$memberChurch->church_abbreviation}}">{{$memberChurch->church_abbreviation}}</option>
                                                    @endforeach
                                                    </select>
                                                @endif
                                            </div>
                                            <div class="col-md-3" style="display:none;" >
                                                @if($activeEvent)
                                                    <select class="form-control show-tick" name="eventname">
                                                    @foreach($activeEvent as $activeEven)
                                                        <option value="{{$activeEven->eventname}}">{{$activeEven->eventname}}</option>
                                                    @endforeach
                                                    </select>
                                                @endif
                                            </div>
                                            <div class="col-md-3">
                                                @if($memberRegions)
                                                    <select class="form-control show-tick" name="region">
                                                        <option selected="selected" disabled="disabled">Select Region</option>
                                                    @foreach($memberRegions as $memberRegion)
                                                        <option value="{{$memberRegion->reg_name}}">{{$memberRegion->reg_name}}</option>
                                                    @endforeach
                                                    </select>
                                                @endif
                                            </div>
                                            <div class="col-md-3">
                                                @if($memberCountries)
                                                    <select class="form-control show-tick" name="country">
                                                        <option selected="selected" disabled="disabled">Select Country</option>
                                                    @foreach($memberCountries as $memberCountry)
                                                        <option value="{{$memberCountry->name}}">{{$memberCountry->name}}</option>
                                                    @endforeach
                                                    </select>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                @if($memberRoles)
                                                    <select class="form-control show-tick" name="positioninchurch" id="positioninchurch">
                                                    <option selected="selected" disabled="disabled">Position in Church</option>
                                                    @foreach($memberRoles as $memberRole)
                                                        <option value="{{$memberRole->mem_rolename}}">{{$memberRole->mem_rolename}}</option>
                                                    @endforeach
                                                    </select>
                                                @endif
                                            </div>
                                            <div class="col-md-3">
                                                    <select class="form-control show-tick" name="allergy" >
                                                        <option selected="selected" disabled="disabled">Do you have an Allergy?</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                            </div>
                                            <div class="col-md-3" style="display:none;" >
                                                @if($activeEvent)
                                                    <select class="form-control show-tick" name="eventname">
                                                    @foreach($activeEvent as $activeEven)
                                                        <option value="{{$activeEven->eventname}}">{{$activeEven->eventname}}</option>
                                                    @endforeach
                                                    </select>
                                                @endif
                                            </div>
                                            <div class="col-md-2">
                                                    <select class="form-control show-tick" name="boardingday">
                                                        <option selected="selected" disabled="disabled">Are you Boarding/Day?</option>
                                                        <option value="Boarding">Boarding</option>
                                                        <option value="Day">Day</option>
                                                    </select>
                                            </div>
                                            <div class="col-md-2">
                                                    <select class="form-control show-tick" name="accomodation">
                                                        <option selected="selected" disabled="disabled">Private/Public</option>
                                                        <option value="Private">Private</option>
                                                        <option value="Public">Public</option>
                                                    </select>
                                            </div>
                                            <div class="col-md-2">
                                                    <select class="form-control show-tick" name="agegroup">
                                                        <option selected="selected" disabled="disabled">Select Age Group</option>
                                                        <option value="Below 20">Below 20</option>
                                                        <option value="21 - 30">21 - 30</option>
                                                        <option value="31 - 40">31 - 40</option>
                                                        <option value="41 - 60">41 - 60</option>
                                                        <option value="Above 60">Above 60</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="row" style="display:none;" id="loader">
                                            <div class="col-md-2"><span style="width:10px;height:10px;" ><img src="images/loader.gif" height="10px" width="10px"></span>
                                            </div>
                                        </div>
                                        <button id="savebuildmember" class="btn btn-primary pull-right">Save</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Begin of offerings -->
                <div class="container-fluid" id="addofferings" style="display:none;">
                    <!-- Begin of Row 1-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Main Service</h4>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Amount</label>
                                                    <input type="text" class="form-control" id="firstname" name="firstname">
                                                </div>
                                                <div class="form-control-wrapper">
                                                    <input type="text" id="min-date" class="form-control floating-label" placeholder="Date">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Save</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">English Service</h4>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Amount</label>
                                                    <input type="text" class="form-control" id="firstname" name="firstname">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                @if($memberCountries)
                                                    <select class="form-control show-tick">
                                                        <option selected="selected">Select Country</option>
                                                    @foreach($memberCountries as $memberCountry)
                                                        <option value="{{$memberCountry->name}}">{{$memberCountry->name}}</option>
                                                    @endforeach
                                                    </select>
                                                @endif
                                            </div>
                                            
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Save</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End or Row 1 -->
                    <!-- Begin row 2 -->
                    <div class="row">
                    <div class="col-md-6">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Sunday School</h4>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Amount</label>
                                                    <input type="text" class="form-control" id="firstname" name="firstname">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Abbreviation</label>
                                                    <input type="text" class="form-control"  id="lastname" name="lastname">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                @if($memberRegions)
                                                    <select class="form-control show-tick">
                                                        <option selected="selected">Select Region</option>
                                                    @foreach($memberRegions as $memberRegion)
                                                        <option value="{{$memberRegion->reg_name}}">{{$memberRegion->reg_name}}</option>
                                                    @endforeach
                                                    </select>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                @if($memberCountries)
                                                    <select class="form-control show-tick">
                                                        <option selected="selected">Select Country</option>
                                                    @foreach($memberCountries as $memberCountry)
                                                        <option value="{{$memberCountry->name}}">{{$memberCountry->name}}</option>
                                                    @endforeach
                                                    </select>
                                                @endif
                                            </div>
                                            
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Save</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Other Offerings</h4>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Amount</label>
                                                    <input type="text" class="form-control" id="eventname" name="eventname">
                                                </div>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Description</label>
                                                    <input type="text" class="form-control" id="eventname" name="eventname">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" id="setevent" class="btn btn-primary pull-right">Save</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                            <!-- End of row2 col2 -->
                    </div>
                </div>
                <!-- End of offerings -->
                 <!-- Start of Export/Import -->
                 <div class="container-fluid" id="import_export" style="display:none;">
                    <!-- Begin of Row 1-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Import/Export</h4>
                                </div>
                                <div class="card-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                @if($message = Session::get('success'))
                                                    <div class="alert alert-info alert-dismissible fade in" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                    <strong>Success!</strong> {{ $message }}
                                                    </div>
                                                @endif
                                                {!! Session::forget('success') !!}<br/>
                                            <a href="{{ URL::to('downloadExcelBuild/xls') }}"><button class="btn btn-success">Download Excel xls</button></a>
                                            <!-- <a href="{{ URL::to('downloadExcel/xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a> -->
                                            <a href="{{ URL::to('downloadExcelBuild/csv') }}"><button class="btn btn-success">Download CSV</button></a>
                                            <div class="row" style="display:none;" id="loaderexcel">
                                                <div class="col-md-2"><span style="width:8px;height:10px;" ><img src="images/loader.gif" height="10px" width="10px"></span>
                                                </div>
                                            </div>
                                                <div class="form-control-wrapper">
                                                <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ URL::to('importExcelBuild') }}" class="uploadexcel form-horizontal" method="post" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                    <input type="file" name="import_file" id="importfile" />
                                                    <button class="btn btn-primary" id="uploadfile">Import File</button>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End or Row 1 -->
                    </div>
                <div class="container-fluid" id="addentries" style="display:none;">
                    <!-- Begin of Row 1-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Add Country</h4>
                                </div>
                                <div class="card-content">
                                    <form class="addcountry" method="post" action="/addcountry" id="addcountry">
                                    {{csrf_field()}}
                                        <div class="isa_cerror" style="border: 2px solid #fff;height:40px;background:red;border-radius:8px;padding-top:10px;color:#fff;font-size:12px;margin-top:-25px;margin-bottom:3px;text-align:center;display:none;">
                                        <i class="fa fa-times-circle"></i>
                                        </div>
                                        <div class="isa_csucc" style="border: 2px solid #fff;height:40px;background:green;border-radius:8px;padding-top:10px;color:#fff;font-size:12px;margin-top:-25px;margin-bottom:3px;text-align:center;display:none;">
                                        <i class="fa fa-times-circle"></i>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Country Name</label>
                                                    <input type="text" class="form-control" id="countryname" name="countryname">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" id="addnewcountry" class="btn btn-primary pull-right">Save</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Add Region</h4>
                                </div>
                                <div class="card-content">
                                    <form class="addregion" method="post" action="/addregion" id="addregion">
                                        {{csrf_field()}}
                                            <div class="isa_rerror" style="border: 2px solid #fff;height:40px;background:red;border-radius:8px;padding-top:10px;color:#fff;font-size:12px;margin-top:-25px;margin-bottom:3px;text-align:center;display:none;">
                                            <i class="fa fa-times-circle"></i>
                                            </div>
                                            <div class="isa_rsucc" style="border: 2px solid #fff;height:40px;background:green;border-radius:8px;padding-top:10px;color:#fff;font-size:12px;margin-top:-25px;margin-bottom:3px;text-align:center;display:none;">
                                            <i class="fa fa-times-circle"></i>
                                            </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Region Name</label>
                                                    <input type="text"  class="form-control" id="rname" name="rname">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                @if($memberCountries)
                                                    <select class="form-control show-tick"  name="cname">
                                                        <option selected="selected">Select Country</option>
                                                    @foreach($memberCountries as $memberCountry)
                                                        <option value="{{$memberCountry->name}}">{{$memberCountry->name}}</option>
                                                    @endforeach
                                                    </select>
                                                @endif
                                            </div>
                                            
                                        </div>
                                        <button type="submit"  id="addnewregion" class="btn btn-primary pull-right">Save</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End or Row 1 -->
                    <!-- Begin row 2 -->
                    <div class="row">
                    <div class="col-md-6">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Add Church</h4>
                                </div>
                                <div class="card-content">
                                    <form class="addchurch" method="post" action="/addchurch" id="addchurch">
                                        {{csrf_field()}}
                                            <div class="isa_ccerror" style="border: 2px solid #fff;height:40px;background:red;border-radius:8px;padding-top:10px;color:#fff;font-size:12px;margin-top:-25px;margin-bottom:3px;text-align:center;display:none;">
                                            <i class="fa fa-times-circle"></i>
                                            </div>
                                            <div class="isa_ccsucc" style="border: 2px solid #fff;height:40px;background:green;border-radius:8px;padding-top:10px;color:#fff;font-size:12px;margin-top:-25px;margin-bottom:3px;text-align:center;display:none;">
                                            <i class="fa fa-times-circle"></i>
                                            </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Church Name</label>
                                                    <input type="text" class="form-control" id="churchname" name="churchname">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Abbreviation</label>
                                                    <input type="text" class="form-control"  id="abb" name="abb">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                @if($memberRegions)
                                                    <select class="form-control show-tick" name="aregion">
                                                        <option selected="selected">Select Region</option>
                                                    @foreach($memberRegions as $memberRegion)
                                                        <option value="{{$memberRegion->reg_name}}">{{$memberRegion->reg_name}}</option>
                                                    @endforeach
                                                    </select>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                @if($memberCountries)
                                                    <select class="form-control show-tick" name="aCountry">
                                                        <option selected="selected">Select Country</option>
                                                    @foreach($memberCountries as $memberCountry)
                                                        <option value="{{$memberCountry->name}}">{{$memberCountry->name}}</option>
                                                    @endforeach
                                                    </select>
                                                @endif
                                            </div>
                                            
                                        </div>
                                        <button type="submit" id="addnewchurch" class="btn btn-primary pull-right">Save</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Set Default Event</h4>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Event Name</label>
                                                    <input type="text" class="form-control" id="eventname" name="eventname">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" id="setevent" class="btn btn-primary pull-right">Save</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                            <!-- End of row2 col2 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="{{asset('assets/js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{asset('assets/js/material.min.js')}}" type="text/javascript"></script>
<!--  Dynamic Elements plugin -->
<script src="{{asset('assets/js/arrive.min.js')}}"></script>
<!--  PerfectScrollbar Library -->
<script src="{{asset('assets/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('assets/js/bootstrap-notify.js')}}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{asset('assets/js/material-dashboard.js?v=1.2.0')}}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready( function () {
    $('#memberstable').DataTable();
} );
$('li > a').click(function() {
    $('li').removeClass();
    $(this).parent().addClass('active');
});
$('#allMembers').click(function() {
    $('#tifuser').hide();
    $('#tifstats').hide();
    $('#addentries').hide();
    $('#addofferings').hide();
    $('#import_export').hide();
    $('#buildstats').hide();
    $('#accomodationdiv').hide();
    $('#tifac_summary').hide();
    $('#tifsilver').slideDown("slow");
    
});
$('#assignAccomodation').click(function() {
    $('#tifuser').hide();
    $('#tifstats').hide();
    $('#addentries').hide();
    $('#addofferings').hide();
    $('#buildstats').hide();
    $('#import_export').hide();
    $('#tifac_summary').hide();
    $('#tifsilver').hide();
    $('#accomodationdiv').slideDown("slow");
});
$('#buildstatslink').click(function() {
    $('#tifuser').hide();
    $('#tifstats').hide();
    $('#addentries').hide();
    $('#addofferings').hide();
    $('#import_export').hide();
    $('#tifac_summary').hide();
    $('#tifsilver').hide();
    $('#accomodationdiv').hide();
    $('#buildstats').slideDown("slow");
});
$('#userProfile').click(function() {
    $('#tifstats').hide();
    $('#tifsilver').hide();
    $('#buildstats').hide();
    $('#tifdiamond').hide();
    $('#addentries').hide();
    $('#accomodationdiv').hide();
    $('#addofferings').hide();
    $('#import_export').hide();
    $('#tifuser').slideDown("slow");
});
$('#offering').click(function() {
    $('#tifuser').hide();
    $('#tifsilver').hide();
    $('#accomodationdiv').hide();
    $('#buildstats').hide();
    $('#tifstats').hide();
    $('#tifac_summary').hide();
    $('#addentries').hide();
    $('#import_export').hide();
    $('#addofferings').slideDown("slow");
});
$('#silverTransactions').click(function() {
    $('#tifuser').hide();
    $('#tifstats').hide();
    $('#tifdiamond').hide();
    $('#buildstats').hide();
    $('#import_export').hide();
    $('#accomodationdiv').hide();
    $('#addentries').hide();
    $('#addofferings').hide();
    $('#tifac_summary').hide();
    $('#tifsilver').slideDown("slow");
});
$('#userDashboard').click(function() {
    $('#tifuser').hide();
    $('#tifsilver').hide();
    $('#addentries').hide();
    $('#addofferings').hide();
    $('#buildstats').hide();
    $('#accomodationdiv').hide();
    $('#import_export').hide();
    $('#tifac_summary').hide();
    $('#tifstats').slideDown("slow");
});
$('#entries').click(function() {
    $('#tifuser').hide();
    $('#tifsilver').hide();
    $('#tifstats').hide();
    $('#buildstats').hide();
    $('#accomodationdiv').hide();
    $('#addofferings').hide();
    $('#import_export').hide();
    $('#tifac_summary').hide();
    $('#addentries').slideDown("slow");
});
$('#accountSummary').click(function() {
    $('#tifuser').hide();
    $('#tifsilver').hide();
    $('#tifstats').hide();
    $('#tifdiamond').hide();
    $('#buildstats').hide();
    $('#addentries').hide();
    $('#accomodationdiv').hide();
    $('#addofferings').hide();
    $('#import_export').hide();
    $('#tifac_summary').slideDown("slow");
});
$('#exportimport').click(function() {
    $('#tifuser').hide();
    $('#tifsilver').hide();
    $('#tifstats').hide();
    $('#tifac_summary').hide();
    $('#addentries').hide();
    $('#buildstats').hide();
    $('#accomodationdiv').hide();
    $('#addofferings').hide();
    $('#import_export').slideDown("slow");
});
$(".memberstable").on("click", "#viewPersonDetails", function (){ 
    var fullname = $(this).data('fullname');
    var gender = $(this).data('gender');
    var mobile = $(this).data('mobile');
    var email = $(this).data('email');
    var church = $(this).data('church');
    var region = $(this).data('region');
    var country = $(this).data('country');
    var allergy = $(this).data('allergy');
    var positioninchurch = $(this).data('positioninchurch');
    var boardingday = $(this).data('boardingday');
    var agegroup = $(this).data('agegroup');
    var accomodation = $(this).data('accomodation');
    $('.viewPersons #fullname').text(fullname);
    $('.viewPersons #gender').text(gender);
    $('.viewPersons #mobilephone').text(mobile);
    $('.viewPersons #email').text(email);
    $('.viewPersons #churchname').text(church);
    $('.viewPersons #regionname').text(region);
    $('.viewPersons #countryname').text(country);
    $('.viewPersons #anyallergy').text(allergy);
    $('.viewPersons #pic').text(positioninchurch);
    $('.viewPersons #bod').text(boardingday);
    $('.viewPersons #ag').text(agegroup);
    $('.viewPersons #acc').text(accomodation);
  });
  $(".memberstable").on("click", "#editPersonDetails", function (){ 
    var firstname = $(this).data('firstname');
    var lastname = $(this).data('lastname');
    var gender = $(this).data('gender');
    var mobile = $(this).data('mobile');
    var email = $(this).data('email');
    var church = $(this).data('church');
    var region = $(this).data('region');
    var country = $(this).data('country');
    var allergy = $(this).data('allergy');
    var positioninchurch = $(this).data('positioninchurch');
    var boardingday = $(this).data('boardingday');
    var agegroup = $(this).data('agegroup');
    var accomodation = $(this).data('accomodation');
    $('.editPersons #efirstname').val(firstname);
    $('.editPersons #elastname').val(lastname);
    $('.editPersons #egender').val(gender);
    $('.editPersons #emobile').val(mobile);
    $('.editPersons #eemail').val(email);
    $('.editPersons #echurchname').val(church);
    $('.editPersons #eregionname').val(region);
    $('.editPersons #ecountryname').val(country);
    $('.editPersons #eanyallergy').val(allergy);
    $('.editPersons #epic').val(positioninchurch);
    $('.editPersons #ebod').val(boardingday);
    $('.editPersons #eag').val(agegroup);
    $('.editPersons #eacc').val(accomodation);
  });
  $(".memberstable").on("click", "#deletePersonDetails", function (){ 
    var firstname = $(this).data('firstname');
    var lastname = $(this).data('lastname');
    var gender = $(this).data('gender');
    var mobile = $(this).data('mobile');
    var id = $(this).data('memid');
    var church = $(this).data('church');
    var region = $(this).data('region');
    var country = $(this).data('country');
    var allergy = $(this).data('allergy');
    var positioninchurch = $(this).data('positioninchurch');
    var boardingday = $(this).data('boardingday');
    var agegroup = $(this).data('agegroup');
    var accomodation = $(this).data('accomodation');
    $('.deletemember #dfirstname').text(firstname);
    $('.deletemember #dlastname').text(lastname);
    $('.deletemember #memid').val(id);
  });
</script>
   
<script>
var ctx = document.getElementById("chart_users_with_gender").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Tanzania", "Kenya", "Uganda", "Rwanda", "Burundi","Congo","Mauritius", "Zimbabwe","Ethiopia"],
        datasets: [{
            label: 'Males',
            data: [ {{$countMalesTz}}, {{$countMalesKn}}, {{$countMalesUg}}, {{$countMalesRn}}, {{$countMalesBn}}, {{$countMalesCn}}, {{$countMalesMs}}, {{$countMalesZim}}, {{$countMalesEthio}}],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)'
            ],
            borderWidth: 1
        },{
            label: 'Females',
            data: [{{$countFemalesTz}}, {{$countFemalesKn}},{{$countFemalesUg}}, {{$countFemalesRn}}, {{$countFemalesBn}}, {{$countFemalesCn}}, {{$countFemalesMs}},{{$countFemalesZim}},{{$countFemalesEthio}}],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
$('#changeDashboard').on('change', function() {
    var yearselected = this.value;
    if(yearselected=='2018'){
        $.ajax({
                type: 'get',
                url : 'curr_dashboard',
                data: yearselected,
                success:function(response){
                    // loader('off');
                    window.location.href = response.redirect
                 },error:function(response){
                    alert('error');
                }
            });
    }else if(yearselected=='2017'){
        window.location.href = 'dashboard';
    }else if(yearselected=='zgact'){
        window.location.href = 'zgact_dashboard';
    }  
});
$(document).ready(function(){

   $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      } 
  });
  $(function(){ 
      $('#lastname').keyup(function() {
        removeError();
        removeMsg();
      });
      $('#firstname').keyup(function() {
        removeError();
        removeMsg();
      });
  });
  function removeError(){
      var div = ".isa_error";
      $(div).slideUp('slow','swing');
  }
  function removeMsg(){
      var div = ".succ";
      $(div).slideUp('slow','swing');
  }
   function loader(v){
      if(v=='on'){
            $('#loader').show();
          }else{
            $('.save-member').css({
              opacity:1
            });
            $('#loader').hide();
        }
      }
      function loaderupload(v){
      if(v=='on'){
            $('#loaderexcel').show();
          }else{
            $('.uploadexcel').css({
              opacity:1
            });
            $('#loaderexcel').hide();
        }
      }
$('#savebuildmember').on('click',function(e){
    e.preventDefault();
           var savebuild = $('.savemember').serializeArray();
        var url = $('.savemember').attr('action');
        
        if(($('#firstname').val()=='') || ($('#lastname').val()=='') || ($('#mobile').val()=='')){
          loader('off');
            $('.isa_error').text('Fields CAN NOT be EMPTY!')
            $('.isa_error').slideDown("slow");
        }else{
            loader('on');
          $.ajax({
                type: 'post',
                url : url,
                data: savebuild,
                success:function(response){
                  loader('off');
                  $('.isa_error').hide();
                    $.each(savebuild, function(i,k){
                        $('#' + k.name).val('');
                      });
                      $('.succ').text('Successfully Registered!')
                     $('.succ').slideDown("slow");
                 },error:function(response){
                  loader('off');
                     $('.succ').hide();
                      $('.isa_error').text(response.responseJSON.error)
                      $('.isa_error').slideDown("slow");
                      $.each(savebuild, function(i,k){
                        $('.' + k.name).val('');
                      });
                }
            });
        }
        
      });

      $('#deletebuildmember').on('click',function(e){
    e.preventDefault();
           var dbuild = $('.deletemember').serializeArray();
        var url = $('.deletemember').attr('action');
          $.ajax({
                type: 'post',
                url : url,
                data: dbuild,
                success:function(response){
                    if(response.sms==1){
                        $('.isa_derror').hide();
                      $('.isa_dsucc').text('Member Successfully Deleted!')
                     $('.isa_dsucc').slideDown("slow");
                    }
                  $('.isa_derror').hide();
                      $('.dsucc').text('Successfully Registered!')
                     $('.dsucc').slideDown("slow");
                 },error:function(response){
                     $('.dsucc').hide();
                      $('.isa_derror').text(response.responseJSON.error)
                      $('.isa_derror').slideDown("slow");
                }
            });
      });
      $('#addnewcountry').on('click',function(e){
    e.preventDefault();
           var addcountry = $('.addcountry').serializeArray();
        var url = $('.addcountry').attr('action');
          $.ajax({
                type: 'post',
                url : url,
                data: addcountry,
                success:function(response){
                    if(response.sms==1){
                        $('.isa_cerror').hide();
                      $('.isa_csucc').text('Country Successfully Added!')
                     $('.isa_csucc').slideDown("slow");
                    }
                 },error:function(response){
                     $('.dsucc').hide();
                      $('.isa_derror').text(response.responseJSON.error)
                      $('.isa_derror').slideDown("slow");
                }
            });
      });
      $('#addnewregion').on('click',function(e){
    e.preventDefault();
           var addregion = $('.addregion').serializeArray();
        var url = $('.addregion').attr('action');
          $.ajax({
                type: 'post',
                url : url,
                data: addregion,
                success:function(response){
                    if(response.sms==1){
                        $('.isa_rerror').hide();
                      $('.isa_rsucc').text('Region Successfully Added!')
                     $('.isa_rsucc').slideDown("slow");
                    }
                 },error:function(response){
                     $('.rdsucc').hide();
                      $('.isa_rerror').text(response.responseJSON.error)
                      $('.isa_rerror').slideDown("slow");
                }
            });
      });
      $('#addnewchurch').on('click',function(e){
    e.preventDefault();
           var addchurch = $('.addchurch').serializeArray();
        var url = $('.addchurch').attr('action');
          $.ajax({
                type: 'post',
                url : url,
                data: addchurch,
                success:function(response){
                    if(response.sms==1){
                        $('.isa_ccerror').hide();
                      $('.isa_ccsucc').text('Church Successfully Added!')
                     $('.isa_ccsucc').slideDown("slow");
                    }
                 },error:function(response){
                     $('.isa_ccsucc').hide();
                      $('.isa_ccerror').text(response.responseJSON.error)
                      $('.isa_ccerror').slideDown("slow");
                }
            });
      });
    });
</script>
</html>