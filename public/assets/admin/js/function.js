// Check all in Admins Table Page::
;
/*function check_all()
{
    // item_checkbox
    $('input[class="item_checkbox"]:checkbox').each(function (){
        if( $('input[class="check_all"]:checkbox:checked').length == 0 )
        {
            $(this).prop('checked', false);
        }
        else
        {
            $(this).prop('checked', true);
        }
    });
}*/

function delete_all() {
    $(document).on('click', '.delBtn', function (){
        var item_checked = $('input[class="check_all"]:checkbox:checked').filter(":checked").lenght;
        if (item_checked > 0){
            $('.record_count').text(item_checked);
            $('.not_empty_record').removeClass('invisible');
            $('.empty_record').addClass('invisible');
        } else {
            $('.record_count').text('');
            $('.not_empty_record').addClass('invisible');
            $('.empty_record').removeClass('invisible');
        }
        $('#multipleDelete').modal('show');
    });
}
