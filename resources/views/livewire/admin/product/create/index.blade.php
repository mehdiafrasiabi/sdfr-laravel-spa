<div class="row mb-4 layout-spacing layout-top-spacing">
    <div class="widget-header">
        <div class="d-flex justify-content-between align-items-center">

            <h4>اضافه کردن محصول جدید</h4>

            <a href="{{route('admin.product.index')}}" class="btn btn-danger mb-3 me-4">
                بازگشت به جدول محصولات
            </a>


        </div>
    </div>
    <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">


        <form class="row" wire:submit="submit(Object.fromEntries(new FormData($event.target)))">

                    @include('livewire.admin.product.create.name-title-tag-seo-item')

                    @include('livewire.admin.product.create.image-gallery')
                </div>
                <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        @include('livewire.admin.product.create.price-category')
                        <div class="col-xxl-12 col-xl-4 col-lg-4 col-md-5 mt-4">
                            <div class="widget-content widget-content-area ecommerce-create-section">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success w-100">

                                            <span wire:loading.remove>ذخیره</span>
                                            <div class="spinner-border text-white me-2 align-self-center loader-sm "
                                                 wire:loading></div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </form>
    </div>
