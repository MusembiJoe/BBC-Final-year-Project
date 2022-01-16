<!Doctype html>
<head>
<link rel="stylesheet" href="css/all.min.css" media="screen" >
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- CSS only -->
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->

</head>
<style>

    .navbar {
        position: fixed;
        width: 100%;
        top: 0;
        left: 0;
    }

</style>
  <nav class="navbar top-navbar bg-white box-shadow">
            	<div class="container-fluid">
                    <div class="row">
                        <div class="navbar-header w3-dark-grey">
                			<a class="navbar-brand text-white" href="admin_edit_choice.php">
                			    Kukutreat
                			</a>
                            <span class="small-nav-handle hidden-sm hidden-xs"></span>
                			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                				<span class="sr-only">Toggle navigation</span>

                			</button>
                            <button type="button" class="navbar-toggle mobile-nav-toggle" >

                			</button>
                		</div>
                        <!-- /.navbar-header -->

                		<div class="collapse navbar-collapse" id="navbar-collapse-1">
                			<ul class="nav navbar-nav" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">


                       
                				<li class="hidden-xs hidden-xs"><!-- <a href="#">My Tasks</a> --></li>
                               
                			</ul>
                            <!-- /.nav navbar-nav -->

                			<ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                             
                				
							<li><a href="admin_logout.php" class="color-danger text-center"onclick="return confirm('Are you sure you want Logging out the system?');">Logout</a></li>
                					
                		
                            
                			</ul>

                            <ul class="nav navbar-nav navbar-center" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">


                                <li><a href="admin_edit_choice.php" class="color-danger text-center";">Home</a></li>



                            </ul>



                            <!-- /.nav navbar-nav navbar-right -->
                		</div>
                		<!-- /.navbar-collapse -->
                    </div>
                    <!-- /.row -->
            	</div>
            	<!-- /.container-fluid -->
            </nav>
</html>