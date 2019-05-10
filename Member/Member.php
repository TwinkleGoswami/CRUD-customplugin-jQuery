<?php
/*
Plugin Name: Member
Plugin URI: http://localhost/socialweb/
Description: Plugin for Add, update, delete and displaying member details
Author: Twinkle
Version: 1.0
Author URI: http://localhost/socialweb/
*/
?>

<?php
function custom_member_menu(){
    add_menu_page(
        'Member_page_title',
        'Members',
        'administrator',
        'members',
        'All_member_function',
        'dashicons-id'

    );
    add_submenu_page(
        'members',
        'Add Member',
        'Add Member',
        'administrator',
        'add-member',
        'Add_member_function'
    );
}
add_action('admin_menu','custom_member_menu');
function Add_member_function()
{   ?>
    <div class="container">
    <div class="row">
        <div class="col-lg-10 header">
            <h2></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-10 col-md-10 content-right">
            <form id="member_form" name="member_form" class="validation_member" method="post" action="" enctype="multipart/form-data">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <strong>Add Member Details</strong>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" name="first_name" errorMessage="Enter value in First name" id="first_name" class="form-control check-valid"  errorMessage="Enter value in First name" placeholder="First Name" tabindex="1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" name="last_name"  errorMessage="Enter value in Last name" id="last_name" class="form-control check-valid" placeholder="Last Name" tabindex="2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-eye-close"></i></span>
                                        <input type="password" name="password"  errorMessage="Enter value in Password" id="password" class="form-control check-valid" placeholder="Password" tabindex="3">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input type="email" name="email" email-check="Please Enter valid Email"  errorMessage="Enter value in Email" id="email" class="form-control check-valid" placeholder="Email Address" tabindex="4">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <div class="input-group border-gender">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-heart"></i></span>
                                        <div class="padding-cls">
                                        <input type="radio" name="gender"  errorMessage="Enter value in Gender" id="male" class="check-valid display-check" value="Male" tabindex="5"checked>Male
                                        <input type="radio" name="gender"  errorMessage="Enter value in Gender" id="female" class="check-valid display-check" value="Female" tabindex="5">Female
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <div class="input-group border-gender">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                        <div class="padding-cls">
                                        <input type="checkbox" name="dept" id="php" class="check-valid display-check" tabindex="6" value="php">PHP
                                        <input type="checkbox" name="dept" id="asp" class="check-valid display-check" tabindex="6" value="asp">Asp.net
                                        <input type="checkbox" name="dept" id="android" class="check-valid display-check" tabindex="6" value="android">Android
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                            <select name="city" errorMessage="Select value in City" id="city" class="form-control check-valid" tabindex="7">
                                                <option value="">Select City</option>
                                                <option value="Surat">Surat</option>
                                                <option value="Valsad">Valsad</option>
                                                <option value="Bharuch">Bharuch</option>
                                                <option value="Vapi">Vapi</option>
                                                <option value="Navsari">Navsari</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="file" name="profile" id="file-upload"class="check-valid" errorMessage="Choose profile" tabindex="8"/>
                                </div>
                            </div>
                    </div>
                        <br/>
                        <br/>
                        <button type="button" id="register" name="register" class="btn btn-primary">Register</button>
                        <hr style="margin-top:10px;margin-bottom:10px;">
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
<?php }
function All_member_function()
{
    echo '<h2>Display All Member</h2>'; ?>
    <div class="container" style="margin-top: 30px ">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
         </div>
        </div>
        <br/>
        <table id="example" class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th>Firstname</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Department</th>
                <th>City</th>
                <th>Profile</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>status</th>
                <th>Edit</th>
                <th>Delete</th>
<!--                <th>updated_at</th>-->
            </tr>
            </thead>
        </table>
    </div>

    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('#example').dataTable( {
                "ajax": {
                    "url": datatable_object.ajaxurl,
                    "dataSrc": function (jsonData) {
                        // console.log(jsonData);
                            return jsonData;
                    }
                },
                "columns"   : [
                    {"data" : "firstname"},
                    {"data" : "lastname"},
                    {"data" : "email"},
                    {"data" : "gender"},
                    {"data" : "department"},
                    {"data" : "city"},
                    {"data" : "profile"},
                    {"data" : "created_at"},
                    {"data" : "updated_at"},
                    {"data" : "status"},
                    {"data" : "id"},
                ],
                'columnDefs': [
                    {
                        'targets': 6,
                        "render": function (data) {
                            return "<img src='" + data + "' height='50px' width='50px'/>";
                        }

                    },
                    {
                        'targets': 9,
                        "render": function (data, type, row) {
                            if (data == 0)
                            {

                                return'<span class="status-cls" onclick="callstatusfun(' + data + ','+row.id+');"><i class="fa fa-unlock" style="font-size:30px;color:green;margin-left:20px;cursor: pointer"/></span >'
                            }
                            else{
                                return '<span class="status-cls" onclick="callstatusfun(' + data + ','+row.id+');"> <i class="fa fa-lock" style="font-size:30px;color:red;margin-left:20px;cursor: pointer"/></span >'
                            }
                        }
                    },
                    {
                        'targets': 10,
                        "render": function (data) {

                                return '<a type="button" id="EditMember" data-toggle="modal" onclick="editMember(' + data + ');"><i class="fa fa-pencil"style="font-size:25px;color:#0073aa;margin-left:15px;cursor: pointer"></i></a >';
                        }
                    },
                    {
                        'targets': 11,
                        "render": function (data, type, row) {

                            return '<a type="button" id="deleteMember" onclick="deleteMember(' + row.id + ');"><i class="fa fa-trash"style="font-size:25px;color:red;margin-left:15px;cursor: pointer"></i></a >';
                        }
                    }

                ]
            });

        });
    </script>
    <div id="MemberEditModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form class="memberValidation" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <img alt="User Pic" id="userprofile" class="imgstyle" name="userprofile" width="100px" src="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="hidden" id="memberid" name="memberid" class="form-control"  value="">
                                    <input type="text" id="firstname" name="firstname" errorMessage="Enter value in Firstname" placeholder="Enter Firstname" class="form-control check-valid" tabindex="1">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" id="lastname" name="lastname" errorMessage="Enter value in Lastname" placeholder="Enter Lastname" class="form-control check-valid" tabindex="2" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" id="password" name="password" errorMessage="Enter value in Password" placeholder="Enter Password" class="form-control check-valid" tabindex="3" >
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>Email Id</label>
                                    <input type="email" name="email" email-check="Please Enter valid Email"  errorMessage="Enter value in Email" id="email" class="form-control check-valid" placeholder="Email Address" tabindex="4">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>Gender</label><br/>
                                <input type="radio" name="gender"  id="male" class="check-valid display-check" value="Male" tabindex="5"checked>Male &nbsp;
                                <input type="radio" name="gender"  id="female" class="check-valid display-check" value="Female" tabindex="5">Female
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>Department</label><br/>
                                    <div class="chkval">
                                    <input type="checkbox" name="dept" id="php" class="check-valid display-check" tabindex="6" value="php">PHP &nbsp;
                                    <input type="checkbox" name="dept" id="asp" class="check-valid display-check" tabindex="6" value="asp">Asp.net&nbsp;
                                    <input type="checkbox" name="dept" id="android" class="check-valid display-check" tabindex="6" value="android">Android&nbsp;
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>City</label>
                                    <select name="city" id="city" errorMessage="Select value in City" class="form-control check-valid" tabindex="7">
                                        <option value="">Select City</option>
                                        <option value="Surat">Surat</option>
                                        <option value="Valsad">Valsad</option>
                                        <option value="Bharuch">Bharuch</option>
                                        <option value="Vapi">Vapi</option>
                                        <option value="Navsari">Navsari</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label>Profile</label>
                                        <input type="file" name="profile" id="file-upload" tabindex="8"/>
                                    </div>
                                </div>
                            </div>
                            </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" id="update" name="update" class="btn btn-success">Update</button>
                </div>
            </div>
        </div>
    </div>

<?php }

/*  start Load custom + cdn file of links*/
function load_custom_links(){
    wp_enqueue_style('jquery-library', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array('jquery'));
    wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js', array('jquery'));

    /* custom css and js*/
    wp_enqueue_style('custom-css', plugins_url('/assets/css/style.css', __FILE__));
    wp_enqueue_script('custom-js', plugins_url('/assets/js/script.js', __FILE__, array('jquery')));
    wp_enqueue_script('validation-js', plugins_url('/assets/js/genericvalidation.js', __FILE__, array('jquery')));

    /* data table library */
    wp_enqueue_style('datatable-css', 'https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css');
    wp_enqueue_script('datatable-js', 'https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js', array('jquery'));

    //call ajax
    wp_localize_script( 'custom-js', 'member_object',
        array(
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
//            'redirecturl' => get_home_url()
        )
    );
    wp_localize_script( 'custom-js', 'datatable_object',
        array(
            'ajaxurl' => admin_url( 'admin-ajax.php?action=Display_member_details'),
        )
    );

    // fontawesom cdn
    wp_enqueue_style('toggle-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

}
add_action('wp_enqueue_scripts', 'load_custom_links');
add_action('admin_enqueue_scripts', 'load_custom_links');

/*  end Load custom + cdn file of links */

/*  Start Create custom table  */

register_activation_hook(__FILE__,'membersTable');

function membersTable()
{
    $sql="CREATE TABLE wp_members(
id int AUTO_INCREMENT,firstname varchar(25),
lastname varchar(25),password varchar(20),
email varchar(50),gender varchar(10),
department varchar(20),city varchar(20),
profile varchar(100),
status int(1),
created_at timestamp,
updated_at date,
PRIMARY KEY (id))";
    require_once(ABSPATH.'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

/*  End Create custom table  */

/* Add Member form details start */
function add_member()
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $dept = $_POST['dept'];
    if(isset($_FILES['file']['name'])){
        $imageid=media_handle_upload('file',0);
        $post = get_post($imageid);
        $imgpath= $post->guid;
    }
//    echo $firstname . "," .$lastname. "," .$password. "," .$email. "," .$gender. "," .$city. "," .$dept. "," .$file_info;
    global $wpdb;
    $table_name ='wp_members';
    $success = $wpdb->insert($table_name, array(
        "firstname" => $firstname,
        "lastname" => $lastname,
        "password" => $password,
        "email" => $email,
        "gender" => $gender,
        "department" => $dept,
        "city" => $city,
        "profile" => $imgpath,
        "status" => 0,
    ));
    if($success)
    {
        echo 'Inserted successfully';
    }
    else
    {
        echo 'not';
    }
    wp_die();
}

add_action( 'wp_ajax_nopriv_add_member', 'add_member' );//Calling user side
add_action( 'wp_ajax_add_member', 'add_member' ); // calling Admin side
/* Add Member form details end */

/* Display member records start */
function Display_member_details(){
    global $wpdb;
    $res = $wpdb->get_results ("SELECT * FROM wp_members");
    echo json_encode($res);
    die();
}

add_action( 'wp_ajax_nopriv_Display_member_details', 'Display_member_details' );//Calling user side
add_action( 'wp_ajax_Display_member_details', 'Display_member_details' ); // calling Admin side
/* Display member records end */

/* fetch Edit member details in modal pop up start */

function fetch_member_details(){
    $id = $_POST['id'];
    global $wpdb;
    $res = $wpdb->get_results("select * from wp_members where id=$id");
    echo json_encode($res);
    die();
}

add_action( 'wp_ajax_nopriv_fetch_member_details', 'fetch_member_details' );//Calling user side
add_action( 'wp_ajax_fetch_member_details', 'fetch_member_details' ); // calling Admin side
/* fetch Edit member details in modal pop up end */

/* Update member details start */
function update_member()
{
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $dept = $_POST['dept'];
//    echo $id.",".$firstname .",".$lastname.",".$password.",".$email.",".$gender.",".$city.",".$dept;
    if(isset($_FILES['profile']['name'])){
        $imageid=media_handle_upload('profile',0);
        $post = get_post($imageid);
        $imgpath= $post->guid;
        global $wpdb;
        $successimage = $wpdb->query("UPDATE wp_members SET profile = '$imgpath' WHERE id = $id");
        if($successimage)
        {
            echo "file upload successfully"."\n";
        }
    }
    global $wpdb;
    $table_name ='wp_members';
    $success = $wpdb->query("UPDATE wp_members
 SET firstname = '$firstname',lastname = '$lastname',
 password = '$password',email = '$email',
 gender = '$gender',city = '$city',
 department = '$dept' WHERE id = $id");
    if($success)
    {
        echo 'Record Updated successfully.';
    }
    else
    {
        echo 'Record not Updated successfully.';
    }

wp_die();
}
add_action( 'wp_ajax_nopriv_update_member', 'update_member' );//Calling user side
add_action( 'wp_ajax_update_member', 'update_member' ); // calling Admin side

/* Update member details end */

/* calling status function start */
function status_call_function()
{
    $status =$_POST['status'];
    $id =$_POST['userid'];
    global $wpdb;
    if($status == 0)
    $wpdb->query("UPDATE wp_members SET status = 1 WHERE id = $id");
    else
        $wpdb->query("UPDATE wp_members SET status = 0 WHERE id = $id");
    wp_die();
}
add_action( 'wp_ajax_nopriv_status_call_function', 'status_call_function' );//Calling user side
add_action( 'wp_ajax_status_call_function', 'status_call_function' ); // calling Admin side

/* calling status function end */

/* Delete member details start*/
function delete_member(){
    $deleteid = $_POST['deleteid'];
//    echo $deleteid;
    $table = 'wp_members';
    global $wpdb;
    $success=$wpdb->delete( $table, array( 'id' => $deleteid ) );
    if($success){
        echo "Record deleted successfully.";
    }
    else{
        echo "Error occur !!!";
    }
    wp_die();
}
add_action( 'wp_ajax_nopriv_delete_member', 'delete_member' );//Calling user side
add_action( 'wp_ajax_delete_member', 'delete_member' ); // calling Admin side

/* Delete member details end*/

?>


