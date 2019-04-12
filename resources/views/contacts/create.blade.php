@extends('base')

@section('main')
    <div class="row border p-5 mt-5">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-5">Create Contact</h1>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('contacts.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">First Name:</label>
                        <input type="text" class="form-control" name="first_name" required/>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <input type="text" class="form-control" name="last_name" required/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" name="email" required/>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="text" class="form-control" name="phone"/>
                    </div>
                    <div class="form-group">
                        <label for="birthday">Birthday:</label>
                        <input class="datepicker" id="datepicker" type="text" name="birthday"/>
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" name="address"/>
                    </div>
                    <div class="form-group">
                        <label for="city">City:</label>
                        <input type="text" class="form-control" name="city"/>
                    </div>
                    <div class="form-group">
                        <label for="state">State:</label>
                        <input type="text" class="form-control" name="state"/>
                    </div>
                    <div class="form-group">
                        <label for="zip">Zip:</label>
                        <input type="text" class="form-control" name="zip"/>
                    </div>
                    <button type="submit" class="btn btn-success">Add contact</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        (function($) {
            $( "#datepicker" ).datepicker({
                minDate: new Date(1900,0,0),
                maxDate: new Date(2019,0,0,),
                yearRange: '1900:2019',
                changeYear: true,
                changeMonth: true,
                changeDay: true,
                dateFormat: 'yy-mm-dd'
            });
        })(jQuery);
    </script>
@endsection