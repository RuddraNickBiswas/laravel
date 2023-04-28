@extends('admin.admin_dashboard')

@section('admin')
    <div class="m-4">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h6 class="mb-0 text-uppercase">Footer Edit Section</h6>
                <hr>
                <div class="card border rounded">


                    <div class="card-body">
                        <div class="p-4 border rounded">
                            <form method="POST" action="{{ route('fn.footer.update', $footer->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <div class="form-group row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Name') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="title" type="text"
                                            class="form-control @error('title') is-invalid @enderror" name="title"
                                            value="{{ old('title', $footer->title) }}" required autocomplete="title"
                                            autofocus>

                                        @error('title')
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
                                        <input id="description" type="text"
                                            class="form-control @error('description') is-invalid @enderror"
                                            name="description" value="{{ old('description', $footer->description) }}"
                                            required autocomplete="description" autofocus>

                                        @error('description')
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
                                            value="{{ old('twitter', $footer->twitter) }}" required autocomplete="twitter"
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
                                            value="{{ old('facebook', $footer->facebook) }}" required
                                            autocomplete="facebook" autofocus>

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
                                            value="{{ old('instagram', $footer->instagram) }}" required
                                            autocomplete="instagram" autofocus>

                                        @error('instagram')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row mb-3">
                                    <label for="skype" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Instagram Link') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="skype" type="text"
                                            class="form-control @error('skype') is-invalid @enderror" name="skype"
                                            value="{{ old('skype', $footer->skype) }}" required autocomplete="skype"
                                            autofocus>

                                        @error('skype')
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
                                            value="{{ old('linkedin', $footer->linkedin) }}" required
                                            autocomplete="linkedin" autofocus>

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
                                            class="form-control @error('visibility') is-invalid @enderror"
                                            name="visibility" required>
                                            <option value="1" {{ $footer->visibility ? 'selected' : '' }}>
                                                {{ __('Visible') }}</option>
                                            <option value="0" {{ !$footer->visibility ? 'selected' : '' }}>
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
                                    <label for="cr_title" class="col-sm-2 col-form-label">
                                        <h6>{{ __('LinkedIn Link') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="cr_title" type="text"
                                            class="form-control @error('cr_title') is-invalid @enderror" name="cr_title"
                                            value="{{ old('cr_title', $footer->cr_title) }}" required
                                            autocomplete="cr_title" autofocus>

                                        @error('cr_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-group row mb-3">
                                    <label for="cr_by" class="col-sm-2 col-form-label">
                                        <h6>{{ __('LinkedIn Link') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="cr_by" type="text"
                                            class="form-control @error('cr_by') is-invalid @enderror" name="cr_by"
                                            value="{{ old('cr_by', $footer->cr_by) }}" required autocomplete="cr_by"
                                            autofocus>

                                        @error('cr_by')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-group row mb-3">
                                    <label for="cr_visibility" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Copy Right Visibility') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <select id="cr_visibility"
                                            class="form-control @error('cr_visibility') is-invalid @enderror"
                                            name="cr_visibility" required>
                                            <option value="1" {{ $footer->cr_visibility ? 'selected' : '' }}>
                                                {{ __('Visible') }}</option>
                                            <option value="0" {{ !$footer->cr_visibility ? 'selected' : '' }}>
                                                {{ __('Hidden') }}</option>
                                        </select>

                                        @error('cr_visibility')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                  
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update Footer') }}
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
