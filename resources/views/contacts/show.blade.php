@extends('base')

@section('main')
    <div class="row p-5">
        <div class="col-sm-12">
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>
        <div class="col-sm-12">
            <div id="gmap" style="height: 50%; width: 100%;"></div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ ucfirst($contact->first_name) }} {{ ucfirst($contact->last_name) }}</h5>
                    <table class="table table-striped table-responsive w-100 d-md-table">
                        <tr>
                            <td>ID:</td>
                            <td>{{ $contact->id }}</td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>{{ $contact->email }}</td>
                        </tr>
                        <tr>
                            <td>Birthday:</td>
                            <td>{{ $contact->birthday }}</td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td>{{ $contact->address }}</td>
                        </tr>
                        <tr>
                            <td>City:</td>
                            <td>{{ $contact->city }}</td>
                        </tr>
                        <tr>
                            <td>State:</td>
                            <td>{{ $contact->state }}</td>
                        </tr>
                        <tr>
                            <td>Zip Code:</td>
                            <td>{{ $contact->zip }}</td>
                        </tr>
                    </table>
                    <p class="card-text"><small class="text-muted">Last updated {{ $contact->updated_at }}</small></p>
                </div>
            </div>
            <div>
                <a href="{{ route('contacts.create')}}" class="btn btn-success m-3">New contact</a>
                <a href="{{ route('contacts.index')}}" class="btn btn-primary m-3">View contacts</a>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script>
        var gmap;
        function initMap() {
            gmap = new google.maps.Map(document.getElementById('gmap'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4SKofTOIhPDNQl6T62OxPkG9IOuzdNE4&callback=initMap"
            async defer>
    </script>
@endsection