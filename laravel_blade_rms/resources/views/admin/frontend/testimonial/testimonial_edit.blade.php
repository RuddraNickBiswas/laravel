@extends('admin.admin_dashboard')

@section('admin')
    <div class="m-4">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h6 class="mb-0 text-uppercase">Edit Testimonial Section</h6>
                <hr>
                <div class="card border rounded">


                    <div class="card-body">
                        <div class="p-4 border rounded">
                            <form method="POST" action="{{ route('fn.testimonials.update', $testimonial->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <div class="form-group row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Name') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name', $testimonial->name) }}" required autocomplete="name"
                                            autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>




                                <div class="form-group row mb-3">
                                    <label for="post" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Post') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="post" type="text"
                                            class="form-control @error('post') is-invalid @enderror" name="post"
                                            value="{{ old('post', $testimonial->post) }}" required autocomplete="post"
                                            autofocus>

                                        @error('post')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>




                                <div class="form-group row mb-3">
                                    <label for="description" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Description') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <textarea style="height: 100px" id="description" type="text"
                                            class="form-control @error('description') is-invalid @enderror" name="description" required autofocus>{{ old('description', $testimonial->description) }}</textarea>

                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-group row mb-3">
                                    <label for="rating" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Rating') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="rating" name="rating">
                                            <option value="1" {{ $testimonial->rating == 1 ? 'selected' : '' }}>1 star
                                            </option>
                                            <option value="2" {{ $testimonial->rating == 2 ? 'selected' : '' }}>2
                                                stars</option>
                                            <option value="3" {{ $testimonial->rating == 3 ? 'selected' : '' }}>3
                                                stars</option>
                                            <option value="4" {{ $testimonial->rating == 4 ? 'selected' : '' }}>4
                                                stars</option>
                                            <option value="5" {{ $testimonial->rating == 5 ? 'selected' : '' }}>5
                                                stars</option>
                                        </select>

                                        @error('rating')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-group row mb-3">
                                    <label for="visibility" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Visibility') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <select id="visibility"
                                            class="form-control @error('visibility') is-invalid @enderror" name="visibility"
                                            required>
                                            <option value="1" {{ $testimonial->visibility ? 'selected' : '' }}>
                                                {{ __('Visible') }}</option>
                                            <option value="0" {{ !$testimonial->visibility ? 'selected' : '' }}>
                                                {{ __('Hidden') }}</option>
                                        </select>

                                        @error('visibility')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


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
                                            src="{{ !empty($testimonial->image) ? url($testimonial->image) : url('upload/no_image.jpg') }}"
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
                                        {{ __('Update Testimonial') }}
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
