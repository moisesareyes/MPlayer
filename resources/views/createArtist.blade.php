<x-header><br>
    <section class="px-2.5 justify-center py-0.5 items-center">
        <div class="w-full flex justify-center items-center">
            <div class="screen-md justify-center items-center">
                <ol class="flex items-center justify-center">
                    <li class="relative w-full mb-6">
                        <div class="flex items-center">
                            <div class="z-10 flex items-center justify-center w-6 h-6 bg-blue-200 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                <span class="flex w-3 h-3 bg-blue-600 rounded-full"></span>
                            </div>
                            <div class="flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                        </div>
                        <div class="mt-3">
                            <h3 class="font-medium text-gray-900 dark:text-white">1</h3>
                        </div>
                    </li>
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
        <div class="items-center">
            <div class="flex justify-center items-center"><h1 class="mb-4 text-4xl font-bold tracking-tight text-white lg:font-extrabold lg:leading-none lg:text-center">NUEVO ARTISTA</h1></div>
            <form method="POST" action="{{route('recepArtist')}}" class="max-w-sm mx-auto justify-center items-center" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="small-input" class="block mb-2 text-sm font-semibold text-yellow-200">Nombre</label>
                    <input required name="name" max='100' type="text" id="small-input" class="block w-full p-2 text-gray-800 border border-gray-300 rounded-lg bg-yellow-50 text-xs focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="message" class="block mb-2 text-sm font-semibold text-yellow-200">Biografia</label>
                    <textarea required name="message" rows="4" class="block p-2.5 w-full text-sm text-gray-800 bg-yellow-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Bio..."></textarea>              
                </div><br>
                <div class="items-center justify-center w-full">
                    <label class="block mb-2 text-sm font-medium text-yellow-200" for="file_input">Imagen principal</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-900 rounded-lg cursor-pointer bg-yellow-50 focus:outline-none" id="file_input" name="primg" type="file" accept="image/*">                
                </div> 
                @error('primg')
                <small>{{$message}}</small> 
                @enderror
                <br>
                <div class="items-center flex justify-center"><p class="mb-2 text-sm font-semibold text-yellow-200 tracking-tight">Redirects</p></div>
                <div class="px-2.5 flex justify-center py-0.5 items-center">
                    <div id="main" class="items-center justify-center">
                        <div class="items-center flex justify-center">
                            <label for="link" name='forred' class="font-semibold text-sm  text-yellow-200">Titulo / Enlace</label>
                        </div>
                        <div class="flex mb-5" name='vacio'>
                            <input type="text" name="tittle[]" class="bg-yellow-50 border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5" required />
                            <input name="link[]" type="text" class="bg-yellow-50 border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5" required/>
                            <a onclick="append()" class="inline-flex ms-2 items-center px-4 py-2 text-sm font-medium border border-black text-center text-black bg-yellow-100 rounded-lg hover:bg-gray-900 hover:text-yellow-100 focus:ring-4 focus:outline-none focus:ring-blue-300">+</a>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center"><button type="submit" class="focus:outline-none text-black bg-yellow-200 hover:text-yellow-200 hover:bg-gray-900 focus:ring-4 focus:ring-gray-900 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">ADMINISTRAR ARTISTA</button></div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <div class="items-center justify-center w-full">
                        @foreach ($errors->all() as $error)
                            <label class="block mb-2 text-sm font-medium text-yellow-200">{{ $error }}</label>
                        @endforeach
                    </div>
                </div>
                @endif
            </form>
        </div>
    </section>
    <script>
    function append(){
        var div = document.createElement("div");
        div.innerHTML='<div class="flex mb-5" name="vacio"><input type="text" name="tittle[]" class="bg-yellow-50 border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5"/><input name="link[]" type="text" class="bg-yellow-50 border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5"/></div>'
        document.getElementById("main").appendChild(div);
        }
    </script>
</x-header>