<li class="nav-item">
    <a class="nav-link" href="{{ url('/account/user') }}">My Account</a>
</li>
@if(\Auth::user()->hasRole('admin'))
<li class="nav-item">
    <a class="nav-link" href="{{ url('/manage/user') }}">Manage Users</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ url('/manage/project') }}">Manage Projects</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ url('/manage/proposal') }}">Manage Proposals</a>
</li>
@endif
<li class="nav-item">
    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</li>