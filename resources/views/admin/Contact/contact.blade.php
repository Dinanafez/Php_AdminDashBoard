<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')
@include('admin.layouts.links')

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper  ">
				<!-- Content Header (Page header) -->
		<section class="content-header">
            <div class="container-fluid my-2">
                <div class="row align-items-center">
                    <div class="col text-center">
                        <h1 style="color:black">Contact Us</h1>
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

                <div class="col-md-6">
                    @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                    @endif
                    <form class="shake" role="form" method="post" id="contactForm" name="contact-form" action="{{route('contact.store')}}">
                        @csrf
                        <div class="mb-3">
                            <label class="mb-2" for="name">Name</label>
                            <input class="form-control" id="name" type="text" name="name" required data-error="Please enter your name" value="{{old('name')}}">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label class="mb-2" for="email">Email</label>
                            <input class="form-control" id="email" type="email" name="email" required data-error="Please enter your Email" value="{{old('email')}}">
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label class="mb-2">Subject</label>
                            <input class="form-control" id="msg_subject" type="text" name="subject" required data-error="Please enter your message subject" value="{{old('subject')}}">
                             @error('subject')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="message" class="mb-2">Message</label>
                            <textarea class="form-control" rows="3" id="message" name="message" required data-error="Write your message">{{old('message')}}</textarea>
                            @error('message')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                      
                        <div class="form-submit">
                            <button class="btn btn-dark" type="submit" id="form-submit"><i class="material-icons mdi mdi-message-outline"></i> Send Message</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@include('admin.layouts.footer')
