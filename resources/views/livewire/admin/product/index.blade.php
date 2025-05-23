<div class="col-md-12">
    @push('link')
        <style>
            .wrap-text {
                word-wrap: break-word;
                white-space: normal;
                overflow-wrap: break-word;
                max-width: 300px; /* یا هر عرضی که می‌خوای */
            }
        </style>
    @endpush
    @if(session()->has('success'))

        <div class="alert alert-icon-left alert-light-success alert-dismissible fade show mb-4" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <svg data-bs-dismiss="alert"> ...</svg>
            </button>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-check-square">
                <polyline points="9 11 12 14 22 4"></polyline>
                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
            </svg>
            <strong>پیغام !</strong>
            {{ session()->get('success') }}
        </div>

    @endif

    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="d-flex justify-content-between align-items-center">

                <h4>لیست محصولات</h4>

                <a href="{{route('admin.product.create')}}" class="btn btn-outline-success mb-2 me-4">
                    افزودن محصول جدید
                </a>

            </div>
        </div>
        <div class="widget-content widget-content-area">

            <div class="table-responsive">
                <div class="mb-4">
                    <input type="text" wire:model.live.debounce.350ms="search" placeholder="جستجو بر اساس نام یا کد محصول" style="width: 320px"
                           class="form-control border rounded px-3 py-2  md:w-1/3" />
                </div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="50px" scope="col">#</th>
                        <th width="150px" scope="col">کد محصول</th>
                        <th width="130px" scope="col">تصویر محصول</th>
                        <th scope="col">نام محصول</th>
                        <th scope="col">مدت زمان دوره</th>
                        <th scope="col">تعداد جلسات</th>
                        <th scope="col">برچسب</th>
                        <th scope="col">دسته بندی</th>
                        <th scope="col">قیمت</th>
                        <th scope="col" class="text-center">محتوای محصول</th>
                        <th class="text-center" scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($products as $product)

                        <tr>
                            <td>
                                {{$loop->iteration + $products->firstItem() - 1}}
                            </td>
                            <td>
                                {{$product->p_code}}
                            </td>
                            <td>
                                <img style="width:70px;height: 70px" src="/products/{{$product->id}}/photo/{{@$product->coverImage->path}}" alt="">
                            </td>
                            <td>
                                <div class="media">
                                    <div class="media-body align-self-center">
                                        <p class="mb-0 wrap-text">{{$product->name}}</p>
                                    </div>
                                </div>
                            </td>
                            <td>{{@$product->course_time}}</td>
                            <td>{{@$product->meeting_time}}</td>
                            <td><span class="badge badge-light-success inv-status">{{@$product->tag}}</span> </td>
                            <td>{{@$product->category->name}}</td>
                            <td>{{number_format($product->price)}}</td>
                            <td class="text-center">
                                <a href="{{route('admin.product.content',$product->id)}}" class="btn btn-outline-warning">محتوا</a>
                            </td>
                            <td class="text-center">
                                <div class="action-btns">

                                    <a href="{{route('admin.product.create')}}?product_id={{$product->id}}"
                                       class="action-btn btn-edit bs-tooltip me-2"
                                       data-toggle="tooltip" data-placement="top" title=""
                                       data-bs-original-title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-edit-2">
                                            <path
                                                d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0);"
                                       wire:confirm="آیا مطمئن هستید؟"
                                       wire:click="delete({{$product->id}})"
                                       class="action-btn btn-delete bs-tooltip"
                                       data-toggle="tooltip" data-placement="top" title=""
                                       data-bs-original-title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-trash-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>

                    @endforeach


                    </tbody>
                </table>
                {{$products->links('layouts.admin.pagination')}}
            </div>

        </div>
    </div>

</div>



