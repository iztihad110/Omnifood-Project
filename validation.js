let id_of_current_validated_element;

function form_validation()
{
    
    full_name_needed_for_validation = "Yes";
    email_needed_for_validation = "Yes";
    select_where_needed_for_validation = "Yes";

    if(document.getElementById('full-name').value == "" && full_name_needed_for_validation == "Yes")
    {
        id_of_current_validated_element = 'full-name';
        alert("Please Enter Your Full Name");
        alert_like_message_box("Please Enter Your Name");
        document.getElementById('full-name').focus();
        return false;
    }

    else if(document.getElementById('email').value == "" && email_needed_for_validation == "Yes")
    {
        id_of_current_validated_element = 'email';
        alert("Please Enter Your Email");
        document.getElementById('email').focus();
        return false;
    }

    else if(document.getElementById('select-where').value == "" && select_where_needed_for_validation == "Yes")
    {
        id_of_current_validated_element = 'select-where';
        alert("Please Select where did you know about us");
        document.getElementById('select-where').focus();
        return false;
    }
}