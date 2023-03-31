{{--IMPORTANT: this page will be overwritten and any change will be lost!! Use custom_sidebar_bottom.blade.php and custom_sidebar_top.blade.php--}}

@if(Gate::any(['noresi_allow', 'noresi_edit']))
<li class="nav-item{{ $admiko_data['sideBarActive'] === "noresi" ? " active" : "" }}"><a class="nav-link" href="{{route('admin.noresi.index')}}"><i class="fas fa-file-alt fa-fw"></i>Data Distribusi</a></li>
@endIf
