<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" sizes="16x16" type="image/png" href="{{ asset('images/logo.png') }}"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ADMS') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/new-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/notifbutton.css') }}" rel="stylesheet">
    <link href="{{ asset('css/panels.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminpanel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mobile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tags.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css'>
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap-tag.js') }}"></script>
</head>
<body>

 @include('inc.nav') 
    <div id="app">
        <div class="page-content">
            <div class="container">

                @include('inc.sidebar')
                @include('inc.messages')
                @yield('content')

            </div>
        </div>
    </div>

@include('inc.footer')


    <!-- Scripts -->
    <script type="text/javascript">
        var APP_URL = {!! json_encode(url('/')) !!}
    </script>

    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/notif.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    

    <script type="text/javascript" src="{{ URL::asset('js/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery-autocomplete.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/index.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/customjs.js') }}"></script>
   <script type="text/javascript">
       
       //script for keywords

$(document).ready(function () {
    $('#bootstrapTagsInputForm')
        .find('[name="cities"]')
            // Revalidate the cities field when it is changed
            .change(function (e) {
                $('#bootstrapTagsInputForm').formValidation('revalidateField', 'cities');
            })
            .end()
        
        .formValidation({
            framework: 'bootstrap',
            excluded: ':disabled',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                cities: {
                    validators: {
                        notEmpty: {
                            message: 'Please enter at least one city you like the most.'
                        }
                    }
                },
                countries: {
                    validators: {
                        callback: {
                            message: 'Please enter 2-4 countries you like most.',
                            callback: function (value, validator, $field) {
                                // Get the entered elements
                                var options = validator.getFieldElements('countries').tagsinput('items');
                                return (options !== null && options.length >= 2 && options.length <= 4);
                            }
                        }
                    }
                }
            }
        });
});


   </script>
</body>
</html>
