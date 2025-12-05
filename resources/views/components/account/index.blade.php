@extends('layouts.app')

@section('content')
<div class="container account-container py-5">
    <div class="row gx-4">
        {{-- Sidebar --}}
        <div class="col-lg-3 col-md-4 mb-4">
            <div class="sidebar p-3 shadow-sm rounded" style="background-color: #222; color: white;">
                {{-- Profile --}}
                <div class="text-center">
                    <div class="profile-img mx-auto mb-3 position-relative" style="width: 120px; height: 120px;">
                        <img id="profile-img-preview" src="{{ auth()->user()->photo }}" alt="User" class="rounded-circle w-100 h-100">
                        <div class="edit-icon position-absolute top-50 start-50 translate-middle">
                            <label for="profile-upload" class="mb-0">
                                <i class="fa fa-pen text-white"></i>
                            </label>
                            <input type="file" id="profile-upload" style="display:none;" accept="image/*">
                        </div>
                    </div>
                    <h6 class="fw-bold">{{ auth()->user()->name ?? 'User' }}</h6>
                </div>
                {{-- Navigation --}}
                <hr>
                <ul class="list-unstyled sidebar-menu">

                    <li class="menu-item" style="color: white;cursor:pointer;">
                        <a href="javascript:void(0)" id="menu-basic-info">
                            <i class="fa fa-user"></i>
                            Basic Information
                        </a>
                    </li>
                    <li class="menu-item" style="color: white;cursor:pointer;">
                        <a href="javascript:void(0)" id="menu-orders">
                            <i class="fa fa-list-check"></i>
                            Past Orders
                        </a>
                    </li>
                    <li class="menu-item" style="color: white;cursor:pointer;">
                        <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>

        </div>

        {{-- Content --}}
        <div class="col-lg-9 col-md-8" style="background-color: #222; color: white;">
            <div class="content-area shadow-sm p-4 rounded">
                <div id="basic-info-section">
                    @include("components.account.sections.basic-info")
                </div>

                <div id="orders-section" style="display: none;">
                    @include("components.account.sections.order-list", ['orders' => $orders])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Sidebar Switching
        const basicInfoSection = document.getElementById('basic-info-section');
        const ordersSection = document.getElementById('orders-section');

        const basicTab = document.getElementById('menu-basic-info');
        const ordersTab = document.getElementById('menu-orders');

        document.getElementById('menu-basic-info').addEventListener('click', function(e) {
            e.preventDefault();
            basicInfoSection.style.display = 'block';
            ordersSection.style.display = 'none';
        });

        document.getElementById('menu-orders').addEventListener('click', function(e) {
            e.preventDefault();
            history.pushState(null, '', '?tab=orders');
            basicInfoSection.style.display = 'none';
            ordersSection.style.display = 'block';
        });


        const params = new URLSearchParams(window.location.search);
        if (params.get('tab') === 'orders') {
            basicInfoSection.style.display = 'none';
            ordersSection.style.display = 'block';
        } else {
            basicInfoSection.style.display = 'block';
            ordersSection.style.display = 'none';
        }


        // Order Details Modal
        document.addEventListener('click', function(e) {
            if (e.target.closest('.order-details-btn')) {
                let id = e.target.closest('.order-details-btn').dataset.id;

                fetch(`/order-details/${id}`)
                    .then(res => res.text())
                    .then(html => {
                        document.getElementById('order-details-body').innerHTML = html;
                        let modal = new bootstrap.Modal(document.getElementById('orderDetailsModal'));
                        modal.show();
                    });
            }
        });

        document.getElementById('profile-upload').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (!file) return;

            const formData = new FormData();
            formData.append('image', file);

            // Preview immediately
            const reader = new FileReader();
            reader.onload = function(event) {
                document.getElementById('profile-img-preview').src = event.target.result;
            };
            reader.readAsDataURL(file);

            // Send request to server
            fetch('{{ route("profile.update.photo") }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                })
                .then(res => res.json())
                .then(data => {
                    if (data.status) {
                        alert('Profile photo updated successfully');
                    } else {
                        alert('Error updating profile photo');
                    }
                })
                .catch(err => console.error(err));
        });

    });
</script>

@endsection