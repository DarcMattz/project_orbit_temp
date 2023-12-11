

    <?php
    
    require "../config/connection.php";
    
    $command = "SELECT projectid, projectname, projectcover, projectdate FROM project ORDER BY projectdate DESC";
    
    $result = $conn -> query($command);

    echo '
        <div id="board">
            <div class="search-section">
                <div class="sort">
                    <h4>Sort by</h4>
                    <div class="select-style">
                        <select>
                            <option value="volvo">Alphabetically A-Z</option>
                            <option value="saab">Recent month</option>
                            <option value="audi">Day created</option>
                        </select>
                    </div>
                </div>

                <div class="search-form">
                    <button class="button-search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                    <input type="text" class="input-search" placeholder="search">
                </div>
            </div>
            <!--  -->

            <!-- CONTENTS BODY -->
            <main class="project-list">
                <div class="inner-scroll">
                        <!-- for creating new project -->
                        <div class="create" id="create-card">
                            <h1>Create new Board</h1>
                            <i class="fa-solid fa-circle-plus fa-2xl add-icon"></i>
                        </div>
                     



';

        if($result ->num_rows > 0){
            while($data = $result -> fetch_assoc()){

            echo '  
                        <div class="project-card" style="background-image: url('.$data['projectcover'].');" id="card'.$data['projectid'].'">
                            <div class="project-title">
                                    <h1>'.$data['projectname'].'</h1>
                            </div>
                            <div class="status">
                                    <i class="fa-solid fa-star" style="color: #ffbb00;"></i>
                            </div>
                        </div>
            
            ';
        }
    }
    echo'
                        </div>
                    </main>
                </div>
            </div>
                ';



    ?>




