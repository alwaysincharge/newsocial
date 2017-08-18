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
                
            <img src="pencil.svg" width="20" height="20" class="new-group-2"  />
                    
            Create new group</button>
            
            </a>
            
            
            
            
            <img src="assets/nopic.png" width="35" height="35" class="current-user-img"  />
            
            
            
            </div>
            

                    
        </div>
        
        
        
       </div>
    
    </nav>

                    
    
    
    
    
            <div class="row main-body-div">
                
                
                
                <div class="col-xs-9">
                
                
                <div>
                    
                
                <div class="col-xs-1" style="">
                    
                    
                <div>
                    
                     
                    <img src="assets/nopic.png" width="70" height="70" class="writer-profile-img"  />
                    
                   
                    
                </div>    
                
                
                </div>
                
                
                
                
                <div class="col-xs-11">
                    
                    
                    <div class="row post-nogroups">
                        
                        
                        
                        <div style="width: 350px; display: table; margin: 0 auto;">
                            
                            
                        <p class="nogroups-text">Create a new group.</p>
                            
                            
                        <input id="groupname" class="newgroup-field-1" type="text" placeholder="group name">
        
        
                        <textarea id="groupdesc" class="newgroup-field-2" type="password" placeholder="group description"></textarea><br><br>
        

                            
                                                      
                       <label id="file1label" for="groupimg" class="nogroups-text-2">Upload group image</label>
                            
                       <input type="file" id="groupimg" class="btn" style="display: none;"/><br><br>
                            
                            
                            
                            
                        <p class="nogroups-text-2" id="progressMessage"></p>
                            
                            
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
                            
                           <img src="assets/chatting.svg" width="40" height="40" style="group-list-profile-img"  />
                        
                        </div>
                        
                      
                        <div class="col-xs-4">
                            
                           <img src="assets/typography.svg" width="40" height="40" style="group-list-profile-img"  />
                        
                        </div>
                      
                      
                      
                        <div class="col-xs-4">
                            
                           <img src="assets/camera.svg" width="40" height="40" style="group-list-profile-img"  />
                        
                        </div>
                        
                        
                    </div>
                    
                    
                    
                    
                    
                    <div class="row" style="width: 200px; margin-top: 20px;">
                        
                        
                        <div class="col-xs-4">
                            
                           <img src="assets/video-camera.svg" width="40" height="40" style="group-list-profile-img"  />
                        
                        </div>
                        
                      
                        <div class="col-xs-4">
                            
                           <img src="assets/hands.svg" width="40" height="40" style="group-list-profile-img"  />
                        
                        </div>
                      
                      
                      
                        <div class="col-xs-4">
                            
                           <img src="assets/controls.svg" width="40" height="40" style="group-list-profile-img"  />
                        
                        </div>
                        
                        
                    </div>
                        
                    
                    
                    
                    
                    
                    
               
                
                </div>
                
            </div>
    
    
    
</body>
    
 
    
</html>




<script type="text/javascript" src="../../javascript/jquery-3.2.1.min.js"></script>
    


<script type="text/javascript">
    
 
    
    


// When user clicks the login button...
$("#login").on("click", function(){
      
    
        
    var groupname = $("#groupname").val();
    
    var groupdesc = $("#groupdesc").val();
    
    
    
    
    if ((groupname.trim().length != 0) && (groupdesc.trim().length != 0)) {
        
        var both_fields_filled = true;
        
    } else {
        
        $("#loginerror").hide(0);    
        
        $("#loginerror").show(300);
        
        $("#loginerror").html("None of the fields can be left blank.");
        
    }
    
    
    
    
    if (both_fields_filled) {

        if ( (groupname.length > 60)  ||  (groupdesc.length > 140) ) {
        
            
        $("#loginerror").hide(0);    
             
        $("#loginerror").show(300);
        
        $("#loginerror").html("Username and password cannot be shorter than 6 or bigger than 12 characters.");
            
        
        } else {
            
            var both_length_check = true;
            
        }
    
    }
    
    
    

    
    
    
    
    
    if (both_fields_filled && both_length_check) {
        
        var group_text_ready = true;
       // login_function(username, password1);
        
    }
    
    
    
    
    
    
});
    
    
    
    
    
    
function login_function(username, password1) {
   
    $.ajax({
        
       data: {"login": 1, "username": username, "password": password1},
       dataType: 'text',
       url: '../../../backend/sign_in.php',
       type: "POST"
        
    }).done(function(data) {
        
        
            if (data == 2) {
                
                    $("#loginerror").hide(0);    
             
                    $("#loginerror").show(300);
        
                    $("#loginerror").html("Wrong credentials. Try again.");
                
                
            } else if (data == 3) {
                
                
                    $("#loginerror").hide(0);    
             
                    $("#loginerror").show(300);
        
                    $("#loginerror").html("The request has to be of type POST.");
                
                
            } else if (data == 5) {
                
                
                    $("#loginerror").hide(0);    
             
                    $("#loginerror").show(300);
        
                    $("#loginerror").html("Username and password fields cannot be shorter than 6 or bigger than 16 characters. Email cannot exceed 345 characters.");
                
                
            } else if (data == 4) {
                
                
                    $("#loginerror").hide(0);    
             
                    $("#loginerror").show(300);
        
                    $("#loginerror").html("Username and password can only be made up of numbers or letters.");
                
                
            }    else  {
                
                
                    var jsonLogin = JSON.parse( data );
            
                    var login_status =  jsonLogin[0];
            
                    var login_session_id =  jsonLogin[1];
                
                    if (login_status == 1) {
                        
                          window.location.href = "http://stackoverflow.com";
                        
                    } else {
                        
                       $("#loginerror").hide(0);    
             
                       $("#loginerror").show(300);
        
                       $("#loginerror").html("Poor connection. Try gain later.");
                
                        
                    }
                
            }
        
        
        
        
        
        
        
    }).fail(function(jqXHR, textStatus, errorThrown) {
        
                       $("#loginerror").hide(0);    
             
                       $("#loginerror").show(300);
        
                       $("#loginerror").html("Poor connection. Try gain later.");
        
    });
    
    
}




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
        
             ajax.open("POST", "files.php");
        
             ajax.send(formdata);
        
        } else {
            
             _('progressMessage').innerHTML = file.name + " is bigger than 1MB. Try again.";
            
        }
        
        function progressHandler(event) {
            
            
            var percent = (event.loaded / event.total) * 100;
            
            _('progressMessage').innerHTML = "Uploading " + file.name + " " + percent + "%";
            
        }
        
        
        
        function completeHandler(event) {
            
            
           _('progressMessage').innerHTML = "";
            

        }
        
        
        
        function errorHandler(event) {
            
            _('status').innerHTML = "Upload fail";
            
            
        }
        
        
        
        
        function abortHandler(event) {
            
            _('status').innerHTML = "Upload aborted";
            
            
        }
        
        
        
        
        
        
    }
    
    
    
    




</script>
    
    
    