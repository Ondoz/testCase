@extends('layouts.layouts')
@section('content')
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Card-->
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Campaign Categories</h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a href="#" data-toggle="modal" data-target="#modal" class="btn btn-primary font-weight-bolder" id="add">
                    <i class="la la-plus"></i>New Record</a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <!--begin: Datatable-->
                <table class="table table-separate table-head-custom table-checkable dataTable no-footer dtr-inline" id="Materi" style="margin-top: 13px !important">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!-- Modal-->
<!-- Modal delete -->
<div class="modal fade" id="confirmModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Message !!!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
            You a Daleted This ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" id="cancel" data-dismiss="modal" >Close</button>
                <button type="button" class="btn btn-primary font-weight-bold" id="ok">Ok</button>
            </div>
        </div>
    </div>
</div>
{{-- modal add --}}
<div class="modal fade" id="modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="#" id="kt_form">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="label">Add Materi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-form-label col-3 text-left">Name Materi * </label>
                        <div class="col-9">
                            <div class="input-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name Materi" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="input-group">
                            <label class="col-3 col-form-label">Status </label>
                            <div class="col-3">
                                <span class="switch switch-icon">
                                    <label>
                                        <input id="status" type="checkbox" name="status" value="0"/>
                                        <span></span>
                                    </label>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" id="cancel" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary font-weight-bold submit" >Ok</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('js')
<script>
    // Validation Rules
validator = FormValidation.formValidation(
    document.getElementById('kt_form'),
    {
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'Name is required'
                    }
                }
            },
        },

        plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        submitButton: new FormValidation.plugins.SubmitButton(),
        bootstrap: new FormValidation.plugins.Bootstrap({
        eleInvalidClass: '',
        eleValidClass: '',
            })
        }
    }
);

    $('#Materi').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        ajax: '{{route('ajax.materiGetAll')}}',
        columns:[
            {data:'name', name:'name'},
            {data:'status', name:'status'},
            {data:'action', name:'action'}
        ],
        columnDefs:[
            {
                targets: -2,
                render: function (data, type, full, meta) {
                    var status = {
                        0: { 'title': 'Ended', 'state': 'danger' },
                        1: { 'title': 'Active', 'state': 'primary' },
                    };
                    if (typeof status[data] === 'undefined') {
                        return data;
                    }
                    return '<span class="label label-' + status[data].state + ' label-dot mr-2"></span>' +
                        '<span class="font-weight-bold text-' + status[data].state + '">' + status[data].title + '</span>';
                },
            }
        ]
    });

    $(document).on('click', '#add', function(){
        $('h5').html("Add Materi");
        $('#name').val('');
        $('#status').prop('checked', false);
        $('.submit').text('Ok');
        $('.submit').attr('id', 'ok_add');
        document.getElementById("cancel").style.display = "";
    });


    $(document).on('click', '#ok_add', function(e){
        e.preventDefault();
        var name = $('#name').val();
        $.ajax({
            url: '{{route('materi.store')}}',
            type: 'POST',
            data: {
                _token: '{{csrf_token()}}',
                name: name,
                status: $('#status').val()
            },
            success: function(dateResult){
                $('#modal').modal('hide');
                $('#Materi').DataTable().ajax.reload();
            }
        })
    });

    var Materi_id;
    $(document).on('click', '.edit', function(){
        document.getElementById("cancel").style.display = "";
        $('.submit').attr('id', 'ok_update');
     Materi_id = $(this).attr('id');
        $('h5').html("Edit Materi");
        $('.submit').text('Ok');
        $.ajax({
            url: "{{route('ajax.materiEdit')}}",
            type: 'POST',
            dataType: "JSON",
            data: {
                _token: '{{csrf_token()}}',
                id: Materi_id
            },
            success: function(result){
                $("#name").val(result.name);
                if (result.status == 1) {
                    $("#status").prop('checked',true);
                    $("#status").val(result.status)
                } else {
                    $("#status").prop('checked',false);
                    $("#status").val(result.status)
                }
            },
        });
    });

    $(document).on('click', '#ok_update', function(){
        document.getElementById("cancel").style.display = "none";
        $.ajax({
            url: "materi/"+Materi_id,
            type: 'POST',
            data: {
                _token: '{{csrf_token()}}',
                _method: "PUT",
                id: Materi_id,
                name: $('#name').val(),
                status: $('#status').val()
            },
            beforeSend:function(){
                $('#ok_update').text('Wait...');
            },
            success: function(dataResult){
                setTimeout(function(){
                    $('#modal').modal('hide');
                    $('#Materi').DataTable().ajax.reload();
                }, 2000);
            }
        })
    });

    $("#status").change(function(){
    if(this.checked == true)
        {
            $("#status").val(1)
        }
        else
        {
            $("#status").val(0)
        }
    });

    var id;
    $(document).on('click', '.delete', function(){
        id = $(this).attr('id');
        $('#ok').text('Ok');
        document.getElementById("cancel").style.display = "";
    });

    $('#ok').click(function() {
        document.getElementById("cancel").style.display = "none";
        $.ajax({
            url: "materi/"+id,
            type: 'DELETE',
            data: {_token: '{{csrf_token()}}'},
            beforeSend:function(){
                $('#ok').text('Deleting...');
            },
            success: function(e){
                setTimeout(function(){
                    $('#confirmModal').modal('hide');
                    $('#Materi').DataTable().ajax.reload();
                }, 2000);
            }
        })
    });

</script>
@endsection
