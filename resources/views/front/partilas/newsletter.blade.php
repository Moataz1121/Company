<div class="container-xxl bg-primary my-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container px-lg-5">
        <div class="row align-items-center" style="height: 250px;">
            <div class="col-12 col-md-6">
                <h3 class="text-white">Ready to get started</h3>
                <small class="text-white">Diam elitr est dolore at sanctus nonumy.</small>
                <div class="position-relative w-100 mt-3">
                    <form method="post" action="{{ route('front.subscriber.store') }}">
                        @csrf
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="email" name="email" placeholder="Enter Your Email" style="height: 48px;">
                        <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                    </form>
                    <x-validation-error name="email"></x-validation-error>

                </div>
                @if (session('submessage'))
                    <span class="alert alert-success"> {{ session('submessage') }}</span>
                @endif
            </div>
            <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                <img class="img-fluid mt-5" style="max-height: 250px;" src="{{asset('assets-front')}}/img/newsletter.png">
            </div>
        </div>
    </div>
</div>
