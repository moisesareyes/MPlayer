<x-header><br>
    @section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" integrity="sha512-3g+prZHHfmnvE1HBLwUnVuunaPOob7dpksI7/v6UnF/rnKGwHf/GdEq9K7iEN7qTtW+S0iivTcGpeTBqqB04wA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endsection
    <section class="px-2.5 justify-center py-0.5 items-center">
        <div class="items-center">
            <div class="flex justify-center items-center"><h1 class="mb-4 text-4xl font-bold tracking-tight text-white lg:font-extrabold lg:leading-none lg:text-center">EDITAR ARTISTA</h1></div>
            <form action="{{route('recepEditA')}}" method="POST" class="max-w-sm mx-auto justify-center items-center" enctype="multipart/form-data">
                @csrf
                <input value="{{$new->id}}" name="valor" hidden>
                <input name="identificador" value="1" type="number" hidden>
                <div>
                    <label for="small-input" class="block mb-2 text-sm font-semibold text-yellow-200">Nombre</label>
                    <input required value="{{$new->name}}" name="supername" max='100' type="text" id="small-input" class="block w-full p-2 text-gray-800 border border-gray-300 rounded-lg bg-yellow-50 text-xs focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="message" class="block mb-2 text-sm font-semibold text-yellow-200">Biografia</label>
                    <textarea required name="superbio" rows="4" class="block p-2.5 w-full text-sm text-gray-800 bg-yellow-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Bio...">{{$new->bio}}</textarea>              
                </div>
                <br>
                <div class="flex justify-center items-center"><button type="submit" class="focus:outline-none text-black bg-yellow-200 hover:text-yellow-200 hover:bg-gray-900 focus:ring-4 focus:ring-gray-900 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">EDITAR INFORMACIÓN</button></div>
            </form>
            <br><br><br>
            <div class="items-center flex justify-center"><p class="mb-2 text-4xl font-semibold text-yellow-200 tracking-tight">Redirects</p></div>
            <div class="px-2.5 flex justify-center py-0.5 items-center max-w-sm mx-auto items-center">
                <div class="items-center justify-center">
                    <div class="items-center flex justify-center">
                        <label for="link" name='forred' class="font-semibold text-sm  text-yellow-200">Titulo / Enlace</label>
                    </div>
                    <div id="main" class="mb-5" name='vacio'>
                        @foreach ($newredirect as $redir)
                        <div>
                            <form action="{{route('recepEditA')}}" method="POST" class="flex">
                                @csrf
                                <input name="identificador" value="2" type="number" hidden>
                                <input value="{{$new->id}}" name="valor" hidden>
                                <input value="{{$redir->id}}" name="redirvalue" hidden>
                                <input type="text" value="{{$redir->tittle}}" name="supertittle" class="bg-yellow-50 border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5" required/>
                                <input name="superlink"  value="{{$redir->direccion}}" type="text" class="bg-yellow-50 border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5" required/>    
                                <button type="submit" value="0" name="btn" class="inline-flex ms-2 items-center px-4 py-2 text-sm font-medium border border-black text-center text-black bg-yellow-200 rounded-lg hover:bg-gray-900 hover:text-yellow-100 focus:ring-4 focus:outline-none focus:ring-blue-300">X</button>
                                <button type="submit" value="1" name="btn" class="inline-flex ms-2 items-center px-4 py-2 text-sm font-medium border border-black text-center text-black bg-yellow-200 rounded-lg hover:bg-gray-900 hover:text-yellow-100 focus:ring-4 focus:outline-none focus:ring-blue-300">GUARDAR</button>
                            </form>
                        </div>
                        @endforeach
                        <div>
                            <form method="POST" action="{{route('recepEditA')}}" class="flex">
                                @csrf
                                <input value="{{$new->id}}" name="valor" hidden>
                                <input name="identificador" value="3" type="number" hidden>
                                <input type="text" name="supertittle" class="bg-yellow-50 border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5" required />
                                <input name="superlink" type="text" class="bg-yellow-50 border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5" required/>
                                <button type="submit" value="1" name="btn" class="inline-flex ms-2 items-center px-4 py-2 text-sm font-medium border border-black text-center text-black bg-yellow-200 rounded-lg hover:bg-gray-900 hover:text-yellow-100 focus:ring-4 focus:outline-none focus:ring-blue-300">GUARDAR</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
            <div class="items-center flex justify-center"><p class="mb-2 text-4xl font-semibold text-yellow-200 tracking-tight">IMAGENES</p></div>
            <div class="px-2.5 flex justify-center py-0.5 items-center max-w-sm mx-auto items-center">
                <div class="items-center justify-center">
                    <div class="mb-5" name='vacioimg'>
                        @foreach ($newimg as $img)
                        @if ($img->principal==1)
                        <div class="items-center justify-center w-full">
                            <div class="items-center flex justify-center">
                                <label for="link" name='forred' class="font-semibold text-sm  text-yellow-200">CAMBIAR IMAGEN PRINCIPAL</label>
                            </div>
                            <div class="items-center flex justify-center">
                                <img width="128px" src='{{asset($img->dir)}}'>
                            </div>
                            <form action="{{route('recepEditA')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input value="{{$new->id}}" name="valor" hidden>
                                <input value="{{$img->id}}" name="imgvalue" hidden>
                                <input name="identificador" value="4" type="number" hidden>
                                <input class="block w-full text-sm text-gray-900 border border-gray-900 rounded-lg cursor-pointer bg-yellow-50 focus:outline-none" id="file_input" name="primg" type="file" accept="image/*"><br>
                                <div class="flex justify-center items-center">
                                    <button type="submit" class="inline-flex items-center px-10 py-2 text-sm font-medium border border-black text-center text-black bg-yellow-200 rounded-lg hover:bg-gray-900 hover:text-yellow-100 focus:ring-4 focus:outline-none focus:ring-blue-300">CAMBIAR</button>
                                </div>
                            </form>                
                        </div>
                        <br>
                        <div class="items-center flex justify-center">
                            <label for="link" name='forred' class="font-semibold text-sm  text-yellow-200">ELIMINAR IMAGENES</label>
                        </div><br>
                        <div class="max-w-screen-md">
                            <div class="grid gap-4 px-2.5 py-1.5">
                                <div class="grid grid-cols-5 gap-4">
                        @else
                                    <div>
                                        <form action="{{route('recepEditA')}}" method="POST" class="flex">
                                            @csrf
                                            <input name="identificador" value="5" type="number" hidden>
                                            <input value="{{$new->id}}" name="valor" hidden>
                                            <input name="imgvalue" value="{{$img->id}}" hidden>
                                            <button type="submit" value="0" name="btn"><img width="128px" class="rounded-lg" src='{{asset($img->dir)}}'>  </button>
                                        </form>                            
                                    </div>
                        @endif
                        @endforeach
                        </div></div></div>
                        <div class="items-center flex justify-center">
                            <label for="link" name='forred' class="font-semibold text-sm  text-yellow-200">AGREGAR IMAGENES</label>
                        </div><br>
                        <div class="justify-center items-center max-w-screen-md">
                            <form action={{route('/recep2')}} class="dropzone" id="my-awesome-dropzone" method="POST">
                                @csrf
                                <div class="previews"></div>
                                <input value="{{$new->id}}" name="superid" hidden/>
                            </form>
                        </div><br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.js" integrity="sha512-8l10HpXwk93V4i9Sm38Y1F3H4KJlarwdLndY9S5v+hSAODWMx3QcAVECA23NTMKPtDOi53VFfhIuSsBjjfNGnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      Dropzone.options.my-awesome-dropzone = {
        headers: '{{csrf_token()}}';
    }
    </script>
    <script>

    </script>
</x-header>