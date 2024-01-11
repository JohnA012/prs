
@if($warehouse)
    <section>   
        <div id="widescreen">
            <div class="login-content">
                <div class="image">
                    <div class="text">
                        <h1 id="greet"></h1>
                        <p>Glacier South Refrigiration Services Corportion.</p>
                    </div>
                    <div class="datetime">
                        <h1 id="time"></h1>
                        <h1 id="date"></h1>
                    </div>
                </div>
                <div class="loginbox my-auto mx-4">
                    <div class="logo mb-5">
                        <h2>GLACIER</h2>
                        <label>MEGAFRIDGE</label>
                    </div>
                    @if(!empty(session('message')))
                        <div class="alert alert-success" role="alert" id="logout_alert">
                            <span>{{ session('message') }}</span>
                        </div>
                    @endif
                    <div class="text-start mb-3">
                        <h2 class="font-size-lg">Welcome</h2>
                        <span class="text-muted">Before you get started, you must login or register if you don't already have an account.</span>
                    </div>
                    @if($error)
                        <div class="alert alert-danger" role="alert" id="login_alert">
                            <span>{{$error}}</span>
                        </div>
                    @endif
                    <form wire:submit.prevent="authenticateLogin">
                        @csrf
                        <div class="mb-4">
                            <div class="form-floating position-relative"> 
                                <i class='bx bx-user-circle position-absolute icon'></i>
                                <input type="text" class="form-control label" id="username" name="username" placeholder="Username" wire:model.defer="username">
                                <label for="uname" class="text-muted label">Enter Your Username</label>
                            </div>
                            @error('username')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <div class="form-floating">
                                <i class='bx bxs-lock position-absolute icon'></i>
                                <input type="password" class="form-control label" id="password" name="password" placeholder="Password" wire:model.defer="password">
                                <label for="pass" class="text-muted label">Enter Your Password</label>
                            </div>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="showpass">
                            <label class="form-check-label" for="showpass">Show Password</label>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg rounded" type="submit"><i class='bx bxs-door-open'></i> SIGN IN</button>
                        </div>
                        <div class="text-center mt-2">
                            <a class="btn btn-link text-decoration-none">Forgot Password?</a>    
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- WIDESCREEN END-->
        
        <!-- SMALLSCREEN START-->
        <div id="smallscreen" class="position-relative">
            <div class="datetime position-absolute top-0 end-0 pt-2 pe-2">
                <h1 id="time"></h1>
                <h1 id="date"></h1>
            </div>
            <div class="login-content-small">
                <div class="login-box-small position-relative">
                    <div class="small-logo position-absolute top-0 start-50 translate-middle">
                        <h2>GLACIER</h2>
                        <label>MEGAFRIDGE</label>
                    </div>
                    <div class="text-start mb-4">
                        <h2 class="font-size-lg">Welcome</h2>
                        <span class="text-muted">Before you get started, you must login or register if you don't already have an account.</span>
                    </div>
                    @if($error)
                        <div class="alert alert-danger" role="alert" id="loginAlert">
                            <span>{{$error}}</span>
                        </div>
                    @endif
                    <form wire:submit.prevent="authenticateLogin">
                        @csrf
                        <div class="alert alert-success" role="alert" id="alert">
                            A simple secondary alert—check it out!
                        </div>
                        <div class="mb-4">
                            <div class="form-floating position-relative"> 
                                <i class='bx bx-user-circle position-absolute icon'></i>
                                <input type="text" class="form-control label" id="username" name="username" placeholder="Username" wire:model="username">
                                <label for="uname" class="text-muted label">Enter Your Username</label>
                            </div>
                            @error('username')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <div class="form-floating">
                                <i class='bx bxs-lock position-absolute icon'></i>
                                <input type="password" class="form-control label" id="password" name="password" placeholder="Password" wire:model="password">
                                <label for="pass" class="text-muted label">Enter Your Password</label>
                            </div>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="showpass">
                            <label class="form-check-label" for="showpass">Show Password</label>
                        </div>
                        
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg rounded" type="submit"><i class='bx bxs-door-open'></i> SIGN IN</button>
                        </div>
                        <div class="text-center mt-2">
                            <a class="btn btn-link text-decoration-none">Forgot Password?</a>    
                        </div>
                    </form>

                    
                </div>
            </div>
        </div>
    </section> 
@else
    <!-- SMALLSCREEN START-->
    <div class="position-relative">
        <div class="datetime position-absolute top-0 end-0 pt-2 pe-2">
            <h1 id="time"></h1>
            <h1 id="date"></h1>
        </div>
        <div class="login-content-small">
            <div class="login-box-small">
                <div class="small-logo">
                    
                    <img class="border p-3 bg-white rounded-circle" src="{{ asset('img/GILILOGO3.png') }}" alt="">
                    <h2>GLACIER</h2>
                    <label>MEGAFRIDGE</label>
                    <p>INCORPORATED</p>
                </div>
                <div class="text-start">
                    <h2 class="font-size-lg">Welcome</h2>
                    <span class="text-muted">Before you get started, you must choose warehouse to proceed.</span>
                </div>
                <form id="loginform-mobile" class="pt-3">
                    <div class="alert alert-success" role="alert" id="alert">
                        A simple secondary alert—check it out!
                    </div>
                    <div class="mb-4">
                        <label for="sbu_warehouse" class="ps-1"><span style="color:red">*</span>Choose Warehouse</label>
                        <select class="form-select mb-3 w-100" id="sbu_warehouse" name="warehouse" aria-label="Floating label select example" wire:mode="warehouse">
                            <option value ="" selected>Select Warehouse</option>
                            @foreach($warehouses AS $warehouse)
                                <option value ="{{ $warehouse->code }}">{{ $warehouse->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- SMALLSCREEN END -->
@endif
@push('scripts')
<script>
    $('#sbu_warehouse').on('change', function(e){
        var sbu = $('#sbu_warehouse').val();
        var selected_sbu_warehouse = $('#sbu_warehouse').attr('name');
        
        @this.set(selected_sbu_warehouse, sbu);
    });


    
</script>
@endpush