<div id="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @include('layouts.partials.breadcrumbs', ['items' => $page->ancestors, 'title' => ($page->content_header) ?: $page->title])
            </div>
        </div>
    </div>
</div>
