@extends('tamplate.index')

@section('content')

<div class="module">
        <div class="module-head">
        	<h3>Daftar Track</h3>
        </div>
		
	<div class="module-body table">
		<div class="module-head">
		<a href="{{ url('track/create') }}">Tambah Data</a>
		</div>
	 <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
     <thead>
		<tr>
			<td>TRACK ID</td>
			<td>TRACK NAME</td>
			<td>ALBUM ID</td>
			<td>TRACK TIME</td>
			<td>TRACK FILE</td>
		</tr>

	@foreach($rows as $row)
	<tr>
		<td>{{ $row->track_id }}</td>
		<td>{{ $row->track_name }}</td>
		<td>{{ $row->track_id_album }}</td>
		<td>{{ $row->track_time }}</td>
		<td>
			<audio controls>
			<source src="lagu\{{$row->file}}" type="audio/mpeg">
		</audio>
		</td>

		<td>

			<form action="{{ url('track/' . $row->track_id) }}" method="POST">
				<a href="{{ url('track/' . $row->track_id . '/edit') }}">Edit</a>
				<input name="_method" type="hidden" value="DELETE">
				@csrf
				<button>Hapus</button>
			</form>
			</td>
	</tr>
	@endforeach
	</tbody>
	</table>
</div>

</div>
</div>

@endsection