<div class="col-md-2 sidebar pd0">
    <div class="side_user">
        <img class="img-responsive" src="{{asset('admin/images/avatar.png')}}" />
            <h4>Documents Genarate System</h4>
    </div>
    <h2>MAIN NAVIGATION</h2>
    <ul>
        <li><a href="{{url('/backend')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basicone" aria-expanded="false" aria-controls="ui-basic">
                <i class="fa fa-user-circle"></i>
                <span class="menu-title">Users</span>
                <i class="menu-arrow"></i>
                </a>
            <div class="collapse" id="ui-basicone">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/backend/user')}}">Manage User Information</a>
                    </li>
                </ul>
            </div>
            </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basictwo" aria-expanded="false" aria-controls="ui-basic">
                        <i class="fa fa-user-circle"></i>
                            <span class="menu-title">Users Post</span>
                        <i class="menu-arrow"></i>
                     </a>
                    <div class="collapse" id="ui-basictwo">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/backend/user-post')}}">Manage Post Information</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a href="{{url('/backend/contact')}}"><i class="fa  fa-user-circle"></i>Contact</a></li>
                <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
    </ul>
</div><!--sidebar end-->