<x-header>
@section('css')
<link rel="stylesheet" href="{{asset('/css/log.css')}}">
@endsection
<div class="section">
    <div class="container">
        <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5">
                <div class="section pb-5 pt-5 pt-sm-2 text-center">
                    <h6 class="mb-0 pb-3"><span>Entrar</span><span>Registrar</span></h6>
                    <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
                    <label for="reg-log"></label>
                    <div class="card-3d-wrap mx-auto">
                        <div class="card-3d-wrapper">
                            <form method="POST" class="card-front" action="{{route('recepLog')}}">
                                @csrf
                                <div class="center-wrap">
                                    <div class="section text-center">
                                        <h4 class="mb-4 pb-3">INICIAR SESION</h4>
                                        <div class="form-group">
                                            <input name="superemail" type="email" class="block w-full p-2 text-gray-800 border border-gray-300 rounded-lg bg-yellow-50 text-xs focus:ring-blue-500 focus:border-blue-500" placeholder="Contraseña">
                                        </div>	
                                        <div class="form-group mt-2">
                                            <input name="superpass" type="password" class="block w-full p-2 text-gray-800 border border-gray-300 rounded-lg bg-yellow-50 text-xs focus:ring-blue-500 focus:border-blue-500" placeholder="Correo">
                                        </div><br>
                                        <button type="submit"  class="focus:outline-none text-black bg-yellow-200 hover:text-yellow-200 hover:bg-gray-900 focus:ring-4 focus:ring-gray-900 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">ENTRAR</button>
                                        <p class="mb-0 mt-4 text-center"><a href="https://www.web-leb.com/code" class="link">Forgot your password?</a></p>
                                    </div>
                                </div>
                            </form>
                            <form class="card-back" action="{{route('recepReg')}}" method="POST">
                                @csrf
                                <div class="center-wrap">
                                    <div class="section text-center">
                                        <h4 class="mb-3 pb-3">REGISTRO DE USUARIO</h4>
                                        <div class="form-group">
                                            <input name="superuser" type="text" class="block w-full p-2 text-gray-800 border border-gray-300 rounded-lg bg-yellow-50 text-xs focus:ring-blue-500 focus:border-blue-500" placeholder="Nombre de usuario">
                                        </div>	
                                        <div class="form-group mt-2">
                                            <input name="superemail" type="email" class="block w-full p-2 text-gray-800 border border-gray-300 rounded-lg bg-yellow-50 text-xs focus:ring-blue-500 focus:border-blue-500" placeholder="Correo Electronico">
                                        </div>	
                                        <div class="form-group mt-2">
                                            <input name="superpass" type="password" class="block w-full p-2 text-gray-800 border border-gray-300 rounded-lg bg-yellow-50 text-xs focus:ring-blue-500 focus:border-blue-500" placeholder="Contraseña">
                                        </div>
                                        <div class="form-group mt-2">
                                            <input name="superpass" type="password" class="block w-full p-2 text-gray-800 border border-gray-300 rounded-lg bg-yellow-50 text-xs focus:ring-blue-500 focus:border-blue-500" placeholder="Repetir contraseña">
                                        </div><br>
                                        <button type="submit" class="focus:outline-none text-black bg-yellow-200 hover:text-yellow-200 hover:bg-gray-900 focus:ring-4 focus:ring-gray-900 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">REGISTRAR</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</x-header>