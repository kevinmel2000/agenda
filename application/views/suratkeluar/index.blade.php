@layout('layouts.default')

@section('content')
	<div class='row'>
		<h1>Input Surat Keluar</h1>
	</div>

	@include('layouts.alert_msg')
	@yield('alert_msg')

	<div class="row navvspace">
		<ul class="nav-tabs">
			<li class="active">
				{{ HTML::link('#', 'Surat Keluar Seksi') }}
			</li>
			<li>
				{{ HTML::link_to_route('suratkeluarlain', 'Surat Keluar Lain') }}
			</li>
	  </ul>
	</div>

	@include('partial.suratkeluar.suratkeluar_index_form')
	@yield('display_form')

	@include('partial.suratkeluar.suratkeluar_index_table')
	@yield('display_table')

@endsection