@extends('app')
@section('content')
    
<!-- BODY -->
<body class="fondo">

    <div class="container">
      <div class="row">
        <div class="col col-lg-12 col-med-12 col-sm-12 text-center pt-4 pb-4">
            <h5 class="frase2">sucursaless</h5>
        </div>
      </div>
    </div>
    
    <div class="container pt-4 pb-4">
        <div class="row">
            <div class="col col-lg-4">
                <div class="card" style="width: 21rem;">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="imagenes/11.jpg" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="imagenes/5.jpg" alt="Second slide">
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <small class="mini text-right">Posted by @CocoaOfficial instagram <br></small>  
                        <small>Wall Street #86 <br>Nueva York, Estados Unidos.</small>
                      </div>
                </div> 
            </div>
            <div class="col col-lg-4">
                <div class="card" style="width: 21rem;">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="imagenes/22.jpg" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="imagenes/33.jpg" alt="Second slide">
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <small class="mini text-right">Posted by @CocoaOfficial instagram <br></small>  
                        <small>Calle Alcalá #23<br>Madrid, España.</small>
                      </div>
                </div> 
            </div>
            <div class="col col-lg-4">
                <div class="card" style="width: 21rem;">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="imagenes/442.jpg" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="imagenes/44.jpg" alt="Second slide">
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <small class="mini text-right">Posted by @CocoaOfficial instagram <br></small>  
                        <small>Brisas del Campestre #222 <br>Leon, Guanajuato.</small>
                      </div>
                </div> 
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  </body>
  <!-- /BODY -->


@endsection