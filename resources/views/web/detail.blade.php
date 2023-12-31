@extends('web.layout.master')

@section('content')
    <section class="section-padding" id="" style="background-color: #fbfbfb;">
        <div class="container description-event">

            <div class="row event-detail mt-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb fw-semibold">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('list-event') }}">Event</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $event->event_name }}</li>
                    </ol>
                </nav>

                <div class="d-flex col-lg-8 event-detail-banner justify-items-center">
                    <img src="{{ asset('upload/' . $event->event_image) }}" alt="Gambar"
                        class="img-fluid rounded-3 mx-auto shadow">
                </div>

                <div class="d-flex col-lg-4 event-detail-info mt-2 align-items-center">
                    <div class="card border-0 mb-3 shadow w-100" style="padding: 18px; border-radius: 16px;">
                        <div class="card-header bg-transparent border-0">
                            <h6>{{ $event->event_name }}</h6>
                            <hr>
                        </div>
                        <div class="card-body">
                            <p><i
                                    class="bi bi-calendar-week me-2 text-primary"></i><label>{{ \Carbon\Carbon::parse($event->event_date)->formatLocalized('%d %B %Y') }}</label>
                            </p>
                            <p><i class="bi bi-clock me-2 text-primary"></i><label>{{ \Carbon\Carbon::parse($event->start_time)->format('H:i') }}
                                    WIB</label>
                            </p>
                            <p><i class="bi bi-geo-alt me-2 text-primary"></i><label>{{ $event->event_location }}</label>
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <div class="d-grid gap-2">
                                <a href="{{ route('form-pembayaran.show', $event->id) }}"
                                    class="btn btn-primary btn-beli-tiket" type="button">Beli Tiket</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 event-detail-description mt-3">
                    <p class="title">
                        {!! $event->description !!}
                    </p>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('addCss')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');

        @media (min-width: 992px) {
            .description-event {
                padding-left: 5rem;
                padding-right: 5rem;
            }
        }

        .navbar {
            background-color: black;
        }

        .event-detail-description {
            font-family: 'Roboto', sans-serif;
            font-weight: 400
        }

        .event-detail-description h2,
        h3,
        h4 {
            color: #151416;
        }

        .title p {
            color: #494a4a;
        }

        .card-body p {
            font-family: 'Roboto', sans-serif;
        }

        /* .event-detail-description p strong {
            font-weight: 700;
            font-size: 20px
            } */
    </style>
@endsection
