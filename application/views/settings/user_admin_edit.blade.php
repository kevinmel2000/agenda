@layout('layouts.default')

@section('content')
	<div class="row">
			<h1>Settings</h1>
	</div>

	@include('layouts.alert_msg')
	@yield('alert_msg')

	<div class="row">
		<ul class="nav nav-tabs">
			<li>
				{{ HTML::link_to_route('settings', 'Index Settings') }}
			</li>
			<li>
				{{ HTML::link_to_route('settings_jenissurat', 'Daftar Jenis Surat') }}
			</li>
			<li>
				{{ HTML::link_to_route('settings_disposisi', 'Daftar Disposisi') }}
			</li>
			<li>
				{{ HTML::link_to_route('settings_petunjuk', 'Daftar Petunjuk') }}
			</li>
			<li class="active">
				{{ HTML::link('#', 'Daftar User Account') }}
			</li>
			<li>
				{{ HTML::link_to_route('settings_konfigurasi', 'Konfigurasi Agenda Surat') }}
			</li>
			<li>
				{{ HTML::link_to_route('settings_liberation', 'Data Liberation') }}
			</li>
	  </ul>
	</div>
	
	<div class="row">
		<ul class="breadcrumb">
			<li>
				{{ HTML::link_to_route('settings_user', 'Daftar User Account')}} <span class="divider">/</span>
			</li>
			<li class="active">Edit for: <em>{{ $user->username }}</em></li>
		</ul>
	</div>
    
	<div class="row">
		@include('partial.settings.settings_user_admin_edit')
		@yield('settings_user')
	</div>
@endsection