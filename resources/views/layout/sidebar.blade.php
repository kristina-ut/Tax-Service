    <?php
        if(Session::get('role') == 0) {
    ?>
    <nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
        <ul class="nav">

          <li class="nav-item {{ active_class(['/']) }}">
            <a class="nav-link" href="{{ route('home') }}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item {{ active_class(['employees/index']) }}">
            <a class="nav-link" href="{{route('employees.index')}}">
              <i class="menu-icon mdi mdi-account-circle"></i>
              <span class="menu-title">Employees</span>
            </a>
          </li>
          <li class="nav-item {{ active_class(['services/index']) }}">
            <a class="nav-link" href="{{ route('services.index') }}">
              <i class="menu-icon mdi mdi-settings"></i>
              <span class="menu-title">Services</span>
            </a>
          </li>
          <li class="nav-item {{ active_class(['servicequotes/index']) }}">
            <a class="nav-link" href="{{route('servicequotes.index')}}">
              <i class="menu-icon mdi mdi-message"></i>
              <span class="menu-title">Services Quote</span>
            </a>
          </li>
          <li class="nav-item {{ active_class(['notification']) }}">
            <a class="nav-link" href="{{route('gainNotification')}}">
              <i class="menu-icon mdi mdi-bell"></i>
              <span class="menu-title">Notification</span>
            </a>
          </li>
          <li class="nav-item {{ active_class(['bookkeepings/*']) }}">
            <a class="nav-link" data-toggle="collapse" href="#fileview" aria-expanded="{{ is_active_route(['bookkeepings/*']) }}" aria-controls="bookkeepings">
              <i class="menu-icon mdi mdi-lock-outline"></i>
              <span class="menu-title">View files</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ show_class(['bookkeepings/*']) }}" id="fileview">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item {{ active_class(['bookkeepings/index']) }}">
                  <a class="nav-link" href="{{ route('bookkeepings.index') }}">Book Keeping</a>
                </li>
                <li class="nav-item {{ active_class(['revenues/index']) }}">
                  <a class="nav-link" href="{{ route('revenues.index') }}">IRS Letter</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item {{ active_class(['collection']) }}">
            <a class="nav-link" href="#">
              <i class="menu-icon mdi mdi-bitcoin"></i>
              <span class="menu-title">Collection</span>
            </a>
          </li>
          <li class="nav-item {{ active_class(['reports']) }}">
            <a class="nav-link" href="#">
              <i class="menu-icon mdi mdi-flag"></i>
              <span class="menu-title">Reports</span>
            </a>
          </li>
          <li class="nav-item {{ active_class(['checkin']) }}">
            <a class="nav-link" href="{{route('checkins.index')}}">
              <i class="menu-icon mdi mdi-worker"></i>
              <span class="menu-title">Check-in</span>
            </a>
          </li>
          <li class="nav-item {{ active_class(['tracking']) }}">   
            <a class="nav-link" href="#">
              <i class="menu-icon mdi mdi-book"></i>
              <span class="menu-title">Activate tracking User</span>
            </a>
          </li>
          <li class="nav-item {{ active_class(['calendar']) }}">
            <a class="nav-link" href="{{route('events.index')}}">
              <i class="menu-icon mdi mdi-calendar-range"></i>
              <span class="menu-title">Calendar</span>
            </a>
          </li>

        </ul>
      </nav>
    <?php
        }
    ?>
    <?php
      if(Session::get('role') == 1) {
    ?>
    <nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
        <ul class="nav">

          <li class="nav-item {{ active_class(['/']) }}">
            <a class="nav-link" href="{{ route('home') }}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item {{ active_class(['services/index']) }}">
            <a class="nav-link" href="{{ route('services.index') }}">
              <i class="menu-icon mdi mdi-settings"></i>
              <span class="menu-title">Services</span>
            </a>
          </li>
          <li class="nav-item {{ active_class(['notification']) }}">
            <a class="nav-link" href="#">
              <i class="menu-icon mdi mdi-bell"></i>
              <span class="menu-title">Notification</span>
            </a>
          </li>
          <li class="nav-item {{ active_class(['reports']) }}">
            <a class="nav-link" href="#">
              <i class="menu-icon mdi mdi-flag"></i>
              <span class="menu-title">Reports</span>
            </a>
          </li>
          <li class="nav-item {{ active_class(['bookkeepings/*']) }}">
            <a class="nav-link" data-toggle="collapse" href="#fileview" aria-expanded="{{ is_active_route(['bookkeepings/*']) }}" aria-controls="bookkeepings">
              <i class="menu-icon mdi mdi-lock-outline"></i>
              <span class="menu-title">View files</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ show_class(['bookkeepings/*']) }}" id="fileview">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item {{ active_class(['bookkeepings/index']) }}">
                  <a class="nav-link" href="{{ route('bookkeepings.index') }}">Book Keeping</a>
                </li>
                <li class="nav-item {{ active_class(['revenues/index']) }}">
                  <a class="nav-link" href="{{ route('revenues.index') }}">IRS Letter</a>
                </li>
              </ul>
            </div>
          </li>

        </ul>
      </nav>
  <?php
      }
  ?>
    <?php
    if(Session::get('role') == 2) {
  ?>
  <nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
      <ul class="nav">

        <li class="nav-item {{ active_class(['/']) }}">
            <a class="nav-link" href="{{ route('home') }}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item {{ active_class(['servicequotes/index']) }}">
          <a class="nav-link" href="{{route('servicequotes.index')}}">
            <i class="menu-icon mdi mdi-message"></i>
            <span class="menu-title">Services Quote</span>
          </a>
        </li>
        <li class="nav-item {{ active_class(['servicequotes/index']) }}">
            <a class="nav-link" href="#">
              <i class="menu-icon mdi mdi-account-tie"></i>
              <span class="menu-title">Client</span>
            </a>
          </li>
        <li class="nav-item {{ active_class(['servicequotes/index']) }}">
            <a class="nav-link" href="{{route('events.index')}}">
            <i class="menu-icon mdi mdi-calendar"></i>
            <span class="menu-title">Calendar</span>
            </a>
        </li>
        <li class="nav-item {{ active_class(['notification']) }}">
          <a class="nav-link" href="#">
            <i class="menu-icon mdi mdi-bell"></i>
            <span class="menu-title">Notification</span>
          </a>
        </li>


        <li class="nav-item {{ active_class(['checkin']) }}">
          <a class="nav-link" href="#">
            <i class="menu-icon mdi mdi-worker"></i>
            <span class="menu-title">Check-in</span>
          </a>
        </li>

      </ul>
    </nav>
<?php
    }
?>
<?php
    if(Session::get('role') == 3) {
  ?>
  <nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
      <ul class="nav">

        <li class="nav-item {{ active_class(['/']) }}">
            <a class="nav-link" href="{{ route('home') }}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item {{ active_class(['servicequotes/index']) }}">
          <a class="nav-link" href="{{route('servicequotes.index')}}">
            <i class="menu-icon mdi mdi-message"></i>
            <span class="menu-title">Services Quote</span>
          </a>
        </li>
        <li class="nav-item {{ active_class(['servicequotes/index']) }}">
            <a class="nav-link" href="{{route('events.index')}}">
            <i class="menu-icon mdi mdi-calendar"></i>
            <span class="menu-title">Calendar</span>
            </a>
        </li>
        <li class="nav-item {{ active_class(['notification']) }}">
          <a class="nav-link" href="#">
            <i class="menu-icon mdi mdi-bell"></i>
            <span class="menu-title">Notification</span>
          </a>
        </li>


        <li class="nav-item {{ active_class(['checkin']) }}">
          <a class="nav-link" href="#">
            <i class="menu-icon mdi mdi-worker"></i>
            <span class="menu-title">Check-in</span>
          </a>
        </li>

      </ul>
    </nav>
<?php
    }
?>
