<form class="ajax-form" data-modal-form="#modal"
      action="{{ route('food-categories.update', $foodCategory->id) }}"
      method="POST" enctype="multipart/form-data" data-redirect-url="{{ route('food-categories.index') }}">
    @csrf
    @method('GET') <!-- This tells Laravel to treat the request as a PUT method for updates -->

    <div class="d-flex flex-column gap-8">
        <div class="form-group">
            <label for="name" class="mb-2">Food Category</label>
            <input type="text" name="name" id="name" class="form-control"
                   value="{{ old('name', $foodCategory->name) }}" required> <!-- Use old value or existing category name -->
        </div>
        <div class="form-group">
            <label for="created_on" class="mb-2">Created On</label>
            <input type="date" name="created_on" id="created_on" class="form-control"
                   value="{{ old('created_on', $foodCategory->created_on) }}" required> <!-- Use old value or existing created_on -->
        </div>
        <div class="form-group">
            <label for="created_by" class="mb-2">Created By</label>
            <input type="text" name="created_by" id="created_by" class="form-control"
                   value="{{ old('created_by', $foodCategory->created_by) }}" required> <!-- Use old value or existing created_by -->
        </div>
        <div class="d-flex align-items-center justify-content-end gap-2">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update Category</button> <!-- Always 'Update' -->
        </div>
    </div>
</form>

<script>
    $("#created_on").flatpickr({
        enableTime: true,
        dateFormat: "Y-m-d H:i",
    });
</script>
<script>
    function confirmDelete(element) {
        const url = element.getAttribute('data-url');

        if (confirm('Are you sure you want to delete this food category?')) {
            // If confirmed, perform the delete operation using AJAX
            fetch(url, {
                method: 'DELETE', // Use DELETE method for deletion
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                }
            })
            .then(response => {
                if (response.ok) {
                    // Reload the DataTable after successful deletion
                    $('#foodcategory-table').DataTable().ajax.reload();

                    // Show success message
                    const successMessage = document.createElement('div');
                    successMessage.className = 'alert alert-success';
                    successMessage.innerText = 'Food category deleted successfully.';
                    document.body.appendChild(successMessage);

                    // Remove the message after 2 seconds
                    setTimeout(() => {
                        successMessage.remove();
                    }, 2000);
                } else {
                    alert('Error deleting food category. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            });
        }
    }
</script>
