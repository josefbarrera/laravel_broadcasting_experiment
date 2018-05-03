@extends('layouts.app')

@section('content')
<div id="messages-board" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <form method="post" action="/scan" id="scan-repo">
                        @csrf
                        <button :disabled="disabled" class="btn btn-primary">
                            Scan repository
                        </button>
                    </form>
                </div>
            </div>
            <messages-board
                v-bind:messages="messages">
            </messages-board>
        </div>
    </div>
</div>
@endsection
