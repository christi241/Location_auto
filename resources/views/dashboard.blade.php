<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">


                    <div class="container">
                        <div class="row-fluid">
                            <div class="span8">
                                <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="py-4 px-3 px-md-4">
                        <div class="mb-3 mb-md-4 d-flex justify-content-between">
                            <div class="h3 mb-0">Nos voitures</div>
                        </div>
                        <div class="row">

                            <div class="col-md-6 col-xl-4 mb-3 mb-md-4">
                                <!-- Card -->
                                <div class="card h-70">
                                    <div class="card-header d-flex">
                                        <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">la voiture est dispponible</h5>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="media align-items-center px-3 px-md-4 mb-3 mb-md-4">
                                            <div class="media-body">
                                                <h4 class="h3 lh-1 mb-2"></h4>
                                                <p class="small text-muted mb-0">
                                                    <span>Matricule: 234</span><br>
                                                    <span>Date d'achat:</span><br>
                                                    <span>Kilométrage:</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <!-- Insérez ici votre balise <img> pour afficher l'image -->
                                            <img  height="200" width="350" src="{{asset('photos/voit.jpg')}}">
                                        </div>
                                        <a href="#"><button class="btn btn-danger" value="">Voir détails</button></a>
                                    </div>
                                </div>
                                <!-- End Card -->
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>





</x-app-layout>
