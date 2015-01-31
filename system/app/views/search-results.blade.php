{{ $header }}

<h2>Kuulutused</h2>

@if($results)

	@foreach($results as $result)

		<li>

			{{ $result->content }}

			<br><br>

			<em>
			@if($result->sex === 'male')
				Mees
			@else
				Naine
			@endif

			otsib

			@if($result->looking_for === 'male')
			Meest
			@else
			Naist
			@endif

			kohast

			{{ $result->location }}</em>

		</li>

	@endforeach

@else

	<p>Ühtegi tulemust ei leitud.</p>

@endif
