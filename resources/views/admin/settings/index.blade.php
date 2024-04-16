@extends('admin.master')

@section('content')
<form method="POST" action="{{ route('admin.settings.update' , ['setting' => $setting]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <div class="form-group mb-3">
                <x-form-label name="address"></x-form-label>
              <input placeholder="" type="text" id="address" name="address" class="form-control" value="{{ $setting->address }}">
            </div>
            <x-validation-error name="address"></x-validation-error>
            </div>


            <div class="col-md-6">
                <div class="form-group mb-3">
                    <x-form-label name="phone"></x-form-label>
                  <input placeholder="" type="text" id="phone" name="phone" class="form-control" value="{{ $setting->phone }}">
                </div>
                <x-validation-error name="phone"></x-validation-error>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <x-form-label name="email"></x-form-label>
                      <input placeholder="" type="text" id="email" name="email" class="form-control" value="{{ $setting->email }}">
                    </div>
                    <x-validation-error name="email"></x-validation-error>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <x-form-label name="facebook"></x-form-label>
                          <input placeholder="facebook" type="text" id="facebook" name="facebook" class="form-control" value="{{ $setting->facebook }}">
                        </div>
                        <x-validation-error name="facebook"></x-validation-error>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <x-form-label name="twitter"></x-form-label>
                              <input placeholder="twitter" type="text" id="twitter" name="twitter" class="form-control" value="{{ $setting->twitter }}">
                            </div>
                            <x-validation-error name="twitter"></x-validation-error>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-form-label name="instagram"></x-form-label>
                                  <input placeholder="instagram" type="text" id="instagram" name="instagram" class="form-control" value="{{ $setting->instagram }}">
                                </div>
                                <x-validation-error name="instagram"></x-validation-error>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <x-form-label name="youtube"></x-form-label>
                                      <input placeholder="Youtube" type="text" id="youtube" name="youtube" class="form-control" value="{{ $setting->youtube }}">
                                    </div>
                                    <x-validation-error name="youtube"></x-validation-error>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <x-form-label name="linkedin"></x-form-label>
                                          <input placeholder="Linkedin" type="text" id="linkedin" name="linkedin" class="form-control" value="{{ $setting->linkedin }}">
                                        </div>
                                        <x-validation-error name="linkedin"></x-validation-error>
                                        </div>

                    <x-button-submit></x-button-submit>
          </div> <!-- /.c
    </div>ol -->
</form >
@endsection
