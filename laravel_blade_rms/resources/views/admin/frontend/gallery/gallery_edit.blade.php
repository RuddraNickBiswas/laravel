@extends('admin.admin_dashboard')

@section('admin')
    <div class="m-4">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h6 class="mb-0 text-uppercase">Edit Gallery Section</h6>
                <hr>
                <div class="card border rounded">


                    <div class="card-body">
                        <div class="p-4 border rounded">
                            <form method="POST" action="{{ route('fn.gallery.update', $gallery->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

 
                                <div class="form-group row mb-3">
                                    <label for="image" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Image') }}</h6>
                                    </label>
                                    <div class="col-sm-10">



                                        <input name="image" class="form-control  @error('image') is-invalid @enderror"
                                            type="file" id="image">
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <img id="showImage" class="rounded avatar-lg"
                                            src="{{ !empty($gallery->image) ? url($gallery->image) : url('upload/no_image.jpg') }}"
                                            alt="Card image cap" class="mt-10" height="100">

                                    </div>

                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update Gallery') }}
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
