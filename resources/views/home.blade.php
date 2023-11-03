@extends('layouts.app')
@section('title', 'Home')

@section('content')
        <div class="home-info">
            <h1 class="text-warning text-uppercase text-center">welcome in our <span class="text-light">store</span></h1>
            <p class="text-warning text-center">All you need in the <span class="text-light">computer</span> world</p>
            <div class="links d-flex justify-content-center items-center text-warning">
                <i class="bi bi-facebook p-2 "></i>
                <i class="bi bi-behance p-2"></i>
                <i class="bi bi-twitter p-2"></i>
                <i class="bi bi-line p-2"></i>
            </div><br><br>
            <p class="  border border-2 p-2 border-warning  border-bottom-0  border-start-0 border-end-0 mt-5"></p>
            <p class="  border border-2 p-2 border-light  border-bottom-0  border-start-0 border-end-0 mt-2"></p>
            <a class="text-light text-center d-flex justify-content-center" aria-current="page" href="{{route('computers.index')}}">watch our new computers from-<span class="text-warning"> here!</span></a>
            <p class="  border border-2 p-2 border-light  border-bottom-0  border-start-0 border-end-0 mt-5"></p>
            <p class="  border border-2 p-2 border-warning  border-bottom-0  border-start-0 border-end-0 mt-2"></p>

        </div>
@endsection
