@extends('layouts.app')

@section('content')

Car details:
<br>
{{$car->manufacturer}}
<br>

Model type: {{$car->type}}
<br>
Year: {{$car->year}}
<br>
Color: {{$car->color}}
<br>
Mileage: {{$car->mileage}}
<br>
Time created: {{$car->created_at}}
<br>
{!!Form::open([
'method'=>'delete',
'route'=> ['cars.destroy', $car->id]
])!!}

<a href="{{route('cars.edit', $car->id)}}">Edit</a><br>
{!!Form::submit('Delete')!!}
{!!Form::close()!!}
@endsection