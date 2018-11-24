<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Tanzania Investment Funds ~ Dashboard</title>
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
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="#" class="simple-text"><?php date_default_timezone_set('Africa/Nairobi')?>
                    TIF ~ Dashboard 
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active" id="userDashboard">
                        <!-- <a href="{{URL::to('dashboard')}}"> -->
                         <a href="#">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li id="userProfile">
                        <!-- <a href="{{URL::to('user')}}"> -->
                         <a href="#">
                            <i class="material-icons">person</i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li id="silverTransactions">
                        <a href="#">
                            <i class="material-icons">content_paste</i>
                            <p>Payments (Withdraw)</p>
                        </a>
                    </li>
                    <li id="accountSummary">
                        <a href="#">
                            <i class="material-icons">bubble_chart</i>
                            <p>Account Summary</p>
                        </a>
                    </li>
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
                        </button>
                        <a class="navbar-brand" href="#"> Tanzania Investment Fund ~ Dashboard ~ Welcome  {{ucfirst(Session::get('fullname')) }} ~ {{ ucfirst(Session::get('level'))}}; &nbsp;- {{date("l jS F Y, h:i A.")}}</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Juma Ali Tsh. 1,000,000</a>
                                    </li>
                                    <li>
                                        <a href="#">George Ali Tsh. 1,000,000</a>
                                    </li>
                                    <li>
                                        <a href="#">Wwere Ali Tsh. 1,000,000</a>
                                    </li>
                                    <li>
                                        <a href="#">Halima Ali Tsh. 1,000,000</a>
                                    </li>
                                    <li>
                                        <a href="#">Another One</a>
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
                                <div class="card-header" data-background-color="purple">
                                    <i class="material-icons">attach_money</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Total Investment</p>
                                    <h4 class="title">15,524,000</h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-warning">date_range</i>
                                        <a href="#pablo">Until today</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                    <i class="material-icons">attach_money</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Total Withdraws</p>
                                    <h4 class="title"> 124,000
                                        
                                    </h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Last 24 Hours
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                   <i class="material-icons">attach_money</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Total Fees</p>
                                    <h4 class="title">75,254</h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> Tracked from Github
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                   <i class="material-icons">people</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Members</p>
                                    <h4 class="title">245</h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Member Transactions</h4>
                                    <p class="category">From 22nd January, 2018</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table id="userstable" class="table table-hover">
                                        <thead class="text-warning">
                                            <th>ID</th>
                                            <th>Ref No</th>
                                            <th>Name</th>
                                            <th>Number</th>
                                            <th>Deposit</th>
                                            <th>Amount</th>
                                            <th>Fees</th>
                                            <th>Package</th>
                                            <th>Date</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>5HJH641FGJM</td>
                                                <td>Dakota Rice</td>
                                                <td>0715427896</td>
                                                <td>Tsh. 1,420,000/=</td>
                                                <td>Tsh. 420,000/=</td>
                                                <td>Tsh. 20,000/=</td>
                                                <td><span class="badge">Diamond</span></td>
                                                <td>20-05-2018</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>5HJH641FGJM</td>
                                                <td>Dakota Rice</td>
                                                <td>0715427896</td>
                                                <td>Tsh. 1,420,000/=</td>
                                                <td>Tsh. 420,000/=</td>
                                                <td>Tsh. 20,000/=</td>
                                                <td><span class="badge">Silver</span></td>
                                                <td>20-05-2018</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>5HJH641FGJM</td>
                                                <td>Dakota Rice</td>
                                                <td>0715427896</td>
                                                <td>Tsh. 1,420,000/=</td>
                                                <td>Tsh. 420,000/=</td>
                                                <td>Tsh. 20,000/=</td>
                                                <td><span class="badge success">Silver</span></td>
                                                <td>20-05-2018</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>5HJH641FGJM</td>
                                                <td>Dakota Rice</td>
                                                <td>0715427896</td>
                                                <td>Tsh. 1,420,000/=</td>
                                                <td>Tsh. 420,000/=</td>
                                                <td>Tsh. 20,000/=</td>
                                                <td><span class="badge">Diamond</span></td>
                                                <td>20-05-2018</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid" id="tifsilver" style="display:none;">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                    <i class="material-icons">attach_money</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Sil. Investment</p>
                                    <h4 class="title">124,000</h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-warning">date_range</i>
                                        <a href="#pablo">Until today</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                    <i class="material-icons">attach_money</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Silver Withdraws</p>
                                    <h4 class="title"> 454,000
                                        
                                    </h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Last 24 Hours
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                   <i class="material-icons">attach_money</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Silver Fees</p>
                                    <h4 class="title">34,254</h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> Tracked from Github
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                   <i class="material-icons">people</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Silver Members</p>
                                    <h4 class="title">22</h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Member Transactions</h4>
                                    <p class="category">From 22nd January, 2018</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table id="userstable" class="table table-hover">
                                        <thead class="text-warning">
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Number</th>
                                            <th>Phase</th>
                                            <th>Amount</th>
                                            <th>Package</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Dakota Rice</td>
                                                <td>0715427896</td>
                                                <td>II</td>
                                                <td>Tsh. 420,000/=</td>
                                                <td><span class="badge">Silver</span></td>
                                                <td><button>Pay Now</button></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Dakota Rice</td>
                                                <td>0715427896</td>
                                                <td>IV</td>
                                                <td>Tsh. 420,000/=</td>
                                                <td><span class="badge">Diamond</span></td>
                                                <td><button>Pay Now</button></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Dakota Rice</td>
                                                <td>0715427896</td>
                                                <td>II</td>
                                                <td>Tsh. 420,000/=</td>
                                                <td><span class="badge">Diamond</span></td>
                                                <td><button>Pay Now</button></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Dakota Rice</td>
                                                <td>0715427896</td>
                                                <td>III</td>
                                                <td>Tsh. 420,000/=</td>
                                                <td><span class="badge">Silver</span></td>
                                                <td><button>Pay Now</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid" id="tifdiamond" style="display:none;">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                    <i class="material-icons">attach_money</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Diamond Investment</p>
                                    <h4 class="title">53,000</h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-warning">date_range</i>
                                        <a href="#pablo">Until today</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                    <i class="material-icons">attach_money</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Diamond Withdraws</p>
                                    <h4 class="title"> 674,000
                                        
                                    </h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Last 24 Hours
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                   <i class="material-icons">attach_money</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Diamond Fees So Far</p>
                                    <h4 class="title">678,254</h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> Tracked from Github
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                   <i class="material-icons">people</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Total Diamond Members</p>
                                    <h4 class="title">22</h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Member Transactions</h4>
                                    <p class="category">From 22nd January, 2018</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table id="userstable" class="table table-hover">
                                        <thead class="text-warning">
                                            <th>ID</th>
                                            <th>Ref No</th>
                                            <th>Name</th>
                                            <th>Number</th>
                                            <th>Phase I</th>
                                            <th>Phase II</th>
                                            <th>Phase III</th>
                                            <th>Phase IV</th>
                                            <th>Package</th>
                                            <th>Date</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>5HJH641FGJM</td>
                                                <td>Dakota Rice</td>
                                                <td>0715427896</td>
                                                <td>Tsh. 1,420,000/=</td>
                                                <td>Tsh. 420,000/=</td>
                                                <td>Tsh. 20,000/=</td>
                                                 <td>Tsh. 420,000/=</td>
                                                <td><span class="badge">Diamond</span></td>
                                                <td>20-05-2018</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>5HJH641FGJM</td>
                                                <td>Dakota Rice</td>
                                                <td>0715427896</td>
                                                <td>Tsh. 1,420,000/=</td>
                                                <td>Tsh. 420,000/=</td>
                                                 <td>Tsh. 420,000/=</td>
                                                <td>Tsh. 20,000/=</td>
                                                <td><span class="badge">Diamond</span></td>
                                                <td>20-05-2018</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>5HJH641FGJM</td>
                                                <td>Dakota Rice</td>
                                                <td>0715427896</td>
                                                <td>Tsh. 1,420,000/=</td>
                                                <td>Tsh. 420,000/=</td>
                                                <td>Tsh. 20,000/=</td>
                                                <td>Tsh. 420,000/=</td>
                                                <td><span class="badge success">Diamond</span></td>
                                                <td>20-05-2018</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>5HJH641FGJM</td>
                                                <td>Dakota Rice</td>
                                                <td>0715427896</td>
                                                <td>Tsh. 1,420,000/=</td>
                                                <td>Tsh. 420,000/=</td>
                                                <td>Tsh. 420,000/=</td>
                                                <td>Tsh. 20,000/=</td>
                                                <td><span class="badge">Diamond</span></td>
                                                <td>20-05-2018</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid" id="tifuser" style="display:none;">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Edit Profile</h4>
                                    <p class="category">Complete your profile</p>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tanzania Investment Fund</label>
                                                    <input type="text" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Username</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email address</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Fist Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>About Me</label>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"> Some description goes here Some description goes here Some description goes here</label>
                                                        <textarea class="form-control" rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="#pablo">
                                        <img class="img" src="../assets/img/faces/marc.jpg" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="category text-gray">CEO / Co-Founder</h6>
                                    <h4 class="card-title">Baraka Buffalo</h4>
                                    <p class="card-content">
                                        Some description goes here Some description goes here Some description goes here Some description goes here Some description goes here Some description goes here
                                    </p>
                                    <!-- <a href="#pablo" class="btn btn-primary btn-round">Follow</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="container-fluid" id="tifac_summary" style="display:none;">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                    <i class="material-icons">attach_money</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Silver Previous Ledge Balance</p>
                                    <h4 class="title">53,000</h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-warning">date_range</i>
                                        <a href="#pablo">Until today</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                    <i class="material-icons">attach_money</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Silver Amount Invested</p>
                                    <h4 class="title"> 674,000
                                        
                                    </h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Last 24 Hours
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                   <i class="material-icons">attach_money</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Silver Fees So Far</p>
                                    <h4 class="title">678,254</h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> Tracked from Github
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                   <i class="material-icons">attach_money</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Silver Withdraw (Payment)</p>
                                    <h4 class="title">22</h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                    <i class="material-icons">attach_money</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Diamond Previous Ledge Balance</p>
                                    <h4 class="title">53,000</h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-warning">date_range</i>
                                        <a href="#pablo">Until today</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                    <i class="material-icons">attach_money</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Diamond Amount Invested</p>
                                    <h4 class="title"> 674,000
                                        
                                    </h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Last 24 Hours
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                   <i class="material-icons">attach_money</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Diamond Fees So Far</p>
                                    <h4 class="title">678,254</h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> Tracked from Github
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                   <i class="material-icons">attach_money</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Diamond Withdraw (Payment)</p>
                                    <h4 class="title">22</h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="https://www.dtcstz.com">Developed by DTCS</a>, Doorway to Career Success
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="{{asset('assets/js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{asset('assets/js/material.min.js')}}" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="{{asset('assets/js/chartist.min.js')}}"></script>
<!--  Dynamic Elements plugin -->
<script src="{{asset('assets/js/arrive.min.js')}}"></script>
<!--  PerfectScrollbar Library -->
<script src="{{asset('assets/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('assets/js/bootstrap-notify.js')}}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{asset('assets/js/material-dashboard.js?v=1.2.0')}}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('assets/js/demo.js')}}"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">

$('li > a').click(function() {
    $('li').removeClass();
    $(this).parent().addClass('active');
});
$('#userProfile').click(function() {
    $('#tifstats').hide();
    $('#tifsilver').hide();
    $('#tifdiamond').hide();
    $('#tifac_summary').hide();
    $('#tifuser').slideDown("slow");
});
$('#silverTransactions').click(function() {
    $('#tifuser').hide();
    $('#tifstats').hide();
    $('#tifdiamond').hide();
    $('#tifac_summary').hide();
    $('#tifsilver').slideDown("slow");
});
$('#userDashboard').click(function() {
    $('#tifuser').hide();
    $('#tifsilver').hide();
    $('#tifdiamond').hide();
    $('#tifac_summary').hide();
    $('#tifstats').slideDown("slow");
});
$('#diamondTransactions').click(function() {
    $('#tifuser').hide();
    $('#tifsilver').hide();
    $('#tifstats').hide();
    $('#tifac_summary').hide();
    $('#tifdiamond').slideDown("slow");
});
$('#accountSummary').click(function() {
    $('#tifuser').hide();
    $('#tifsilver').hide();
    $('#tifstats').hide();
    $('#tifdiamond').hide();
    $('#tifac_summary').slideDown("slow");
});
</script>

</html>