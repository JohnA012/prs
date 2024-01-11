<div class="home" style="background-color:#f0f0f5;height:100vh;overflow:hidden">
    <div class="nav-grid">
        <div class="nav-left">
            <h1>Vendor Management & Maintenance Information System</h1>
            <i id="nav-menu" class='bx bx-menu'></i>
        </div>
        <div class="nav-right" id="show-nav-details">
            <img src="{{ asset('images/default.png') }}" alt="">
            <div id="nav-text">
                <p id="UserNameFullName">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</p>
                <hr>
                <span>{{ Auth::user()->user_role->role_name }}</span>
            </div>
            <i class='bx bx-chevron-down'></i>
        </div>
        <ul class="nav-settings">
            <li><a href="#"><i class='bx bx-lock-open-alt' ></i> Change Password</a></li>
            <livewire:logout/>
        </ul>
    </div>
    <main class="" style="height:calc(100% - 126px);box-sizing:border-box;overflow:auto;">
        {{ $slot }}
    </main>
    <footer class="footer pt-3 pb-3 bg-secondary">
        <div class="text-white">
            Copyright &copy; Glacier <?php echo date('Y'); ?>
            &nbsp|&nbsp All rights reserved.
        </div>
    </footer>
</div>