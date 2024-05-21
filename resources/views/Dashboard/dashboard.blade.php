@extends('composants.model')

@section('page_title')

Dashboard

@endsection

@section('page')
<div class="model1 relative ">
    @include('composants.model1')
</div>
<div class="model2 relative hidden">
    @include('composants.model2')
</div>
<div class="model3 relative hidden">
    @include('composants.model3')
</div>
@endsection