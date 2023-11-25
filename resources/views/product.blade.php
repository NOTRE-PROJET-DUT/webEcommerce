@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mb-3" style="max-width: 90%;">
        <div class="container-sm">

            <x-carousel isCarouselControl="true"/>
        </div>
        <div class="card-header">

            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="img/book/11.png" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">price or Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>


        </div>
        <div class="card-body">
          <h5 class="card-title">Primary card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>





</div>
@endsection
