@extends('layouts.app')
@section('title', 'Edit computer')
@section('about')
<div class="container">
    <div class="row d-flex justify-content-center align-items-center">

        <div class="d-flex justify-content-center align-items-center mt-5">
            <h3 class="text-uppercase text-warning border border-2 p-2 border-warning  border-bottom-0  border-top-0">Edit the <span class="text-light">{{$computers->name}}</span> <span class="text-light">computer</span></h3>     
        </div>
        <div class="d-flex justify-content-center align-items-center mt-5">
            {{--the method post does not work without route in action--}}
            {{-- <form action="{{route('computers.store')}}" method="POST"> 
                @csrf
                <div>
                    <label for="computer-name">Computer Name</label>
                    <input type="text" id="computer-name" name="computer-name" value="{{$computers->name}}">
                    @error('computer-name')
                        {{$message}}
                    @enderror
                </div>
                <div>
                    <label for="computer-origin">Computer Origin</label>
                    <input type="text" id="computer-origin" name="computer-origin" value="{{$computers->origin}}">
                    @error('computer-origin')
                        {{$message}}
                    @enderror
                </div>
                <div>
                    <label for="computer-price">Computer Price</label>
                    <input type="text" id="computer-price" name="computer-price" value="{{$computers->price}}">
                    @error('computer-price')
                        {{$message}}
                    @enderror
                </div>
                <button type="submit">Edit Now</button>
            </form> --}}

            {{-- The form for update --}}
            <form action="{{route('computers.update', ['computer' => $computers->id])}}" class="border border-2 p-2 border-warning  border-bottom-0  border-top-0" method="POST"> 
                @csrf
                @method('PUT')
                <div>
                    <label for="computer-name" class="form-label text-uppercase text-warning">Name</label>
                    <input type="text" id="computer-name"  class="form-control border border-warning bg-dark text-warning shadow-none p-2 ms-5" name="computer-name" value="{{$computers->name}}">
                    @error('computer-name')
                        {{$message}}
                    @enderror
                </div>
                <div>
                    <label for="computer-origin" class="form-label text-uppercase text-warning">Origin</label>
                    <input type="text" id="computer-origin"  class="form-control border border-light bg-dark text-warning shadow-none p-2 ms-5" name="computer-origin" value="{{$computers->origin}}">
                    @error('computer-origin')
                        {{$message}}
                    @enderror
                </div>
                <div>
                    <label for="computer-price" class="form-label text-uppercase text-warning">Price</label>
                    <input type="text" id="computer-price"  class="form-control border border-warning bg-dark text-warning shadow-none p-2 ms-5" name="computer-price" value="{{$computers->price}}">
                    @error('computer-price')
                        {{$message}}
                    @enderror
                </div>
                <button type="submit" class="btn btn-warning mt-3 text-uppercase ms-5">Edit Now</button>
            </form>
        </div>
    </div>
</div>
@endsection