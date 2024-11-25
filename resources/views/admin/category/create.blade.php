<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper  ">
				<!-- Content Header (Page header) -->
		<section class="content-header">
            <div class="container-fluid my-2">
                <div class="row align-items-center">
                    <div class="col text-center">
                        <h1 style="color:black">Create Category</h1>
                    </div>
                  
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
				<!-- Main content -->
				<section class="content w-75 mx-auto px-auto">
					<!-- Default box -->
					<div class="container-fluid">
						<div class="card" style="background-color:#A49393">
							<div class="card-body">		
                               
								<div class="row">
									<div class="col-12">
                                    <form action="{{route('category.store')}}" method="post">
                                    @csrf
										<div class="mb-4">
											<label for="name">Name</label>
											<input type="text" name="catName" id="name" class="form-control" placeholder="Name">	
										</div>
									</div>
									<div class="col-12">
										<div class="mb-4">
											<label for="email">Discription</label>
											<input type="text" name="catDescription" id="decs" class="form-control" placeholder="Discription">	
										</div>
									</div>									
								</div>
							</div>							
						</div>
                        <div class="col-auto">
                        <button class="btn bg-secondary text-white ">Create</button>
                    </div>
					</div>
                    </form>	
					<!-- /.card -->
				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
			
            @include('admin.layouts.footer')
	</body>
</html>