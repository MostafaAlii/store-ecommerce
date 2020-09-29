// Checkbox Selected All
$(function (e) {
    $("#checkboxAll").on("click", function(){
        $(".checkboxClass").prop('checked', $(this).prop('checked'));
    }); 
    $("#delBtn").on("click", function (e) {
        e.preventDefault();
        var allIds = [];
        $("input:checkbox[name=ids]:checked").each(function () {
            allIds.push($(this).val());
        });
        $.ajax({
            url: '',
            type: 'DELETE',
            data: {
                ids: allIds,
                _token: $("input[name=_token]").val()
            },
            success:function(response)
            {
                $each(allIds, function(key, val){
                    $()
                })
            }
        });
    });

    //$('.delBtn').on('click', function (){
      //  $('#multipleDelete').modal('show');
    //});
});

