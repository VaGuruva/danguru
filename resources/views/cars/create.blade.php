@extends('layouts.app')

@section('content')

Register new Car
{!!Form::open(['route'=>'cars.store'])!!}

{!!Form::label('maufacturer', 'Maufacturer')!!}
{!!Form::text('manufacturer', null, ['placeholder'=> "Manufacturer..."])!!}
<br>
{!!Form::label('type', 'Type')!!}
{!!Form::text('type', null, ['placeholder'=> "Model type..."])!!}
<br>
{!!Form::label('year', 'Year')!!}
{!!Form::text('year', null, ['placeholder'=> "Year..."])!!}
<br>
{!!Form::label('color', 'Color')!!}
{!!Form::text('color', null, ['placeholder'=> "Color..."])!!}
<br>
{!!Form::label('mileage', 'Mileage')!!}
{!!Form::text('mileage', null, ['placeholder'=> "Mileage..."])!!}
<br>
{!!Form::label('owner_id', 'Owner ID')!!}
{!!Form::text('owner_id', null, ['placeholder'=> "Owner ID..."])!!}
<br>
{!!Form::submit('Register')!!}

{!!Form::close()!!}
@endsection

