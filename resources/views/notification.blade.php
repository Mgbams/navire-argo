<!-- toastr css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- jquery cdn-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- toastr js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@if ($message = Session::get('success'))

<script>
    toastr.success("{!! $message !!}");
</script>

@endif

@if ($errors->any())

<script>
    toastr.warning("Veuillez vérifier le formulaire ci-dessous pour les erreurs", '', {
        hideMethod: 'slideUp',
        showMethod: 'fadeIn',
    });
</script>

@endif

<!-- 
@if ($message = Session::get('error'))

<script>
    toastr.error("{!! $message !!}");
</script>

@endif


@if ($message = Session::get('warning'))

<script>
    toastr.warning("{!! $message !!}");
</script>

@endif


@if ($message = Session::get('info'))

<script>
    toastr.info("{!! $message !!}");
</script>

@endif -->