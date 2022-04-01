@extends('panel.layouts.master')
@section('content')
<div class="py-4 px-3 px-md-4">
    <div class="card mb-3 mb-md-4">

        <div class="card-body">
            <!-- Breadcrumb -->
            <nav class="d-none d-md-block" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Users</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Users</li>
                </ol>
            </nav>
            <!-- End Breadcrumb -->
            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <div class="h3 mb-0">Users</div>
            </div>

            <!-- Users -->
            <div class="table-responsive-xl">
                <table class="table text-nowrap mb-0">
                    <thead>
                    <tr>
                        <th class="font-weight-semi-bold border-top-0 py-2">#</th>
                        <th class="font-weight-semi-bold border-top-0 py-2">Product image</th> 
                        <th class="font-weight-semi-bold border-top-0 py-2">Product name</th>
                        <th class="font-weight-semi-bold border-top-0 py-2">Price</th>
                        <th class="font-weight-semi-bold border-top-0 py-2">Status</th>
                        <th class="font-weight-semi-bold border-top-0 py-2">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (count($products) > 0)
                    @foreach ($products as $product)
                    <tr>
                        <td class="py-3">{{ $product->id }}</td>
                        <td class="py-3">
                            <img src="{{ \Storage::url($product->image) }}" alt="" width="64" height="64">
                        </td>
                        <td class="align-middle py-3">
                            <div class="d-flex align-items-center">                             
                                {{ $product->name }}
                            </div>
                        </td>                        
                        <td class="py-3">{{ $product->price }}</td>
                        <td class="py-3">
                            @if ($product->status == 'active')
                                <span class="badge badge-pill badge-success">{{ $product->status }}</span>                                
                            @else
                                <span class="badge badge-pill badge-danger">{{ $product->status }}</span>                                
                            @endif
                        </td>
                        <td class="py-3">
                            <div class="position-relative">
                               <form action="{{ route('products.destroy', $product->slug) }}" method="POST" id="form" class="form">
                                   @csrf
                                   @method('DELETE')
                                <a class="link-dark d-inline-block" href="{{ route('products.edit', $product->slug) }}">
                                    <i class="gd-pencil icon-text"></i>
                                </a>
                                <a class="link-dark d-inline-block" onclick="document.getElementById('form').submit()">
                                    <i class="gd-trash icon-text"></i>
                                </a>
                               </form>
                            </div>
                        </td>
                    </tr>  
                    @endforeach       
                    @else
                    <tr>
                        <td colspan="6">
                            <p class="text-center">
                                <strong>
                                    No products found 
                                </strong>
                            </p>
                        </td>
                    </tr>
                    @endif          
                    </tbody>
                </table>
                <div class="card-footer d-block d-md-flex align-items-center d-print-none">
                    <div class="d-flex mb-2 mb-md-0">Showing 1 to 8 of 24 Entries</div>

                    <nav class="d-flex ml-md-auto d-print-none" aria-label="Pagination"><ul class="pagination justify-content-end font-weight-semi-bold mb-0">				<li class="page-item">				<a id="datatablePaginationPrev" class="page-link" href="#!" aria-label="Previous"><i class="gd-angle-left icon-text icon-text-xs d-inline-block"></i></a>				</li><li class="page-item d-none d-md-block"><a id="datatablePaginationPage0" class="page-link active" href="#!" data-dt-page-to="0">1</a></li><li class="page-item d-none d-md-block"><a id="datatablePagination1" class="page-link" href="#!" data-dt-page-to="1">2</a></li><li class="page-item d-none d-md-block"><a id="datatablePagination2" class="page-link" href="#!" data-dt-page-to="2">3</a></li><li class="page-item">				<a id="datatablePaginationNext" class="page-link" href="#!" aria-label="Next"><i class="gd-angle-right icon-text icon-text-xs d-inline-block"></i></a>				</li>				</ul></nav>
                </div>
            </div>
            <!-- End Users -->
        </div>
    </div>
</div>
@endsection