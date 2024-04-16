@extends('admin.master')

@section('content')
<form method="POST" action="{{ route('admin.services.update' , ['service' => $service]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <div class="form-group mb-3">
                <x-form-label name="title"></x-form-label>
              <input type="text" id="title" name="title" class="form-control" value="{{ $service->title }}">
            </div>
            <x-validation-error name="title"></x-validation-error>

            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <x-form-label name="icon"></x-form-label>
                    <input type="text" id="icon"value="{{ $service->icon }}" name="icon" class="form-control">
                </div>
                <x-validation-error name="icon"></x-validation-error>

                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <x-form-label name="descreption"></x-form-label>
                        <input type="text" id="descreption" value="{{ $service->descreption }}" name="descreption" class="form-control">
                    </div>
                    <x-validation-error name="descreption"></x-validation-error>

                    </div>


                    <x-button-submit></x-button-submit>
          </div> <!-- /.c
    </div>ol -->
</form >
@endsection
