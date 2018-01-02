@if(count($errors) > 0) <!-- If errors are present then show messages based on Error -->
  @foreach($errors->all() as $error)
    <div class="alert alert-danger">
        {{$error}}
    </div>
  @endforeach
@endif

@if(session('success')) <!-- If success than show success message-->
    <div class="alert alert-success">
        {{session('success')}} <!-- Bases on what's being passed in PostsController, the method will handle what success message is being passed to be displayed. -->
    </div>                     <!-- ..Ex: return redirect('/posts')->with( 'success', 'Post (Updated/Deleted/Created)' ); -->
@endif

@if(session('error')) <!-- Session Error -->
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif
