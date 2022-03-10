<form action="{{ url('delete-product/'.$category->id) }}" method="get">
    <div class="modal-body">
        @csrf
        @method('DELETE')
        <h5 class="text-center">Are you sure you want to delete <strong>{{ $category->name_of_category }}</strong>?</h5>
    </div>
    <div class="modal-footer">
        <a class="btn btn-secondary mr-5" href="{{ url('categories') }}">Cancel</a>
        <button type="submit" class="btn btn-danger mr-2">Yes, Delete</button>
    </div>
</form>
