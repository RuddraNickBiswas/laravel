@extends('admin.admin_dashboard')

@section('admin')
    <div class="m-4">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h6 class="mb-0 text-uppercase">Edit Topbar</h6>
                <hr>
                <div class="card border rounded">


                    <div class="card-body">
                        <div class="p-4 border rounded">
                            <form method="POST" action="{{ route('fn.topbar.update', $topBar->id) }}">
                                @csrf
                                @method('PATCH')

                                <div class="form-group row mb-3">
                                    <label for="phone" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Phone') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="phone" type="text"
                                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                                            value="{{ old('phone', $topBar->phone) }}" required autocomplete="phone"
                                            autofocus>

                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="open_hours" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Open Hours') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="open_hours" type="text"
                                            class="form-control @error('open_hours') is-invalid @enderror" name="open_hours"
                                            value="{{ old('open_hours', $topBar->open_hours) }}" required
                                            autocomplete="open_hours" autofocus>

                                        @error('open_hours')
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
                                            <option value="1" {{ $topBar->visibility ? 'selected' : '' }}>
                                                {{ __('Visible') }}</option>
                                            <option value="0" {{ !$topBar->visibility ? 'selected' : '' }}>
                                                {{ __('Hidden') }}</option>
                                        </select>

                                        @error('visibility')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update Topbar') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
