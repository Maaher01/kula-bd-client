<div class="basic-info-section">
    {{-- Header --}}
    <div class="header d-flex justify-content-between align-items-center pb-2 mb-3 border-bottom"
        style="border-color: #444;">
        <h1 class="text-uppercase m-0" style="font-size: 18px; color: #f39c12;">
            Basic Information
        </h1>
        <button class="btn btn-md" id="editProfileBtn" style="background: #f39c12; color: white; font-weight: 700;">
            Edit
        </button>
    </div>
    {{-- Data Table --}}
    <div class="data-area">
        <table class="table table-borderless text-white data-table" style="line-height: 18px;">
            <tbody>
                <tr>
                    <td class="label fw-bold" style="color: #ccc;">Full Name</td>
                    <td class="value">{{ auth()->user()->name }}</td>
                </tr>
                <tr>
                    <td class="label fw-bold" style="color: #ccc;">Phone No.</td>
                    <td class="value">{{ auth()->user()->mobile }}</td>
                </tr>
                <tr>
                    <td class="label fw-bold" style="color: #ccc;">Email</td>
                    <td class="value">{{ auth()->user()->email ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <td class="label fw-bold" style="color: #ccc;">Address</td>
                    <td class="value">N/A</td>
                </tr>
                <tr>
                    <td class="label fw-bold" style="color: #ccc;">Member Since</td>
                    <td class="value">{{ auth()->user()->created_at->format('d M, Y') }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- Edit Profile Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background:#222; color:white;">

            <div class="modal-header border-0">
                <h5 class="modal-title">Edit Profile</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text"
                            name="name"
                            value="{{ auth()->user()->name }}"
                            class="form-control bg-dark text-white border-secondary">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text"
                            name="mobile"
                            value="{{ auth()->user()->mobile }}"
                            class="form-control bg-dark text-white border-secondary">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email"
                            name="email"
                            value="{{ auth()->user()->email }}"
                            class="form-control bg-dark text-white border-secondary">
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn text-light" style="font-weight:700;background:#f39c12;">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>