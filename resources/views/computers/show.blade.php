@extends('layouts.app')
@section('title', 'Computer')
@section('about')

        <div class="d-flex justify-content-center">
            <div class="card border border-1 border-danger bg-warning" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-uppercase text-black">{{$computers['name']}}</h5>
                    <hr>
                    <h6 class="card-subtitle mb-2 text-body-secondary text-uppercase">{{$computers['origin']}} <strong>{{$computers['price']}}$</h6>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{route('computers.edit', $computers->id)}}" class="card-link text-black"><i class="bi bi-arrow-up-square-fill fs-5 mt-5"></i></a>
                        <form action="{{route('computers.destroy', $computers->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            {{-- <input type="submit" class="card-link btn btn-warning text-black" value="Delete"> --}}
                            <button type="submit" class="card-link btn btn-warning text-black"><i class="bi bi-trash2-fill fs-5 mt-5"></i></button>
                        </form>
                    </div>
                </div>
            </div>
    
        </div>
        <p class="text-warning mt-5 text-center">Prices shown for each product category are lowest configuration prices available from U.S. <br>
            <span class="text-light">{{$computers['name']}}</span>.com directly and before any available promotions or discounts. <br>
            Pricing will vary by configuration within each product category. <br>
            <span class="text-light">{{$computers['name']}}</span>.com prices are subject to change without notice and all products are subject to current availability.</p>
            <br><br>
            <p class="  border border-2 p-2 border-warning  border-bottom-0  border-start-0 border-end-0 mt-5"></p>
            <p class="  border border-2 p-2 border-light  border-bottom-0  border-start-0 border-end-0 mt-2"></p>
            <p class="  border border-2 p-2 border-light  border-bottom-0  border-start-0 border-end-0 mt-5"></p>
            <p class="  border border-2 p-2 border-warning  border-bottom-0  border-start-0 border-end-0 mt-2"></p>
       
        
@endsection