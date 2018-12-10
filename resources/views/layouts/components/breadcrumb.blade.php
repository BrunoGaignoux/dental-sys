<section class="content-header">
    <div class="col">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><a class="link" href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                {{ isset($page) ? $page : null }}
            </ol>
        </nav>
    </div>
</section>