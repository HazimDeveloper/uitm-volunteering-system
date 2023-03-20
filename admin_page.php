<?php

include 'config.php';
			
    session_start();
include 'config.php';

// $id_officer = $_SESSION['id_officer'];
$select_data_event = mysqli_query($connect,"SELECT * FROM event");
$i =1;
$tot_event = mysqli_query($connect,"SELECT COUNT(*) as tot_event FROM event");
$res = mysqli_fetch_assoc($tot_event);

?>

<!DOCTYPE html>
<html lang="en">
<head>

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" >
  
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap");
body { background-color: rgb(41, 45, 50); margin: 0px; display: flex; }
.Box-logo { color: white; font-size: 1.8em; margin: 40px auto 66px; width: 118px; font-weight: bold; animation-name: InfoUser; }
* { font-family: Inter, sans-serif; padding-left: 0px; outline: none; animation-duration: 2s; }

.chart-box-main>div {
    width: 100%;
    height:150%;
    background: #FFFFFF;
    border-radius: 19px;
}
.stocks-status { position: absolute; right: 12px; top: 23px; font-size: 14px; }
.stocks-number { font-size: 23px; }
.stocks-titles { margin-top: 3px; margin-right: 17px; }
.stocks-main { background: linear-gradient(270deg, rgba(255, 255, 255, 0.28), rgb(42, 46, 50) 52%); padding: 1px; border-radius: 18px; margin-top: 17px; width: 380px; animation-name: Stocks; }
.sub-stocks { display: flex; background: rgb(42, 46, 50); border-radius: 18px; padding: 16px; color: white; position: relative; }
.stocks { width: 1000px; margin-left: 106px; }
.box-travel { width: 100%; }
.sub-stocks > img { width: 30px; height: 30px; margin-right: 13px; }
.up-trans { color: rgb(0, 150, 108) !important; }
.info-trans-sub > div { font-size: 13px; color: rgb(122, 122, 122); }
.money-time-trans-sub > div { font-size: 12px; color: rgb(122, 122, 122); text-align: center; }
.money-time-trans-sub { color: white; position: absolute; right: 13px; margin-top: 5px; }
.info-trans-sub { color: white; margin-top: 5px; }
.money-time-trans-sub > h5 { margin: 0px; text-align: center; }
.info-trans-sub > h5 { padding: 0px; margin: 0px; }
.box-trans-sub > img { width: 45px; height: 45px; border-radius: 8px; margin-right: 12px; }
.box-trans-sub { display: flex; margin-top: 12px; animation-name: Transction; }
.transction { width: 100%; position: relative; top: 180px;}
.chart-box-main {background: linear-gradient(270deg, rgba(255, 255, 255, 0.28), rgb(50, 54, 59) 52%);width: 100%;border-radius: 19px;box-shadow: rgba(0, 0, 0, 0.18) 0px 0px 10px 0px;height: 325px;margin-top: 15px;animation-name: Activities;padding: 1px;}
.value-travel > span { font-size: smaller; }
.value-travel { position: absolute; bottom: 24px; right: 24px; color: white; font-weight: 400; }
.title-travel { position: absolute; left: 21px; font-size: 24px; color: white; font-weight: bold; bottom: 21px; }
.box-travel > .title-element { margin-bottom: 50px; }
.box-chart-travel { position: relative; margin-left: 4px; }
.chart-travel-data { background-color: rgb(89, 95, 247); }
.chart-back-2 { background-color: rgb(247, 193, 89); transform: rotate(14deg); left: 9px; top: -2px; width: 286px !important; height: 263px !important; border-radius: 40px 40px 98px 98px !important; }
.chart-back-1 { background-color: rgb(252, 63, 77); transform: rotate(33deg); left: 12px; top: 4px; width: 286px !important; height: 266px !important; border-radius: 40px 40px 132px 98px !important; }
.chart-travel { border-radius: 40px; width: 280px; height: 280px; position: absolute; animation-name: InfoUser; }
.title-element { color: white; font-weight: 700; }
.Box-elements { margin: 35px 5% 0px; padding-bottom: 55px; }
.chart-box { border-radius: 19px; margin-right: 6%; width: 118%; position: relative; }
.box-element-flex { display: flex; margin-top: 20px; }
.staus-box-alert { width: 10px; height: 10px; background-color: rgb(244, 67, 54); border-radius: 100%; position: absolute; left: 13px; top: 7px; }
.info-name { color: rgb(191, 191, 191); line-height: 44px; }
.box-alert { display: flex; }
.box-infomation { display: flex; }
input.input-search { background-color: rgb(50, 54, 59); border: none; height: 36px; width: 260px; border-radius: 14px; color: rgb(191, 191, 191); animation-name: Search; }
.Box-search { padding: 1px 1px 1px 16px; border-radius: 14px; background: linear-gradient(270deg, rgba(255, 255, 255, 0.28), rgb(50, 54, 59) 52%); }
.box-alert-infomation { position: absolute; right: 5%; display: flex; animation-name: InfoUser; }
.Box-header { display: flex; margin: 43px 5% 0px; }
img.info-avatar { width: 40px; height: 40px; border-radius: 100%; margin: 0px 10px; border: 1px solid rgb(191, 191, 191); }
svg.icon-alert { width: 25px; height: 25px; fill: rgb(191, 191, 191); margin-top: 9px; }
.Page { position: absolute; background-color: rgb(37, 39, 44); height: 100%; width: 81%; right: 0px; border-radius: 60px 0px 0px 60px; overflow: overlay; }
.icon-menu { width: 17px; height: 17px; fill: white; margin-right: 16px; animation-name: Icon-Menu; }
li.li-mneu { display: flex; padding: 14px 24px; margin-bottom: 6px; cursor: pointer; position: relative; animation-name: li-Menu; }
div.title-menu { color: white; font-size: 14px; animation-name: Font-Menu; }
.Side-bar { width: 19%; height: 100%; position: absolute; left: 0px; top: 0px; }
.logout { margin-top: 50px; }
.Active-menu { background: linear-gradient(92deg, rgb(89, 95, 247) -229%, transparent 94%); border-left: 4px solid rgb(89, 95, 247); }
svg.icon-search { width: 19px; height: 19px; margin-bottom: -4px; margin-right: 5px; }
@keyframes Search { 
  0% { width: 0px; }
  100% { width: 260px; }
}
@keyframes li-Menu { 
  0% { left: -165px; }
  100% { left: 0px; }
}
@keyframes InfoUser { 
  0% { transform: scale(0); opacity: 0; }
  100% { transform: scale(1); opacity: 1; }
}
@keyframes Transction { 
  0% { transform: translateX(-600px); }
  100% { transform: translateX(0px); }
}
@keyframes Activities { 
  0% { width: 0%; }
  100% { width: 100%; }
}
@keyframes Stocks { 
  0% { transform: translateY(256px); }
  100% { transform: translateY(0px); }
}


</style>
<body>
<div class="Side-bar">
        <div class="Box-logo">Admin</div>
        <div class="Box-menu">
            <ul class="ul-menu">
                <li class="li-mneu Active-menu">
                    <svg class="icon-menu" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="512" height="512">
                        <link xmlns="" type="text/css" rel="stylesheet" id="dark-mode-custom-link" />
                        <link xmlns="" type="text/css" rel="stylesheet" id="dark-mode-general-link" />
                        <style xmlns="" lang="en" type="text/css" id="dark-mode-custom-style" />
                        <style xmlns="" lang="en" type="text/css" id="dark-mode-native-style" />
                        <style xmlns="" lang="en" type="text/css" id="dark-mode-native-sheet" />
                        <path
                            d="M7,0H4A4,4,0,0,0,0,4V7a4,4,0,0,0,4,4H7a4,4,0,0,0,4-4V4A4,4,0,0,0,7,0ZM9,7A2,2,0,0,1,7,9H4A2,2,0,0,1,2,7V4A2,2,0,0,1,4,2H7A2,2,0,0,1,9,4Z" />
                        <path
                            d="M20,0H17a4,4,0,0,0-4,4V7a4,4,0,0,0,4,4h3a4,4,0,0,0,4-4V4A4,4,0,0,0,20,0Zm2,7a2,2,0,0,1-2,2H17a2,2,0,0,1-2-2V4a2,2,0,0,1,2-2h3a2,2,0,0,1,2,2Z" />
                        <path
                            d="M7,13H4a4,4,0,0,0-4,4v3a4,4,0,0,0,4,4H7a4,4,0,0,0,4-4V17A4,4,0,0,0,7,13Zm2,7a2,2,0,0,1-2,2H4a2,2,0,0,1-2-2V17a2,2,0,0,1,2-2H7a2,2,0,0,1,2,2Z" />
                        <path
                            d="M20,13H17a4,4,0,0,0-4,4v3a4,4,0,0,0,4,4h3a4,4,0,0,0,4-4V17A4,4,0,0,0,20,13Zm2,7a2,2,0,0,1-2,2H17a2,2,0,0,1-2-2V17a2,2,0,0,1,2-2h3a2,2,0,0,1,2,2Z" />
                    </svg>
                    <div class="title-menu"><a href="admin_page.php">Profile User</a> </div>
                </li>
                <li class="li-mneu ">
                    <svg class="icon-menu" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="512" height="512">
                        <link xmlns="" type="text/css" rel="stylesheet" id="dark-mode-custom-link" />
                        <link xmlns="" type="text/css" rel="stylesheet" id="dark-mode-general-link" />
                        <style xmlns="" lang="en" type="text/css" id="dark-mode-custom-style" />
                        <style xmlns="" lang="en" type="text/css" id="dark-mode-native-style" />
                        <style xmlns="" lang="en" type="text/css" id="dark-mode-native-sheet" />
                        <path
                            d="M7,0H4A4,4,0,0,0,0,4V7a4,4,0,0,0,4,4H7a4,4,0,0,0,4-4V4A4,4,0,0,0,7,0ZM9,7A2,2,0,0,1,7,9H4A2,2,0,0,1,2,7V4A2,2,0,0,1,4,2H7A2,2,0,0,1,9,4Z" />
                        <path
                            d="M20,0H17a4,4,0,0,0-4,4V7a4,4,0,0,0,4,4h3a4,4,0,0,0,4-4V4A4,4,0,0,0,20,0Zm2,7a2,2,0,0,1-2,2H17a2,2,0,0,1-2-2V4a2,2,0,0,1,2-2h3a2,2,0,0,1,2,2Z" />
                        <path
                            d="M7,13H4a4,4,0,0,0-4,4v3a4,4,0,0,0,4,4H7a4,4,0,0,0,4-4V17A4,4,0,0,0,7,13Zm2,7a2,2,0,0,1-2,2H4a2,2,0,0,1-2-2V17a2,2,0,0,1,2-2H7a2,2,0,0,1,2,2Z" />
                        <path
                            d="M20,13H17a4,4,0,0,0-4,4v3a4,4,0,0,0,4,4h3a4,4,0,0,0,4-4V17A4,4,0,0,0,20,13Zm2,7a2,2,0,0,1-2,2H17a2,2,0,0,1-2-2V17a2,2,0,0,1,2-2h3a2,2,0,0,1,2,2Z" />
                    </svg>
                    <div class="title-menu"><a href="profile_officer.php">Profile Officer</a> </div>
                </li>
                <li class="li-mneu">
                    <svg class="icon-menu" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512">
                        <link xmlns="" type="text/css" rel="stylesheet" id="dark-mode-custom-link" />
                        <link xmlns="" type="text/css" rel="stylesheet" id="dark-mode-general-link" />
                        <style xmlns="" lang="en" type="text/css" id="dark-mode-custom-style" />
                        <style xmlns="" lang="en" type="text/css" id="dark-mode-native-style" />
                        <style xmlns="" lang="en" type="text/css" id="dark-mode-native-sheet" />
                        <path
                            d="M22.5,21H5.5A2.5,2.5,0,0,1,3,18.5V1.5a1.5,1.5,0,0,0-3,0v17A5.506,5.506,0,0,0,5.5,24h17a1.5,1.5,0,0,0,0-3Z" />
                        <path d="M9.5,9A1.5,1.5,0,0,0,8,10.5v7a1.5,1.5,0,0,0,3,0v-7A1.5,1.5,0,0,0,9.5,9Z" />
                        <path d="M14,13.5v4a1.5,1.5,0,0,0,3,0v-4a1.5,1.5,0,0,0-3,0Z" />
                        <path d="M20,9.5v8a1.5,1.5,0,0,0,3,0v-8a1.5,1.5,0,0,0-3,0Z" />
                        <path
                            d="M6,7.5a1.487,1.487,0,0,0,.936-.329L9.214,5.35a2.392,2.392,0,0,1,3.191.176,5.43,5.43,0,0,0,7.3.3l3.764-3.185A1.5,1.5,0,1,0,21.531.355L17.768,3.54A2.411,2.411,0,0,1,14.526,3.4a5.389,5.389,0,0,0-7.186-.4L5.063,4.829A1.5,1.5,0,0,0,6,7.5Z" />
                    </svg>
                    <div class="title-menu"><a href="event_admin.php"> Event</a></div>
                </li>
            
                <li class="li-mneu">
                    <svg class="icon-menu" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512">
                        <link xmlns="" type="text/css" rel="stylesheet" id="dark-mode-custom-link" />
                        <link xmlns="" type="text/css" rel="stylesheet" id="dark-mode-general-link" />
                        <style xmlns="" lang="en" type="text/css" id="dark-mode-custom-style" />
                        <style xmlns="" lang="en" type="text/css" id="dark-mode-native-style" />
                        <style xmlns="" lang="en" type="text/css" id="dark-mode-native-sheet" />
                        <path
                            d="M22.5,21H5.5A2.5,2.5,0,0,1,3,18.5V1.5a1.5,1.5,0,0,0-3,0v17A5.506,5.506,0,0,0,5.5,24h17a1.5,1.5,0,0,0,0-3Z" />
                        <path d="M9.5,9A1.5,1.5,0,0,0,8,10.5v7a1.5,1.5,0,0,0,3,0v-7A1.5,1.5,0,0,0,9.5,9Z" />
                        <path d="M14,13.5v4a1.5,1.5,0,0,0,3,0v-4a1.5,1.5,0,0,0-3,0Z" />
                        <path d="M20,9.5v8a1.5,1.5,0,0,0,3,0v-8a1.5,1.5,0,0,0-3,0Z" />
                        <path
                            d="M6,7.5a1.487,1.487,0,0,0,.936-.329L9.214,5.35a2.392,2.392,0,0,1,3.191.176,5.43,5.43,0,0,0,7.3.3l3.764-3.185A1.5,1.5,0,1,0,21.531.355L17.768,3.54A2.411,2.411,0,0,1,14.526,3.4a5.389,5.389,0,0,0-7.186-.4L5.063,4.829A1.5,1.5,0,0,0,6,7.5Z" />
                    </svg>
                    <div class="title-menu"><a href="create_officer.php">Create Officer</a></div>
                </li>
            
                <li class="li-mneu logout">
                    <svg class="icon-menu" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512">
                        <link xmlns="" type="text/css" rel="stylesheet" id="dark-mode-custom-link" />
                        <link xmlns="" type="text/css" rel="stylesheet" id="dark-mode-general-link" />
                        <style xmlns="" lang="en" type="text/css" id="dark-mode-custom-style" />
                        <style xmlns="" lang="en" type="text/css" id="dark-mode-native-style" />
                        <style xmlns="" lang="en" type="text/css" id="dark-mode-native-sheet" />
                        <path
                            d="M11.476,15a1,1,0,0,0-1,1v3a3,3,0,0,1-3,3H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2H7.476a3,3,0,0,1,3,3V8a1,1,0,0,0,2,0V5a5.006,5.006,0,0,0-5-5H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H7.476a5.006,5.006,0,0,0,5-5V16A1,1,0,0,0,11.476,15Z" />
                        <path
                            d="M22.867,9.879,18.281,5.293a1,1,0,1,0-1.414,1.414L21.13,10.97,6,11a1,1,0,0,0,0,2H6l15.188-.03-4.323,4.323a1,1,0,1,0,1.414,1.414l4.586-4.586A3,3,0,0,0,22.867,9.879Z" />
                    </svg>
                    <div class="title-menu"><a href="login_admin.php">Logout</a> </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="Page">
        <div class="Box-header">
            <div class="box-alert-infomation">
               
                <div class="box-infomation">
                    <img class="info-avatar" src="img/uitmlogo1.png">
                    <div class="info-name">Admin</div>
                </div>
            </div>
        </div>
        <div class="Box-elements">
            <div class="stocks-main">
                        <div class="sub-stocks">
                            <!-- <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Tesla_T_symbol.svg/800px-Tesla_T_symbol.svg.png" alt=""> -->
                            <div class="stocks-titles">Event Created : </div>
                            <div class="stocks-number"><?= $res['tot_event']?></div>
                        </div>
                    </div>
           
            <div class="box-element-flex">
                <div class="transction" style="top:-5px;">
                    <div class="title-element">New User</div>
                    <?php $select_user = mysqli_query($connect,"SELECT * FROM user_form LIMIT 7") ;
                    while($row = mysqli_fetch_assoc($select_user)){?>
                    <div class="box-trans-sub">
                     
                        <div class="info-trans-sub">
                            <h5><?= $row['name'] ?></h5>
                            <div><?= $row['email'] ?></div>
                        </div>
                        <div class=" money-time-trans-sub ">
                            <h5><?= $row['phone']?></h5>
                            <div><?= $row['campus']?></div>
                        </div>
                    </div>
                    <?php  }?>
                 
                </div>
            </div>
        </div>

    
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>

</body>
</html>