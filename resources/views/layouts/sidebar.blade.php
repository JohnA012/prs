<nav class="sidebar close">
    <header>
        <div class="image-text">
            <span class="image">
                <img src="{{ asset('images/gili_logo.png') }}" alt="">
            </span>
            <div class="text logo-text">
                <span class="name">PRS</span>
                <span class="profession"></span>
            </div>
        </div>

        <i class='bx bx-chevron-right toggle'></i>
    </header>
    <!-- HOVER SUBLINK START-->
    <div>
        <ul class="sublink-hover" id="sub-nav-hover2">
            <li class="sublink-item text-secondary" id="sublinkHeader" aria-disabled="true"><b>Purchase</b></li>
            <li class="sublink-item">
                <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('plant-profile') }}">
                    <span class="sub-nav-text">Plant Profile Equipment</span>
                </a>
            </li>
            <li class="sublink-item">
                <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('purchase-request') }}">
                    <span class="sub-nav-text">Plant Profile Manpower</span>
                </a>
            </li>
     
        </ul>

        <ul class="sublink-hover" id="sub-nav-hover3">
            <li class="sublink-item text-secondary" id="sublinkHeader" aria-disabled="true"><b>Purchase</b></li>
            <li class="sublink-item">
                <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('add-purchase-request') }}">
                    <span class="sub-nav-text">Purchase Request Creation</span>
                </a>
            </li>
            <li class="sublink-item"> 
                <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('purchase-request') }}">
                    <span class="sub-nav-text">Purchase Managing</span>
                </a>
            </li>
            <li class="sublink-item">
                <a class="sub-nav ps-3 rounded pb-3 pt-3" href="#">
                    <span class="sub-nav-text">Purchase Reminder</span>
                </a>
            </li>
            <li class="sublink-item">
                <a class="sub-nav ps-3 rounded pb-3 pt-3" href="#">
                    <span class="sub-nav-text">Purchase Status</span>
                </a>
            </li>
        </ul>
        <ul class="sublink-hover" id="sub-nav-hover5">
            <li class="sublink-item text-secondary" id="sublinkHeader" aria-disabled="true"><b>Equipment</b></li>
            <li class="sublink-item">
                <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('equipment-list') }}">
                    <span class="sub-nav-text">Equipment List</span>
                </a>
            </li>
            <li class="sublink-item">
                <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('equipment-class') }}">
                    <span class="sub-nav-text">Class</span>
                </a>
            </li>
        </ul>
        <ul class="sublink-hover" id="sub-nav-hover6">
            <li class="sublink-item text-secondary" id="sublinkHeader" aria-disabled="true"><b>Utility Consumption</b></li>
            <li class="sublink-item">
                <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('energy') }}">
                    <span class="sub-nav-text">Energy</span>
                </a>
            </li>
            <li class="sublink-item">
                <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('water') }}">
                    <span class="sub-nav-text">Water</span>
                </a>
            </li>
            <li class="sublink-item">
                <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('fuel') }}">
                    <span class="sub-nav-text">Fuel</span>
                </a>
            </li>
        </ul>
        <ul class="sublink-hover" id="sub-nav-hover7">
            <li class="sublink-item text-secondary" id="sublinkHeader" aria-disabled="true"><b>Maintenance</b></li>
            <li class="sublink-item">
                <a class="sub-nav ps-3 rounded pb-3 pt-3" href="#">
                    <span class="sub-nav-text">Calendar</span>
                </a>
            </li>
            <li class="sublink-item">
                <a class="sub-nav ps-3 rounded pb-3 pt-3" href="#">
                    <span class="sub-nav-text">Preventive Maintenance</span>
                </a>
            </li>
            <li class="sublink-item">
                <a class="sub-nav ps-3 rounded pb-3 pt-3" href="#">
                    <span class="sub-nav-text">Corrective Maintenance</span>
                </a>
            </li>
            <li class="sublink-item">
                <a class="sub-nav ps-3 rounded pb-3 pt-3" href="#">
                    <span class="sub-nav-text">Schedule</span>
                </a>
            </li>
            <li class="sublink-item">
                <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('location') }}">
                    <span class="sub-nav-text">Location</span>
                </a>
            </li>
            <li class="sublink-item">
                <a class="sub-nav ps-3 rounded pb-3 pt-3" href="#">
                    <span class="sub-nav-text">Request</span>
                </a>
            </li>
        </ul>
        <ul class="sublink-hover" id="sub-nav-hover8">
            <li class="sublink-item text-secondary" id="sublinkHeader" aria-disabled="true"><b>Inventory</b></li>
            <li class="sublink-item">
                <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('enrollment') }}">
                    <span class="sub-nav-text">Enrollment</span>
                </a>
            </li>
            <li class="sublink-item">
                <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('receiving') }}">
                    <span class="sub-nav-text">Receiving</span>
                </a>
            </li>
            <li class="sublink-item">
                <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('withdrawal') }}">
                    <span class="sub-nav-text">Withdrawal</span>
                </a>
            </li>
            <li class="sublink-item">
                <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('recount') }}">
                    <span class="sub-nav-text">Inventory Count</span>
                </a>
            </li>
            <li class="sublink-item">
                <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('requests') }}">
                    <span class="sub-nav-text">Requests</span>
                </a>
            </li>
        </ul>
        <ul class="sublink-hover" id="sub-nav-hover9">
            <li class="sublink-item text-secondary" id="sublinkHeader" aria-disabled="true"><b>Reports</b></li>
            <li class="sublink-item">
                <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('stocks') }}">
                    <span class="sub-nav-text">Stocks</span>
                </a>
            </li>
            <li class="sublink-item">
                <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('assets-masterlist') }}">
                    <span class="sub-nav-text">Asset Masterlist</span>
                </a>
            </li>
            <li class="sublink-item">
                <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('daily-transaction') }}">
                    <span class="sub-nav-text">Daily Transaction</span>
                </a>
            </li>
            <li class="sublink-item">
                <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('re-order') }}">
                    <span class="sub-nav-text">Inventory Re-order</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- HOVER SUBLINK HOVER END-->
    
    <div class="menu-bar">
        <div class="menu">
            <ul class="menu-links ps-0">
                <li class="rounded" target="0" id="main-nav">
                    <a class="main-nav" href="{{ url('/') }}">
                        <i class='bx bx-home-alt icon'></i>
                        <span class="text">Dashboard</span>
                    </a>

                </li>
                <li class="rounded" id="main-nav" target="1" data-bool="1">
                    <a class="main-nav position-relative">
                    <i class='bx bx-bar-chart-alt-2 icon'></i>
                        <span class="text">Trends</span>
                        <i class='bx bx-chevron-right icon position-absolute top-20 end-0 pe-0' id="chevArrow"></i>
                    </a>
                </li>


                <li class="rounded" id="main-nav" target="2" data-bool="1">
                    <a class="main-nav position-relative">
                        <i class='bx bx-user-pin icon'></i>
                        <span class="text">Plant Profile</span>
                        <i class='bx bx-chevron-right icon position-absolute top-20 end-0' id="chevArrow"></i>
                    </a>
                </li>
                <ul class="sublink ps-0" id="sub-nav2">
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{url('plant-profile')}}">
                            <span class="sub-nav-text">Plant Profile Equipment</span>
                        </a>
                    </li>
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="#">
                            <span class="sub-nav-text">Plant Profile Manpower</span>
                        </a>
                    </li>
                    
                </ul>


                <li class="rounded" id="main-nav" target="3" data-bool="1">
                    <a class="main-nav position-relative" >
                        <i class='bx bx-cart-add icon'></i>
                        <span class="text ">Purchase</span>
                        <i class='bx bx-chevron-right icon position-absolute top-20 end-0' id="chevArrow"></i>
                    </a>
                </li>
                <ul class="sublink ps-0" id="sub-nav3"> 
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('add-purchase-request') }}">
                            <span class="sub-nav-text">Purchase Request Creation</span>
                        </a>
                    </li>
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('purchase-request') }}">
                            <span class="sub-nav-text">Purchase Managing</span>
                        </a>
                    </li>
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="#">
                            <span class="sub-nav-text">Purchase Reminder</span>
                        </a>
                    </li>
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="#">
                            <span class="sub-nav-text">Purchase Status</span>
                        </a>
                    </li>
                    
                </ul>

                
                <li class="rounded" id="main-nav" target="4" data-bool="1">
                    <a class="main-nav position-relative" href="{{ url('manpower') }}">
                    <i class='bx bx-group icon'></i>
                        <span class="text ">Manpower</span>
                        <i class='bx bx-chevron-right icon position-absolute top-20 end-0' id="chevArrow"></i>
                    </a>
                </li>
                


                <li class="rounded" id="main-nav" target="5" data-bool="1">
                    <a class="main-nav position-relative">
                        <i class='bx bx-package icon'></i>
                        <span class="text ">Equipment</span>
                        <i class='bx bx-chevron-right icon position-absolute top-20 end-0' id="chevArrow"></i>
                    </a>
                </li>
                <ul class="sublink ps-0" id="sub-nav5">
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('equipment-list') }}">
                            <span class="sub-nav-text">Equipment List</span>
                        </a>
                    </li>
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('equipment-class') }}">
                            <span class="sub-nav-text">Class</span>
                        </a>
                    </li>
                </ul>
                
                <li class="rounded" id="main-nav" target="6" data-bool="1">
                    <a class="main-nav position-relative">
                        <i class='bx bx-layout icon'></i>
                        <span class="text ">Utility Consumption</span>
                        <i class='bx bx-chevron-right icon position-absolute top-20 end-0' id="chevArrow"></i>
                    </a>
                </li>
                <ul class="sublink ps-0" id="sub-nav6">
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('energy') }}">
                            <span class="sub-nav-text">Energy</span>
                        </a>
                    </li>
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('water') }}">
                            <span class="sub-nav-text">Water</span>
                        </a>
                    </li>
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('fuel') }}">
                            <span class="sub-nav-text">Fuel</span>
                        </a>
                    </li>
                </ul>

                <li class="rounded" id="main-nav" target="7" data-bool="1">
                    <a class="main-nav position-relative">
                        <i class='bx bx-cog icon' ></i>
                        <span class="text ">Maintenance</span>
                        <i class='bx bx-chevron-right icon position-absolute top-20 end-0' id="chevArrow"></i>
                    </a>
                </li>
                <ul class="sublink ps-0" id="sub-nav7">
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="#">
                            <span class="sub-nav-text">Calendar</span>
                        </a>
                    </li>
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="#">
                            <span class="sub-nav-text">Preventive Maintenance</span>
                        </a>
                    </li>
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="#">
                            <span class="sub-nav-text">Corrective Maintenance</span>
                        </a>
                    </li>
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="#">
                            <span class="sub-nav-text">Schedule</span>
                        </a>
                    </li>
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('location') }}">
                            <span class="sub-nav-text">Location</span>
                        </a>
                    </li>
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="#">
                            <span class="sub-nav-text">Request</span>
                        </a>
                    </li>
                </ul>

                <li class="rounded" id="main-nav" target="8" data-bool="1">
                    <a class="main-nav position-relative" href="{{ url('inventory') }}">
                        <i class='bx bx-archive-in icon'></i>
                            <span class="text ">Inventory</span>
                        <i class='bx bx-chevron-right icon position-absolute top-20 end-0' id="chevArrow"></i>
                    </a>
                </li>
                <ul class="sublink ps-0" id="sub-nav8">
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('inventory') }}">
                            <span class="sub-nav-text">Inventory</span>
                        </a>
                    </li>
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('enrollment') }}">
                            <span class="sub-nav-text">Enrollment</span>
                        </a>
                    </li>
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('receiving') }}">
                            <span class="sub-nav-text">Receiving</span>
                        </a>
                    </li>
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('withdrawal') }}">
                            <span class="sub-nav-text">Withdrawal</span>
                        </a>
                    </li>
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('recount') }}">
                            <span class="sub-nav-text">Inventory Count</span>
                        </a>
                    </li>
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('requests') }}">
                            <span class="sub-nav-text">Requests</span>
                        </a>
                    </li>
                </ul>

                <li class="rounded" id="main-nav" target="9" data-bool="1">
                    <a class="main-nav position-relative">
                        <i class='bx bx-folder-open icon'></i>
                            <span class="text ">Reports</span>
                        <i class='bx bxs-chevron-right icon position-absolute top-20 end-0' id="chevArrow"></i>
                    </a>
                </li>
                <ul class="sublink ps-0" id="sub-nav9">
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('stocks') }}">
                            <span class="sub-nav-text">Stocks</span>
                        </a>
                    </li>
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('assets-masterlist') }}">
                            <span class="sub-nav-text">Asset Masterlist</span>
                        </a>
                    </li>
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('daily-transaction') }}">
                            <span class="sub-nav-text">Daily Transaction</span>
                        </a>
                    </li>
                    <li class="sublink-item">
                        <a class="sub-nav ps-3 rounded pb-3 pt-3" href="{{ url('re-order') }}">
                            <span class="sub-nav-text">Inventory Re-order</span>
                        </a>
                    </li>
                </ul>
            </ul>
        </div>

        <div class="bottom-content">
            <livewire:logout />

            <li class="mode">
                <div class="sun-moon">
                    <i class='bx bx-moon icon moon'></i>
                    <i class='bx bx-sun icon sun'></i>
                </div>
                <span class="mode-text text">Dark mode</span>

                <div class="toggle-switch">
                    <span class="switch"></span>
                </div>
            </li>
            
        </div>
    </div>
</nav>