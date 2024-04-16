@extends('admin.master')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
            <h2 class="h5 page-title">{{ __('keywords.features') }}</h2>

            <div class="page-title-right">
                <x-action-button href="{{route('admin.featuers.create')}}" type='create'></x-action-button>
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
                    @if (count($featuers) > 0)
                    <tr>
                        @foreach ($featuers as $featuer)
                        <td>{{ $featuers->firstItem() + $loop->index }}</td>
                        <td>{{ $featuer->title }}</td>
                        <td> {{ $featuer->icon }}</td>
                        <td>
                            <x-action-button type='show' href="{{ route('admin.featuers.show', ['featuer' => $featuer]) }}"></x-action-button>

                            <x-delete-button href="{{route('admin.featuers.destroy' , ['featuer' => $featuer])}}" id="{{ $featuer->id }}"></x-delete-button>

                    <x-action-button type='edit' href="{{ route('admin.featuers.edit' , ['featuer' => $featuer]) }}"></x-action-button>

                        </td>

                        @endforeach

                      </tr>
                      @else
                     <x-empty-alert></x-empty-alert>
                    @endif


                  </tbody>
                </table>
            {{ $featuers->render('pagination::bootstrap-4') }}

              </div>
            </div>

          </div> <!-- simple table -->

        </div> <!-- end section -->

      </div> <!-- .col-12 -->
    </div> <!-- .row -->
  </div>

@endsection
