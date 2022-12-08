@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">      
    <h1>Pizza Orders</h1>   
        <!-- @for($i = 0; $i < 5; $i++)
            <p>the value of i is {{ $i }}</p>
        @endfor -->

        <!-- @for($i = 0; $i < count($pizzas); $i++)
            <p>{{ $pizzas[$i]['type'] }}</p>
        @endfor -->

    @foreach($pizzas as $pizza)
        <div>
            <div class="pizza-item">
                <img src="/img/pizza.png" alt="pizza icon">
                <h4><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a></h4>
            </div>
        </div>
    @endforeach
    
</div>
@endsection
   
