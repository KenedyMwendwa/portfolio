@if (5>10)
    
<p>5 is greater than 10</p>
@elseif (5==10)
5 is indeed less than 10  
@else
<h2>all conditions are wrong</p> 
@endif


@unless (empty($name))
</h2>the name isn't empty</p>
@endunless

@empty(!$name)
    <h2>Name is not empty</p>
@endempty

{{-- //switch statements --}}

@switch($name)
    @case('Mulila')
        <h1>Name is Mulila</p>
        @break
    @case('Kasee')
    <h1>Name is Mulila</p>  
    @break

    @default
    <h1>No name</p>
@endswitch