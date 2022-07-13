@extends('master')
@section('title', 'ଦରଖାସ୍ତ Singhpur GP')
@section('content')
<div class="about">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-3">
                  <div class="about_img">
                     <figure><img src="{{ asset('front/images/maghu-naik.png') }}" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-9">
                  <div class="titlepage">
                     <h2>ପତ୍ର /ଦରଖାସ୍ତ </h2>
                     <form method="post" enctype="" action="/applic">
                        @csrf

                        <p>
                        <label>ପତ୍ର ସଂଖ୍ୟା :
                        <input type="text" name="letter_no" required>
                        </label> 
                        </p>

                        <p>
                        <label>ତାରିଖ :
                        <input type="text" name="date" required>
                        </label>
                        </p>

                        <p>
                        <label>ପ୍ରାପ୍ତେଷୁ :
                        <textarea name="praptesu" maxlength="500" cols="70%" required></textarea>
                        
                        </label>
                        </p>

                         <p>
                        <label>ବିଷୟ :
                        <textarea name="bisaya" maxlength="500" cols="70%" required></textarea>
                        </label>
                        </p>

                        <fieldset>
                        <legend>କାହାକୁ ଲେଖିବେ ଦରଖାସ୍ତ/ପତ୍ର?</legend>
                        <p><label> <input type="radio" name="mahasaya" required value="ମହାଶୟ"> ମହାଶୟ  </label></p>
                        <p><label> <input type="radio" name="mahasaya" required value="ମହାଶୟା"> ମହାଶୟା  </label></p>
                        </fieldset>

                        <fieldset>
                        <legend>ଦରଖାସ୍ତ ସାରାଂଶ </legend>
                        <textarea name="sarangsa" maxlength="500" cols="100%" rows="10" required></textarea>
                        </fieldset>

                       <fieldset>
                        <legend>ଦରଖାସ୍ତ ବିନୀତ  </legend>
                        <textarea name="binita" maxlength="500" cols="100%" rows="10" required></textarea>
                        </fieldset>
                            
                 


                        <p><button class="btn btn-primary">Save</button></p>

                        </form>
                  </div>
                
               </div>
            </div>
         </div>
      </div>

    


@endsection