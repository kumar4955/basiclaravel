<div>

@if (Session::has('message'))
    <div class="alert alert-message alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>message !</strong> {{ session('message') }}
    </div>
@endif
@if (session('message'))
<div class ="alert  alert-message">
  {{session('message')}}
</div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


</div>
