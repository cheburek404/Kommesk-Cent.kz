<form action="{{ url('delete-category/'.$product->id) }}" method="get">
    <div class="modal-body">
        @csrf
        @method('DELETE')
        <h5 class="text-center">Are you sure you want to delete <strong>{{ $product->title }}</strong>?</h5>
    </div>
    <div class="modal-footer">
        <a class="btn btn-secondary mr-5" href="{{ url('products') }}">Cancel</a>
        <button type="submit" class="btn btn-danger mr-2">Yes, Delete</button>
    </div>
</form>
