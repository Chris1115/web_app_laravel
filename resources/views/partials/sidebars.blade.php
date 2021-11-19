@auth
@if (auth()->user()->name === 'admin')
<div class="flex-column">
  <div class="px-4 py-2">
    <a href="/admin/create" class="nav-link link-dark">
      <img src="{{ asset('icons/plus-lg.svg') }}" alt="Bootstrap" width="22" height="22">
      New
    </a>
  </div>
  <hr class="dropdown-divider">
  <div class="px-4 py-2">
    <a href="/admin/statistics" class="nav-link link-dark">
      <img src="{{ asset('icons/activity.svg') }}" alt="Bootstrap" width="22" height="22">
      Statistics
    </a>
  </div>
  <hr class="dropdown-divider">
  <div class="px-4 py-2">
    <a href="/admin/report" class="nav-link link-dark">
      <img src="{{ asset('icons/calendar2-week.svg') }}" alt="Bootstrap" width="22" height="22">
      Report
    </a>
  </div>
  <hr class="dropdown-divider">
  <div class="px-4 py-2">
    <a href="/admin/history" class="nav-link link-dark">
      <img src="{{ asset('icons/clock-history.svg') }}" alt="Bootstrap" width="22" height="22">
      History
    </a>
  </div>
  <hr class="dropdown-divider">
</div>
@else
<div class="flex-column">
  <div class="px-4 py-2">
    <a href="/user/profile" class="nav-link link-dark">
      <img src="{{ asset('icons/file-person.svg') }}" alt="Bootstrap" width="22" height="22">
      Profile
    </a>
  </div>
  <hr class="dropdown-divider">
  <div class="px-4 py-2">
    <a href="/user/progress" class="nav-link link-dark">
      <img src="{{ asset('icons/hourglass-split.svg') }}" alt="Bootstrap" width="22" height="22">
      Progress
    </a>
  </div>
  <hr class="dropdown-divider">
  <div class="px-4 py-2">
    <a href="/user/history" class="nav-link link-dark">
      <img src="{{ asset('icons/clock-history.svg') }}" alt="Bootstrap" width="22" height="22">
      History
    </a>
  </div>
  <hr class="dropdown-divider">
  <div class="px-4 py-2">
    <a href="/user/report" class="nav-link link-dark">
      <img src="{{ asset('icons/calendar2-week.svg') }}" alt="Bootstrap" width="22" height="22">
      Report & Feedback
    </a>
  </div>
  <hr class="dropdown-divider">
</div>
@endif
@endauth