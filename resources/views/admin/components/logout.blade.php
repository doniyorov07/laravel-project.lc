@props(['text','url'=>'#','icon'=>'fas fa-th','options'=>''])

<li class="nav-item">
  <a class="nav-link" href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    <i class="nav-icon {{ $icon }}"></i>
    <p>
      {{ $text }}
      {{ $options }}
    </p>
  </a>
</li>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>


