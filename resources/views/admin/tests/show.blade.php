@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="form-group mb-3">
              <label for="simpleinput">Name</label>
              <p type="text"  class="form-control">{{ $test->name }}</p>
            </div>

            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                  <label for="simpleinput">Position</label>
                  <p type="text"  class="form-control">{{ $test->position }}</p>
                </div>

                <div class="form-group mb-3">
                    <img src="{{ asset("storage/test/$test->image") }}" alt="#" width="500px">

                </div>

                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                      <label for="simpleinput">{{ __('keywords.description') }}</label>
                      <p type="text"  class="form-control">{{ $test->descreption }}</p>
                    </div>

                    </div>


          </div> <!-- /.c
    </div>ol -->
@endsection
