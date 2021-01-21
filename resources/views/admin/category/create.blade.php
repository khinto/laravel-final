<!DOCTYPE html>
<html>
<head>
	<title>Create Category</title>

</head>
<body>
	<div class="container">
		<form  method="POST" action="{{ route('admin.categories.store') }}" >
			@csrf








            <input type="text" class="form-control" name="name">


            <select data-placeholder="Select parent category..." class="form-control" name="parent_category">
            	<option value="0"></option>
              	@foreach ($categories as $category)


                   <option value="{{ $category->id }}">{{ $category->name }}</option>
        		@endforeach
            </select><br><br>
			<br>
			<button type="submit">Add Category</button>
		</form>
	</div>



</body>
</html>
