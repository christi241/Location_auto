<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h1 class="text-center fw-bold text-primary">bievenue sur la page sur la page DASHBOARD</h1>

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

                    <div class="container h-25">
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
                    </div>
                </div>
            </div>
        </div>
    </div>





</x-app-layout>
