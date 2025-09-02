function listBody() {
    let obj = {};
    obj['keyword'] = $('#keyword').val();
    $.get('registration', obj, function(data) {
        $('#consumers_list_body').html(data);
    });
}
function createConsumer() {
    $.get('registration/create', function(data){
        loadModal(data);
    });
}

function addConsumer() {
    var params = $('#addConsumerForm').serializeArray();
    $.post('registration', params, function(data){
        $('.modal-dialog').html(data);
    }).fail(function(xhr, status, error) {
        if(xhr.status == 422) {
            $('#error_div').html("<div class='alert alert-danger'>"+xhr.responseJSON.message+"</div>");
        }
    });

}

function editConsumer(consumer_id)
{
    $.get('registration/'+consumer_id+'/edit', function(data) {
        loadModal(data);
    });
}

function updateConsumer()
{
    var params = $('#editConsumerForm').serializeArray();
    var id = $('#id').val();
    $.post('registration/'+id, params, function(data){
        $('.modal-dialog').html(data);
        listBody();
    }).fail(function(xhr, status, error){
        console.log(xhr);
        if(xhr.status == 422) {
            $('#error_div').html("<div class='alert alert-danger'>"+xhr.responseJSON.message+"</div>");
        }
    });
}

function deleteConsumer(consumer_id) {
    if(confirm("Are you sure you want to delete this consumer?")) {
        var token = $('input[name="_token"]').val(); 
        $.post('registration/'+consumer_id, { _method: 'DELETE', _token: token, "consumer_id" : consumer_id }, function(data){
            loadModal(data);
        }).fail(function(xhr, status, error){
            console.log(xhr);
            if(xhr.status == 422) {
                $('#error_div').html("<div class='alert alert-danger'>"+xhr.responseJSON.message+"</div>");
            }
        });
    }
}

function viewConsumer(id){
    $.get('registration/'+id, function(data) {
        loadModal(data);
    });
}