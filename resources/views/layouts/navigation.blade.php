<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="{{ route('dashboard.index') }}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary">
                <i class="fa fa-hashtag me-2"></i>
                {{ config('app.name', 'MAS E-commerce') }}
            </h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('images/users/' . Auth::user()->image) }}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                <span>
                    @foreach(Auth::user()->roles as $role)
                        {{ $role->roleLabel }}
                    @endforeach
                </span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            @foreach(Auth::user()->roles as $role)
                @if($role->roleName == 'Admin')
                    <a href="{{ route('dashboard.index') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Anasayfa</a>
                    <a href="{{ route('User.index') }}" class="nav-item nav-link"><i class="fa fa-users me-2"></i> Kullanıcılar</a>
                    <div class="nav-item dropdown">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user-secret me-2"></i>Rol & İzinler</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('Role.index') }}" class="dropdown-item">Role</a>
                            <a href="{{ route('Permission.index') }}" class="dropdown-item">İzinler</a>
                        </div>
                    </div>
                    <a href="{{ route('Category.index') }}" class="nav-item nav-link"><i class="fa fa-list me-2"></i>Kategoriler</a>
                @elseif($role->roleName == 'Seller')
                    <a href="{{ route('SellerDashboard.index') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Anasayfa</a>
                    <a href="{{ route('SellerProduct.index') }}" class="nav-item nav-link"><i class="fa fa-list me-2"></i> Ürünler</a>
                @else
                    <a href="{{ route('CustomerDashboard.index') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Anasayfa</a>
                    <a href="{{ route('OrderDetails.index') }}" class="nav-item nav-link"><i class="fa fa-list me-2"></i> Siparişlerim</a>
                @endif
            @endforeach
        </div>
    </nav>
</div>
<!-- Sidebar End -->
