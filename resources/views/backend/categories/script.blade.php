@push('scripts')
	<script type="text/javascript">
    //menyeleksi id title dan kita aktifkan fungsi
    $('#name').on('blur', function() {
        var theTitle = this.value.toLowerCase().trim(),
            slugInput = $('#slug'),
            theSlug = theTitle.replace(/&/g, '-and-')
                              .replace(/[^a-z0-9-]+/g, '-')
                              .replace(/\-\-+/g, '-')
                              .replace(/^-+|-+$/g, '');
                              
        slugInput.val(theSlug);
    });
	</script>
@endpush

