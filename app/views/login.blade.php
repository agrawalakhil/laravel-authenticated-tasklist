@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-sm-offset-2 col-sm-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				Login
			</div>
			<div class="panel-body">
			<form action="/login" method="POST" class="form-horizontal">						
				<!-- if there are login errors, show them here -->
				@if (Session::get('loginError'))
				<div class="alert alert-danger">{{ Session::get('loginError') }}</div>
				@endif

				<p>
					{{ $errors->first('email') }}
					{{ $errors->first('password') }}
				</p>
			
				<div class="form-group">
					<label for="email" class="col-sm-3 control-label">Email Address</label>
	
					<div class="col-sm-6">
						<input type="text" name="email" id="email" class="form-control" value="{{ Input::old('email') }}">
					</div>
				</div>
				<div class="form-group">
					<label for="password" class="col-sm-3 control-label">Password</label>
	
					<div class="col-sm-6">
						<input type="password" name="password" id="password" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-6">
						<button type="submit" class="btn btn-default">
							<i class="fa fa-plus"></i>Login
						</button>
					</div>
				</div>
			</form>
			</div>
		</div>
	</div>
</div>
@endsection