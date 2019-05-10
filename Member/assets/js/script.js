jQuery(document).ready(function () {
    jQuery('#register').click(function () {
        if(validate("validation_member"))
        {
            var firstname = jQuery('#first_name').val();
            var lastname = jQuery('#last_name').val();
            var password = jQuery('#password').val();
            var email = jQuery('#email').val();
            var gender = jQuery("input[name='gender']:checked").val();
            var city = jQuery('#city').val();
            var profile = jQuery("#file-upload").prop("files")[0];
            var dept = [];
            jQuery('.padding-cls').find('input[type=checkbox]:checked').each(function() {
                dept .push(this.value);
            });
            // console.log(dept);
            var form_data = new FormData();
            form_data.append("file", profile);
            form_data.append("firstname", firstname);
            form_data.append("lastname", lastname);
            form_data.append("password", password);
            form_data.append("email", email);
            form_data.append("gender", gender);
            form_data.append("city", city);
            form_data.append("dept", dept);
            form_data.append("action", 'add_member');
            jQuery.ajax({
                url: member_object.ajaxurl,
                type: 'post',
                data:form_data,
                contentType: false,
                processData: false,
                success: function (response) {
                    alert(response);
                    // jQuery(".success-reg").show();
                    // jQuery("#success-msg").text(response);
                    jQuery("form").trigger("reset");
                    // window.location.reload();

                }
            });

        }

    });
    jQuery('#update').click(function () {
        if(validate("memberValidation"))
        {
            var id = jQuery('#memberid').val();
            var firstname = jQuery('#firstname').val();
            var lastname = jQuery('#lastname').val();
            var password = jQuery('#password').val();
            var email = jQuery('#email').val();
            var gender = jQuery("input[name='gender']:checked").val();
            var city = jQuery('#city').val();
            var dept = [];
            jQuery('.chkval').find('input[type=checkbox]:checked').each(function() {
                dept .push(this.value);
            });
            // console.log(dept);
            var profile = jQuery("#file-upload").prop("files")[0];
            var form_data = new FormData();
            if(profile === undefined)
            {
                var imgval = jQuery('#userprofile').attr("src");
                form_data.append("file", imgval);
                // console.log(imgval);
            }
            else {
                var profile = jQuery("#file-upload").prop("files")[0];
                form_data.append("profile", profile);
                // console.log(profile);
            }
            form_data.append("id", id);
            form_data.append("firstname", firstname);
            form_data.append("lastname", lastname);
            form_data.append("password", password);
            form_data.append("email", email);
            form_data.append("gender", gender);
            form_data.append("city", city);
            form_data.append("dept", dept);
            form_data.append("action", 'update_member');
            jQuery.ajax({
                url: member_object.ajaxurl,
                type: 'post',
                data:form_data,
                contentType: false,
                processData: false,
                success: function (response) {
                    alert(response);
                    jQuery("form").trigger("reset");
                    window.location.reload();

                }
            });
        }
    });


});
function editMember(id) {
    debugger;
    jQuery("#MemberEditModal").modal();
    jQuery.ajax({
        url:member_object.ajaxurl,
        type:'post',
        data: {
            id:id,
            action:'fetch_member_details'
        },
        success:function (response) {
            var member = JSON.parse(response);
            // console.log(member);
            jQuery("#memberid").val(member[0].id);
            jQuery("#firstname").val(member[0].firstname);
            jQuery("#lastname").val(member[0].lastname);
            jQuery("#password").val(member[0].password);
            jQuery("#email").val(member[0].email);
            jQuery("#city").val(member[0].city);
            jQuery("#userprofile").attr("src",member[0].profile);
            var radio = jQuery('input:radio[name=gender]');
            if(member[0].gender=='Female')
            {
                radio.filter('[value=Female]').prop('checked', true);
            }
            else
            {
                radio.filter('[value=Male]').prop('checked', true);
            }

            var dept_str = member[0].department;
            var temp = new Array();
            temp = dept_str.split(",");
            console.log(temp);
            jQuery.each(temp,function (index,item) {
                    jQuery("#" +item).prop('checked', true);
            });
        }
    });
}

function callstatusfun(status,id)
{
    // console.log(id);
    // console.log(status);
    jQuery.ajax({
        url:member_object.ajaxurl,
        type:'post',
        data: {
            status:status,
            userid:id,
            action:'status_call_function'
        },
        success:function (response) {
          // alert(response);
            jQuery('#example').DataTable().ajax.reload();
        }
    });
}
function deleteMember(id) {
    if(confirm('Do you really want to delete this member?'))
    {
        jQuery.ajax({
            url: member_object.ajaxurl,
            type: 'post',
            data:{
                deleteid:id,
                action :'delete_member'
            },
            success:function (response) {
                // alert(response);
                jQuery('#example').DataTable().ajax.reload();
            }

        });
        return true;
    }
    else {
        return false;
    }
}
