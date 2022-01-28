@extends('frontend.layouts.app')

@section('content')
<section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4">{{ translate('All Job Vacancies')}}</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="{{ route('home') }}">{{ translate('Home')}}</a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="/ambulance-booking">"{{ translate('Job Vacancies')}}"</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php 
        $jobs = App\Job::all();
    ?>
<section class="pt-4 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <table class="table">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Department</th>
                          <th scope="col">Job Title</th>
                          <th scope="col">Location</th>
                          <th scope="col">Last Apply Date</th>
                          <th scope="col">Apply</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jobs as $job)
                        <tr>
                          <th scope="row">{{$job->id}}</th>
                          <td>{{$job->department}}</td>
                          <td>{{$job->title}}</td>
                          <td>{{$job->location}}</td>
                          <td>{{$job->lastdate}}</td>
                          <td><a href="#" class="btn btn-primary btn-sm shadow-md">Apply Now</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script type="text/javascript">
    // making the CAPTCHA  a required field for form submission
    $(document).ready(function(){
        // alert('helloman');
        $("#shop").on("submit", function(evt)
        {
            var response = grecaptcha.getResponse();
            if(response.length == 0)
            {
            //reCaptcha not verified
                alert("please verify you are humann!");
                evt.preventDefault();
                return false;
            }
            //captcha verified
            //do the rest of your validations here
            $("#reg-form").submit();
        });
    });
</script>
@endsection
