<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/calendar.css">
    <link rel="stylesheet" href="../styles/board.css">
    <link rel="stylesheet" href="../styles/member.css">
    <link rel="stylesheet" href="../styles/createproject.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../jquery/jquery3.7OFFLINE.js"></script>
    <script src="../function/functionality.js"></script>
    <script src="https://kit.fontawesome.com/a3ac451aad.js" crossorigin="anonymous"></script>
    <title>Project Orbit | Dashboard</title>
</head>
<body>
<div  class="inner-body">
        <section class="section-contents">
            <!--! NAVIGATION LINKS -->
            <header class="header-nav">
                <nav class="navigation">
                    <div class="notification" id="dash-notif">
                        <i class="fa-solid fa-bell fa-2xl notif-color"></i>
                    </div>
                    <div class="hero">
                       <div class="picture">
                         <img src="../images/profile.jpg" alt="profile">
                       </div>
                        <div class="name">
                            <h4>Oscar JR</h4>
                        </div>
                        <div>
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                    </div>
                </nav>
            </header>
            <!--! -->
            <main class="" id="body-contents">
            
            </main>
        </section>

        
        <!-- SIDEBAR -->
    <aside class="sidebar">
        <div class="logo">
            <a href=""><img src="../images/logo_2.png" alt="logo here" width="200"></a>
        </div>

        <!-- navigations -->
        <div class="menus">
            <small>Main menu</small>
            <div class="selected-btn" id="board-btn">
                <i class="fa-solid fa-folder-closed fa-lg icon"></i>
                <h1 class="">Board</h1>
            </div>
            <div class="btn2" id="member-btn">
                <i class="fa-solid fa-user-group fa-lg icon "></i>
                <h1>Members</h1>
            </div>
            <div class="btn3" id="calendar-btn">
                <i class="fa-solid fa-calendar-days fa-lg icon"></i>
                <h1>Calendar</h1>
            </div>
        </div>

        <hr class="line" size="50">

        <!-- STARRED PROJECTS -->
        <div>
            <small>Starred project</small>
            <div class="outside-scroll">

                <!-- ! STARRED PINNED HERE 0 to or more cards, CAN BE SCROLLABLE -->
                    <div class="starred">
                        <img src="../images/sample.png" alt="image">
                        <h1> Project 1</h1>
                        <div class="star">
                            <i class="fa-solid fa-star" style="color: #ffbb00;"></i>
                        </div>
                    </div>
                <!--! -->
            </div>
        </div>
        </aside>
        
    </div>




    <!--! THIS IS FOR OUT MODAL [for creating board] => the class would change to "show-modal" using jquery-->
    <div class="hide-modal " id="modal-createBoard">    
        <div class="inner-card">
            <div class="modal-title">
                <div class="title-text">
                    <h1>CREATE BOARD</h1>
                </div>
                <div class="cancel-btn" id="cancel-create">
                    <i class="fa-solid fa-xmark cancel-icon"></i>
                </div>
        
            </div>
            <div class="for-image">
                
                <!--! DITO MAG SHOSHOW UNG IMAGE NA NA-SELECT -->
                <div class="show-image">
                    <img src="#" id="show-image">
                </div>

                <!--! BUTTON PARA SA IMAGE -->
                <div class="image-btn">
                    <h4>Select Cover</h4>
                    <input type="file" id="select-image"> 
                </div>
            </div>

            <!--! PARA SA TITLE NG PROJECT -->
            <div class="for-title">
                <label for="title">Board Title</label>

                <!--! chnage class "invalid-title" -->
                <input type="text" class="valid-title" id="projecttitle">

            <!--! mag iiba ung indicator ng class "error-input" for validation-->
                <small class="valid-input">please insert something</small>
            </div>

            <div class="for-btn">
                <button type="button" id="createbutton">Create Board</button>
            </div>

        </div>
    </div>

    <!--! THIS IS FOR NOTIFICATION-->
    <div class="show-Notif">
        <div class="notif-nav">
            <div>
                <h1>Notification</h1>   
            </div>
            <div class="notif-icon">
                <i class="fa-solid fa-ellipsis icon fa-xl"></i>
            </div>
        </div>

        <main class="scroll-notif">

            <!--! NEW NOTIFICATION -->
            <div class="new-notif">
                <div class="title">
                    <div>
                        <h4>New</h4>
                    </div>
                    <div class="seeall">
                        <a href="#"><h5>See all</h5></a>
                    </div>
                </div>

                <!--! notif-cards per id increment using php -->
                <!-- new-card -->
                <div class="new-card" id="card-1">
                    <div class="message">
                        <div>
                            <p class="message-active" id="notif-message"><b>Joel Gutlay</b> you have new project requests</p>
                        </div>

                        <!--! change class to "indic-active-hide" when already read -->
                        <div class="indic-active-show" id="notif-status">
                            <i class="fa-solid fa-circle fa-2xs"></i>
                        </div>
                    </div>
                    <div class="time">
                        <p class="time-active" id="notif-time">5 minutes ago</p>
                    </div>
                </div>
            </div>

            <!--!RECENT NOTIFICATION -->
            <div class="new-notif">
                <div class="title">
                    <div>
                        <h4>Recent</h4>
                    </div>
                </div>

                <!--! notif-cards per id increment using php -->
                <!--  card-2 -->
                <div class="new-card" id="card-2">
                    <div class="message">
                        <div>
                            <p class="message-active" id="notif-message"><b>Joel Gutlay</b> you have new project requests</p>
                        </div>

                        <!--! change class to "indic-active-hide" when already read -->
                        <div class="indic-active-show" id="notif-status">
                            <i class="fa-solid fa-circle fa-2xs"></i>
                        </div>
                    </div>
                    <div class="time">
                        <p class="time-active" id="notif-time">5 minutes ago</p>
                    </div>

                </div>

                <!-- card 3 -->
                <div class="new-card" id="card-3">
                    <div class="message">
                        <div>
                            <p class="" id="notif-message"><b>Joel Gutlay</b> you have new project requests</p>
                        </div>
                        <!--! change class to "indic-active-hide" when already read -->
                        <div class="indic-active-hide" id="notif-status">
                            <i class="fa-solid fa-circle fa-2xs"></i>
                        </div>
                    </div>
                    <div class="time">
                        <p class="" id="notif-time">5 minutes ago</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>

<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&family=Poppins&display=swap');

/*! ALL TAGS */
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/*! COLORS */
:root {
    --primary: #25B4B2;
    --secondary: #006D68;
    --white: #ffffff;
    --black: #000000;
    --hover: #E3FFFF;
  }
  

body{
    /* padding: 2px; */
    width: 100%;
    position: relative;
}

/*  */
.inner-body{
    /* overflow: hidden; */
    width: 100%;
    /* background-color: green; */
    position: relative;
    display: flex;
    flex-direction: row-reverse;
    align-items: start;
    justify-content: space-between;
}

/*! SIDEBAR */
.sidebar-body{
    height: 100dvh;
    width: 25%;
}


.sidebar{
    background-color:var(--primary);
    height: 100dvh;
    width: 25%;
    color: var(--white);

}
.sidebar small{
    /* background-color: #000000; */
    margin-left: 14px;
    margin-bottom: 10px;
    font-weight: 300;
    font-size: 13px;
    color: #ffffffb6;
}
.logo{
    padding: 30px 30px;
}
.logo img{
    width: 180px;
    height: auto;
}

.menus{
    /* background-color: #234240; */
    margin-bottom: 20px;
}
.menus > * {
    margin: 5px 0;
}





.menus .btn1{
    background-color: var(--primary);
    padding: 5px 20px;
    display: flex;
    justify-content: start;
    align-items: center;
    border-left: 4px solid transparent;
    cursor: pointer;
}

.btn1 h1{
    color: var(--white);
    margin-top: 4px;
    margin-left: 10px;
    font-size: 20px;
    cursor: pointer;
}
.btn1 .icon{
    color: var(--white);
    cursor: pointer;
}

.menus .btn2{
    background-color: var(--primary);
    padding: 5px 20px;
    display: flex;
    justify-content: start;
    align-items: center;
    border-left: 4px solid transparent;
    cursor: pointer;
 }
 
 .btn2 h1{
    color: var(--white);
    margin-top: 4px;
    margin-left: 10px;
    font-size: 20px;
    cursor: pointer;
 }
 .btn2 .icon{
    color: var(--white);
    cursor: pointer;
 }

 .menus .btn3{
    background-color: var(--primary);
    padding: 5px 20px;
    display: flex;
    justify-content: start;
    align-items: center;
    border-left: 4px solid transparent;
    cursor: pointer;
 }
 
 .btn3 h1{
    color: var(--white);
    margin-top: 4px;
     margin-left: 15px;
     font-size: 20px;
     cursor: pointer;
 }
 .btn3 .icon{
     color: var(--white);
     cursor: pointer;
 }

.btn1:hover, .btn2:hover, .btn3:hover{
    transition: all 400ms ease-in-out;
    background-color: #54e0d080;
}


 .line{
    
    margin-left: 10px;
    height: 3px;
    width: 90%;
    background-color: var(--white);
    margin-bottom: 20px;
 }
 
 .outside-scroll{
    margin-top: 10px;
    min-height: max-content;
    max-height: 180px;
    height: max-content;
    overflow-y: scroll;
    overflow-x: hidden;
    padding: 0px 3px;
    scroll-behavior: smooth;
 }

 ::-webkit-scrollbar {
    width: 0px;
}


 .starred{
    background-color: var(--hover);
    display: flex;
    align-items: center;
    justify-content: start;
    padding: 10px 10px;
    cursor: pointer;
    margin: 2px 0;
 }

 .starred img{
    width: 60px;
    height: 30px;
 }
 .starred h1{
    margin-top: 6px;
    margin-left: 10px;
   color: var(--secondary);
   font-weight: 500;
    font-size: 17px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 100px;
 }
.star{
    margin-left: auto;
    margin-right: 10px;
    background-color: var(--white);
    padding: 2px 5px;
    border-radius: 100px;
    cursor: pointer;
}

.selected-btn{
    background-color: var(--hover);
   padding: 5px 25px;
   display: flex;
   justify-content: start;
   align-items: center;
   border-left: 4px solid var(--secondary);
   cursor: pointer;
}

.selected-btn h1{
    margin-top: 4px;
    margin-left: 10px;
    font-size: 20px;
    cursor: pointer;
    color: var(--secondary);
}

.selected-btn .icon{
    color: var(--secondary);
    cursor: pointer;
}

.section-contents{
    background-color: var(--white);
    width: 100%;
    height: 100dvh;
}

.header-nav{
    background-color: transparent;
    width: auto;
    padding: 10px 20px;
    box-shadow: 0px 5px 5px -1px rgba(100, 100, 100, 0.313);
    -webkit-box-shadow: 0px 5px 5px -1px rgba(100, 100, 100, 0.187);
    -moz-box-shadow: 0px 5px 5px -1px rgba(100, 100, 100, 0.463);
}
.navigation{
    display: flex;
    flex-direction: row;
    justify-content: flex-end;
    align-items: center;
}

.notification{
    border-radius: 100%;
    padding: 20px 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 400ms ease-in-out;
}

.notification:hover{
    background-color: #d3d3d3;
    transition: all 400ms ease-in-out;
}
.notif-color{
    color: var(--secondary);
}


.hero{
    margin-left: 20px;
    background-color: var(--secondary);
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-radius: 30px;
    padding: 5px 10px;
    width: 160px;
    color: var(--white);
    cursor: pointer;
    transition: all 400ms ease-in-out;
}
.hero:hover{
    transition: all 400ms ease-in-out;
    opacity: 90%;
}

.name{
    display: flex;
    align-items: center;
}
.name h4{
    font-size: medium;
    margin: 10px;
}

.picture{
    border-radius: 1000px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.picture img{
    border-radius: 1000px;
    width: 35px;
}



/*! NOTIFICATION */

.show-Notif{
    display: none;
    box-shadow: 0px 5px 10px 1px rgba(94,94,94,0.45);
    -webkit-box-shadow: 0px 5px 10px 1px rgba(94,94,94,0.45);
    -moz-box-shadow: 0px 5px 10px 1px rgba(94,94,94,0.45);
    position: absolute;
    top: 65px;
    right: 10px;
    background-color: var(--white);
    width: 25%;
    height: 85dvh;
    border-radius: 7px;
    padding: 15px;
    transition: all 200ms ease-in-out;
}

.notif-nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    /* background-color: #006d6753; */
    margin-bottom: 20px;

}

.notif-nav h1{
    font-size: 20px;
    font-weight: bolder;
    text-align: left;
    width: max-content;
    height: max-content;
}

.notif-icon .icon{
    color: #464646;
  }
  
.notif-icon{
    width: max-content;
    height: max-content;
    padding: 3px;
    border-radius: 50px;
    transition: all 400ms ease-in-out;
}

.notif-icon:hover{
    background-color: #0000003f;
    width: max-content;
    height: max-content;
    padding: 3px;
    border-radius: 50px;
    transition: all 400ms ease-in-out;
}


.new-notif{
    /* background-color: #00000033; */
    min-height: fit-content;
    max-width: 100%;
    width: 100%;
    margin-bottom: 20px;
}
.title{
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: #333333;
    font-size: small;
}

.seeall a{
    text-decoration: none;
}
.seeall h5:hover{
    color: #38a9a5;
    transition: all 300ms ease-in-out;
}
.seeall h5{
    color: var(--secondary);
    font-size: smaller;
    transition: all 300ms ease-in-out;
}

.new-card{
    width: 100%;
    height: 75px;
    padding: 10px;
    position: relative;
    background-color: var(--white);
    display: block;
    border-radius: 5px;
    transition: all 300ms ease-in-out;
    cursor: pointer;
    margin-bottom: 5px;
}
.new-card:hover{
    transition: all 300ms ease-in-out;
    background-color: #e7e7e7;
}
.message{
    display: flex;
    align-items: center;
    justify-content: space-between;
    
}
.message p{
    color: #656565;
    text-align: left;
    /* background-color: #006d6762; */
    font-size: 14px;
    width: 250px;
    min-width: 250px;
    max-width: 250px;
    height: max-content;
    word-wrap: break-word;
    display: -webkit-box;
    -webkit-line-clamp: 2   ;
    -webkit-box-orient: vertical;
    text-overflow: ellipsis;
    overflow: hidden;

}

.message .message-active{
    color: #000000;
}

.time p {
    color: #464646;
    font-size: 12px;
    font-weight:500;
}

.time .time-active{
    color: var(--primary);
    font-weight: bold;
}

.message .indic-active-show{
    position: absolute;
    color: var(--primary);
    top: 25px;
    right: 10px;
}

.message .indic-active-hide{
   display: none;
}

/* .option{
    display: none;
    border-radius: 100%;
    position: absolute;
    top: 24px;
    right: 8px;
    padding: 4px 4px;
    cursor: pointer;
    transition: all 300ms ease-in-out;
}

.option:hover{
    transition: all 300ms ease-in-out;
    background-color: #c9c9c9;
} */

.scroll-notif{
    height: 100px;
    min-height: 410px;
    overflow-x: scroll;
}
</style>