@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="p-0 mb-0">
            @foreach ($errors->all() as $error)
                <li id="alertMessage"><i class="bi bi-exclamation-triangle-fill me-2"></i><span>{{ $error }}</span>
                </li>
            @endforeach
        </ul>
    </div>
@endif
