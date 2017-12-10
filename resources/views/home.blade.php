@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div id="app">
<passport-clients></passport-clients>
<passport-authorized-clients></passport-authorized-clients>
<passport-personal-access-tokens></passport-personal-access-tokens>
</div>n!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
<script type="text/javascript">
    // axios.get('/oauth/clients')
    // .then(response => {
    //     console.log(response.data);
    // });
    // const data = {
    //     name: 'Test Name',
    //     redirect: 'http://example.com/callback'
    // };

    // axios.post('/oauth/clients', data)
    //     .then(response => {
    //         console.log(response.data);
    //     })
    //     .catch (response => {
    //         // List errors on response...
    // });
</script>
@endpush 
