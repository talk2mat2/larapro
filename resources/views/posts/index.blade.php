<ul>
@foreach ($fetch as $items)
   <li>{{ $items->title }}</li> 
   <li>{{ $items->body }}</li> 
@endforeach


</ul>