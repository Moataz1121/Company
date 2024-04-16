<form id="form-{{ $id }}" method="POST" class="d-inline" action="{{ $href }}">
    @csrf
    @method('DELETE')
    <button onclick="confirmdelete({{ $id }})" type="button" class="btn btn-danger ">Delete</button>

</form >
