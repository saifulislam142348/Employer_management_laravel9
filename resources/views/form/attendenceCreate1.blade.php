<!-- Modal -->
<div class="modal fade" id="attendence1Modal" tabindex="-1" aria-labelledby="attendence1ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="attendence1ModalLabel"> Employee Attendences out time </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                @foreach ($errors->all() as $error)
                    <span class="text-danger">{{ $error }}</span>
                @endforeach

                <form method="POST" action="{{ route('admin.employee.out_time') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="user_id" class="col-md-4 col-form-label text-md-end">{{ __('User_Id') }}</label>

                        <div class="col-md-6">
                            <select class="form-select" name="user_id">
                                <option selected></option>
                                @foreach ($users as $item)
                                    <option value="{{ $item->id }}">{{ $item->id }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    {!! Toastr::message() !!}

                    <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('Month Name ') }}</label>

                        <div class="col-md-6">
                            <input class="from-control" type="text" value="{{ $date->format('F') }}" name="month"
                                readonly>
                        </div>

                    </div>


                    <input type="submit" class="btn btn-success " value="save">

                </form>
            </div>

        </div>
    </div>
</div>
