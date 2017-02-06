<div class="item">
        <img class="ui image profilepicture" src="../image/sampleimage.jpg">
    </div>

    <div class="header item" id="profilename">Jhoebe Lim</div>

    <div class="header item" id="profiledetail">
        <div class="ui accordion" id="infoaccordion">

            <div class="active title" id="title">
                <i class="dropdown icon"></i>
                COURSE
            </div>

            <div class="active content" id="content">
                <p>Information Systems</p>
            </div>

            <div class="title" id="title">
                <i class="dropdown icon"></i>
                EMAIL ADDRESS
            </div>

            <div class="content" id="content">
                <p>jhoebe@yahoo.com</p>
            </div>

            <div class="title" id="title">
                <i class="dropdown icon"></i>
                CONTACT NUMBER
            </div>

            <div class="content" id="content">
                <p>+639177150172</p>
            </div>
        </div>
    </div>
     <a class="item" id="sidebaritem">
         <i class="home icon"></i>
         Home
     </a>
    
    <a class="item" id="sidebaritem" onclick="$('#edit_profile_modal').modal('show');">
         <i class="Edit icon"></i>
         Edit Profile
     </a>
    
    <label for="file" class="item" id="sidebaritem">
        <i class="File Text Outline icon"></i>
        Attach Resume</label>
    <input type="file" id="file" style="display:none">

     <a class="item" id="sidebaritem">
         <i class="power icon"></i>
         Log Out
     </a>
    
    

 </div>

<div class="ui modal" id="edit_profile_modal">
    <i class="close icon"></i>
    <div class="header">
        Edit Profile
    </div>
    
    <div class="content">
        
        <div class="ui stackable two column grid">
            <div class="column">
                <div class="ui labeled fluid input">
                    <a class="ui label">
                        Name
                    </a>
                    <input type="text" value="Jhoebe Lim" disabled>
                </div>
                <br>
                <div class="ui labeled fluid input">
                    <a class="ui label">
                        Email
                    </a>
                    <input type="text" value="jhoebe@yahoo.com">
                </div>
                <br>
                <div class="ui labeled fluid input">
                    <a class="ui label">
                        Password
                    </a>
                    <input type="password" value="password">
                </div>
            </div>
            
            <div class="column">
                <div class="ui labeled fluid input">
                    <a class="ui label">
                        Address
                    </a>
                    <input type="text" value="A1 53 Baltazar Street 7th Avenue Caloocan City">
                </div>
                <br>
                <div class="ui labeled fluid input">
                    <a class="ui label">
                        Contact Number
                    </a>
                    <input type="text" value="+639177150172">
                </div>
            </div>
        </div>
    
    </div>
    
    <div class="actions">
        <div class="ui black deny button">
            Cancel
        </div>
        
        <div class="ui positive button">
            Save
        </div>
    </div>
</div>