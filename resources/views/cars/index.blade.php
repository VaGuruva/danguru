@extends('layouts.app')

@section('content')
List of registered cars:
<br>
@foreach($cars as $car)
{{$car->owner->name}}<br>
Manufacturer: {{$car->manufacturer}}
<br>
Model type: {{$car->type}}
<br>
Year: {{$car->year}}
<br>
Color: {{$car->color}}
<br>
Mileage: {{$car->mileage}}
<br>
Date registered: {{$car->created_at}}
<br><hr>
@endforeach
@endsection