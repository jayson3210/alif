@extends('layouts.app_public')
@section('extra-css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<style>

form label {
    color:#fff;
    font-weight: 800;
}
ol.list {
    list-style-type: none;
    font-size: 1.1rem;
    color:#fff;
}
h3 {
    color: #fff;
    font-weight: 900;
}
h4 {
    color: #fff;
    font-weight: 900;
}
.mrt {
    margin-top: 1.3rem;
}
hr { display: block; height: 1px;
    border-top: 2px solid #ccc;
    margin: 1em 0; padding: 0; 
}
.center-block {
   margin-left:auto;
   margin-right:auto;
   display:block;
   margin-top: 15px;
}

.text-center {
   text-align:center;
   margin-top: 40px;
}
.hr-mrg {
    margin-top: 3rem;
    margin-bottom: 3rem;
}

/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

.benefits-img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    /*padding:25px 25px 0; */
    border-radius:10px 10px 10px 10px;
    border: 1px solid #fff;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;
  }
  .m-btn{
        margin-bottom: 60px;
    }
    .m-second-page {
        margin-top: 60px;
    }

    .benefits-img {
        padding:0px 0px 0px; 
        border-radius:0px 0px 0px 0px;
    }

    .container-footer {
    margin-top: 40px;
    height:auto;
    background-color:#fff;
  }
  }
/* 
  .container {
  display: grid; 
  grid-template-columns: 0.5fr 5fr 0.5fr; 
  gap: 0px 0px; 
} */

</style>
@endsection
@section('content')

<section class="banner br-btm">
    <img class="fw-light img_banner1" alt="Alif-Logo" src="{{ url('/images/logo/header_and_logo_1.png')}}" >
    <img class="fw-light img_banner2" alt="Alif-Logo" src="{{ url('/images/logo/header_and_logo_1_cp.png')}}" >
</section>






<div class="container">
    <div class="row">
        <div class="col-md-12">

<div>

@if ($message = Session::get('success'))
<div class="alert alert-success text-center">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <span style="margin-top:1em;"><strong>{!! $message !!}</strong></span>
</div>
@endif

@if ($message = Session::get('errors'))
<div class="alert alert-danger" style="border: 1px solid #b90f22;">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <ol class="list" style="margin-left: -1.5em;">

        @php $i = 0 @endphp

        @foreach ($errors->all() as $error)
            <span style="display: none;">{{ $i++ }}
        </span>
        @endforeach

        @if($i >= 2)
            <span><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Kulang ang iyong impormasyon. Pakipunan ng wastong impormasyon ang lahat ng datos bago isumite ang inyong pagpaparehistro.
        </span>
        @else
            @foreach ($errors->all() as $error)
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> {{ $error }}
            @endforeach
        @endif


    </ol> 
</div>
@endif

</div>


<div class="row mt-4">

<div class="col-md-8 mt-4">
    <p class="text-left frm-title">
        ALIF Member Update Form
    </p>
    <form name="form" class="mrt" method="POST" action="{{ route('post.update') }}">
        @csrf

        <div class="form-row">

        <div class="form-group col-md-6">
            <label>Pangalan</label>
           <input type="text" class="form-control" name="pangalan" value="{{ old('pangalan',$id->pangalan) }}" placeholder="Pangalan" autofocus>
                        <input type="hidden" name="idno" value="{{ $id->idno }}">
        </div>

        <div class="form-group col-md-6">
            <label class="form-label">Gitnang Pangalan</label>
            <input type="text" class="form-control " name="gpangalan" value="{{ old('gpangalan',$id->gpangalan) }}" placeholder="Gitnang Pangalan">
        </div>

        <div class="form-group col-md-6">
            <label class="form-label">Apelyido</label>
            <input type="text" class="form-control " name="apelyido" value="{{ old('apelyido',$id->apelyido) }}" placeholder="Apelyido">
        </div>

        <div class="form-group col-md-6">
            <label for="inputHN">Bilang ng Kasama sa Bahay</label>
            <select class="form-control" name="household_no" aria-label="Bilang">
                            <option selected disabled>Bilang ng Kasama sa Bahay</option>
                            <option value="1" {{ old('household_no',$id->household_no) == '1' ? 'selected':'' }}>1</option>
                            <option value="2" {{ old('household_no',$id->household_no) == '2' ? 'selected':'' }}>2</option>
                            <option value="3" {{ old('household_no',$id->household_no) == '3' ? 'selected':'' }}>3</option>
                            <option value="4" {{ old('household_no',$id->household_no) == '4' ? 'selected':'' }}>4</option>
                            <option value="5" {{ old('household_no',$id->household_no) == '5' ? 'selected':'' }}>5</option>
                            <option value="6" {{ old('household_no',$id->household_no) == '6' ? 'selected':'' }}>6</option>
                            <option value="7" {{ old('household_no',$id->household_no) == '7' ? 'selected':'' }}>7</option>
                            <option value="8" {{ old('household_no',$id->household_no) == '8' ? 'selected':'' }}>8</option>
                            <option value="9" {{ old('household_no',$id->household_no) == '9' ? 'selected':'' }}>9</option>
                            <option value="10" {{ old('household_no',$id->household_no) == '10' ? 'selected':'' }}>10</option>
                            <option value="11" {{ old('household_no',$id->household_no) == '11' ? 'selected':'' }}>11</option>
                            <option value="12" {{ old('household_no',$id->household_no) == '12' ? 'selected':'' }}>12</option>
                            <option value="13" {{ old('household_no',$id->household_no) == '13' ? 'selected':'' }}>13</option>
                            <option value="14" {{ old('household_no',$id->household_no) == '14' ? 'selected':'' }}>14</option>
                            <option value="15" {{ old('household_no',$id->household_no) == '15' ? 'selected':'' }}>15</option>
                            <option value="16" {{ old('household_no',$id->household_no) == '16' ? 'selected':'' }}>16</option>
                            <option value="17" {{ old('household_no',$id->household_no) == '17' ? 'selected':'' }}>17</option>
                            <option value="18" {{ old('household_no',$id->household_no) == '18' ? 'selected':'' }}>18</option>
                            <option value="19" {{ old('household_no',$id->household_no) == '19' ? 'selected':'' }}>19</option>
                            <option value="20" {{ old('household_no',$id->household_no) == '20' ? 'selected':'' }}>20</option>
                          </select>
        </div>


        <div class="form-group col-md-6">
            <label class="form-label">Cellphone Number</label>
            <input type="input" id="cpno" maxlength="11" class="form-control " name="mobile_number" value="{{ old('mobile_number',$id->mobile_no) }}" placeholder="Cellphone Number">
        </div>

        <div class="form-group col-md-6">
            <label for="inputHN">Probinsya</label>
            <select class="form-control" name="province" aria-label="province" id="provinceid">
                            <option value="" selected="true" disabled>-Select Probinsya-</option>
                            @forelse ($provices as $province)
                                <option value="{{ $province->province_code }}">{{ $province->province_description }}</option>
                            @empty
                            <option value="" disabled="true">-no data found-</option>
                            @endforelse
                        </select>
        </div>

        <div class="form-group col-md-6">
            <label for="inputHN">City/Munisipalidad</label>
            <select class="form-control" name="city" aria-label="city" id="cityid">
                            <option value="" selected="true" disabled>-Select City/Munisipalidad-</option>
                        </select>
        </div>

        
        <div class="form-group col-md-6">
            <label for="inputHN">Barangay</label>
           <select class="form-control" name="barangay" aria-label="barangay" id="brgyid">
                            <option value="" selected="true" disabled>-Select Barangay-</option>
                        </select>
        </div>

        <div class="form-group col-md-12 mt-3">
            <button type="submit" class="btn btn-primary btn-block">Isumite</button>
            <a href="{{ route('welcome') }}" class="btn btn-primary btn-block"><i class="fa fa-share" aria-hidden="true"></i>
                             Bumalik sa Registration</a>
        </div>

        </div>

    </form>
</div>


<div class="col-md-4 mt-4">
    <p class="text-left frm-title">
       Member ka na? hanapin ang inyong Reference No.
    </p>
<form name="form" class="mrt" method="get" action="{{ route('post.search') }}">
    @csrf

    <div class="form-row">

    <div class="form-group col-md-12">
        <label class="form-label">Kung mayroon babaguhin sa impormasyon I-TYPE ANG REFERENCE NUMBER</label>
        <input type="text" class="form-control " name="search" value="{{ old('search') }}" placeholder="Ilagay ang Reference No. upang baguhin ang impormasyon. (hal. 25632548Vx)">
    </div>

    <div class="form-group col-md-12 mt-3">
        <button type="submit" class="btn btn-primary btn-block">Hanapin</button>
    </div>

    </div>

</form>
</div>


<div class="col-md-7 mt-4">
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
</div>
</div>

<div class="col-md-5 mt-4">
    <p class="text-center alif-title">
        About Alif
    </p>
    <p class="text-center alif-about">
        Ang Alif Partylist ayisang organisasyong naglalayong maging representante at boses ng mga indiginong Pilipino na nangangailangan ng tulong medikal, edukasyon, at hanap buhay. 
    </p>
</div>

</div>


        </div>
    </div>
</div>




<div>
<img src="{{ url('/images/logo/about.png')}}">
<br>
</div>



<div class="row container-footer">
<div class="container" >
        <div class="col-md-12">

<div class="row">

<div class="col-md-10">
    <div class="row">
        <div class="col-md-12 mt-3">
            <p class="alif-address">KN37 Mac Arthur Highway San Pablo, Malolos City, Bulacan, Philippines</p>
        </div>

    <div class="col-md-2">
        <p class="alif-holine">HOTLINE NUMBERS</p>
    </div>
    <div class="col-md-2">
        <p class="alif-holine">District 1 and 2 <br>09918394743</p>
    </div>
    <div class="col-md-2">
        <p class="alif-holine">District 3 and 4 <br>09918394744</p>
    </div>
    <div class="col-md-2">
        <p class="alif-holine">District 5 and 6 <br>09918394745</p>
    </div>
    <div class="col-md-2">
        <p class="alif-holine">District CSJDM <br>09918394746</p>
    </div>

     <div class="col-md-12">
            <p class="alif-holine">
                alifpartylist@gmail.com<br>
                headquarters@alifpartylist.org<br><br>
                @alifpartylistph<br>
                #ALIFamily
            </p>
        </div>

    </div>
</div>



<div class="col-md-2 mt-3">
    <div class="row">
        
        <div class="col-md-12 mt-4">
      

        <a href="https://www.facebook.com/alifpartylistph/">
            <i class="icn fa fa-facebook-official fa-2x" aria-hidden="true"></i>
        </a>

        <a href="https://www.instagram.com/alifpartylistph/">
            <i class="icn fa fa-instagram fa-2x" aria-hidden="true"></i>
        </a>

        <a href="https://twitter.com/alifpartylistph/">
            <i class="icn fa fa-twitter-square fa-2x" aria-hidden="true"></i>
        </a>

        <a href="https://www.tiktok.com/@alifpartylistph" style="margin-left:7px;color: white;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
            </svg>
        </a>

        </div>

       
       
    </div>
</div>
</div>
</div>
</div>



    </div>

@endsection
@section('extra-script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script type="text/javascript">
flatpickr("input[type=datetime-local]", {});

$('.selectservices').select2( {
  allowClear:true
});



$(document).ready(function () {
      
$('#provinceid').on('change', function () {

        let province_code = $(this).val();
        
        $('#cityid').empty();
        $('#cityid').append(`<option value="" disabled selected>Searching . . .</option>`);
        $.ajax( {
           type: 'GET',
           url: '/alif/location/cities/' + province_code,
           
            success: function (response) {
            var response = JSON.parse(response);
            console.log(response);   
            
            $('#cityid').empty();
      
            $('#cityid').append(`<option value="" disabled selected>-Select City/Munisipalidad-</option>`);
            response.forEach(element => {
            $('#cityid').append(`<option value="${element['city_municipality_code']}">${element['city_municipality_description']}</option>`);
          });
      
      }
  });
});


$('#cityid').on('change', function () {

let city_municipality_code = $(this).val();

$('#brgyid').empty();   
$('#brgyid').append(`<option value="" disabled selected>Searching . . .</option>`);
$.ajax( {
   type: 'GET',
   url: 'alif/location/barangay/' + city_municipality_code,
   
    success: function (response) {
    var response = JSON.parse(response);
    console.log(response);   
    
    $('#brgyid').empty();

    $('#brgyid').append(`<option value="" disabled selected>-Select Barangay-</option>`);
    response.forEach(element => {
    $('#brgyid').append(`<option value="${element['barangay_code']}">${element['barangay_description']}</option>`);
  });

}
});
});


$('[id^=cpno]').keypress(validateNumber);

});

function validateNumber(event) {
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } else if ( key < 48 || key > 57 ) {
        return false;
    } else {
        return true;
    }
};

</script>
@endsection