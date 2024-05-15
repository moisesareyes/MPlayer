<x-header><br>
    @section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" integrity="sha512-3g+prZHHfmnvE1HBLwUnVuunaPOob7dpksI7/v6UnF/rnKGwHf/GdEq9K7iEN7qTtW+S0iivTcGpeTBqqB04wA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endsection
    <section class="px-2.5 flex-col justify-center py-0.5 items-center">
        <div class="w-full flex justify-center items-center">
            <div class="screen-md justify-center items-center">
                <ol class="flex items-center justify-center">
                    <li class="relative w-full mb-6">
                        <div class="flex items-center">
                            <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-600 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                <svg class="w-2.5 h-2.5 text-blue-100 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                                </svg>
                            </div>
                            <div class="flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                        </div>
                        <div class="mt-3">
                            <h3 class="font-medium text-gray-900 dark:text-white">1</h3>
                        </div>
                    </li>
                    <li class="relative w-full mb-6">
                        <div class="flex items-center">
                            <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-200 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                <span class="flex w-3 h-3 bg-blue-600 rounded-full"></span>
                            </div>
                            <div class="flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                        </div>
                        <div class="mt-3">
                            <h3 class="font-medium text-gray-900 dark:text-white">2</h3>
                        </div>
                    </li>
                    <li class="relative w-full mb-6">
                        <div class="flex items-center">
                            <div class="z-10 flex items-center justify-center w-6 h-6 bg-gray-200 rounded-full ring-0 ring-white dark:bg-gray-700 sm:ring-8 dark:ring-gray-900 shrink-0">
                                <span class="flex w-3 h-3 bg-gray-900 rounded-full dark:bg-gray-300"></span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <h3 class="font-medium text-gray-900 dark:text-white">3</h3>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
        <div class="px-2.5 flex justify-center py-0.5 items-center">
            <div class="items-center">
                <div class="max-w-screen-md bg-gray-900">
                    <div class="flex flex-col items-center pb-5">
                        <div class="flex mt-4 md:mt-6 py-2 px-4">
                            <p class="text-yellow-100 text-center">Momento de sumar imagenes a la Galeria</p>
                        </div>
                    </div>
                </div><br>
                <div class="justify-center items-center max-w-screen-md">
                    <form action={{route('/recep2')}} class="dropzone" id="my-awesome-dropzone" method="POST">
                        @csrf
                        <div class="previews"></div>
                        <input value='{{$sqlrt->id}}' name="superid" hidden/>
                    </form>
                </div><br>
                <div class="max-w-screen-md bg-gray-900">
                    <div class="flex flex-col items-center pb-5">
                        <div class="flex mt-4 md:mt-6 py-2 px-4 items-center justify-center">
                            <p class="text-yellow-100 text-center">El Artista fue creado con exito, y ya está disponible, ahora solo queda mejorar su perfil</p>
                        </div>
                    </div>
                </div><br>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.js" integrity="sha512-8l10HpXwk93V4i9Sm38Y1F3H4KJlarwdLndY9S5v+hSAODWMx3QcAVECA23NTMKPtDOi53VFfhIuSsBjjfNGnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      Dropzone.options.my-awesome-dropzone = {
        headers: '{{csrf_token()}}';
    }
    </script>
</x-header>