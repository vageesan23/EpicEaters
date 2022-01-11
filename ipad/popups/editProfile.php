<style>
    .editProfile {
        max-width: none; 
        min-width: 600px;
    }

    .form-content {
        display: flex;
    }

    .form-content .ui-block-a, .form-content .ui-block-c {
        margin: 5px 35px;
    }

    .form-content .ui-block-a .edit-users input, .form-content .ui-block-c .edit-users input {
        margin-left: 20px;
        margin-top: 5px;
    }

    .form-content .ui-block-a .edit-users img, .form-content .ui-block-c .edit-users img {
        margin-top: -5px;
    }

    /* .form-content .ui-block-a .ui-input-text {
        height: 40px;
        width: 100%;
    } */

</style>

<div class="editProfile" data-role="popup" id="editprofile" data-theme="a" class="ui-content">
    <div class="header-title" style="margin-top: 5px; display: flex">
        <img alt="page_icon" src="../../common/assets/images/icons/editProfile.png" height="60" width="60">    
        <h3>Edit Profile</h3>
    </div>
    <form>
        <div class="form-content">
            <div class="ui-block-a">
                <center><p>Edit User Data</p></center>
                <div class="edit-user">
                    <input type="text" name="firstName" id="firstName" value="Janice" style="margin-bottom: -33px">
                    <img src="../../common/assets/images/editprof.png">
                </div>
                <div class="edit-user">
                    <input type="text" name="lastName" id="lastName" value="Harper" style="margin-bottom: -33px">
                    <img src="../../common/assets/images/editprof.png">
                </div>
                <div class="edit-user">
                    <input type="text" name="username" id="username" value="Janice45" style="margin-bottom: -33px">
                    <img src="../../common/assets/images/editprof.png">
                </div>
            </div>
            <div class="ui-block-b"></div>
            <div class="ui-block-c">
                <center><p>Change Passwords</p></center>
                <div class="edit-user">
                    <input type="password" name="password" id="password" value="" placeholder="New Password"
                        style="margin-bottom: -33px">
                    <img src="../../common/assets/images/editlock.png">
                </div>
                <div class="edit-user">
                    <input type="password" name="rePassword" id="rePassword" value="" placeholder="Re-type New Password"
                        style="margin-bottom: -33px">
                    <img src="../../common/assets/images/editlock.png">
                </div>
            </div>
        </div>


        <button style="opacity: 1; width: 30%; margin: 10px 210px">Save</button>
        <!-- <center>
            <a data-ajax="false" href="#login"
               style="font-weight: 100; color: white; font-family: 'Poppins', sans-serif; font-size: 12px;">
                Already have an account?
            </a>
        </center> -->
    </form>
</div>