<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-body-secondary">
<div class="container ">
    
	<div class="row  pt-5 col-12 ">
        <h3 class="pb-3">Customar details</h3>
		<div class=" bg-light border border-light rounded">
			<div class="text-left pt-3"><a href="customar/create" class="btn btn-outline-primary">Add new
				customar</a></div>

			<table class="table mt-3  text-left">
				<thead>
					<tr>
						<th scope="col">Sl.No</th>
						<th scope="col">Name</th>
						<th scope="col">Date of Birth</th>
						<th scope="col">Phone Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">City</th>
						<th scope="col"></th>
						<th scope="col"></th>
					</tr>
				</thead>
				@php($userid=1)
				@foreach ($data as $id=>$user)
                    <tr>
						<td>{{ $userid++ }}</td>
                        <td>{{ $user->Name }}</td>
                        <td>{{ $user->DOB }}</td>
						<td>{{ $user->Phone}}</td>
						<td>{{ $user->Email }}</td>
						<td>{{ $user->City }}</td>
						<td><a href="{{url('customar/'.$user->id.'/edit')}}" class="btn btn-primary">Edit</a></td>
						<td>
							<form action="/customar/{{$user->id}}" method="POST">
								@csrf
								{{method_field('DELETE')}}
								<input type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger" value="Delete">
							</form>
							</td>
                    </tr>
                    @endforeach
			</table>
		</div>
	</div>
</div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>