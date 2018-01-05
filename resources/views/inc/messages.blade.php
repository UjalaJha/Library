
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissable" style="margin: 8px padding: 9px">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success alert-dismissable" style="margin: 5px padding: 9px">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissable" style="margin: 5px padding: 9px">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{session('error')}}
    </div>
@endif
