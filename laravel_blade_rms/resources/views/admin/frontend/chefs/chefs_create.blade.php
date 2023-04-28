@extends('admin.admin_dashboard')

@section('admin')
    <div class="m-4">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h6 class="mb-0 text-uppercase">Chefs Create Section</h6>
                <hr>
                <div class="card border rounded">


                    <div class="card-body">
                        <div class="p-4 border rounded">
                            <form method="POST" action="{{ route('fn.chefs.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                               
                                <div class="form-group row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Name') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                            value="{{ old('post') }}" required autocomplete="post" autofocus>

                                        @error('post')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row mb-3">
                                    <label for="twitter" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Twitter Link') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="twitter" type="text"
                                            class="form-control @error('twitter') is-invalid @enderror" name="twitter"
                                            value="{{ old('twitter') }}" required autocomplete="twitter"
                                            autofocus>

                                        @error('twitter')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="facebook" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Facebook Link') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="facebook" type="text"
                                            class="form-control @error('facebook') is-invalid @enderror" name="facebook"
                                            value="{{ old('facebook') }}" required autocomplete="facebook"
                                            autofocus>

                                        @error('facebook')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>




                                <div class="form-group row mb-3">
                                    <label for="instagram" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Instagram Link') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="instagram" type="text"
                                            class="form-control @error('instagram') is-invalid @enderror" name="instagram"
                                            value="{{ old('instagram') }}" required
                                            autocomplete="instagram" autofocus>

                                        @error('instagram')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row mb-3">
                                    <label for="linkedin" class="col-sm-2 col-form-label">
                                        <h6>{{ __('LinkedIn Link') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="linkedin" type="text"
                                            class="form-control @error('linkedin') is-invalid @enderror" name="linkedin"
                                            value="{{ old('linkedin') }}" required autocomplete="linkedin"
                                            autofocus>

                                        @error('linkedin')
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
                                            <option value="1" selected>
                                                {{ __('Visible') }}</option>
                                            <option value="0">
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
                                            src="{{ !empty($chef->image) ? url($chef->image) : url('upload/no_image.jpg') }}"
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
                                        {{ __('Chefs Create') }}
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
