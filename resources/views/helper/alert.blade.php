@if(session()->has('success'))
    <script type="text/javascript">
        $(function (resp) {
            swal('Sukses!', resp.message, 'success');
        });
    </script>
@endif
@if(session()->has('error'))
    <script type="text/javascript">
        $(function (resp) {
            swal('Error!', resp.message, 'error');
        });
    </script>
@endif