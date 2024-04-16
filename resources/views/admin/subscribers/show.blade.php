@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="form-group mb-3">
                <label for="simpleinput">Email</label>
                <p type="text"  class="form-control">{{ $subscriber->email }}</p>
              </div>

            </div>



          </div> <!-- /.c
    </div>ol -->
@endsection
