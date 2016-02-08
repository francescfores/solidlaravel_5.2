@if(session()->has('notification'))
    <script>
        swal({
                    title: "Good Job!",
                    text: "{{Session::get('notification')}}",
                    type: "success",
                    confirmButtonText: "Ok!",
                    timer: 2000,
                }
        );
    </script>
@endif
