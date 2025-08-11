@extends('admin.app.layout')

@section('content')
    <div class="m-3">
        <div class="card-style mb-30">
            <div class="title d-flex flex-wrap align-items-center justify-content-between">
                <div class="left">
                    <h6 class="text-medium mb-30">Transactions List</h6>
                </div>
            </div>

            <!-- Table -->
            <div class="mb-3">
                <input type="text" id="searchTransactions" class="form-control"
                    placeholder="Search by UPI, Transaction ID, or Name...">
            </div>
            <div id="transactionsTableContainer">
                @include('admin.transactions.partials.table', ['transactions' => $transactions])
            </div>
            <!-- End Table -->
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .pagination {
            margin: 0;
            padding: 0;
        }

        .page-item {
            margin: 0 2px;
        }

        .page-link {
            border-radius: 6px;
            padding: 6px 12px;
        }
    </style>
@endpush


@push('scripts')
    <script>
        $(document).ready(function() {
            $('#searchTransactions').on('keyup', function() {
                let query = $(this).val();

                $.ajax({
                    url: "{{ route('admin.transactions.search') }}",
                    type: "GET",
                    data: {
                        search: query
                    },
                    success: function(response) {
                        $('#transactionsTableContainer').html(response);
                    }
                });
            });

            $(document).on('click', '.change-status', function() {
                let id = $(this).data('id');

                if (!confirm('Are you sure you want to change the status?')) return;

                $.ajax({
                    url: `/admin/payment/change-status/${id}`,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(res) {
                        if (res.success) {
                            alert(res.message);
                            location.reload(); // or update row dynamically
                        } else {
                            alert('Something went wrong.');
                        }
                    },
                    error: function() {
                        alert('Server error.');
                    }
                });
            });

            // Allow User
            $(document).on('click', '.allow-user', function() {
                let userId = $(this).data('user-id');

                if (!confirm('Are you sure you want to allow this user?')) return;

                $.ajax({
                    url: `/admin/user/allow-user/${userId}`,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(res) {
                        if (res.success) {
                            alert(res.message);
                            location.reload();
                        } else {
                            alert('Something went wrong.');
                        }
                    },
                    error: function() {
                        alert('Server error.');
                    }
                });
            });
        });
    </script>
@endpush
