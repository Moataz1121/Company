@extends('admin.master')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">{{ __('keywords.subscribers') }}</h2>


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
                      <th>{{ __('keywords.email') }}</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (count($subscribers) > 0)
                    <tr>
                        @foreach ($subscribers as $subscriber)
                        <td>{{ $subscribers->firstItem() + $loop->index }}</td>
                        <td> {{ $subscriber->email }}</td>
                        <td>
                            <x-action-button type='show' href="{{ route('admin.subscribers.show', ['subscriber' => $subscriber]) }}"></x-action-button>

                            <x-delete-button href="{{route('admin.subscribers.destroy' , ['subscriber' => $subscriber])}}" id="{{ $subscriber->id }}"></x-delete-button>


                        </td>

                        @endforeach

                      </tr>
                      @else
                     <x-empty-alert></x-empty-alert>
                    @endif


                  </tbody>
                </table>
            {{ $subscribers->render('pagination::bootstrap-4') }}

              </div>
            </div>

          </div> <!-- simple table -->

        </div> <!-- end section -->

      </div> <!-- .col-12 -->
    </div> <!-- .row -->
  </div>

@endsection
