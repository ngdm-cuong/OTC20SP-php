@extends('/layout.app')

@section('content')
    <h1>Customers</h1>
    @foreach ($customers as $customer)
<a href="/customers/{{$customer->custID}}">{{$customer->firstName}} {{$customer->lastName}}</a>   <br>
        {{-- {{$customer->firstName}}        <br> --}}
    @endforeach
@endsection