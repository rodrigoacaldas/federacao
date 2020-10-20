@if($errors->any())
    <div class="col-md-6">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            @foreach($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        </div>
    </div>
@endif

@if(session('success'))
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
        </div>
    </div>
@endif

@if(session('error'))
    <div class="col-md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('error')}}
        </div>
    </div>
@endif
