<?php
echo'
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
';
?>