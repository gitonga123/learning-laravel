<h3>The team has scored following goals</h3>

@foreach($goals as $goal)
    <p>{{ $goal->number_of_goals }}</p>
@endforeach