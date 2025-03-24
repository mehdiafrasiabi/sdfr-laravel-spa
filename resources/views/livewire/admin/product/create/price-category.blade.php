<div class="col-xxl-12 col-xl-8 col-lg-8 col-md-7 mt-xxl-0 mt-4">
    <div class="widget-content widget-content-area ecommerce-create-section">
        <div class="row">
            <div class="col-xxl-12 col-md-6 mb-4">
                <label for="title">عنوان محصول</label>
                <sup style="color: red">*</sup>
                <input type="text" class="form-control" id="title" name="title" value="{{@$product->title}}">
            </div>
            @error('title')
            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert" wire:loading.remove
                 wire:loading.remove>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
                <strong>خطا !</strong> <br>
                {{$message}}
            </div>
            @enderror

            <div class="col-xxl-12 col-md-6 mb-4">
                <label for="tag">برچسب</label>
                <sup style="color: red">*</sup>
                <input type="text" class="form-control" id="tag" name="tag" value="{{@$product->tag}}">
            </div>
            @error('tag')
            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert" wire:loading.remove
                 wire:loading.remove>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
                <strong>خطا !</strong> <br>
                {{$message}}
            </div>
            @enderror

            <div class="col-xxl-12 col-md-6 mb-4">
                <label for="course_time">مدت زمان دوره</label>
                <sup style="color: red">*</sup>
                <input type="text" class="form-control" id="course_time" name="course_time" value="{{@$product->course_time}}">
            </div>
            @error('course_time')
            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert" wire:loading.remove
                 wire:loading.remove>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
                <strong>خطا !</strong> <br>
                {{$message}}
            </div>
            @enderror

            <div class="col-xxl-12 col-md-6 mb-4">
                <label for="meeting_time">تعداد جلسات دوره</label>
                <sup style="color: red">*</sup>
                <input type="text" class="form-control" id="meeting_time" name="meeting_time" value="{{@$product->meeting_time}}">
            </div>
            @error('meeting_time')
            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert" wire:loading.remove
                 wire:loading.remove>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
                <strong>خطا !</strong> <br>
                {{$message}}
            </div>
            @enderror

            <div class="col-xxl-12 col-md-6 mb-4">
                <label for="price">قیمت</label>
                <sup style="color: red">*</sup>
                <input type="tel" class="form-control" id="price" name="price" value="{{@$product->price}}">
            </div>
            @error('price')
            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert" wire:loading.remove
                 wire:loading.remove>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
                <strong>خطا !</strong> <br>
                {{$message}}
            </div>
            @enderror


            <div class="col-xxl-12 col-md-6 mb-4">
                <label for="categoryId">دسته بندی</label>
                <select class="form-select" id="categoryId" name="categoryId">
                    @foreach($categories as $category)
                        <option  value="{{@$category->id}}"{{@$category->id==@$product->category_id?'selected':''}}>{{@$category->name}}</option>
                    @endforeach

                </select>
            </div>
            @error('categoryId')
            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert" wire:loading.remove
                 wire:loading.remove>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
                <strong>خطا !</strong> <br>
                {{$message}}
            </div>
            @enderror
        </div>
    </div>
</div>
