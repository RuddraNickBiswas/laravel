@extends('admin.admin_dashboard')

@section('admin')
    <div class="m-4">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h6 class="mb-0 text-uppercase">Create Gallery Section</h6>
                <hr>
                <div class="card border rounded">


                    <div class="card-body">
                        <div class="p-4 border rounded">
                            <form method="POST" action="{{ route('fn.gallery.store') }}" enctype="multipart/form-data">
                                @csrf


                                <div class="form-group row mb-3">
                                    <label for="multiple_image" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Multiple Images') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input name="images[]"
                                            class="form-control  @error('multiple_image') is-invalid @enderror"
                                            type="file" id="multiple_image" multiple>
                                        @error('images')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <div id="showImages" class="mt-2"></div>
                                    </div>
                                    @error('images')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add Gallery Image') }}
                                    </button>
                                </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
