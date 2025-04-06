@if ($errors->first('unauthorized'))
    <script>
        alert('{{ $errors->first('unauthorized') }}');
    </script>
@endif
