@extends('template.base')

@section('content')

	<div class="container">
		
						<div class="card-header">
						Edit Data User
					</div>

					
					<div class="card-body">
						<div class="row">
						<div class="col-md-4">
							<div class="row mt-5">
			
					
				</div>
			</div>
		</div>
						</div>
						
						<div class="row">
						<div class="col-md-8">
						</div>
						
						<form action="{{url('admin/user', $user->id)}}" method="post">

							@csrf
							@method("PUT")

					</div>
					<div class="card-body">
					<div class="form-group">
						<label class="control-label" for="">Nama</label>
						<input type="text" name="nama" class="form-control" value="{{$user->nama}}">
					</div>
					<div class="row no-gutters">
					<div class="col-md-12">
						<div class="form-group">
						<label class="control-label" for="">Username</label>
						<input type="text" name="username" class="form-control" value="{{$user->username}}">
					</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label class="control-label" for="">Email</label>
							<input type="text" name="email" class="form-control" value="{{$user->email}}">
						</div>
					</div>
					
				</div>
				
					</div>			
					
					
					<button class="btn btn-dark float-right"><i class="fa fa-save"> simpan</i></button>
					</form>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection