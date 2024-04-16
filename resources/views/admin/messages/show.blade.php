@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="form-group mb-3">
              <label for="simpleinput">Name</label>
              <p type="text"  class="form-control">{{ $message->name }}</p>
            </div>
            <div class="form-group mb-3">
                <label for="simpleinput">Email</label>
                <p type="text"  class="form-control">{{ $message->email }}</p>
              </div>

            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                  <label for="simpleinput">Subject</label>
                  <p type="text"  class="form-control">{{ $message->subject }}</p>
                </div>

                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                      <label for="simpleinput">{{ __('keywords.messages') }}</label>
                      <p type="text"  class="form-control">{{ $message->message }}</p>
                    </div>

                    </div>


          </div> <!-- /.c
    </div>ol -->
@endsection
