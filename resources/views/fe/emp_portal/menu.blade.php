@extends('fe.emp_portal.emp_dboard')
@section('menu')
<!-- Main Menu -->
<nav class="main-menu">
    <div class="navbar-header">
        <!-- Toggle Button -->    	
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <div class="navbar-collapse collapse clearfix">
        <ul class="navigation">
            <li class="current dropdown"><a href="{{URL::to('emp_dboard')}}">Home</a>

            </li>
            <li class="dropdown"><a href="{{URL::to('emp-profile')}}">Profile</a>

            </li>
            
            <li class="dropdown"><a href="{{URL::to('add-forum')}}">Forum</a>

            </li>
            <li class="dropdown"><a href="{{URL::to('emp-salary')}}">Salary </a>
            <li><a href="{{URL::to('emp-deposite')}}">Deposite</a></li>


            </li>
            <li><a href="contact.html">Chat </a></li>
            <li><a href="contact.html">Logout</a></li>
        </ul>
    </div>
</nav>
<!-- Main Menu End-->
@endsection