<div style="text-align: center">
    <button wire:click="increment">+</button> 

    <h1>{{ $count }}</h1>

    <div class="container">
  <div class="row mt-3">
    <div class="col">
     <button type="button" class="btn btn-block btn-primary btn-lg">Primary</button>
    </div>
    <div class="col">
     <button type="button" class="btn btn-block btn-primary btn-lg">Primary</button>
    </div>
    <div class="col">
     <button type="button" class="btn btn-block btn-primary btn-lg">Primary</button>
      </div>

  </div>
  <div class="row mt-3">
    <div class="col">
      <button type="button" class="btn btn-block btn-primary btn-lg">Primary</button>
    </div>
    <div class="col">
     <button type="button" class="btn btn-block btn-primary btn-lg">Primary</button>
    </div>
    <div class="col">
     <button type="button" class="btn btn-block btn-primary btn-lg">Primary</button>
    </div>
    
  </div>
</div>
    
    
<div wire:poll.10s>
    Current time: {{ now() }}
</div>

</div>

