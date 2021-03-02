

   <!DOCTYPE html>
<html>
<head>
    <title></title>

    @livewireStyles
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div>
                        <h2>Laravel Livewire Crud </h2>
                    </div>
                  <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        @livewire('patients')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</body>
</html>