@props(['text','url'=>'#','current'=>'','routes'=>[],'icon'=>'far fa-circle nav-icon','options'=>''])

@php
  $isActive = '';
  if(in_array($current,$routes)){
      $isActive = 'active';
  }
@endphp


<li class="nav-item">
  <a href="{{ $url }}" class="nav-link {{ $isActive }}">
    <i class="nav-icon {{ $icon }}"></i>
    <p>
      {{ $text }}
      {{ $options }}
    </p>
  </a>
</li>