@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" style="margin: 0px">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success" style="margin: 0px">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger" style="margin: 0px">
        {{session('error')}}
    </div>
@endif