<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Customar</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />
        <style>
            .intro {
                margin-top: 5rem;
            }
        </style>
    </head>

    <body>
        <section class="intro">
            <div class="mask d-flex align-items-center h-100 gradient-custom">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9 col-xl-7">
                            <div class="card">
                                <div class="card-body p-4 p-md-5">
                                    <h3 class="mb-4 pb-2">Edit Customar</h3>

                                    <form action="/customar/{{$data->id}}" method="POST">
                                        @csrf
                                        {{ method_field('PUT') }}
                                        <div class="form-outline">
                                            <label
                                                class="form-label"
                                                for="Name"
                                            >
                                                Name</label
                                            >
                                            <input
                                                type="text"
                                                id="Name"
                                                class="form-control"
                                                name="Name"
                                                value="{{ $data->Name }}"
                                            />
                                            <span class="text-danger">
                                                @error('Name')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="form-outline datepicker">
                                            <label
                                                for="DateofBirth"
                                                class="form-label"
                                                >Date of Birth</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="DateofBirth"
                                                name="DateofBirth"
                                                value="{{ $data->DOB }}"
                                            />
                                            <span class="text-danger">
                                                @error('DateofBirth')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="form-outline">
                                            <label
                                                class="form-label"
                                                for="emailAddress"
                                                >Email</label
                                            >
                                            <input
                                                type="email"
                                                id="emailAddress"
                                                class="form-control"
                                                name="Email"
                                                value="{{ $data->Email }}"
                                            />
                                            <span class="text-danger">
                                                @error('Email')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="form-outline">
                                            <label
                                                class="form-label"
                                                for="phoneNumber"
                                                >Phone Number</label
                                            >
                                            <input
                                                type="tel"
                                                id="phoneNumber"
                                                class="form-control"
                                                name="PhoneNumber"
                                                value="{{ $data->Phone }}"
                                            />
                                            <span class="text-danger">
                                                @error('PhoneNumber')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-outline">
                                            <label class="form-label" for="city"
                                                >City</label
                                            >
                                            <input
                                                type="text"
                                                id="city"
                                                class="form-control"
                                                name="City"
                                                value="{{ $data->City }}"
                                            />
                                            <span class="text-danger">
                                                @error('City')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="mt-4">
                                            <input
                                                class="btn btn-warning btn-lg"
                                                type="submit"
                                                value="Submit"
                                            />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
