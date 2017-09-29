{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('css')
    <!-- <link rel="stylesheet" href="../../public/css/admin_custom.css"> -->
@stop

@section('js')
    <!-- <script> console.log('Hi!'); </script> -->
    <script>
$("#alert").slideDown(500, function(){
    setTimeout(function(){
$("#alert").slideUp(500);  
},5000);
});
	</script>

@stop