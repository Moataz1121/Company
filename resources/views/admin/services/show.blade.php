@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="form-group mb-3">
              <label for="simpleinput">Title</label>
              <p type="text"  class="form-control">{{ $service->title }}</p>
            </div>

            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                  <label for="simpleinput">Icon</label>
                  <p type="text"  class="form-control">{{ $service->icon }}</p>
                </div>

                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                      <label for="simpleinput">{{ __('keywords.description') }}</label>
                      <p type="text"  class="form-control">{{ $service->descreption }}</p>
                    </div>

                    </div>


          </div> <!-- /.c
    </div>ol -->
@endsection
