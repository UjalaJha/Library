<nav class="navbar navbar-default" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><image img src="/img/logo.png" alt="Logo"  class="pull-left brand-font" height="25" width="30" >Library</a>
                </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                  
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Pages
                    <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/admin">Admin Page</a>
                        </li>
                        <li><a href="/user">User Page</a>
                        </li>
                        <li><a href="/login"></i>Login Page</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="/"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-history"></i>Transaction Details<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">    
                                        <li>
                                            <a href="flot.html">Current Book Details</a>
                                        </li>
                                        <li>
                                            <a href="morris.html">Previous Issue History</a>
                                        </li>
                                </ul>
                            {{--  <ul class="nav nav-second-level">
                                {{--  <li>
                                    <a href="flot.html">Browse Members</a>
                                </li>
                                <li>
                                    <a href="morris.html">Add/delete Member</a>
                                </li>
                                <li>
                                    <a href="morris.html">Member Card Generator</a>
                                </li>
                                <li>
                                    <a href="morris.html">Import/Export Details</a>
                                </li>  --}}
                            <!-- /.nav-second-level --> 
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-book fa-fw"></i>Book Circulation<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Apply for Issue</a>
                                </li>
                                <li>
                                    <a href="morris.html">Apply for Reissue</a>
                                </li>
                            </ul>
                        </li>
                        {{--  <li>
                            <a href="forms.blade.php"><i class="fa fa-file fa-fw"></i>Book Details<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Browse Books</a>
                                </li>
                                <li>
                                    <a href="morris.html">Add/Delete Books</a>
                                </li>

                                <li>
                                    <a href="morris.html">Generate Overdue List</a>
                                </li>
                                <li>
                                    <a href="morris.html">Checked Out Book Details</a>
                                </li>
        
                                <li>
                                    <a href="flot.html">Generate Barcode</a>
                                </li>
                                <li>
                                    <a href="morris.html">Generate Labels</a>
                                </li>
                                
                            </ul>
                        </li>  --}}
                        <li>
                            <a href="#"><i class="fa fa-newspaper-o fa-fw"></i> Open Public Access Catalogue <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Degree</a>
                                </li>
                                <li>
                                    <a href="buttons.html">MCA</a>
                                </li>
                            
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-book fa-fw"></i>Reference</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-question fa-fw"></i>FAQs</a>
                        </li>
                        
        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>