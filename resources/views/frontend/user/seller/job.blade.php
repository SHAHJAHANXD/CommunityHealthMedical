@extends('frontend.layouts.user_panel')

@section('panel_content')


    {{-- Basic Info --}}
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0 h6">{{ translate('Job Vacancy') }}</h5>
        </div>
        <div class="card-body">
            <form class="" action="/job-store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <label class="col-md-2 col-form-label">{{ translate('Department') }}<span class="text-danger text-danger">*</span></label>
                    <div class="col-md-10">
                        <input type="text" class="form-control mb-3" placeholder="{{ translate('Department')}}" name="department" value="" required>
                    </div>
                </div>
                
                <div class="row">
                    <label class="col-md-2 col-form-label">{{ translate('Job Title') }}<span class="text-danger text-danger">*</span></label>
                    <div class="col-md-10">
                        <input type="text" class="form-control mb-3" placeholder="{{ translate('Job Title')}}" name="title" value="" required>
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-2 col-form-label">{{ translate('Location') }} <span class="text-danger text-danger">*</span></label>
                    <div class="col-md-10">
                        <input type="text" class="form-control mb-3" placeholder="{{ translate('Location')}}" name="location" value="" required>
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-2 col-form-label">{{ translate('Last Apply Date') }} <span class="text-danger text-danger">*</span></label>
                    <div class="col-md-10">
                        <input type="date" class="form-control mb-3" placeholder="{{ translate('Last Apply Date')}}" name="lastdate" value="" required>
                    </div>
                </div>
                
                <div class="form-group mb-0 text-right">
                    <button type="submit" class="btn btn-sm btn-primary">{{translate('Save')}}</button>
                </div>
            </form>
        </div>
    </div>
    <?php 
        $jobs = App\Job::where('user_id',Auth::user()->id)->get();
    ?>
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0 h6">{{ translate('Job Vacancy') }}</h5>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Department</th>
                      <th scope="col">Job Title</th>
                      <th scope="col">Location</th>
                      <th scope="col">Last Apply Date</th>
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
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
