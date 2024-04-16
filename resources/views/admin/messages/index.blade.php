@extends('admin.master')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">{{ __('keywords.messages') }}</h2>


        </div>
        <div class="row">
          <!-- simple table -->
          <div class="col-md-12 my-4">
            <div class="card shadow">
              <div class="card-body">
               <x-success-alert></x-success-alert>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>{{ __('keywords.name') }}</th>
                      <th>{{ __('keywords.email') }}</th>
                      <th>{{ __('keywords.subject') }}</th>
                      <th>{{ __('keywords.actions') }}</th>

                    </tr>
                  </thead>
                  <tbody>
                    @if (count($messages) > 0)
                    <tr>
                        @foreach ($messages as $message)
                        <td>{{ $messages->firstItem() + $loop->index }}</td>
                        <td>{{ $message->name }}</td>
                        <td> {{ $message->email }}</td>
                        <td> {{ $message->subject }}</td>
                        <td>
                            <x-action-button type='show' href="{{ route('admin.messages.show', ['message' => $message]) }}"></x-action-button>

                            <x-delete-button href="{{route('admin.messages.destroy' , ['message' => $message])}}" id="{{ $message->id }}"></x-delete-button>


                        </td>

                        @endforeach

                      </tr>
                      @else
                     <x-empty-alert></x-empty-alert>
                    @endif


                  </tbody>
                </table>
            {{ $messages->render('pagination::bootstrap-4') }}

              </div>
            </div>

          </div> <!-- simple table -->

        </div> <!-- end section -->

      </div> <!-- .col-12 -->
    </div> <!-- .row -->
  </div>

@endsection
