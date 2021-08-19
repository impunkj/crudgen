
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-user"></i><span>Users</span></a>
</li>
<li class="nav-item">
    <a href="{{ route('patientInformations.index') }}"
       class="nav-link {{ Request::is('patientInformations*') ? 'active' : '' }}">
        <p>Patient Informations</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('patientInformations.index') }}"
       class="nav-link {{ Request::is('patientInformations*') ? 'active' : '' }}">
        <p>Patient Informations</p>
    </a>
</li>


