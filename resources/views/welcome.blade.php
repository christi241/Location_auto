@include('partials.nav')


<h1 class="text-center fw-bold text-primary">bievenue sur la page sur la page DASHBOARD</h1>

{{-- <div class="container">
	<div class="row-fluid">
        <div class="span8">
        	<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
    	</div>
    </div>
</div> --}}

{{-- <div class="container h-25">
    <div class="row row-cols-1 row-cols-md-3 g-4 ">
        <div class="col">
            <div class="card ">
                <img src="https://images.pexels.com/photos/2346006/pexels-photo-2346006.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=1&w=500" class="card-img-top rounded-circle" alt="...">
                <div class="card-body">
                    <h5 class="card-title">voiture a votre disposition</h5>
                    <p class="card-text">DAKAR, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Louer</a>
                    <a href="#" class="btn btn-secondary">Detaille<i class="fab fa-gratipay"></i></a>
                </div>
                <div class="card-footer text-muted">
                    <span><i class="far fa-clock"></i> 10 Minutes Ago</span>
                    <span class="ms-3"><i class="fas fa-comments"></i> 45 Comments</span>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="hero-wrap" style=""  data-stellar-background-ratio="0.5">
    <br><br><br>
        <div class="container">
          <div class="row no-gutters slider-text justify-content-start align-items-center">
            <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
              <div class="text">
                <h1 class="mb-4" style="color: black; font-weight: bold; border-radius: 5px;"><strong>Deplace toi <span style="color: orange;">où tu veux</span></strong>
                </h1>

                  <div class="icon d-flex align-items-center justify-content-center">

                  </div>
              </div>
          </div>
          <div class="form-group">
            <a href="{{route('chauffeurs.index')}}" class="btn btn-primary py-3 px-4 shake">RESERVER UNE VOITURE AVEC CHAUFFEUR</a>
          </div>

            <div class="col-lg-2 col"></div>
            <div class="col-lg-4 col-md-6 mt-0 mt-md-5 d-flex">
              <form action="/ajouter/Traitementlocation" method="POST"  enctype="multipart/form-data">
                 @csrf
             </form>
            </div>
          </div>
        </div>
      </div>
  <br><br><br>
  <section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/Apple-Maps-update-FR-only-2022-3D-experience_inline.jpg.slideshow-medium_2x.jpg);">
            </div>
            <div class="col-md-6 wrap-about py-md-5 ftco-animate">
                <div class="heading-section mb-5 pl-md-5">
                    <span class="subheading">Location de Voitures avec Chauffeur</span>
                    <h2 class="mb-4">Découvrez nos Voitures et Chauffeurs Qualifiés</h2>

                    <p>Embarquez pour un voyage confortable et sûr avec notre service de location de voitures avec chauffeur. Nos chauffeurs expérimentés et nos véhicules bien entretenus sont prêts à vous emmener où vous le souhaitez, quand vous le souhaitez.</p>
                    <p>Grâce à notre technologie de géolocalisation avancée, vous pouvez suivre en temps réel la position de votre chauffeur et de votre voiture. Cela vous permet de planifier votre trajet en toute confiance, sachant que vous serez toujours informé de l'emplacement exact de votre voiture.</p>
                    <p>Explorez notre flotte de voitures de luxe, de berlines confortables et de vans spacieux, et réservez votre prochain trajet dès aujourd'hui. Voyagez avec style et tranquillité d'esprit.</p>
                    <p><a href="" class="btn btn-primary">Ou Nous sommes</a></p>
                </div>
            </div>
        </div>
    </div>
  </section>
      <br><br>
      <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">Nos Voitures</span>
                    <h2 class="mb-2">Choisissez votre voiture</h2>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4">
                    <div class="car-wrap ftco-animate">
                        <div class="img d-flex align-items-end" style="background-image: url(images/car-1.jpg);">

                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0">marque</h2>
                            <p>Couleur: bley</p>
                            <p>Kilométrage: </p>
                            <p class="d-flex mb-0 d-block">
                                <a href="" class="btn btn-black btn-outline-black mr-1">Réserver maintenant</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
      </section>
      <br><br><br>
      <section class="ftco-section services-section img" style="background-image: url(images/whyDriveWithUs_desktop.svg); background-size: cover; background-position: center;" data-stellar-background-ratio="0.8">
        <div class="overlay"></div>
          <div class="container">
              <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <span class="subheading">Découvrez Yobalema</span>
              <h2 class="mb-3">Le meilleur service de covoiturage</h2>
            </div>
          </div>
              <div class="row">
                  <div class="col-md-3 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services services-2">
                <div class="media-body py-md-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                  <h3>Voyagez en toute confiance avec Yobalema</h3>
                  <p>Découvrez notre service de covoiturage de qualité. Des trajets confortables et sécurisés vous attendent. Réservez dès maintenant !</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services services-2">
                <div class="media-body py-md-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-select"></span></div>
                  <h3>Faites des économies avec Yobalema</h3>
                  <p>Voyagez à moindre coût avec notre service de covoiturage. Économisez du temps et de l'argent tout en protégeant l'environnement.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services services-2">
                <div class="media-body py-md-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
                  <h3>Rejoignez la communauté Yobalema</h3>
                  <p>Partagez vos trajets et rencontrez de nouvelles personnes avec Yobalema. Inscrivez-vous dès maintenant et découvrez une nouvelle façon de voyager !</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services services-2">
                <div class="media-body py-md-4 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-review"></span></div>
                  <h3>Enjoy The Ride</h3>
                  <p>A small river named Duden flows by their place and supplies it with you</p>
                </div>
              </div>
            </div>
              </div>
          </div>
      </section>






