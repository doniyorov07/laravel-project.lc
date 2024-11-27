@props(['text','current'=>'','routes'=>[],'icon'=>'fas fa-angle-left'])

@php
      $isActive = in_array($current,$routes);
@endphp

<li class="nav-item {{ $isActive ? 'menu-open' : '' }}">
  <a href="#" class="nav-link {{ $isActive ? 'active' : '' }}">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
          {{ $text }}
          <i class="right {{ $icon }}"></i>
      </p>
  </a>
  <ul class="nav nav-treeview">
      {{ $slot }}
  </ul>
</li>