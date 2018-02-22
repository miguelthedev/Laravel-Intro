<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
    <a class="navbar-brand" href="/">{{config('app.name', 'Laravel Intro')}}</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{config('app.url')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{config('app.url')}}/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{config('app.url')}}/services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{config('app.url')}}/posts">Blog</a>
            </li>
        </ul>
    </div>
</nav>