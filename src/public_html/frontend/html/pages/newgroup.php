<?php  include_once('../../../../includes/all_classes_and_functions.php');  ?>


<?php $session->if_not_logged_in($_SESSION['url_placeholder'] . 'login'); ?>



<html lang="en">
    
    
    
    
<head>
    
    
	<title>Friday Camp - connect with people, you already know.</title>
    
    <meta name="description" content="Create, display and update your resume, find jobs, find a co-founder, message your hero, meet other techies, all here.">
    
    <?php include('../templates/head_info.php'); ?>
    
    
</head>
    
    
    
    
    
<body class="dashboard-body" style="min-height: 110%;">
    
    
    
    
   <nav class="nav-head">
    
    <div class="row nav-main-row" >
        
        
        <div class="col-xs-6">
            
            <a class="logo-heading-1">friday camp <span class="logo-heading-2">//</span> <span class="logo-heading-3">create group</span></a>
                            
        </div>
        
        
        
        
        <div class="col-xs-6" >
                
            
            <div style="float: right;">
            
                        
            <a>
                
            <button class="btn new-group-1">   
                
            <img src="<?php echo $_SESSION['url_placeholder'];  ?>frontend/html/pages/assets/pencil.png" width="20" height="20" class="new-group-2"  />
                    
            Create new group</button>
            
            </a>
            
            
            
            
            <img src="<?php echo $_SESSION['url_placeholder'];  ?>frontend/html/pages/assets/nopic.png" width="35" height="35" class="current-user-img"  />
            
            
            
            </div>
            

                    
        </div>
        
        
        
       </div>
    
    </nav>

                    
    
    
    
    
            <div class="row main-body-div">
                
                
                
                <div class="col-xs-9">
                
                
                <div>
                    
                
                <div class="col-xs-1" style="">
                    
                    
                <div>
                    
                     
                    <img src="<?php echo $_SESSION['url_placeholder'];  ?>frontend/html/pages/assets/nopic.png" width="70" height="70" class="writer-profile-img"  />
                    
                   
                    
                </div>    
                
                
                </div>
                
                
                
                
                <div class="col-xs-11">
                    
                    
                    <div class="row post-nogroups">
                        
                        
                        
                        <div style="width: 350px; display: table; margin: 0 auto;">
                            
                            
                        <p class="newgroups-text">Create a new group</p>
                            
                            
                        <input id="groupname" class="newgroup-field-1" type="text" placeholder="group name">
        
        
                        <textarea id="groupdesc" class="newgroup-field-2" type="password" placeholder="group description"></textarea><br><br>
        

                            
                                                      
                       <label id="file1label" for="groupimg" class="nogroups-text-2">Upload group image</label>
                            
                       <input type="file" id="groupimg" class="btn" style="display: none;"/><br><br>
                            
                            
                            
                            
                        <p class="nogroups-text-2" id="progressMessage"></p>
                            
                        
                        <p id="grouperror" class="group-error-1"></p>
                            
                            
                        <a>
                
                        <button id="groupsubmit" class="btn new-group-1">   
                

                    
                        Submit</button>
            
                        </a>
                
                        </div>
                        
                    
                        
                        
                        
                    
                    </div>
                    
                    
                    
                    
                
                    
                    
                </div>
                    
                    
                    
                    

                    
                    

                    </div>
                   

 
                
                </div>
                
                
            
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              
                
                
                
                
                
                
                
                
                
                
                
                <div class="col-xs-3 group-list-div">
                    
                    
                    
                    
                    
                  
                    
                              
                  <div class="row" style="width: 200px;">
                        
                        
                        <div class="col-xs-4">
                            
                           <img src="<?php echo $_SESSION['url_placeholder'];  ?>frontend/html/pages/assets/chatting.svg" width="40" height="40" style="group-list-profile-img"  />
                        
                        </div>
                        
                      
                        <div class="col-xs-4">
                            
                           <img src="<?php echo $_SESSION['url_placeholder'];  ?>frontend/html/pages/assets/typography.svg" width="40" height="40" style="group-list-profile-img"  />
                        
                        </div>
                      
                      
                      
                        <div class="col-xs-4">
                            
                           <img src="<?php echo $_SESSION['url_placeholder'];  ?>frontend/html/pages/assets/camera.svg" width="40" height="40" style="group-list-profile-img"  />
                        
                        </div>
                        
                        
                    </div>
                    
                    
                    
                    
                    
                    <div class="row" style="width: 200px; margin-top: 20px;">
                        
                        
                        <div class="col-xs-4">
                            
                           <img src="<?php echo $_SESSION['url_placeholder'];  ?>frontend/html/pages/assets/video-camera.svg" width="40" height="40" style="group-list-profile-img"  />
                        
                        </div>
                        
                      
                        <div class="col-xs-4">
                            
                           <img src="<?php echo $_SESSION['url_placeholder'];  ?>frontend/html/pages/assets/hands.svg" width="40" height="40" style="group-list-profile-img"  />
                        
                        </div>
                      
                      
                      
                        <div class="col-xs-4">
                            
                           <img src="<?php echo $_SESSION['url_placeholder'];  ?>frontend/html/pages/assets/controls.svg" width="40" height="40" style="group-list-profile-img"  />
                        
                        </div>
                        
                        
                    </div>
                        
                    
                    
                    
                    
                    
                    
               
                
                </div>
                
            </div>
    
    
    
</body>
    
 
    
</html>




<script type="text/javascript" src="../../javascript/jquery-3.2.1.min.js"></script>
    


<script type="text/javascript">
    
 
    
var url_placeholder = "/newsocial/src/public_html/"; 


    
    
    
    
    
    



    
   
    
    
    
    
    
    
    
// When user clicks the login button...
$("#groupsubmit").on("click", function(){
      
    
        
     groupname = $("#groupname").val();
    
     groupdesc = $("#groupdesc").val();
    
    
    
    
    if ((groupname.trim().length != 0) && (groupdesc.trim().length != 0)) {
        
        var both_fields_filled = true;
        
    } else {
        
        $("#grouperror").hide(0);    
        
        $("#grouperror").show(300);
        
        $("#grouperror").html("None of the fields can be left blank.");
        
    }
    
    
    
    
    if (both_fields_filled) {

        if ( (groupname.length > 60)  ||  (groupdesc.length > 140) ) {
        
            
        $("#grouperror").hide(0);    
        
        $("#grouperror").show(300);
        
        $("#grouperror").html("Group name cannot exceed 60 characters. Description cannot exceed 140.");
            
        
        } else {
            
            var both_length_check = true;
            
        }
    
    }
    
    
    

    
    
    
    
    
        if (both_fields_filled && both_length_check) {
        
         group_text_ready = true;
            // login_function(username, password1);

        }
    
    
    
    
    if (group_text_ready) {
        
                    get_text_img();
        
        
    }
    
    
    
    
    

    
    
    


    
    
});
    
    
    
     
    
function _(el) {
            
   return document.getElementById(el);
            
}
       
    
    
    
  
$('#groupimg').change(function() { 

    uploadFile();
    
});
    
    
    
    
    
  
    
function uploadFile() { 
        
        
        var file = _('groupimg').files[0];
        
        
        if (file.size <= 1000000) {

            
             var formdata = new FormData();
        
             formdata.append('groupimg', file);
        
             var ajax = new XMLHttpRequest();
        
             ajax.upload.addEventListener("progress", progressHandler, false);
        
             ajax.addEventListener("load", completeHandler, false);
        
             ajax.addEventListener("abort", abortHandler, false);
        
             ajax.open("POST", url_placeholder + 'backend/newgroupimg.php');
        
             ajax.send(formdata);
        
        } else {
            
             _('progressMessage').innerHTML = file.name + " is bigger than 1MB. Try again.";
            
        }
        
        function progressHandler(event) {
            
            
            var percent = (event.loaded / event.total) * 100;
            
            _('progressMessage').innerHTML = "Uploading " + file.name + " " + percent + "%";
            
        }
        
        
        
        function completeHandler(event) {
            
            
            
            var result = event.target.responseText;
            
            alert(result);
            
            if (result == 1) {

                _('progressMessage').innerHTML = "You have to upload an image.";
            
            } else if (result == 2)  {
                
                _('progressMessage').innerHTML = "Your image can only be jpg, png, jpeg or gif.";   
                
            } else if (result == 3)  {
                
                _('progressMessage').innerHTML = "Your file must be an image.";
                
            } else {
                
                
                    var jsonGroup = JSON.parse( event.target.responseText );
            
                     group_status =  jsonGroup[0];
                
                     group_pic_path = jsonGroup[1];
                
                     group_pic_name = jsonGroup[2];
                
                     group_pic_type = jsonGroup[3];
                
                
                    if (group_status == 1) {
                        
                         group_picture_ready = true;
                             
                        
                    } else {
                        
                        
                    _('progressMessage').innerHTML = "There is an unexplaind error. Please try again.";
                        
                    }
                
                
                
            }
            
            
            
           _('progressMessage').innerHTML = "";
            

        }
        
        
        
        function errorHandler(event) {
            
            _('status').innerHTML = "Upload fail";
            
            
        }
        
        
        
        
        function abortHandler(event) {
            
            _('status').innerHTML = "Upload aborted";
            
            
        }
        
        
        
        
        
        
    }
    
    
    
    
    
    
    
    
    
 function get_text_img() {
     
     
         if (group_text_ready && group_picture_ready) {
                        
            send_both_text_and_pic(groupname, groupdesc, group_pic_path, group_pic_name, group_pic_type);
                      
        }
     
 }   
    
      
    
    
    
    
    
    
    
function send_both_text_and_pic(groupname, groupdesc, group_pic_path, group_pic_name, group_pic_type)  {
    
    
    $.ajax({
        
       data: {"groupname": groupname, "groupdesc": groupdesc, "group_pic_path": group_pic_path, "group_pic_name": group_pic_name, "group_pic_type": group_pic_type},
       dataType: 'text',
       url: url_placeholder + 'backend/create_group.php',
       type: "POST"
        
    }).done(function(data) {
        
alert(data);
            
    }).fail(function(jqXHR, textStatus, errorThrown) {
        
                       $("#loginerror").hide(0);    
             
                       $("#loginerror").show(300);
        
                       $("#loginerror").html("Poor connection. Try gain later.");
        
    });
    
    
    
    
    
    
}



</script>
    
    
    