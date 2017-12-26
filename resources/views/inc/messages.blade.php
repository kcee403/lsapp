@if(count($errors) > 0) <!-- If errors are present then show messages based on Error -->
  @foreach($errors->all() as $error)
    <div class="alert alert-danger">
        {{$error}}
    </div>
  @endforeach
@endif

@if(session('success')) <!-- If success than show success message-->
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if(session('error')) <!-- Session Error -->
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif
