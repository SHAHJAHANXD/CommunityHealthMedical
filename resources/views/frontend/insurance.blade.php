@extends('frontend.layouts.app')
@section('content')
<style>
    .insurance h2{
        font-weight: 600;font-size: 35px;padding-top: 30px;padding-left: 4%;
    }
    
    .insurance h3{
        font-weight: 500;font-size: 23px;padding-top: 18px;padding-left: 4%;
    }
    
    .insurance h4{
        font-weight: 700;
        font-size: 25px;
    }
    
    .insurance ul {
        list-style: none;
    }
    
    .insurance ul li {
        padding-bottom: 12px;
        font-size: 19px;
    }
    
    .insurance ul li img {
        width: 9%;
    }
</style>
<section class="mb-4">
    <div class="row">
        <div class="col-lg-12 text-center text-lg-left">
            <img style="width: 100%;" src="{{asset('public/assets/img/insurance.png')}}" alt="Insurance">
        </div>
    </div>
</section>
<section class="mb-4 insurance">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <h2>More coverage for your health than you’ll find anywhere else</h2>
                <h3>Our ten customized plans are perfectly designed for you whatever your circumstances. Being covered with Smart Health provides you with:</h3>
            </div>
           
        </div>
        <div class="row pt-6">
            <div class="col-xl-8">
                <h4 style="margin-left: 6%;">Buy Medical insurance</h4>
                <div class="row">
                    <div class="col-xl-6">
                        <ul style="margin-left: 15px;">
                            <li><img src="{{asset('public/assets/img/check.png')}}" alt="Insurance"> <span>Basic Insurance for individual</span></li>
                            <li><img src="{{asset('public/assets/img/check.png')}}" alt="Insurance"> <span>Basic Insurance for Family</span></li>
                            <li><img src="{{asset('public/assets/img/check.png')}}" alt="Insurance"> <span>Basic Insurance for Company Staff</span></li>
                            <li><img src="{{asset('public/assets/img/check.png')}}" alt="Insurance"> <span>Premium Insurance for Individual</span></li>
                            <li><img src="{{asset('public/assets/img/check.png')}}" alt="Insurance"> <span>Premium Insurance for Family</span></li>
                            <li><img src="{{asset('public/assets/img/check.png')}}" alt="Insurance"> <span>Premium Insurance for Company Staff</span></li>
                        </ul>
                    </div>
                    <div class="col-xl-6">
                        <ul>
                            <li><img src="{{asset('public/assets/img/check.png')}}" alt="Insurance"> <span>Maternity Cover</span></li>
                            <li><img src="{{asset('public/assets/img/check.png')}}" alt="Insurance"> <span>Dental Cover</span></li>
                            <li><img src="{{asset('public/assets/img/check.png')}}" alt="Insurance"> <span>Optical Cover</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <h4>Buy Travel Insurance</h4>
                <ul style="padding: 0;">
                    <li><img src="{{asset('public/assets/img/check.png')}}" alt="Insurance"> <span>Worldwide Coverage</span></li>
                    
                </ul>
            </div>
        </div>
        <div class="row pt-6">
            <div class="col-xl-12">
                <p align="center"><button type="button" data-toggle="modal" data-target="#exampleModal" style="width: 29%;height: 61px;color: black;font-size: 22px;font-weight: 700;" class="btn btn-primary shadow-md">Get a Quote</button></p>
                <p style="font-size: 19px;padding-top: 14px;" align="center">Covering healthcare services, investigations and treatments for Cancer (As per DHA list of cancer conditions) and Viral Hepatitis and associated complication.
                    This applies for cases eligible for and enrolled under the DHA launched Patient Support Program, however, the coverage would be as per the terms
                    and conditions of the program.</p>
            </div>
        </div>
    </div>
</section>
<style>
    .modal-body p {
        font-size: 20px;
        text-align: center;
        font-weight: 700;
    }
    
    .modal-body h6 {
        text-align: center;
        font-size: 13px;
    }
    
    .modal-body input {
        border-radius: 25px;
        padding: 0px 32px;
        margin-bottom: 17px;
    }
</style>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <p>Health Insurance Registration form</p>
        <h6>Lorem Ipsum is simply dummy text of the printing <br>
            and typesetting industry. Lorem Ipsum has been the industry's <br>
            standard dummy text ever since the 1500s</h6>
        <form style="margin-top: 11%;">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="First name">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="First name">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="First name">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="First name">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">
                    I agree to the Google Terms of Service and Privacy Policy
                  </label>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <button style="width: 100%;margin-top: 36px;border-radius: 25px;" class="btn btn-primary shadow-md">Submit</button>
            </div>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

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
