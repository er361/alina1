function ajaxUpdate(e,updateContainer){

    e.preventDefault();

    url = $(e.target).parent().prop("href");

    $(updateContainer).on('show.bs.modal',function () {
        var modal = $(this);

        $.get(url,"",function(data){
            modal.find('.modal-body').html(data);
        });
    });

    $(updateContainer).modal();
}

function sendFormAjax(e) {

}