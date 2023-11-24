{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
@includeWhen(class_exists(\Backpack\DevTools\DevToolsServiceProvider::class), 'backpack.devtools::buttons.sidebar_item')
<!-- Users, Roles, Permissions -->
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Authentication</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Roles</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissions</span></a></li>
    </ul>
</li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-location-arrow"></i> Areas</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('division') }}"><i class="nav-icon la la-home"></i> Divisions</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('district') }}"><i class="nav-icon la la-home"></i> Districts</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('upazila') }}"><i class="nav-icon la la-home"></i> Upazilas</a></li>
    </ul>
</li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-tools"></i> Settings</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('occupation') }}"><i class="nav-icon la la-address-book-o"></i> Occupations</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('marital-status') }}"><i class="nav-icon la la-h-square"></i> Marital statuses</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('phase') }}"><i class="nav-icon la la-address-book"></i> Phases</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('mouza') }}"><i class="nav-icon la la-search"></i> Mouzas</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('fees-type') }}"><i class="nav-icon la la-question"></i> Payment types</a></li>
    </ul>
</li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('member') }}"><i class="nav-icon la la-people-carry"></i> Members</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('road') }}"><i class="nav-icon la la-directions"></i> Roads</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('plot-allocation') }}"><i class="nav-icon la la-landmark"></i> Plot allocations</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('block') }}"><i class="nav-icon la la-landmark"></i> Blocks</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('family-member') }}"><i class="nav-icon la la-people-carry"></i> Family members</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('fee') }}"><i class="nav-icon la la-money"></i> Payment Information</a></li>

<li class="nav-item"><a class="nav-link btn btn-primary" href="{{ backpack_url('logout') }}"> Log Out</a>
