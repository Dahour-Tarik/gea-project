<!--@if ($message = Session::get('success'))
<div class="alert alert-success">
    <a class="btn btn-small text-success close"><i class="fas fa-times"></i></a>
    <p>{{ $message }}</p>
</div>
@endif

@if ($message = Session::get('danger'))
<div class="alert alert-danger">
    <a class="btn btn-small text-danger close"><i class="fas fa-times"></i></a>
    <p>{{ $message }}</p>
</div>
@endif
-->

@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(Session::has('alert-' . $msg))
    <div class="alert alert-{{ $msg }}">
        <a class="btn btn-small text-{{ $msg }} close" id="mybtn"><i class="fas fa-times"></i></a>
        <h4>{{ Session::get('alert-' . $msg) }}</h4>
    </div>
    @endif
@endforeach


@if ($errors->any())
  <div class="alert alert-danger">
      <a class="btn btn-small text-danger close"><i class="fas fa-times"></i></a>
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif