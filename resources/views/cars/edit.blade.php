Edit Car details:
<br>
{!!Form::model($car,[
	'method'=>'patch',
	'route'=> ['cars.update', $car->id]
])!!}

{!!Form::label('maufacturer', 'Maufacturer')!!}
{!!Form::text('manufacturer', $car->manufacturer, ['placeholder'=> "Manufacturer..."])!!}
<br>
{!!Form::label('type', 'Type')!!}
{!!Form::text('type', $car->type, ['placeholder'=> "Model type..."])!!}
<br>
{!!Form::label('year', 'Year')!!}
{!!Form::text('year', $car->year, ['placeholder'=> "Year..."])!!}
<br>
{!!Form::label('color', 'Color')!!}
{!!Form::text('color', $car->color, ['placeholder'=> "Color..."])!!}
<br>
{!!Form::label('mileage', 'Mileage')!!}
{!!Form::text('mileage', $car->mileage, ['placeholder'=> "Mileage..."])!!}
<br>
{!!Form::label('owner_id', 'Owner ID')!!}
{!!Form::text('owner_id', $car->owner_id, ['placeholder'=> "Owner ID..."])!!}
<br>

{!!Form::submit('Edit')!!}
{!!Form::close()!!}