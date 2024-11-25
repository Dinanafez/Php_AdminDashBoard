<form action="{{ route('contact.destroy', ['contact_us' => $contact_us->id]) }}" method="post" id="delete_form_{{ $contact_us->id}}" class="d-inline">
    @csrf
    @method('delete')
    <a href="javascript:document.getElementById('delete_form_{{$contact_us->id}}').submit();" class="btn btn-sm btn-danger">Delete</a>
</form>