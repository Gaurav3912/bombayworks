
function getShapeTemplate() {
    var data = {'action': 'getTemplate', 'template': 'shape'}
    $.ajax({
        'url': siteUrl + '/Home/ajax',
        'data': data,
        'type': 'post',
        'success': function (res) {
            if (res.success) {
                $('.canvas').html(res.data);
            } else {
                alert('res.error');
            }
        }
    })
}

function getDimentionTemplate(obj) {
    var form = $(obj).parent().parent().find('form');
    var shape = $(form).find("input[name='shape']:checked").val();
    var data = {'action': 'getTemplate', 'template': shape}
    $.ajax({
        'url': siteUrl + '/Home/ajax',
        'data': data,
        'type': 'post',
        'success': function (res) {
            if (res.success) {
                $('.canvas').html(res.data);
            } else {
                alert('res.error');
            }
        }
    })
}

function calculateArea(obj) {
    var form = $(obj).parent().parent().find('form');
    var error = 0;
    $(form).find('input[type="text"]').each(function () {

        if (isNaN($(this).val()) || $(this).val() == '') {
            error = 1;
            $(this).addClass('error');
        } else {
            $(this).removeClass('error');
        }
    });
    if (!error) {
//            console.log($(form));
        var data = $(form).serialize();

        $.ajax({
            'url': siteUrl + '/Home/ajax',
            'data': data,
            'type': 'post',
            'success': function (res) {
                if (res.success) {
                    $('.canvas').html(res.data);
                } else {
                    alert('res.error');
                }
            }
        })
    }


}