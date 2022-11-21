<section class="my-5">
  <h2>DETAILS</h2>
  <div class="container">
     <div class="card" style="width: 18rem;">
    <img src="{{ asset('storage/'. $image->src) }}" alt="">
      <div class="card-body">
        <h5 class="card-title">{{ $image->name }}</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Afficher Image</a>
      </div>
    </div>
  </div>
</section>