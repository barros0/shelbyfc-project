@include('partials.admin.header')

@include('partials.admin.nav')


<div class="alerts">
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            {{Session::get('success')}}
        </div>
    @endif

    @if(Session::has('error'))
        <div class="alert alert-danger" role="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            {{Session::get('error')}}
        </div>
    @endif

    @if(Session::has('alert'))
        <div class="alert alert-warning" role="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            {{Session::get('alert')}}
        </div>
    @endif


    @foreach ($errors->all() as $error)

        <div class="alert alert-danger" role="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            {{ $error }}
        </div>
    @endforeach
</div>


<main>
    @yield('content')
</main>

@include('partials.admin.footer')

