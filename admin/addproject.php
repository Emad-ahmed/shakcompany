<?php include 'navbar.php' ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
#sidebar .side-menu li.activeproject {
	background: var(--grey);
	position: relative;
}
#sidebar .side-menu li.activeproject::before {
	content: '';
	position: absolute;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	top: -40px;
	right: 0;
	box-shadow: 20px 20px 0 var(--grey);
	z-index: -1;
}
#sidebar .side-menu li.activeproject::after {
	content: '';
	position: absolute;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	bottom: -40px;
	right: 0;
	box-shadow: 20px -20px 0 var(--grey);
	z-index: -1;
}
</style>

<main class="title_start">
			<div class="head-title">
				<div class="left">
					<h1>Add Services</h1>
					<ul class="breadcrumb">
						<li>
							<a href="project.php">Project</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="index.php">Home</a>
						</li>
					</ul>
				</div>
				
			</div>

		
	<form action="projectaction.php" method="POST" class="mt-5" enctype="multipart/form-data">

		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Name</label>
			<input type="text" class="form-control" id="name" name="name">
			
		</div>

		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Language Used</label>
			<select class="form-select" aria-label="Default select example" name="languageused">
				<option value="c">C</option>
				<option value="c++">C++</option>
				<option value="java">Java</option>
				<option value="python">Python</option>
				<option value="php">PHP</option>
				<option value="javscript">Javascript</option>
				<option value="flutter">Flutter</option>
				<option value="ruby">Ruby</option>
				<option value="swift">Swift</option>
				<option value="kotlin">Kotlin</option>
			</select>

		</div>

		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Category</label>
			<select class="form-select" aria-label="Default select example" name="category">
				<option value="webiste">Website</option>
				<option value="andriod">Andriod</option>
				<option value="ios">IOS</option>
				<option value="software">Software</option>
				<option value="itsec">IT Security</option>
				<option value="remote">Remote Security Service</option>
			</select>

		</div>

		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Client Name</label>
			<input type="text" class="form-control" id="name" name="client_name">
		</div>

		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Project Link</label>
			<input type="text" class="form-control" id="name" name="project_link">
			
		</div>

		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Description</label>
			<textarea name="description" class="form-control"  id="description" cols="10" rows="2"></textarea>
			
		</div>

		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Image</label>
			<input type="file" class="form-control" id="name" name="image">
		</div>



		
		<div class="w-50">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
		
	</form>







		</main>