@extends("layouts.app")

@section("content")
<div>
<div>

<h3>cars </h3>
@foreach ($cars as $item)

<h4>{{ $item->name }}<h4>
  
    @forelse ($item->carModel as $models )
    <!-- model relationship-->
        <small>{{ $models['model_name'] }}</small>
    @empty
        <small>empty</small>
    @endforelse
</div>


</div>



@endforeach
<form action="/cars" method="POST">
    @csrf
<input placeholder="car name" name="name"/>
<input name="ownerId" placeholder="owner id"/>


<input type="submit" title="save"/>

</form>
@endsection
