@php
  $current = Route::currentRouteName();
@endphp

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      
    <x-tree 
      text="Tree" 
      current="{{ $current }}"
      :routes="['admin.dashboard', 'login', 'register']"
      >

      <x-menu 
        text="Dashboard" 
        :url="route('admin.dashboard')" 
        current="{{ $current }}" 
        :routes="['admin.dashboard']"
      />

      <x-menu 
        text="Login" 
        current="{{ $current }}" 
        :url="route('login')"
        :routes="['login']"
      />
      
      <x-menu 
        text="Register" 
        current="{{ $current }}" 
        :url="route('register')"
        :routes="['register']"
      />
    
    </x-tree>

    <x-menu text="Users" current="{{ $current }}" :url="route('admin.user')" :routes="['admin.user']"/>

    <x-menu 
      text="View" 
      current="{{ $current }}" 
      :url="route('admin.view')"
      :routes="['admin.view']"
    />
    

     <x-logout text="Logout" />
     
    </ul>
  </nav>