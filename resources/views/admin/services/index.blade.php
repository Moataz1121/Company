@extends('admin.master')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">{{ __('keywords.services') }}</h2>

            <div class="page-title-right">
                <x-action-button href="{{route('admin.services.create')}}" type='create'></x-action-button>
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
                      <th>{{ __('keywords.title') }}</th>
                      <th>{{ __('keywords.icon') }}</th>
                      <th>{{ __('keywords.actions') }}</th>

                    </tr>
                  </thead>
                  <tbody>
                    @if (count($services) > 0)
                    <tr>
                        @foreach ($services as $service)
                        <td>{{ $services->firstItem() + $loop->index }}</td>
                        <td>{{ $service->title }}</td>
                        <td> {{ $service->icon }}</td>
                        <td>
                            <x-action-button type='show' href="{{ route('admin.services.show', ['service' => $service]) }}"></x-action-button>

                            <x-delete-button href="{{route('admin.services.destroy' , ['service' => $service])}}" id="{{ $service->id }}"></x-delete-button>

                    <x-action-button type='edit' href="{{ route('admin.services.edit' , ['service' => $service]) }}"></x-action-button>

                        </td>

                        @endforeach

                      </tr>
                      @else
                     <x-empty-alert></x-empty-alert>
                    @endif


                  </tbody>
                </table>
            {{ $services->render('pagination::bootstrap-4') }}

              </div>
            </div>

          </div> <!-- simple table -->

        </div> <!-- end section -->

      </div> <!-- .col-12 -->
    </div> <!-- .row -->
  </div>

@endsection
