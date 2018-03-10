@push('scripts')
<script type="text/javascript">
    $('#title').on('blur', function() {
        var theTitle = this.value.toLowerCase().trim(),
            slugInput = $('#slug'),
            theSlug = theTitle.replace(/&/g, '-and-')
                              .replace(/[^a-z0-9-]+/g, '-')
                              .replace(/\-\-+/g, '-')
                              .replace(/^-+|-+$/g, '');
                              
        slugInput.val(theSlug);
    });

	tinymce.init({
		selector: '#editor'
	});

	$('#browser_file').on('click', function(e) {
		$('#image').click();
	});
	$('#image').on('change', function(e) {
		var file = this;
		if (file.files[0])
		{
			var reader = new FileReader();
			reader.onload = function(e) 
			{
				$('#img').attr('src', e.target.result);
			}
			reader.readAsDataURL(file.files[0]);
		}
	})
</script>
@endpush
