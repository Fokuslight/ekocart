<div class="widget widget-categories mb-4 pb-4 border-bottom">

    <h4 class="widget-title mb-3">Categories</h4>
    <div id="accordion" class="accordion">

        @foreach($parentCategories as $parentCategory)
            <div class="card border-0 mb-3">
                <div class="card-header">
                    <h6 class="mb-0">
                        <a class="link-title" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$parentCategory->id}}">{{ $parentCategory->title }}r</a>
                    </h6>
                </div>

                <div id="collapse{{$parentCategory->id}}" class="collapse" data-parent="#accordion">
                    <div class="card-body text-muted">
                        <ul class="list-unstyled">
                            @foreach($categories as $category)
                                @if($category->parent_id == $parentCategory->id)
                                    <li><a href="#">{{ $category->title }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
