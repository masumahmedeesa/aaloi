@if (Auth::guard('web')->check())
    <p class="text-danger">
    You are logged in as a USER;
    </p>
@else
    <p class="text-primary">
    YOU are logged OUT as a USER;
    </p>
@endif

@if (Auth::guard('admin')->check())
    <p class="text-danger">
    You are logged in as a ADMIN;
    </p>
@else
    <p class="text-success">
    YOU are logged out as a ADMIN;
    </p>
@endif

@if (Auth::guard('owner')->check())
    <p class="text-danger">
    You are logged in as a OWNER;
    </p>
@else
    <p class="text-success">
    YOU are logged out as a OWNER;
    </p>
@endif