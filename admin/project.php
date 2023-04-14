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
					<h1>Services</h1>
					<ul class="breadcrumb">
						<li>
							<a href="services.php">Project</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="index.php">Home</a>
						</li>
					</ul>
				</div>
				
			</div>


			

<div id="modal">
    <div id="modal-form">
        <h2>Edit Form</h2>
        <table>
        </table>
        <div id="close-btn">Exit</div>
    </div>
    
</div>




<table data-replace="jtable" id="example" aria-label="JS Datatable" data-locale="en" data-search="true">
    <div class="serviceadd">
        <a href="addproject.php" class="btn btn-info text-white">Add Service</a>
    </div>
            <thead>
                <tr>
                    <th>Sno. <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></th>
                    <th>Name <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></th>
                    <th>Language <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></th>
                    <th>Category <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></th>
                    <th>Client Name <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></th>
                    <th>Link Project <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></th>
                    <th>Description <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></th>
                    <th>Image <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></th>
                    <th>Action <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php
                    include 'config.php';
                    $alldata = mysqli_query($conn, "SELECT * FROM `project` ");

                    while ($row = mysqli_fetch_array($alldata)) {
                        
                        echo "<tr>
                        <td id='first'>$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[langage_used]</td>
                        <td>$row[category]</td>
                        <td>$row[category]</td>
                        <td>$row[client_name]</td>
                        <td>$row[description]</td>
                        <td><img src='ProjectImage/$row[image]' alt=''></td>
                        <td><a href='editproject.php'>Edit</a><a href='Delete'>Delete</a></td>
                        </tr>";
                    }
                ?>
                </tr>
            </tbody>
        </table>
        <script src="js/datatable.min.js"></script>
        <script src="js/jquery-3.6.4.js"></script>

        <script>
            $(document).ready(function(){

            });
        </script>
        <script></script>
		</main>