<style>
    .edit-user img {
        margin-top: 5px;
    }
</style>

<div style="max-width: none; min-width: 300px;" data-role="popup" id="editprofile" data-theme="a" class="ui-content">

    <div class="header-title" style="margin-top: -10px; display: flex">
        <img alt="page_icon" src="../../common/assets/images/icons/editProfile.png" height="50" width="50">    
        <h3>Edit Profile</h3>
    </div>
    <form>
        <center><p>Edit User Data</p></center>
        <div class="edit-user">
            <input type="text" name="firstName" id="firstName" value="Smith">
            <img src="../../common/assets/images/editprof.png">
        </div>
        <div class="edit-user">
            <input type="text" name="lastName" id="lastName" value="Jackson">
            <img src="../../common/assets/images/editprof.png">
        </div>
        <div class="edit-user">
            <input type="text" name="username" id="username" value="smith">
            <img src="../../common/assets/images/editprof.png">
        </div>


        <br/>
        <center><p>Edit Passwords</p></center>
        <div class="edit-user">
            <input type="password" name="password" id="password" value="" placeholder="New Password">
            <img src="../../common/assets/images/editlock.png">
        </div>
        <div class="edit-user">
            <input type="password" name="rePassword" id="rePassword" value="" placeholder="Re-type New Password">
            <img src="../../common/assets/images/editlock.png">
        </div>


        <button style="opacity: 1; margin-top: 10px;">Save</button>
        <!-- <center>
            <a data-ajax="false" href="#login"
               style="font-weight: 100; color: white; font-family: 'Poppins', sans-serif; font-size: 12px;">
                Already have an account?
            </a>
        </center> -->
    </form>
</div>