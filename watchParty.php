<?php
   include_once("topnav.php");
?>
<?php
  include_once("sidenav.php");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>CINEPHILES</title>
     <style>
         body{
            background-color: rgb(83, 25, 25);
         }
       *{
        margin:0;
        padding:0;
        box-sizing: border-box;
        text-transform: capitalize;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-weight: normal;

       }

    .container-Streaming{
       
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 15px;
        align-items: flex-start;
        padding: 5px 5%;

    }
    .container-Streaming .main-video{
        background: #fff;
        border-radius: 5px;
        padding: 10px;
    }
    .container-Streaming .main-video video{
       width: 100%;
        border-radius: 5px;
    }
    .container-Streaming .main-video .title{
        color: #333;
        font-size: 23px;
        padding-top: 15px;
        padding-bottom: 15px;
       
    }


     .chat-list{
        align-items: center;
        margin-bottom: 20px;
        background: #fff;
        border-radius: 5px;
        height: 520px;
        overflow-y: scroll;

    }
    .chat img{
    width: 40px;
    height: 40px;
    border-radius: 50%;

    }
    
     .chat{
    display: flex;
    width: 40px;
    border-radius: 50%;
    margin-right: 15px;
    cursor: pointer;

    }


    .peopleProfile{
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}
.peopleProfile .winner img{
    width: 40px;
    height: 40px;
    border-radius: 50%;

}
    
.peopleProfile .winner {
    width: 40px;
    border-radius: 50%;
    margin-right: 15px;
    cursor: pointer;


}




@import url('https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300;500;600;700&display=swap');

.main-wrapper{
    background-color: #080A0D;
    height: 78vh;
    width: 100%;
    display: grid;
    place-items:center;
}
::-webkit-scrollbar {
  width: 6px;
  height: 4px;
    background-color: #27282F;
}

::-webkit-scrollbar-thumb {
  cursor: pointer;
  background: #40404B;
    border-radius: 30px;
}
/*-----------------------LIVE CHAT-------------------------*/
.cgl-live-chat{
    max-width: 550px;
}
.cgl-live-chat .chat-wrapper {
    background-color: #141921;
    border: 8px solid #141921;
    box-sizing: border-box;
}

.cgl-live-chat .chat-wrapper .chat-title {
    padding: 10px;
    font-family: Hind Madurai;
    font-style: normal;
    font-weight: normal;
    font-size: 20px;
    line-height: 28px;
    color: #9FADC5;
}

.cgl-live-chat .chat-wrapper .chat-view {
    background-color: #11151A;
    display: flex;
    flex-direction: column;
    min-height: 400px;
    max-height: 400px;
    overflow-y: auto;
    /*    justify-content: flex-end;*/
}

.cgl-live-chat .chat-wrapper .chat-item {
    padding: 5px;
}

.cgl-live-chat .chat-wrapper .chat-view img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
}

.cgl-live-chat .chat-wrapper .chat-view .sender-name a {
    font-family: Hind Madurai;
    font-style: normal;
    font-weight: bold;
    font-size: 14px;
    line-height: 14px;
    /* identical to box height */


    color: #ADADAD;
}

.cgl-live-chat .chat-wrapper .chat-view .sender-name a:hover {
    color: #FFFFFF;
    font-weight: bold;
}

.cgl-live-chat .chat-wrapper .chat-view .admin-tag a {
    background-color: #4368EA !important;
    color: #FFFFFF !important;
    border-radius: 9px;
    padding: 0 8px;
}

.cgl-live-chat .chat-wrapper .chat-view .chat-time {
    font-family: Hind Madurai;
    font-style: normal;
    font-weight: 500;
    font-size: 12px;
    line-height: 11px;
    padding-left: 8px;
    padding-right: 8px;
    color: #585C61;
}

.cgl-live-chat .chat-wrapper .chat-view .chat-time i {
    display: none;
}

.cgl-live-chat .chat-wrapper .chat-view .chat-pinned {
    border: 2px solid #7389DC;
    box-sizing: border-box;
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    background-color: #11151A;
}

.chat-sticky {
    position: fixed;
    top: 0;
    width: 100%;
}

.cgl-live-chat .chat-wrapper .chat-view .chat-pinned .chat-time i {
    display: inline;
}

.cgl-live-chat .chat-wrapper .chat-view .chat-text {
    font-family: Hind Madurai;
    font-style: normal;
    font-weight: lighter;
    font-size: 14px;
    line-height: 17px;
    padding: 3px;
    color: #9FADC5;
}

.cgl-live-chat .chat-wrapper .chat-message {
    background-color: #23272D;
    padding: 6px;
}

.cgl-live-chat .chat-wrapper .chat-message input {
    background-color: transparent;
    border: none !important;
    font-family: Hind Madurai;
    font-style: normal;
    font-weight: 300;
    font-size: 16px;
    line-height: 22px;
    color: #585C61;
    outline: none !important;
}

.cgl-live-chat .chat-wrapper .chat-message button {
    background-color: transparent;
    border: none;
    outline: none;
}
.cgl-live-chat .chat-wrapper .dropdown-menu{
    background-color: #141921;
}
.cgl-live-chat .chat-wrapper .dropdown-menu .dropdown-item{
    color: #9FADC5;
    font-family: Hind Madurai;
    font-style: normal;
    font-weight: 300;
}
.cgl-live-chat .chat-wrapper .dropdown-menu .dropdown-item:hover{
    background-color: #1C232E;
}
@media(max-width:450px) {
    .cgl-live-chat .chat-wrapper .chat-view {
        max-height: 300px;
    }

    .cgl-live-chat .chat-wrapper .chat-view img {
        width: 30px;
        height: 30px;
    }

    .cgl-live-chat .chat-wrapper .chat-view .sender-name a {
        font-size: 10px;
        line-height: 10px;
    }

    .cgl-live-chat .chat-wrapper .chat-view .chat-time {
        font-weight: 500;
        font-size: 10px;
        line-height: 10px;
        padding-left: 8px;
        padding-right: 8px;
    }

    .cgl-live-chat .chat-wrapper .chat-view .chat-text {
        font-size: 12px;
        line-height: 12px;
        padding: 3px;
    }
}

.dropdown-btn{
 background-color: transparent;
    color: #585C61;
    border: none;
    outline: none !important;
}
    </style>
</head>

<body>
   
    

    <div class="container-Streaming">
       <div class="main-video">
        <div class="video">
            <video src="img/video-1.mp4" controls muted autoplay></video>
            <h3 class="title">Sky video</h3>

        </div>
       </div>
            <section class="main-wrapper">
                <div class="cgl-live-chat">
                    <div class="chat-wrapper">
                        <div class="chat-title">
                            Live Chat
                        </div>
                        <div class="chat-view">
                            <div class="chat-item">
                                <div class="d-flex">
                                    <img src="https://image.freepik.com/free-vector/gamer-logo_43901-59.jpg" alt="">
                                    <div class="p-1">
                                        <div class="d-flex align-items-end">
                                            <div class="sender-name"><a href="#">#Mehedi Hasan</a></div>
                                            <div class="chat-time">09:54 24/05/21</div>
                                        </div>
                                        <div class="float-right">
                                            <button type="button" class="dropdown-btn btn-tr p-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="#">Report</a>
                                                <a class="dropdown-item" href="#">Block</a>
                                            </div>
                                        </div>
                                        <div class="chat-text">
                                            Hello guys! lets get into the party
                                        </div>
                                    </div>
                                </div>
                            </div>
        <!--                   ----------------------------------------------------------------------------                        -->
        <!--                    Add this class "admin-tag" in sender name to highlight the admin message                           -->
        <!--                   ----------------------------------------------------------------------------                        -->
                            <div class="chat-item">
                                <div class="d-flex">
                                    <img src="https://image.freepik.com/free-vector/gamer-logo_43901-59.jpg" alt="">
                                    <div class="p-1">
                                        <div class="d-flex align-items-end">
                                            <div class="sender-name admin-tag"><a href="#">#Admin name</a></div>
                                            <div class="chat-time">09:54 24/05/21 <i class="fas fa-thumbtack"></i></div>
                                        </div>
                                        <div class="float-right">
                                            <button type="button" class="dropdown-btn btn-tr p-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="#">Report</a>
                                                <a class="dropdown-item" href="#">Block</a>
                                            </div>
                                        </div>
                                        <div class="chat-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean orci libero, aliquam ut feugiat id, condimentum a nisi. Mauris non.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-item">
                                <div class="d-flex">
                                    <img src="https://image.freepik.com/free-vector/gamer-logo_43901-59.jpg" alt="">
                                    <div class="p-1">
                                        <div class="d-flex align-items-end">
                                            <div class="sender-name"><a href="#">#Mehedi Hasan</a></div>
                                            <div class="chat-time">09:54 24/05/21 <i class="fas fa-thumbtack"></i></div>
                                        </div>
                                        <div class="float-right">
                                            <button type="button" class="dropdown-btn btn-tr p-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="#">Report</a>
                                                <a class="dropdown-item" href="#">Block</a>
                                            </div>
                                        </div>
                                        <div class="chat-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ornare.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-item">
                                <div class="d-flex">
                                    <img src="https://image.freepik.com/free-vector/gamer-logo_43901-59.jpg" alt="">
                                    <div class="p-1">
                                        <div class="d-flex align-items-end">
                                            <div class="sender-name"><a href="#">#Mehedi Hasan</a></div>
                                            <div class="chat-time">09:54 24/05/21 <i class="fas fa-thumbtack"></i></div>
                                        </div>
                                        <div class="float-right">
                                            <button type="button" class="dropdown-btn btn-tr p-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="#">Report</a>
                                                <a class="dropdown-item" href="#">Block</a>
                                            </div>
                                        </div>
                                        <div class="chat-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempor justo enim, dignissim mollis metus.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-item">
                                <div class="d-flex">
                                    <img src="https://image.freepik.com/free-vector/gamer-logo_43901-59.jpg" alt="">
                                    <div class="p-1">
                                        <div class="d-flex align-items-end">
                                            <div class="sender-name"><a href="#">#Mehedi Hasan</a></div>
                                            <div class="chat-time">09:54 24/05/21</div>
                                        </div>
                                        <div class="float-right">
                                            <button type="button" class="dropdown-btn btn-tr p-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="#">Report</a>
                                                <a class="dropdown-item" href="#">Block</a>
                                            </div>
                                        </div>
                                        <div class="chat-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vehicula libero a quam dictum, in auctor magna efficitur. Proin posuere ligula vel augue sagittis feugiat.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-item">
                                <div class="d-flex">
                                    <img src="https://image.freepik.com/free-vector/gamer-logo_43901-59.jpg" alt="">
                                    <div class="p-1">
                                        <div class="d-flex align-items-end">
                                            <div class="sender-name"><a href="#">#Mehedi Hasan</a></div>
                                            <div class="chat-time">09:54 24/05/21</div>
                                        </div>
        
                                        <div class="float-right">
                                            <button type="button" class="dropdown-btn btn-tr p-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="#">Report</a>
                                                <a class="dropdown-item" href="#">Block</a>
                                            </div>
                                        </div>
                                        <div class="chat-text">
                                            Lorem ipsum dolor sit amet.
                                        </div>
                                    </div>
                                </div>
                            </div>
        <!--                    ---------------------------------------------------------------------------------         -->
        <!--                    add thia class "chat-pinned" in chat item to stick the pinned message                     -->
        <!--                    ---------------------------------------------------------------------------------         -->
                            <div class="chat-item chat-pinned">
                                <div class="d-flex">
                                    <img src="https://image.freepik.com/free-vector/gamer-logo_43901-59.jpg" alt="">
                                    <div class="p-1">
                                        <div class="d-flex align-items-end">
                                            <div class="sender-name"><a href="#">#Mehedi Hasan</a></div>
                                            <div class="chat-time">09:54 24/05/21</div>
                                        </div>
                                        <div class="float-right">
                                            <button type="button" class="dropdown-btn btn-tr p-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="#">Report</a>
                                                <a class="dropdown-item" href="#">Block</a>
                                            </div>
                                        </div>
                                        <div class="chat-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-item">
                                <div class="d-flex">
                                    <img src="https://image.freepik.com/free-vector/gamer-logo_43901-59.jpg" alt="">
                                    <div class="p-1">
                                        <div class="d-flex align-items-end">
                                            <div class="sender-name"><a href="#">#Mehedi Hasan</a></div>
                                            <div class="chat-time">09:54 24/05/21</div>
                                        </div>
                                        <div class="float-right">
                                            <button type="button" class="dropdown-btn btn-tr p-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="#">Report</a>
                                                <a class="dropdown-item" href="#">Block</a>
                                            </div>
                                        </div>
                                        <div class="chat-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sem.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-item">
                                <div class="d-flex">
                                    <img src="https://image.freepik.com/free-vector/gamer-logo_43901-59.jpg" alt="">
                                    <div class="p-1">
                                        <div class="d-flex align-items-end">
                                            <div class="sender-name"><a href="#">#Mehedi Hasan</a></div>
                                            <div class="chat-time">09:54 24/05/21</div>
                                        </div>
                                        <div class="float-right">
                                            <button type="button" class="dropdown-btn btn-tr p-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="#">Report</a>
                                                <a class="dropdown-item" href="#">Block</a>
                                            </div>
                                        </div>
                                        <div class="chat-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sem.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-item">
                                <div class="d-flex">
                                    <img src="https://image.freepik.com/free-vector/gamer-logo_43901-59.jpg" alt="">
                                    <div class="p-1">
                                        <div class="d-flex align-items-end">
                                            <div class="sender-name"><a href="#">#Mehedi Hasan</a></div>
                                            <div class="chat-time">09:54 24/05/21</div>
                                        </div>
                                        <div class="float-right">
                                            <button type="button" class="dropdown-btn btn-tr p-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="#">Report</a>
                                                <a class="dropdown-item" href="#">Block</a>
                                            </div>
                                        </div>
                                        <div class="chat-text">
                                            Sample Message text
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-item">
                                <div class="d-flex">
                                    <img src="https://image.freepik.com/free-vector/gamer-logo_43901-59.jpg" alt="">
                                    <div class="p-1">
                                        <div class="d-flex align-items-end">
                                            <div class="sender-name"><a href="#">#Mehedi Hasan</a></div>
                                            <div class="chat-time">09:54 24/05/21</div>
                                        </div>
                                        <div class="float-right">
                                            <button type="button" class="dropdown-btn btn-tr p-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="#">Report</a>
                                                <a class="dropdown-item" href="#">Block</a>
                                            </div>
                                        </div>
                                        <div class="chat-text">
                                            Sample Message text
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-item">
                                <div class="d-flex">
                                    <img src="https://image.freepik.com/free-vector/gamer-logo_43901-59.jpg" alt="">
                                    <div class="p-1">
                                        <div class="d-flex align-items-end">
                                            <div class="sender-name"><a href="#">#Mehedi Hasan</a></div>
                                            <div class="chat-time">09:54 24/05/21</div>
                                        </div>
                                        <div class="float-right">
                                            <button type="button" class="dropdown-btn btn-tr p-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="#">Report</a>
                                                <a class="dropdown-item" href="#">Block</a>
                                            </div>
                                        </div>
                                        <div class="chat-text">
                                            Sample Message text
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-item">
                                <div class="d-flex">
                                    <img src="https://image.freepik.com/free-vector/gamer-logo_43901-59.jpg" alt="">
                                    <div class="p-1">
                                        <div class="d-flex align-items-end">
                                            <div class="sender-name"><a href="#">#Mehedi Hasan</a></div>
                                            <div class="chat-time">09:54 24/05/21</div>
                                        </div>
                                        <div class="float-right">
                                            <button type="button" class="dropdown-btn btn-tr p-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="#">Report</a>
                                                <a class="dropdown-item" href="#">Block</a>
                                            </div>
                                        </div>
                                        <div class="chat-text">
                                            Sample Message text
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-item">
                                <div class="d-flex">
                                    <img src="https://image.freepik.com/free-vector/gamer-logo_43901-59.jpg" alt="">
                                    <div class="p-1">
                                        <div class="d-flex align-items-end">
                                            <div class="sender-name"><a href="#">#Mehedi Hasan</a></div>
                                            <div class="chat-time">09:54 24/05/21</div>
                                        </div>
                                        <div class="float-right">
                                            <button type="button" class="dropdown-btn btn-tr p-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="#">Report</a>
                                                <a class="dropdown-item" href="#">Block</a>
                                            </div>
                                        </div>
                                        <div class="chat-text">
                                            Sample Message text
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-item">
                                <div class="d-flex">
                                    <img src="https://image.freepik.com/free-vector/gamer-logo_43901-59.jpg" alt="">
                                    <div class="p-1">
                                        <div class="d-flex align-items-end">
                                            <div class="sender-name"><a href="#">#Mehedi Hasan</a></div>
                                            <div class="chat-time">09:54 24/05/21</div>
                                        </div>
                                        <div class="float-right">
                                            <button type="button" class="dropdown-btn btn-tr p-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="#">Report</a>
                                                <a class="dropdown-item" href="#">Block</a>
                                            </div>
                                        </div>
                                        <div class="chat-text">
                                            Sample Message text
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chat-message">
                            <form action="#">
                                <div class="input-group align-items-center">
                                    <input type="text" class="form-control" placeholder="Type something...">
                                    <div class="input-group-append">
                                        <button class="" type="button" id="button-addon2">
                                            <img src="assets/img/send-btn.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>






    </div>
 





<!-- 
    <div id="header">
        <h1>EOTONES Youtube Live</h1>
        <span>隨機開台</span>
      </div>
      
      <div id="stream-container">
        stream
        <div id="stream-embed-wrapper">
          <iframe id="stream-embed-iframe" width="560" height="100%" src="https://www.youtube.com/embed/live_stream?channel=UC0nZ5FTveaBz-qbEuhQIToQ" frameborder="0" allowfullscreen></iframe>
        </div>
      
        chat
        <div id="chat-embed-wrapper"></div>
        
        <div class="clear_both"></div>
      </div>
      
      <div id="footer">
        <a href="https://www.youtube.com/channel/UC0nZ5FTveaBz-qbEuhQIToQ/live" target="_blank">Watch On Youtube</a>
      </div>


     -->
   
    <script src="app.js"></script>
</body>

</html>