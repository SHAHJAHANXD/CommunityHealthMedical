@extends('frontend.layouts.app')

@section('content')
<div style="background-image: url(https://medical.bilaltraderslh.com/public/assets/img/back.jpg);background-size: 100% 100%">
    <div style="padding: 12%;background: #2dd24c6e;">
    <section >
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12 text-center text-lg-left">
                    <h1 style="text-align: center;color: white;font-weight: 700;" class="h4">{{ translate('Online Booking for Ambulance')}}</h1>
                </div>
            </div>
        </div>
    </section>
    </div>
</div>
<section style="margin-top: -11%;" class="mb-4">
    <div class="container">
        <div class="row">
            <div style="padding: 0;background: white;" class="col-xl-6">
                <img style="width: 100%;height: 100%;" src="{{asset('public/assets/img/back.jpg')}}" alt="Girl in a jacket" width="500" height="600">
            </div>
            <div style="padding: 0;" class="col-xl-6">
                <form class="" action="/ambulance-store" method="POST" enctype="multipart/form-data">
                    @csrf
                        @if($errors->any())
                        <div class="alert alert-success" role="alert">{{$errors->first()}}</div>
                        @endif
                        <div class="bg-white rounded shadow-sm mb-3">
                            <div class="fs-15 fw-600 p-3 border-bottom">
                                {{ translate('Contact Us for Ambulance Booking')}}
                            </div>
                            <div class="p-3">
                                <div class="form-group">
                                    <label>{{ translate('Your Name')}} <span class="text-primary">*</span></label>
                                    <input type="text" class="form-control" value="" placeholder="{{  translate('Name') }}" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label>{{ translate('Address')}} <span class="text-primary">*</span></label>
                                    <input type="text" class="form-control" value="" placeholder="{{  translate('Address') }}" name="address" required>
                                </div>
                                <div class="form-group">
                                    <label>{{ translate('Google Map')}} <span class="text-primary">*</span></label>
                                    <input type="text" class="form-control" value="" placeholder="{{  translate('Address') }}" name="googlemap" required>
                                </div>
                                <div class="form-group">
                                    <label>{{ translate('Emirates Id Num / Passport Num')}} <span class="text-primary">*</span></label>
                                    <input type="text" class="form-control" value="" placeholder="{{  translate('Emirates Id Num / Passport Num') }}" name="emirates" required>
                                </div>
                                <div class="form-group">
                                    <label>{{ translate('Emirates Id Photo')}} <span class="text-primary">*</span></label>
                                    <input type="file" class="form-control" value="" name="emirates_image" required>
                                </div>
                                <div class="form-group">
                                    <label>{{ translate('Passport Photo')}} <span class="text-primary">*</span></label>
                                    <input type="file" class="form-control" value="" name="passport_image" required>
                                </div>
                                <div class="form-group">
                                    <label>{{ translate('Visa Page Photo')}} <span class="text-primary">*</span></label>
                                    <input type="file" class="form-control" value="" name="visa_image" required>
                                </div>
                                <div class="form-group">
                                    <label>{{ translate('Insurance Card Photo')}} <span class="text-primary">*</span></label>
                                    <input type="file" class="form-control" value="" name="insurance_image" required>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary fw-600">{{ translate('Confirm Booking')}}</button>
                                </div>
                            </div>
                        </div>

                    
                </form>
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
