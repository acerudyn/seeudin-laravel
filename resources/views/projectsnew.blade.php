@extends('layout.master')

@section('title', 'Akhirudin | Projects')

@section('content')

	<div class="col-md-12 work-agile-right" style="padding: 0em;">
		<!-- Projects -->
		<div class="Projects">
				@foreach ($show as $projects)
			<div class="col-md-3 col-sm-3 col-xs-3 agileits-img">
				<a href="{{ $projects->image }}" class="swipebox" title="{{ $projects->name }}">
					<img class="img-responsive " src="{{ $projects->image }}" alt="{{ $projects->name }}"  />
					<div class="wthree-pcatn">
						<h4>{{ $projects->name }}</h4>
					</div>
				</a>
			</div>
				@endforeach
		</div>	<!-- //Projects -->
	</div> <!-- End 2 Left Coloms -->

	<!-- pagination -->
		<div class="center-halaman">
			{{$show->links()}}
		</div>

@endsection
