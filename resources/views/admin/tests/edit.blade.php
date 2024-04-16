@extends('admin.master')

@section('content')
<form method="POST" action="{{ route('admin.tests.update' , ['test' => $test]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <div class="form-group mb-3">
                <x-form-label name="name"></x-form-label>
              <input type="text" id="name" name="name" class="form-control" value="{{ $test->name }}">
            </div>
            <x-validation-error name="name"></x-validation-error>

            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <x-form-label name="position"></x-form-label>
                    <input type="text" id="position"value="{{ $test->position }}" name="position" class="form-control">
                </div>
                <x-validation-error name="position"></x-validation-error>

                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                    <x-form-label name="image"></x-form-label>

                      <input type="file" id="image" name="image" class="form-control">
                    </div>
                    <x-validation-error name="image"></x-validation-error>

                    </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <x-form-label name="descreption"></x-form-label>
                        <input type="text" id="descreption" value="{{ $test->descreption }}" name="descreption" class="form-control">
                    </div>
                    <x-validation-error name="descreption"></x-validation-error>

                    </div>


                    <x-button-submit></x-button-submit>
          </div> <!-- /.c
    </div>ol -->
</form >
@endsection
