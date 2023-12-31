@extends('layouts.navbar_user')

@section('navbar-user')

<!-- Start Content -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-3">
            <h1 class="h2 pb-4">Categories</h1>
            <ul class="list-unstyled templatemo-accordion">
                @foreach ($ct as $item)
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                        {{$item->nama_category}}
                        <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                    </a>
                    <ul class="collapse show list-unstyled pl-3">
                        @foreach ($sct as $item2)
                        @if ($item2->id_category === $item->id)
                        <li><a class="text-decoration-none"
                                href="{{route('user.readCategory', $item2->id)}}">{{$item2->nama_subcategory}}</a></li>

                        @endif
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="col-lg-9">
            <div class="row">
                @foreach ($itemCt as $item)
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="{{asset('user/img/shop_07.jpg')}}">
                            <div
                                class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2"
                                            href="{{route('user.readMore', $item->id)}}"><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none">{{$item->judul_course}}</a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span
                                        class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span
                                        class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span
                                        class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span
                                        class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <ul class="list-unstyled d-flex justify-content-center mb-1">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                            </ul>
                            <p class="text-center mb-0">Rp <b>{{$item->harga_langganan}}</b></p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="d-flex justify-content-between">
                    <a href="/course/allcourses" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
