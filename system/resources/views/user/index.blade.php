@extends('template.base')
@section('content')



	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						<div class="float-right">
							
						</div>
					Filter
				</div>
				<div class="card-body">
					<form action="{{url('admin/produk/filter')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama" value="{{$nama ?? ''}}">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Email</label>
							<input type="text" class="form-control" name="Stok" value="{{$stok ?? ''}}">
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
							<label for="" class="control-label">Username</label>
							<input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ''}}">
							</div>
							</div>
							
						</div>
						<button class="btn btn-dark float-right"><i class="fa fa-search"></i>Filter</button>
					</form>	
				</div>
			</div>
		</div>
	</div>
</div>
				<div class="card-header">
						Data User
						<a href="{{url('admin/user/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus">Tambah Data</i></a>
					</div>
					
						<div class="card-body">
						<table class="table table-datatable">
							<thead>
								<th>No</th>
								<th>Aksi</th>
								<th>Nama</th>
								<th>Email</th>
								<th>Username</th>
								
								
							</thead>
							<tbody> 
								@foreach($list_user as $user)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">
										<a href="{{url('admin/user', $user->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
										<a href="{{url('admin/user', $user->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
										@include ('template.utils.delete', ['url' => url ('admin\user', $user->id)])
										
									</td>
									<td>{{$user->nama}}</td>
									<td>{{$user->email}}</td>
									<td>{{$user->username}}</td>
								</tr>
								@endforeach
							</tbody>							
						</table>
					</div>
				</div>
			</div>
		</div>		
	</div>
@endsection

