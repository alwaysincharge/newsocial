

<?php  include_once('../../../../includes/all_classes_and_functions.php');  ?>


<?php $session->if_not_logged_in($_SESSION['url_placeholder'] . 'login'); ?>


<?php

$user_details = $user->find_one_user($_SESSION['admin_id']);

$user_details_result = $user_details->get_result();

$user_info = $user_details_result->fetch_assoc();


?>



<html lang="en">
    
    
    
    
<head>
    
    
	<title>Friday Camp - connect with people, you already know.</title>
    
    <meta name="description" content="Create, display and update your resume, find jobs, find a co-founder, message your hero, meet other techies, all here.">
    
    <?php include('../templates/head_info.php'); ?>
    
    
</head>
    
    
    
    
    
<body class="dashboard-body" style="min-height: 110%;">
    
    
    
    
   <nav class="nav-head">
    
    <div class="row nav-main-row">
        
        
        <div class="col-xs-4">
            
            <a class="logo-heading-1">friday camp <span class="logo-heading-2">//</span> <span class="logo-heading-3">
                <?php
                
                $get_find_group_by_id = $group->find_group_by_id($_GET['group']);

                $get_find_group_by_id_result = $get_find_group_by_id->get_result();

             
                    while($group_name = $get_find_group_by_id_result->fetch_assoc()) {
                        
                        echo $group_name['name'];
                        
                    }
                
                ?>
               </span></a>
                            
        </div>
        
        
        
        
        <div class="col-xs-8">
            
            
            <div style="float: right;">
            
            
            <input id="myTextBox" maxlength="100" name="keywords" class="search-main" placeholder="Search this group" />
                
            
            
            
            <a href="<?php echo $_SESSION['url_placeholder'];  ?>newgroup">
                
            <button class="btn new-group-1">   
                    
            Create group</button>
            
            </a>
            
            
                <div class="dropdown">
           
                      <img src="<?php echo $_SESSION['url_placeholder'];  ?>frontend/html/pages/assets/notification.svg" width="35" height="35" class="current-user-img"  />
                    
                <div class="dropdown-content">
                    
                      <?php
                    
                    
                      $request_list = $request->current_member_requests($_SESSION['admin_id']); 
          
                      $request_list_result = $request_list->get_result();
          
          
                      if ($request_list_result->num_rows > 0) {
              
                        
                          while($row_list_request = $request_list_result->fetch_assoc()) { ?>
                              
                              
                                <?php 
                              
                                $group_details = $group->find_group_by_id($row_list_request['group_id']); 
          
                                $group_details_result = $group_details->get_result();
                              
                                $row_group = $group_details_result->fetch_assoc();
                              
                                
                              
                              
                              
                              
                                $user_details = $user->find_one_user($row_list_request['sender_id']); 
          
                                $user_details_result = $user_details->get_result();
                              
                                $row_user = $user_details_result->fetch_assoc();
                                                                                          
                                ?>
                    
                    
                              
                              <div class="row" id="group<?php echo $row_group['id'];  ?>">
                    
                                  <div class="col-xs-2">
                                  
                                      <img src="<?php echo $row_group['img_path'];  ?>" width="35" height="35" class="current-user-img"  />
                                  
                                  </div>
                    
                                  
                                  
                                  <div class="col-xs-6" style="font-weight: bold; font-size: 16px;font-family: Josefin Slab;">
                                  <p><?php echo $row_user['username'];  ?> wants you to join <span style="color: blue;"><?php echo $row_group['name'];  ?></span></p>
                                  
                                  </div>
                                  
                                  
                                  <div class="col-xs-4">
                                      
                                      
                                      <form method="post" action="<?php echo $_SESSION['url_placeholder'];  ?>accept_request" style="width: 30px; display: inline;">
                                      
                                      <input type="text" name="group_id" style="display: none;" value="<?php echo $row_group['id'];  ?>" />
                                         
                                          
                                      
                                          
                                     <input type="submit" name="submit" value="accept" class="btn" style="outline: 0px ! important; font-weight: bold; font-size: 14px;font-family: Josefin Slab; background: #ddd; padding: 7px; border-radius: 4px; margin-right: 1px;" /> 
                                      
                                      
                                      </form>
                                      
                                      
                                              
                                      
                                      
                                      
                                      
                                                      <div style="width: 30px; display: inline;">
                                      

                                         
                                          
                                      
                                          
                                     <input type="submit" onclick="myFunction('<?php echo $row_group['id'];  ?>')" name="submit" value="decline" class="btn" style="font-weight: bold; font-size: 14px;font-family: Josefin Slab; background: #ddd; padding: 7px; border-radius: 4px; margin-right: 0px;" /> 
                                      
                                      
                                      </div>
                                      
                                      

                                  
                                  </div>
                    
                    
                              </div>
                              
                       <?php   }
                          
                          
        
                      } else {
                          
                          echo "none";
                      }
            
                    
                      ?>
                    
                </div>
                    
                </div>
            
            <img src="<?php echo $_SESSION['url_placeholder'];  ?><?php echo $user_info['img_path'];  ?>" width="35" height="35" class="current-user-img"  />
            
            
            </div>
            
                    
        </div>
        
        
        
       </div>
    
    </nav>

                    
    
    
    
    
            <div class="row main-body-div">
                
                
                
                <div class="col-xs-9">
                
                
                <div>
                    
                
                <div class="col-xs-1" style="">
                    
                    
                <div>
                    
                     
                <img src="
                              
                <?php
                
                $get_find_group_by_id = $group->find_group_by_id($_GET['group']);

                $get_find_group_by_id_result = $get_find_group_by_id->get_result();

             
                    while($group_img = $get_find_group_by_id_result->fetch_assoc()) {
                        
                        echo $group_img['img_path'];
                        
                    }
                
                ?>   " width="70" height="70" class="writer-profile-img"  />
                    
                   
                    
                </div>    
                
                
                </div>
                
                
                
                
                <div class="col-xs-11">
                    
                    
                    
                    <div id="content-div">
                    
                    
                    
                        
                        
                        
                        
                           
                    <div class="row post-editor">
                        
                    
                        
                        
                    <div class="col-xs-2" id="chatboxicon" style="cursor: pointer;">
                        
                        <img src="<?php echo $_SESSION['url_placeholder'];  ?>frontend/html/pages/assets/chatting.svg" class="input-style-1"  />
                        
                        <p class="input-style-2">Chat</p>
                        
                    </div>
                        
                        
                        
                        
                      
                    <div class="col-xs-2">
                        
                         <img src="<?php echo $_SESSION['url_placeholder'];  ?>frontend/html/pages/assets/typography.svg" class="input-style-1"  />
                        
                         <p class="input-style-2">Text post</p>
                        
                    </div>
                        
                        
                        
                        
                    <div class="col-xs-2">
                        
                        <img src="<?php echo $_SESSION['url_placeholder'];  ?>frontend/html/pages/assets/camera.svg" class="input-style-1"  />
                        
                         <p class="input-style-2">Photo/Album</p>
                        
                    </div>
                        
                        
                        
                        
                        
                    <div class="col-xs-2">
                        
                        <img src="<?php echo $_SESSION['url_placeholder'];  ?>frontend/html/pages/assets/video-camera.svg" class="input-style-1" />
                        
                         <p class="input-style-2">Videos</p>
                        
                    </div>
                        
                        
                        
                        
                        
                        
                    <div class="col-xs-2">
                        
                        <img src="<?php echo $_SESSION['url_placeholder'];  ?>frontend/html/pages/assets/hands.svg" class="input-style-1"  />
                        
                         <p class="input-style-2">Polls</p>
                        
                    </div>
                        
                        
                       
                        <a href="<?php echo $_SESSION['url_placeholder'] . "members/" . $_GET['group'];  ?>">
                        <div class="col-xs-2">
                        
                        <img src="<?php echo $_SESSION['url_placeholder'];  ?>frontend/html/pages/assets/collaboration.svg" class="input-style-1"  />
                        
                         <p class="input-style-2">Members</p>
                        
                        </div> </a>
                        
                        
                    
                    </div>
                    
                    
                    
                    
                    
                    
                   <div id="chatbox" style="display: none;">
                    
                        <textarea id="text" type="text" class="search-main" placeholder="write something" style="margin-bottom: 10px; width: 100%; height: 50px; resize: none; outline: none;"></textarea>
                       
                       
                       
                                              
                       <label id="file1label" for="file1" class="custom-file-upload" style="display: none; background: #ddd; padding: 6px; border-radius: 4px; font-family: Josefin Slab;
   font-size: 16px; cursor: pointer;
   font-weight: bold;">
    select file
</label>
                       <input type="file" id="file1" class="btn" style="display: none;"/><br>
                       
                       <!-- <input type="button" value="Upload file" onclick="uploadFile()" /><br> -->
                       
                       <progress value="0" max="100" id="progressBar" style="height: 5px; width: 250px; display: none;"></progress> 
                       
                       <a id="status" style="display: inline; font-family: Josefin Slab;
   font-size: 26px;
   font-weight: bold; color: blue; margin-left: 20px;"></a>
                       
                       <br><br>
                       <a id="progressMessage" style="font-family: Josefin Slab;
   font-size: 16px;
   font-weight: bold;"></a>
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                     
                    
                        <a id="chatboxfile"><img src="<?php echo $_SESSION['url_placeholder'];  ?>frontend/html/pages/assets/attachment.svg" style="width: 20px; cursor: pointer;"  /></a>
                    
                        <a id="chatboxclose"><img src="<?php echo $_SESSION['url_placeholder'];  ?>frontend/html/pages/assets/cancel.svg" style="width: 20px; margin-left: 10px; cursor: pointer;"  /></a> <br><br>
                       
                       

                       
                      <!-- <p id="loadedbytes"></p><br> -->
                    
                      <!--  <input id="submit" class="btn new-group-1" type="submit" style="margin-left: 0px;" value="POST"> -->
                    
                   </div> 
                    
                
                    
                    
                    
                 
                    
                    
                    
                    
                    
                    <div id="postsdiv" style="margin-top: 40px;">
                                                
                                   
                        <!-- Posts go here. -->                        
            
                        
                    </div>
                
                        
                        
                        
                        
                        
                    
                    </div>
                    
                 
                    
                    <div id="search-div" style="display: none;">
                    
                    
                        <div class="row post-editor">
                            <p style="display: table; margin: 0 auto; margin-top: 16px; font-weight: bold; font-size: 16px;font-family: Josefin Slab;">Searching for the term...</p>
                            
                            
                    <div id="areas3" style="margin-top: 40px;">
                                                
                                   
                        <!-- Posts go here. -->                        
            
                        
                    </div>
                            
                            
                        </div>
                        
                    </div>
                    
                    
                </div>
                    
                    
                    
                    

                    
                    

                    </div>
                   

 
                    
                 

                      
                        
                          <div style="display: table; margin: 0 auto;">
                        
                        
                      <!--  <p id="loadagain" style="display: none;">Poor connection. Try again. <a>Here</a></p> -->
                        
                        
                        
                        <img id="loading" style="display: none;" width="60px" height="60px" src="<?php echo $_SESSION['url_placeholder'];  ?>frontend/html/pages/assets/loading.gif" />
                    
                    
                    
                    </div>
                
                </div>
                
                
            
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              
                
                
                
                
                
                
                
                
                
                
                
                <div class="col-xs-3 group-list-div">
                    
                    
                    
                    
                    
                <?php
                
                $get_find_group_by_id = $group->find_group_by_id($_GET['group']);

                $get_find_group_by_id_result = $get_find_group_by_id->get_result();

             
                    while($group_list_this = $get_find_group_by_id_result->fetch_assoc()) { ?>
                        
                       
                    
                 <div class="row group-list-row">
                        
                        
                        <div class="col-xs-2">
                            
                           <img src="<?php echo $group_list_this['img_path']; ?>" width="40" height="40" style="group-list-profile-img"  />
                        
                        </div>
                        
                      
                        
                        <div class="col-xs-7 group-list-body">
                            
                            <a class="group-list-name"><?php echo $group_list_this['name']; ?></a><br>                            
                            <a class="group-list-membercount"> <?php
                                                                                            
                                              
$all_members_of_this_group = $member->all_members_of_this_group($group_list_this['id']);

$all_members_of_this_group_result = $all_members_of_this_group->get_result();                                                                  
                                                                                            
                         while($members_this = $all_members_of_this_group_result->fetch_assoc()) { echo $members_this['count'];  }                                                                   
                                                                                            
                                                                                            
                       ?> members</a>
                        
                        </div>
                        
                        
                        
                        <div class="col-xs-3 group-list-notif-1">
                            
                            <img src="<?php echo $_SESSION['url_placeholder'];  ?>frontend/html/pages/assets/view.svg" width="30" height="30" style="group-list-notif-2"  />
                            
                        </div>
                        
                        
                    </div>
                    
                        
                 <?php   }
                
                ?>
                    
                    
                    
  <?php                  
                    
$get_all_groups_of_user = $member->all_users_groups_except($_SESSION['admin_id'], $_GET['group']);

$get_all_groups_of_user_result = $get_all_groups_of_user->get_result();

$numRows = $get_all_groups_of_user_result->num_rows;

      
               if ($numRows > 0) {
                   
                   
                    while($row = $get_all_groups_of_user_result->fetch_assoc()) {
                        
                    
                        
                        
                        
                         $get_find_group_by_id = $group->find_group_by_id($row['group_id']);

                $get_find_group_by_id_result = $get_find_group_by_id->get_result();

             
                    while($group_list_other = $get_find_group_by_id_result->fetch_assoc()) {  ?>
                        
                        
                        
                        
                        
               
                        
                        
                        
                        
                        <div class="row group-list-row" onclick="window.location='<?php echo $_SESSION['url_placeholder'] . "dashboard/" . $group_list_other['id'];   ?>';">
                        
                        
                        <div class="col-xs-2">
                            
                           <img src="<?php  echo $group_list_other['img_path'];   ?>" width="40" height="40" style="group-list-profile-img"  />
                        
                        </div>
                        
                      
                        
                        <div class="col-xs-7 group-list-body">
                            
                            <a class="group-list-name"><?php  echo $group_list_other['name'];   ?></a><br>                            
                            <a class="group-list-membercount">         <?php
                                                                                            
                                              
$all_members_of_this_group = $member->all_members_of_this_group($group_list_other['id']);

$all_members_of_this_group_result = $all_members_of_this_group->get_result();                                                                  
                                                                                            
                         while($members_other = $all_members_of_this_group_result->fetch_assoc()) { echo $members_other['count'];  }                                                                   
                                                                                            
                                                                                            
                       ?> members</a>
                        
                        </div>
                        
                        
                        
                        <div class="col-xs-3 group-list-notif-1">
                            
                            <a class="group-list-notifs">76+</a>
                            
                        </div>
                        
                        
                           </div> 
                        
                        
                        
                        
                        
                        
                        
                  <?php  }
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    }
                   
                   

               } else {
                   
                   
                   
               } ?>
                    
                    
                    
                    

                    
                    
                    
                    
               
                
                </div>
                
            </div>
    
    
    
</body>
    
 
    
</html>


<script type="text/javascript" src="../../javascript/jquery-3.2.1.min.js"></script>
    



<script type="text/javascript">

    page_group_id = "<?php echo $_GET['group'];  ?>";
    
    
    
    $("#myTextBox").on("input", function() {
        
        if ( $(this).val().trim().length != 0 ) {
            
         //  alert("Change to " + this.value); 
            
            $("#content-div").hide(600);
            
            $("#search-div").show(500);
            
            search_posts($(this).val());
            
        } else {
            
            $("#content-div").show(600);
            
            $("#search-div").hide(500);
            
        }
        
    
});
    
    
    
    
    function search_posts(term) {
        
        search_posts_url = "<?php echo $_SESSION['url_placeholder'];  ?>search_posts";
        
       $.ajax( {
          url: search_posts_url,
          type: "POST",
          async: true,
          data: {
              
             "term": term,
              "search": 1,
              "group": page_group_id
              
          },
          success: function( d ) {
              
          //   alert(d);
             var jsonSearch = JSON.parse( d );
             var jsonSearchLength = jsonSearch.new_search.length;
             var htmlSearch = "";
             
             //If lastTimeID is zero.
           
             for ( var search_i = 0; search_i < jsonSearchLength; search_i++ ) {
                var resultSearch = jsonSearch.new_search[ search_i ];
                // For each row from the database, set the last processed id number to lastTimeID.
                
                // If the row's id is even.

                 
                 if(resultSearch.type == 'attach' && resultSearch.owner == "<?php echo $user_info['id']; ?>") {
                     
                   htmlSearch += '<div class=\"row\">';
                htmlSearch += '<div class=\"col-xs-2\">';
                htmlSearch += '<a><img src=\" '+ '<?php echo $_SESSION['url_placeholder'];  ?>' + resultSearch.image  +' \" class=\"chat-left-1\"  /></a>';
                htmlSearch += '</div>';
                htmlSearch += '<div class=\"col-xs-10\">';
                htmlSearch += '<div class=\"talk-bubble tri-right left-top\" class=\"chat-left-2\">';
                htmlSearch += '<div class=\"talktext\">';
                htmlSearch += '<p>' + resultSearch.username + '</p>';
                htmlSearch += '<p><a href=\" ' + resultSearch.path  + ' \" download>' + resultSearch.name + '</a></p>';
                htmlSearch += ' </div></div></div></div>';    
                     
                 }  
                 
                 
                 
                    if(resultSearch.type == 'attach' && resultSearch.owner != "<?php echo $user_info['id']; ?>") {
         
                   htmlSearch += '<div class=\"row\">';
                   htmlSearch += '<div class=\"col-xs-10\">';
                   htmlSearch += '<div class=\"talk-bubble1 tri-right1 left-top1\" class=\"chat-right-1\">';
                   htmlSearch += '<div class=\"talktext1\">';
                   htmlSearch += '<p>' + resultSearch.username + '</p>';
                   htmlSearch += '<p><a href=\" ' + resultSearch.path  + ' \" download>' + resultSearch.name + '</a></p>';
                   htmlSearch += ' </div></div></div>';
                   htmlSearch += '<div class=\"col-xs-2\">';
                   htmlSearch += '<a><img src=\" ' +  '<?php echo $_SESSION['url_placeholder'];  ?>' + resultSearch.image  +' \" class=\"chat-right-2\"  /></a>';
                   htmlSearch += '</div>';
                   htmlSearch += '</div>';
                    
                 }
                 
                 
                 
                 if (resultSearch.type == "chat" && resultSearch.owner == "<?php echo $user_info['id']; ?>") {
                     
                       
                htmlSearch += '<div class=\"row\">';
                htmlSearch += '<div class=\"col-xs-2\">';
                htmlSearch += '<a><img src=\" '+ '<?php echo $_SESSION['url_placeholder'];  ?>' + resultSearch.image +'  \" class=\"chat-left-1\"  /></a>';
                htmlSearch += '</div>';
                htmlSearch += '<div class=\"col-xs-10\">';
                htmlSearch += '<div class=\"talk-bubble tri-right left-top\" class=\"chat-left-2\">';
                htmlSearch += '<div class=\"talktext\">';
                htmlSearch += '<p>' + resultSearch.username + '</p>';
                htmlSearch += '<p>'  + resultSearch.message + '</p><span><img style=\" height: 15px; width: 15px; \" src=\"  ' +  '<?php echo $_SESSION['url_placeholder'];  ?>frontend/html/pages/assets/sent.png' + '\" /></span>';
                htmlSearch += ' </div></div></div></div>';  
                     
                 }
                 
                 
                 
                if (resultSearch.type == "chat" && resultSearch.owner != "<?php echo $user_info['id']; ?>") {
                    
                    
                   htmlSearch += '<div class=\"row\">';
                   htmlSearch += '<div class=\"col-xs-10\">';
                   htmlSearch += '<div class=\"talk-bubble1 tri-right1 left-top1\" class=\"chat-right-1\">';
                   htmlSearch += '<div class=\"talktext1\">';
                   htmlSearch += '<p>' + resultSearch.username + '</p>';
                   htmlSearch += '<p>' + resultSearch.message + '</p>';
                   htmlSearch += ' </div></div></div>';
                   htmlSearch += '<div class=\"col-xs-2\">';
                   htmlSearch += '<a><img src=\" ' +  '<?php echo $_SESSION['url_placeholder'];  ?>' + resultSearch.image  +' \" class=\"chat-right-2\"  /></a>';
                   htmlSearch += '</div>';
                   htmlSearch += '</div>';
                    
                     
                       
               
                     
                 }
                 
                 
                 
             }
         
                // Return and prepend just parsed json from the database to the page. 
                var new_items_search = $( htmlSearch ).hide();
                $( '#areas3' ).html( new_items_search );
                new_items_search.show( 100 );
             }, //error after here.
           error: function( xhr, textStatus, errorThrown ) {
                $.ajax( this );
                return;
             }
       } );
        
    }
    

    
    
    
    
    
    
    
       function _(el) {
            
            return document.getElementById(el);
            
        }
    
    
   /* 
    var file = _('file1').files[0];
    
    if (file.size > 0) {
        
        uploadFile();
        
    }  */
    
    
    $('#file1').change(function() { 
    // select the form and submit
    uploadFile();
});
    
    
    
    
    function uploadFile() { 
        
        
         
       
        
        var file = _('file1').files[0];
        
        
        if (file.size <= 1000000) {
        
        $('#progressBar').show();
            
        
        var formdata = new FormData();
        
        formdata.append('file1', file);
        
      
        
        var ajax = new XMLHttpRequest();
        
        ajax.upload.addEventListener("progress", progressHandler, false);
        
        ajax.addEventListener("load", completeHandler, false);
        
        ajax.addEventListener("abort", abortHandler, false);
        
        ajax.open("POST", "<?php echo $_SESSION['url_placeholder'];  ?>send_attach");
        
        ajax.send(formdata);
        
        } else {
            
            _('progressMessage').innerHTML = file.name + " is bigger than 1MB. Try again. <br><br> ";
            
        }
        
        function progressHandler(event) {
            
        //    _('loadedbytes').innerHTML = "Uploaded " + event.loaded + " of" + event.total;
            
            var percent = (event.loaded / event.total) * 100;
            
            _('progressBar').value = Math.round(percent);
            
             $('#progressMessage').show();
            
            _('status').innerHTML = Math.round(percent) + "%";
            
            _('progressMessage').innerHTML = "Uploading " + file.name;
            
            $('#file1label').hide();
            
            $('#chatboxclose').hide();
            
            $('#chatboxfile').hide();
        }
        
        
        
        function completeHandler(event) {
            
            
            alert(event.target.responseText);
            
            _('status').innerHTML = "";
            
              
              sendAppend("", event.target.responseText);
            
            $('#file1label').hide(160);
            
            
            
            _('progressBar').value = 0;
            
           $('#progressBar').hide();
            
           _('progressMessage').innerHTML = "";
            
             $('#chatboxclose').show();
            
            $('#chatboxfile').show();
        }
        
        
        
        function errorHandler(event) {
            
            _('status').innerHTML = "Upload fail";
            
            
        }
        
        
        
        
        function abortHandler(event) {
            
            _('status').innerHTML = "Upload aborted";
            
            
        }
        
        
        
        
        
        
    }
    
    
    
    
    
    
    
    
    
    
     
    // When the user reaches the bottom, get more data from the database.
    $( window ).on( "scroll", function() {
       if ( ( window.innerHeight + window.scrollY ) >= document.body.offsetHeight ) {
          displayFromDatabasePagination();
             $(window).unbind("scroll");
       }
    } );
    
    
    
    //When you click the chat box...
    $( '#text' ).on( "focus", function() {
       // When you click eneter...
       $( '#text' ).keypress( function( e ) {
          if ( e.which == 13 ) {
             // Send message to page before even sending to the database.
             sendAppend( e, "" );
          }
       } );
    } );
    
    
    
    
    
    
    $('#loadagain').click(function() { 
   displayFromDatabasePagination();
           
    return false; // prevent default
  });
    
    
    
    
    $('#chatboxicon').click(function() { 
        
        $('#chatbox').show(100);
  });
    
    
    
    
        $('#chatboxclose').click(function() { 
        
        $('#chatbox').hide(100);
            
        $('#text').val("");    
  });
    
    
    
      $('#chatboxfile').click(function() { 
        
      //  $('#file1').show(100);
            
        $('#file1label').toggle(160);
  });
    
    
    
    
    var lastTimeID = 0;
    var firstTimeID = 0;
    new_post_id_num = 0;
    new_post_id = "new_post" + new_post_id_num;
    
    
    
    // When the page loads...
    $( document ).ready( function() {
       // Display some stuff from the database and when the user reaches the bottom of the page, return more stuff.
       displayFromDatabasePagination();
        $(window).unbind("scroll");
       //Begin asking the database if new items have been submitted and retrieve and prepend them to the page.
       startPostLoop();
    } );
    
    
    
    //Begin asking the database if new items have been submitted and retrieve and prepend them to the page.
    function startPostLoop() {
       //Fetch new chat data from the database when its available.
       displayFromDatabase();
    }
    
    
    
    // Fetch new chat data from the database.
    function displayFromDatabase() {
        
       fetch_new_url = "<?php echo $_SESSION['url_placeholder'];  ?>fetch_recent_posts";
        
       $.ajax( {
          url: fetch_new_url,
          type: "POST",
          async: true,
          data: {
             "fetchnew": 1,
             "offset": lastTimeID,
              "group": page_group_id
          },
          success: function( d ) {
              
             // alert(d);
            //  alert(lastTimeID);
             var jsonData = JSON.parse( d );
             var jsonLength = jsonData.new_posts.length;
             var html = "";
             var lastTimeIDzeroTest;
             //If lastTimeID is zero.
             if ( lastTimeID === 0 ) {
                lastTimeIDzeroTest = 1;
             }
             for ( var i = 0; i < jsonLength; i++ ) {
                var result = jsonData.new_posts[ i ];
                // For each row from the database, set the last processed id number to lastTimeID.
                lastTimeID = result.id;
                // If the row's id is even.

                 
                 if(result.type == 'attach' && result.owner == "<?php echo $user_info['id']; ?>") {
                     
                   html += '<div class=\"row\">';
                html += '<div class=\"col-xs-2\">';
                html += '<a><img src=\" '+ '<?php echo $_SESSION['url_placeholder'];  ?>' + result.image  +' \" class=\"chat-left-1\"  /></a>';
                html += '</div>';
                html += '<div class=\"col-xs-10\">';
                html += '<div class=\"talk-bubble tri-right left-top\" class=\"chat-left-2\">';
                html += '<div class=\"talktext\">';
                html += '<p>' + result.username + '</p>';
                html += '<p><a href=\" ' + result.path  + ' \" download>' + result.name + '</a></p>';
                html += ' </div></div></div></div>';    
                     
                 }  
                 
                 
                 
                    if(result.type == 'attach' && result.owner != "<?php echo $user_info['id']; ?>") {
         
                   html += '<div class=\"row\">';
                   html += '<div class=\"col-xs-10\">';
                   html += '<div class=\"talk-bubble1 tri-right1 left-top1\" class=\"chat-right-1\">';
                   html += '<div class=\"talktext1\">';
                   html += '<p>' + result.username + '</p>';
                   html += '<p><a href=\" ' + result.path  + ' \" download>' + result.name + '</a></p>';
                   html += ' </div></div></div>';
                   html += '<div class=\"col-xs-2\">';
                   html += '<a><img src=\" ' +  '<?php echo $_SESSION['url_placeholder'];  ?>' + result.image  +' \" class=\"chat-right-2\"  /></a>';
                   html += '</div>';
                   html += '</div>';
                    
                 }
                 
                 
                 
                 if (result.type == "chat" && result.owner == "<?php echo $user_info['id']; ?>") {
                     
                       
                html += '<div class=\"row\">';
                html += '<div class=\"col-xs-2\">';
                html += '<a><img src=\" '+ '<?php echo $_SESSION['url_placeholder'];  ?>' + result.image +'  \" class=\"chat-left-1\"  /></a>';
                html += '</div>';
                html += '<div class=\"col-xs-10\">';
                html += '<div class=\"talk-bubble tri-right left-top\" class=\"chat-left-2\">';
                html += '<div class=\"talktext\">';
                html += '<p>' + result.username + '</p>';
                html += '<p>'  + result.message + '</p><span><img style=\" height: 15px; width: 15px; \" src=\"  ' +  '<?php echo $_SESSION['url_placeholder'];  ?>frontend/html/pages/assets/sent.png' + '\" /></span>';
                html += ' </div></div></div></div>';  
                     
                 }
                 
                 
                 
                if (result.type == "chat" && result.owner != "<?php echo $user_info['id']; ?>") {
                    
                    
                   html += '<div class=\"row\">';
                   html += '<div class=\"col-xs-10\">';
                   html += '<div class=\"talk-bubble1 tri-right1 left-top1\" class=\"chat-right-1\">';
                   html += '<div class=\"talktext1\">';
                   html += '<p>' + result.username + '</p>';
                   html += '<p>' + result.message + '</p>';
                   html += ' </div></div></div>';
                   html += '<div class=\"col-xs-2\">';
                   html += '<a><img src=\" ' +  '<?php echo $_SESSION['url_placeholder'];  ?>' + result.image  +' \" class=\"chat-right-2\"  /></a>';
                   html += '</div>';
                   html += '</div>';
                    
                     
                       
               
                     
                 }
                 
                 
                 
             }
             // If lastTimeIDzeroTest is 1, implying the lastTimeID is zero...
             if ( lastTimeIDzeroTest === 1 ) {
                // Set lastTimeIDzeroTest to 2 so that next time the function runs, we know that lastTimeID is no longer zero. Prepend nothing to the page.
                lastTimeIDzeroTest = 2;
             } else {
                // Return and prepend just parsed json from the database to the page. 
                var new_items = $( html ).hide();
                $( '#postsdiv' ).prepend( new_items );
                new_items.show( 100 );
             }
             // After the function runs successfully, run the function again after some milliseconds.
             startPostLoop();
          }, //error after here.
           error: function( xhr, textStatus, errorThrown ) {
                $.ajax( this );
                return;
             }
       } );
    }
    
    
    
    // Retrive old rows from database.
    function displayFromDatabasePagination() {
        
         fetch_old_url = "<?php echo $_SESSION['url_placeholder'];  ?>fetch_old_posts";
      
var flag;
        
    flag =   $.ajax( {
          url: fetch_old_url,
          type: "POST",
          async: true,
          data: {
             "fetchold": 1,
             "offset": firstTimeID,
              "group": page_group_id
          },
          success: function( dd ) {
              
              if (flag.readyState == 4 && flag.status == 200) { 
                                                              
                                                              
                                  $('#loadagain').hide();
              $('#loading').hide();
             var jsonData2 = JSON.parse( dd );
             var jsonLength2 = jsonData2.old_posts.length;
              
             var html2 = "";
             for ( var i2 = 0; i2 < jsonLength2; i2++ ) {
                var result2 = jsonData2.old_posts[ i2 ];
                firstTimeID = result2.id;
                 
                 
                 
                 if(result2.type == 'attach' && result2.owner == "<?php echo $user_info['id']; ?>") {
                     
                   html2 += '<div id=\"'+ 'old_post' + result2.id +'\" class=\"row\">';
                html2 += '<div class=\"col-xs-2\">';
                html2 += '<a><img src=\" '+ '<?php echo $_SESSION['url_placeholder'];  ?>' + result2.image  +' \" class=\"chat-left-1\"  /></a>';
                html2 += '</div>';
                html2 += '<div class=\"col-xs-10\">';
                html2 += '<div class=\"talk-bubble tri-right left-top\" class=\"chat-left-2\">';
                html2 += '<div class=\"talktext\">';
                html2 += '<p>' + result2.username + '</p>';
                html2 += '<p><a href=\" ' + result2.path  + ' \" download>' + result2.name + '</a></p><span><img style=\" height: 15px; width: 15px; \" src=\"  ' +  '<?php echo $_SESSION['url_placeholder'];  ?>frontend/html/pages/assets/sent.png' + '\" /></span>';
                html2 += ' </div></div></div></div>';    
                     
                 }  
                 
                 
                 
                    if(result2.type == 'attach' && result2.owner != "<?php echo $user_info['id']; ?>") {
         
                   html2 += '<div id=\"'+ 'old_post' + result2.id +'\" class=\"row\">';
                   html2 += '<div class=\"col-xs-10\">';
                   html2 += '<div class=\"talk-bubble1 tri-right1 left-top1\" class=\"chat-right-1\">';
                   html2 += '<div class=\"talktext1\">';
                   html2 += '<p>' + result2.username + '</p>';
                   html2 += '<p><a href=\" ' + result2.path  + ' \" download>' + result2.name + '</a></p>';
                   html2 += ' </div></div></div>';
                   html2 += '<div class=\"col-xs-2\">';
                   html2 += '<a><img src=\" ' +  '<?php echo $_SESSION['url_placeholder'];  ?>' + result2.image  +' \" class=\"chat-right-2\"  /></a>';
                   html2 += '</div>';
                   html2 += '</div>';
                    
                 }
                 
                 
                 
                 if (result2.type == "chat" && result2.owner == "<?php echo $user_info['id']; ?>") {
                     
                       
                html2 += '<div id=\"'+ 'old_post' + result2.id +'\" class=\"row\">';
                html2 += '<div class=\"col-xs-2\">';
                html2 += '<a><img src=\" '+ '<?php echo $_SESSION['url_placeholder'];  ?>' + result2.image +'  \" class=\"chat-left-1\"  /></a>';
                html2 += '</div>';
                html2 += '<div class=\"col-xs-10\">';
                html2 += '<div class=\"talk-bubble tri-right left-top\" class=\"chat-left-2\">';
                html2 += '<div class=\"talktext\">';
                html2 += '<p>' + result2.username + '</p>';
                html2 += '<p>'  + result2.message + '</p><span><img style=\" height: 12px; width: 12px; \" src=\"  ' +  '<?php echo $_SESSION['url_placeholder'];  ?>frontend/html/pages/assets/sent.png' + '\" /></span>';
                html2 += '<a>Save</a>';
                html2 += '<a>Delete</a>';
                html2 += '<a>Are you sure?</a>';
                html2 += '<a onclick=\"deleteoldpost(' + result2.id + ') \">Yes</a>';
                html2 += '<a>No</a>';
                html2 += ' </div></div></div></div>';  
                     
                 }
                 
                 
                 
                if (result2.type == "chat" && result2.owner != "<?php echo $user_info['id']; ?>") {
                    
                    
                   html2 += '<div id=\"'+ 'old_post' + result2.id +'\" class=\"row\">';
                   html2 += '<div class=\"col-xs-10\">';
                   html2 += '<div class=\"talk-bubble1 tri-right1 left-top1\" class=\"chat-right-1\">';
                   html2 += '<div class=\"talktext1\">';
                   html2 += '<p>' + result2.username + '</p>';
                   html2 += '<p>' + result2.message + '</p>';
                   html2 += ' </div></div></div>';
                   html2 += '<div class=\"col-xs-2\">';
                   html2 += '<a><img src=\" ' +  '<?php echo $_SESSION['url_placeholder'];  ?>' + result2.image  +' \" class=\"chat-right-2\"  /></a>';
                   html2 += '</div>';
                   html2 += '</div>';
                    
                     
                       
               
                     
                 }
                 
                 
                 
                 
                 
                 
                 
             
             }
             $( '#postsdiv' ).append( html2 );                            
                                                              
                                                              
                                                              
                                                              
                                                              } else {
        
        
        
        alert("AJAX is going on");
        
    }
             
             
          },
            error: function( xhr, textStatus, errorThrown ) {
               
               $('#loading').hide();
                $('#loadagain').show();
                
             },
                    complete: function( ) {
               
             // $(window).on("scroll");
                        
                        
                        
            $(window).bind("scroll", (function () {
                
                
                
                  if ( ( window.innerHeight + window.scrollY ) >= document.body.offsetHeight ) {
          displayFromDatabasePagination();
             $(window).unbind("scroll");
       }
                
                
                
	//alert("hhhhhhhhhhh");
}
                                     
                                     ));            
                
             }
       } ); 
        
        $('#loading').show();
    }
    
    
    
    function sendPostData( e, slate, name1, num ) {
        
       var dosome = function( data, post_id_0 ) {
           
           
           
           hhhj = "<?php echo $_SESSION['url_placeholder'];  ?>frontend/html/pages/assets/sent.png";
           html12 = "";
           html12 ='<img style=\" height: 15px; width: 15px; \" src=\" ' + hhhj + '  \" />';
                html12 += '<a>Save</a>';
                html12 += '<a>Delete</a>';
                html12 += '<a>Are you sure?</a>';
                html12 += '<a onclick=\"deletenewpost(' +  num + ',' + post_id_0 + ') \">Yes</a>';
                html12 += '<a>No</a>';
           alert(data);
          $( "#" + data ).html(html12);
       };
        
       var nameTrim = $( "#text" ).val().trim();
       // If the value of the chat box is not empty...
       if ( nameTrim != "" ) {
          // After submitting, clear the chat box.
          $( "#text" ).val( "" );
          e.preventDefault();
          //Submit the form to the database.
           
                   post_url_2 = "<?php  echo $_SESSION['url_placeholder'];  ?>" + "send_chat";   
           
                   
          $.ajax( {
             url: post_url_2,
             type: "POST",
             async: true,
             data: {
                "done": 1,
                "message": name1,
                 "group_id": page_group_id
             },
             success: function( data ) {
                 
                 
             var jsonNewPost = JSON.parse( data );
            
             var statusNewPost =  jsonNewPost[0];
            
             var post_id_new_from_json =  jsonNewPost[1];
                 
                if ( statusNewPost == 1 ) {
                   dosome( slate, post_id_new_from_json );
                    
                } else {}
                // After submitting, clear the chat box.
                $( "#text" ).val( "" );
                // When enter is clicked, do not move to the next line.
                e.preventDefault();
             },
             error: function( xhr, textStatus, errorThrown ) {
                $.ajax( this );
                return;
             }
          } );
       } else {
          $( "#text" ).val( "" );
       }
    }
    
    
    
   function myFunction(group) {
       
       post_url = "<?php  echo $_SESSION['url_placeholder'];  ?>" + "decline_request";
       
       $.ajax( {
             url: post_url,
             type: "POST",
             async: true,
             data: {
                "deleterequest": 1,
                "group_id": group
             },
             success: function( data ) {
                 
                if ( data == 1 ) {
                    alert(data);
                   $("#group" + group).hide();
                } 
             },
           
             error: function( xhr, textStatus, errorThrown ) {
             
                 
                 
             }
          } );
       
       
   } 
    
    
    
    
        
   function deleteoldpost(post_ui_id) {
      // alert(post_ui_id);
       $("#old_post" + post_ui_id).hide(1000);
       
       delete_post_url = "<?php  echo $_SESSION['url_placeholder'];  ?>" + "delete_post";
       
       $.ajax( {
             url: delete_post_url,
             type: "POST",
             async: true,
             data: {
                "deletepost": 1,
                "post_id": post_ui_id
             },
             success: function( data ) {
            //     alert(data);
                if ( data == 1 ) {
                 //   alert(data);
                 //  $("#group" + group).hide();
                } 
             },
           
             error: function( xhr, textStatus, errorThrown ) {
             
                 
                 
             }
          } ); 
       
       
   } 
    
    
    
    
    
    
    
       function deletenewpost(post_ui, post_ui_id) {
    
       $("#whole_new_post" + post_ui).hide(500);
     
       delete_post_url_new = "<?php  echo $_SESSION['url_placeholder'];  ?>" + "delete_post";
       
       $.ajax( {
             url: delete_post_url_new,
             type: "POST",
             async: true,
             data: {
                "deletepost": 1,
                "post_id": post_ui_id
             },
             success: function( data ) {
                 
                if ( data == 1 ) {
                 //   alert(data);
                 //  $("#group" + group).hide();
                } 
             },
           
             error: function( xhr, textStatus, errorThrown ) {
             
                 
                 
             }
          } );  
       
       
   }
    
    
    
    
    
    
    
    
    
    
    
    
        function sendPostDataAttach( slate, path333, name333, type333, posttype333 ) {
        
       var dooo = function( data ) {
          $( "#" + data ).html('<img style=\" height: 15px; width: 15px; \" src=\"<?php echo $_SESSION['url_placeholder'];  ?>frontend/html/pages/assets/sent.png\" />');
       };
        

            
            
            insert_attach_url = "<?php  echo $_SESSION['url_placeholder'];  ?>" + "insert_attach";
            
  
          $.ajax( {
             url: insert_attach_url,
             type: "POST",
             async: true,
             data: {
                "insert_attach": 1,
                "path": path333,
                 "name": name333,
                 "type": type333,
                 "posttype": posttype333,
                 "group": page_group_id
             },
             success: function( datas ) {
                      alert(datas);
                if ( datas == 1 ) {
                   dooo( slate );
                } else {}
             },
             error: function( xhr, textStatus, errorThrown ) {
                $.ajax( this );
                return;
             }
          } );
      
    }
    
    
    
    
    
    
    
    
    
        function metaLink( data33, new_post_id ) {
        
 var dooos1 = function( lam, data56, url, title, desc, img ) {
     
     var html45 = "";
     
    html45 +=   "<a href=\"  " + url + " \"><div class=\"row\" style=\"border: 2px solid #ddd; border-radius: 5px; padding: 10px; margin: 5px;\"><div>" 
                
                
                        
html45  += "<img src=\"  " + img +"  \" style=\"width: 100%;\" ></div><div><br>";
                        
                
                        
                        
                        
          html45 +=  " <p style=\" font-family: Josefin Slab; font-size: 15px; font-weight: bold;\">   " + title  +  "</p>";  
                        
                       html45 +=    "<p style=\" font-family: Josefin Slab; font-size: 15px; font-weight: bold;\">  " + desc + " </p>        </div> </div></a>  ";
     
     
     
     
     
     
          $( "#" + new_post_id ).html(html45);
       };
            
  
          $.ajax( {
             url: "<?php echo $_SESSION['url_placeholder']; ?>link_prepare",
             type: "POST",
             async: true,
             dataType:"text",
             data: {
                "preview": 1,
                 "name": name,
                 relay: data33
             },
             success: function( datasss ) {
                 
                 if (datasss) {
                     
                     
                    var jsonData16 = JSON.parse( datasss );
                     
                     
            
                    //  var attach_path12 =  jsonData16[0];
                   var metaurl = jsonData16.article["url"];
                    var metatitle = jsonData16.article["title"];
                     var metaimage = jsonData16.article['image']['src'];
                     var metadesc = jsonData16.article['description'];
                     
                   //  alert(metaimage);
                     dooos1(new_post_id, datasss, metaurl, metatitle, metadesc, metaimage);
                     
                 }
                 
                 
             },
             error: function( xhr, textStatus, errorThrown ) {
                $.ajax( this );
                return;
             }
          } );
      
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
      function previewLink( text, new_post_id ) {
        
            
  
          $.ajax( {
             url: "<?php echo $_SESSION['url_placeholder']; ?>link_preview",
             type: "POST",
             async: true,
             data: {
                "preview": 1,
                 "text": text
             },
             success: function( data ) {
                 
                 if (data) {
                     
                    metaLink(data, new_post_id);
                     
                 }
                 
                 
             },
             error: function( xhr, textStatus, errorThrown ) {
                $.ajax( this );
                return;
             }
          } );
      
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    function sendAppend( e, attach ) {
        
        
        
        if (attach) {
            
           
            var jsonChatAppend = JSON.parse( attach );
            
            var attach_chat_path =  jsonChatAppend[0];
            
            var attach_chat_name =  jsonChatAppend[1];
            
            var attach_chat_type = jsonChatAppend[2];
            
            var post_type_chat =  jsonChatAppend[3];
          
            
            
            var new_chat_html = '';
            new_chat_html += '<div id=\"'+ 'whole_' + new_post_id +'\" class=\"row\">';
            new_chat_html += '<div class=\"col-xs-2\">';
            new_chat_html += '<a><img src=\" '+  '<?php echo $_SESSION['url_placeholder'] . $user_info['img_path'];  ?>' +' \" class=\"chat-left-1\"  /></a>';
            new_chat_html += '</div>';
            new_chat_html += '<div class=\"col-xs-10\">';
            new_chat_html += '<div class=\"talk-bubble tri-right left-top\" class=\"chat-left-2\">';
            new_chat_html += '<div class=\"talktext\">';
            new_chat_html += '<p class=\"text-username\"> ' + '<?php echo $user_info['username']; ?>' + '</p>';
            new_chat_html += '<p class=\"text-body\"><a href=\" ' + attach_chat_path  + ' \" download>' + attach_chat_name + '</a></p><span id=\"' + new_post_id + '\" ></span>';
            new_chat_html += ' </div></div></div></div>';
            
            var new_items_chat = $( new_chat_html ).hide();
            $( '#postsdiv' ).prepend( new_items_chat );
            new_items_chat.show( 'fast' );
            sendPostDataAttach( new_post_id, attach_chat_path, attach_chat_name, attach_chat_type, post_type_chat );
            
            new_post_id_num = new_post_id_num + 1;
            new_post_id = "new_post" + new_post_id_num;
            
        } else {
            
            
          var text = $( "#text" ).val();
          var textTrim = $( "#text" ).val().trim();
            
      if ( textTrim != "" ) {
          
          var new_chat_html = '';
          new_chat_html += '<div id=\"'+ 'whole_' + new_post_id +'\" class=\"row\">';
          new_chat_html += '<div class=\"col-xs-2\">';
          new_chat_html += '<a><img src=\" '+  '<?php echo $_SESSION['url_placeholder'] . $user_info['img_path'];  ?>' +' \" class=\"chat-left-1\"  /></a>';
          new_chat_html += '</div>';
          new_chat_html += '<div class=\"col-xs-10\">';
          new_chat_html += '<div class=\"talk-bubble tri-right left-top\" class=\"chat-left-2\">';
          new_chat_html += '<div class=\"talktext\">';
          new_chat_html += '<p class=\"text-username\">' + '<?php echo $user_info['username'];  ?>' + '</p>';        
          new_chat_html += '<p class=\"text-body\">' + text + '</p><span id=\"' + new_post_id + '\" ></span>';
          new_chat_html += ' </div></div></div></div>';
                
                
                
          var new_items_chat = $( new_chat_html ).hide();
          $( '#postsdiv' ).prepend( new_items_chat );
          new_items_chat.show( 100 );
                
          previewLink(name, new_post_id);
         
          sendPostData( e, new_post_id, text,  new_post_id_num);
                
                
          new_post_id_num = new_post_id_num + 1;
          new_post_id = "new_post" + new_post_id_num;
       
       }
    }
        
     
}
    
</script>   