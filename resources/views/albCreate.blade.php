<x-header><br>
        <div class="items-center">
            <div class="flex justify-center items-center"><h1 class="mb-4 text-4xl font-bold tracking-tight text-white lg:font-extrabold lg:leading-none lg:text-center">NUEVO LANZAMIENTO</h1></div>
            <form method="POST" action="{{route('recepAlb')}}" class="max-w-sm mx-auto justify-center items-center" enctype="multipart/form-data">
                @csrf
                <input value="1" name="superid" hidden>
                <div>
                    <label for="supertype" class="block mb-2 text-sm font-medium text-yellow-200">Tipo de Lanzamiento</label>
                    <select onchange="comp()" name="supertype" id="supertype" class="bg-yellow-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <option value="Album" selected>Album</option>
                        <option value="Sencillo">Sencillo</option>
                    </select>
                </div>
                <div>
                    <label for="small-input" class="block mb-2 text-sm font-semibold text-yellow-200">Titulo</label>
                    <input maxlength="100" required name="supertt" max='100' type="text" id="small-input" class="block w-full p-2 text-gray-800 border border-gray-300 rounded-lg bg-yellow-50 text-xs focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="items-center justify-center w-full">
                    <label class="block mb-2 text-sm font-medium text-yellow-200" for="file_input">Portada</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-900 rounded-lg cursor-pointer bg-yellow-50 focus:outline-none" id="file_input" name="supercover" type="file" accept="image/*">                
                </div> 
                <br>
                <div class="relative max-w-sm">
                    <label for="small-input" class="block mb-2 text-sm font-semibold text-yellow-200">Lanzamiento</label>
                    <input name="superelease" required datepicker datepicker-format="mm/dd/yyyy" type="date" class="bg-yellow-50 border border-gray-900 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Select date">
                </div><br>
                <div class="items-center flex justify-center"><p class="mb-2 text-sm font-semibold text-yellow-200 tracking-tight">Canciones</p></div>
                <div class="px-2.5 flex justify-center py-0.5 items-center">
                    <div id="MainAboutMain">
                        <div id="main" class="items-center justify-center">
                            <div id="forDelete">
                                <div class="items-center flex justify-center">
                                    <label for="link" name='forred' class="font-semibold text-sm  text-yellow-200">Titulo / Subir canción</label>
                                </div>
                                <div>
                                    <div class="flex mb-5" name='vacio'>
                                        <input type="text" name="supersongtitle[]" class="bg-yellow-50 border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5" required />               
                                        <button id="superbtn" onclick="append()" type="button" class="inline-flex ms-2 items-center px-4 py-2 text-sm font-medium border border-black text-center text-black bg-yellow-100 rounded-lg hover:bg-gray-900 hover:text-yellow-100 focus:ring-4 focus:outline-none focus:ring-blue-300">+</button>
                                    </div>
                                    <input name="supersong[]" class="block w-full text-lg text-gray-800 border border-gray-300 rounded-lg cursor-pointer bg-yellow-50 focus:outline-none" type="file" required accept="audio/mp3">
                                </div>
                            </div>
                        </div><br>
                    </div>
                </div><br>
                <div class="flex justify-center items-center"><button type="submit" class="focus:outline-none text-black bg-yellow-200 hover:text-yellow-200 hover:bg-gray-900 focus:ring-4 focus:ring-gray-900 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">CREAR ALBUM</button></div>
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
        let superType= document.getElementById('supertype');
        const songBtn= document.getElementById('superbtn');
        function comp(){
            if (superType.value=='Sencillo'){
                    var div = document.createElement("div");
                    div.id='main';
                    div.class='items-center justify-center';
                    div.innerHTML='<div class="items-center flex justify-center"><label for="link" name="forred" class="font-semibold text-sm  text-yellow-200">Titulo / Subir canción</label></div><div><div class="flex mb-5" name="vacio"><input type="text" name="supersongtitle[]" class="bg-yellow-50 border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5" required /><button id="superbtn" onclick="append()" type="button" class="inline-flex ms-2 items-center px-4 py-2 text-sm font-medium border border-black text-center text-black bg-yellow-100 rounded-lg hover:bg-gray-900 hover:text-yellow-100 focus:ring-4 focus:outline-none focus:ring-blue-300">+</button></div><input name="supersong[]" class="block w-full text-lg text-gray-800 border border-gray-300 rounded-lg cursor-pointer bg-yellow-50 focus:outline-none" type="file" required accept="audio/mp3"></div>';
                    document.getElementById('MainAboutMain').removeChild(document.getElementById('main'));
                    document.getElementById("MainAboutMain").appendChild(div);
                }            
        }

        function append(){
            if (superType.value=='Sencillo'){

            }
            else{
                var div = document.createElement("div");
                div.innerHTML='<div class="forDelete"><br><div><input type="text" name="supersongtitle[]" class="bg-yellow-50 border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5" required/><input name="supersong[]" class="block w-full text-lg text-gray-800 border border-gray-300 rounded-lg cursor-pointer bg-yellow-50 focus:outline-none" type="file" required accept="audio/mp3"></div><br></div>'
                document.getElementById("main").appendChild(div);                
            }

        }
    </script>
</x-header>