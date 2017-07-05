@extends('layout.master')

@section('title', 'Akhirudin | Project')

@section('content')

	<div class="col-md-12 work-agile-right" style="padding: 0em;">
		<!-- Projects -->
		<div class="Projects">
				@foreach ($result as $project)
			<div class="col-md-3 col-sm-3 col-xs-3 agileits-img">
				<a href="../{{ $project->image }}" class="swipebox" title="{{ $project->name }}">
					<img class="img-responsive " src="../{{ $project->image }}" alt="{{ $project->name }}"  />
					<div class="wthree-pcatn">
						<h4>{{ $project->name }}</h4>
					</div>
				</a>
			</div>
				@endforeach
		</div>	<!-- //Projects -->
	</div> <!-- End 2 Left Coloms -->

	<!-- pagination -->
		<div class="center-halaman">
			{{$result->links()}}
		</div>

@endsection
