(function($) {
    'use strict';

    $(document).on("click", ".category_edit", function() {
        let category_id = $(this).attr('data-id');
        let category_name = $(this).attr('data-name');

        $('#submit_add_category').hide();
        $('#submit_edit_category').show();
        $('#add_category_method').val('PUT');
        $('#category_id').val(category_id);
        $('#category_name').val(category_name);
        $('#modal_add_category').modal('show');
    });

    $(document).on("click", ".category_delete", function() {
        if (confirm('Are you sure? The category that deleted can not restore!')) {
            $(this).parent().submit();
        }
    });

    $('#btn_add_category').click(function() {
        $('#submit_add_category').show();
        $('#submit_edit_category').hide();
        $('#add_category_method').val('POST');
        $('#modal_add_category').modal('show');
    });

    /* $('#category_name').keyup(function() {
        let category_name = $(this).val();
          let slug = toSlug(category_name);
          $('#category_slug').val(slug); 
    }); */
})(jQuery);