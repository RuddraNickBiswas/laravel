@extends('admin.admin_dashboard')

@section('admin')
    <div class="m-4">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h6 class="mb-0 text-uppercase">Contact Message Details</h6>
                <hr>
                <div class="card border rounded">


                    <div class="card-body">
                        <div class="p-4 border rounded">
                            <form method="POST" action="{{ route('fn.contact_message.update', $contactMessage->id) }}"
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
                                            value="{{ old('name', $contactMessage->name) }}" required autocomplete="name"
                                            autofocus disabled>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Email') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email', $contactMessage->email) }}" required autocomplete="email"
                                            autofocus disabled>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="subject" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Phone') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="subject" type="text"
                                            class="form-control @error('subject') is-invalid @enderror" name="subject"
                                            value="{{ old('subject', $contactMessage->subject) }}" required autocomplete="subject"
                                            autofocus disabled>

                                        @error('subject')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-group row mb-3">
                                    <label for="message" class="col-sm-2 col-form-label">
                                        <h6>{{ __('Message') }}</h6>
                                    </label>
                                    <div class="col-sm-10">
                                        <textarea style="height: 100px" id="message" type="text"
                                            class="form-control @error('message') is-invalid @enderror" name="message" required autofocus disabled>{{ old('message', $contactMessage->message) }}</textarea>

                                        @error('message')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                     


                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Back to message') }}
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
