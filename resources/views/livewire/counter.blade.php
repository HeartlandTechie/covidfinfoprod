<div style="text-align: center">
    <button wire:click="increment">+</button> 

    <h1>{{ $count }}</h1>

    <div class="container">
  <div class="row mt-3">
    <div class="col">
     <a  wire:click="increment" class="btn btn-app">Sign-Up Now
                <span class="badge bg-green"> {{ rand(0,21) }}</span>
               7:00 AM - 7:10 AM
              </a>

    </div>
    <div class="col">
     <a class="btn btn-app">
                <span class="badge bg-purple"> {{ rand(0,21) }}</span>
                <i class="fa fa-users"></i> 7:00 AM - 7:10 AM
              </a>
    </div>
    <div class="col">
     <a class="btn btn-app">
                <span class="badge bg-purple"> {{ rand(0,21) }}</span>
                <i class="fa fa-users"></i> 7:00 AM - 7:10 AM
              </a>
      </div>

  </div>
  <div class="row mt-3">
    <div class="col">
      <button type="button" class="btn btn-block btn-primary btn-lg">Sign-up 7:00 AM - 7:10 AM <span class="badge bg-green"> {{ rand(0,21) }} left</span></button>
    </div>
    <div class="col">
     <button type="button" class="btn btn-block btn-primary btn-lg">Sign-up 7:10 AM - 7:20 AM <span class="badge bg-green"> {{ rand(0,21) }} left</span></button>
    </div>
    <div class="col">
     <button type="button" class="btn btn-block btn-primary btn-lg">Sign-up 7:20 AM - 7:30 AM <span class="badge bg-green"> {{ rand(0,21) }} left</span></button>
    </div>
    
  </div>
</div>
    
    
<div wire:poll.10s>
    Current time: {{ now() }}
</div>

</div>

