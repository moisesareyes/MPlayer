<x-header>
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" integrity="sha512-3g+prZHHfmnvE1HBLwUnVuunaPOob7dpksI7/v6UnF/rnKGwHf/GdEq9K7iEN7qTtW+S0iivTcGpeTBqqB04wA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
<form action={{route('/recep2')}} class="dropzone" id="my-awesome-dropzone" method="POST">
  @csrf
  <div class="previews"></div>
  
  <!-- Now setup your input fields -->
  <input value='16' name="superid" hidden/>

</form>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.js" integrity="sha512-8l10HpXwk93V4i9Sm38Y1F3H4KJlarwdLndY9S5v+hSAODWMx3QcAVECA23NTMKPtDOi53VFfhIuSsBjjfNGnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script>
        Dropzone.options.my-awesome-dropzone = {
          headers: '{{csrf_token()}}';
      }
      </script>
</x-header>