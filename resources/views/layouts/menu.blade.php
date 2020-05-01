<li class="{{ Request::is('sessions*') ? 'active' : '' }}">
    <a href="{!! route('sessions.index') !!}"><i class="fa fa-edit"></i><span>Sessions</span></a>
</li>


<li class="{{ Request::is('candidates*') ? 'active' : '' }}">
    <a href="{!! route('candidates.index') !!}"><i class="fa fa-edit"></i><span>Candidates</span></a>
</li>

<li class="{{ Request::is('sponsors*') ? 'active' : '' }}">
    <a href="{!! route('sponsors.index') !!}"><i class="fa fa-edit"></i><span>Sponsors</span></a>
</li>

<li class="{{ Request::is('volunteers*') ? 'active' : '' }}">
    <a href="{!! route('volunteers.index') !!}"><i class="fa fa-edit"></i><span>Volunteers</span></a>
</li>

<li class="{{ Request::is('scholarships*') ? 'active' : '' }}">
    <a href="{!! route('scholarships.index') !!}"><i class="fa fa-edit"></i><span>Scholarships</span></a>
</li>

<li class="{{ Request::is('funds*') ? 'active' : '' }}">
    <a href="{!! route('funds.index') !!}"><i class="fa fa-edit"></i><span>Funds</span></a>
</li>

<li class="{{ Request::is('bookings*') ? 'active' : '' }}">
    <a href="{!! route('bookings.index') !!}"><i class="fa fa-edit"></i><span>Bookings</span></a>
</li>



<li class="{{ Request::is('links*') ? 'active' : '' }}">
    <a href="{!! route('links.index') !!}"><i class="fa fa-edit"></i><span>Links</span></a>
</li>

<li class="{{ Request::is('vistors*') ? 'active' : '' }}">
    <a href="{!! route('vistors.index') !!}"><i class="fa fa-edit"></i><span>Vistors</span></a>
</li>

<li class="{{ Request::is('crowneds*') ? 'active' : '' }}">
    <a href="{!! route('crowneds.index') !!}"><i class="fa fa-edit"></i><span>Crowned</span></a>
</li>

<li class="{{ Request::is('candiateVoters*') ? 'active' : '' }}">
    <a href="{!! route('candiateVoters.index') !!}"><i class="fa fa-edit"></i><span>Candidate Voters</span></a>
</li>

<li class="{{ Request::is('gallaries*') ? 'active' : '' }}">
    <a href="{!! route('gallaries.index') !!}"><i class="fa fa-edit"></i><span>Photos</span></a>
</li>

