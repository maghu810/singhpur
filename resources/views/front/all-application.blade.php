@extends('master')
@section('title', 'ସମସ୍ତ ଦରଖାସ୍ତ ଗୁଡିକ, Singhpur GP')
@section('content')
<div class="about">
         <div class="container">
            <strong>
                  <div><a href="{{ route('application') }}">ନୂଆଁ ଦରଖାସ୍ତ/ପତ୍ର ପାଇଁ ଏଠାରେ କ୍ଲିକ କରନ୍ତୁ </a></div>
                  <br>
                  <div style="text-align: center; font-size: 20px; font-weight: 600;">ସମସ୍ତ ପତ୍ର ତଥା ଦରଖାସ୍ତ ଗୁଡିକ</div>
            <div class="row d_flex" style="font-size: 16px;">
              <div class="col-md-1">କ୍ର ନଂ</div>
              <div class="col-md-3">ପ୍ରାପ୍ତେଷୁ</div>
              <div class="col-md-4">ବିଷୟ</div>
              <div class="col-md-1">ପତ୍ର ସଂଖ୍ଯା</div>
              <div class="col-md-1">ତାରିଖ</div>
              <div class="col-md-1">ଦେଖ</div>
              <div class="col-md-1">ବିଲୟ</div>
            </div>
            </strong>
      
            @foreach($applic as $applics)
            
            <form>
            <div class="row">
              <div class="col-md-1"><input type="hidden" name="id" value="{{$applics->id}}">{{ $applic->firstItem()+$loop->index }}</div>
              <div class="col-md-3">{{$applics->praptesu}}</div>
              <div class="col-md-4">{{$applics->bisaya}}</div>
              <div class="col-md-1">{{$applics->slno}}</div>
              <div class="col-md-1">{{$applics->date}}</div>
              <div class="col-md-1"><a href = 'appl/{{ $applics->id }}' style="color:#3bdd25;">View</a></div>
              <div class="col-md-1" style="color:#f00606;">Delete</div>
            </div>
            </form>

            @endforeach

            {{ $applic->onEachSide(1)->links('pagination::bootstrap-4') }}

         </div>
      </div>
@endsection
