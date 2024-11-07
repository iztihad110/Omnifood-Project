function delete_the_values_of_this_field(field_id)
{
    document.getElementById(field_id).value = "";
}

function alert_like_message_box(message_in_body,title)
{
    $('#message_box .modal-body').html(message_in_body);
    $('#message_box .modal-header .modal-title').html(title);
    $('#message_box').modal('show');
}

function receive_the_data_for_saving_in_database()
{
    let validate = form_validation();
    let url_encoded_form_data = $("#omni_form").serialize();

    if(validate != 'false')
    {
        $.ajax({
            type: "POST",
            url: "saving.php",
            data: url_encoded_form_data,
            dataType: "text",
            success: function (response) {
                //console.log(response);
                let all_message_of_db_saving = JSON.parse(response);
                let database_message = all_message_of_db_saving['database_message'];
                let db_message_type = all_message_of_db_saving['db_message_type'];
                alert_like_message_box(database_message, db_message_type);
            },

            error: function(error_message){
                alert_like_message_box(error_message, "Error!!!");
            }
        });
        
    }
}