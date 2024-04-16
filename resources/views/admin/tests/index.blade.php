@extends('admin.master')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">{{ __('keywords.test') }}</h2>

            <div class="page-title-right">
                <x-action-button href="{{route('admin.tests.create')}}" type='create'></x-action-button>
            </div>
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
                      <th>{{ __('keywords.position') }}</th>
                      <th>{{ __('keywords.image') }}</th>
                      <th>{{ __('keywords.actions') }}</th>

                    </tr>
                  </thead>
                  <tbody>
                    @if (count($tests) > 0)
                    <tr>
                        @foreach ($tests as $test)
                        <td>1</td>
                        <td>{{ $test->name }}</td>
                        <td> {{ $test->position }}</td>
                        <td>
                            <img src="{{ asset("storage/test/$test->image") }}" alt="#" width="50px">
                            </td>
                        <td>
                            <x-action-button type='show' href="{{ route('admin.tests.show', ['test' => $test]) }}"></x-action-button>

                            <x-delete-button href="{{route('admin.tests.destroy' , ['test' => $test])}}" id="{{ $test->id }}"></x-delete-button>

                    <x-action-button type='edit' href="{{ route('admin.tests.edit' , ['test' => $test]) }}"></x-action-button>

                        </td>

                        @endforeach

                      </tr>
                      @else
                     <x-empty-alert></x-empty-alert>
                    @endif


                  </tbody>
                </table>
            {{ $tests->render('pagination::bootstrap-4') }}

              </div>
            </div>

          </div> <!-- simple table -->

        </div> <!-- end section -->

      </div> <!-- .col-12 -->
    </div> <!-- .row -->
  </div>

@endsection
