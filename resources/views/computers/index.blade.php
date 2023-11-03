@extends('layouts.app')
@section('title', 'Computer')
@section('about')
        <div class="container mt-5">
          <div class="row row-cols-3 line">
                <div class="col-1">

                </div>
                <ul class="col-3 d-inline">
                    {{-- If used before foreach so use computers not computer --}}
                    @foreach ($computers as $computer )
                    <div class="card border border-1 border-danger bg-warning" style="width: 18rem;">
                        <div class="card-body ">
                        <p class="  border border-3 p-2 border-black  border-bottom-0  border-start-0 border-end-0 mt-4"></p>
                          <h3 class="card-title text-uppercase text-black">{{$computer['name']}}</h3>
                          {{-- <h6 class="card-subtitle mb-2 text-body-secondary">{{$computer['origin']}}   <strong>{{$computer['price']}}$</strong></h6>   --}}
                          <a href="{{route('computers.show', ['computer' => $computer['id']])}}" class="card-link text-black "><i class="bi bi-arrow-right-square-fill fs-5 d-flex justify-content-end"></i></a>
                        </div>
                      </div>
                      <br>
                    @endforeach
    
                </ul>
                <div class="col-1">

                </div>
                <div class="col-6 p-1">
                     <div class="home-content1 position-fixed mt-5">
                        <h3 class="text-uppercase text-warning position-fixed">our <span class="text-light">computers</span></h3>  
                        <p class=" text-warning mt-5 position-fixed">A computer is a machine that can be programmed to carry out sequences of arithmetic or logical operations (computation) automatically. 
                          Modern digital electronic computers can perform generic sets of operations known as programs. <br>
                          These programs enable computers to perform a wide range of tasks. 
                          A computer system is a nominally complete computer that includes the hardware, <br>
                          operating system (main software), and peripheral equipment needed and used for full operation. 
                          This term may also refer to a group of computers that are linked and function together,<br>
                          such as a computer network or computer cluster.</p> 
                      </div><br><br><br><br><br><br><br><br><br>
                     <div class="home-content2 position-fixed mt-5">
                        <p class="  border border-2 p-2 border-light  border-bottom-0  border-start-0 border-end-0 mt-5"></p>
                        <p class="  border border-2 p-2 border-light  border-bottom-0  border-start-0 border-end-0 mt-2"></p>
                        <p class=" text-warning mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                              Totam, vitae. Labore soluta sunt, ad,<br>
                              et quis porro commodi velit maiores quos at adipisci cupiditate reprehenderit architecto expedita,
                              illum amet provident?</p>  
                        <p class="  border border-2 p-2 border-warning  border-bottom-0  border-start-0 border-end-0 "></p>
                        <a href="{{route('computers.create')}}" class="btn btn-light mt-2">Create Now</a>
                        <a href="{{route('home.contact')}}" class="btn btn-warning mt-2">Contact Us</a>
                     </div>
                </div>
                
          </div>

        </div>
        
    </div>
</div>
@endsection

