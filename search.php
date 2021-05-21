<?php 
include 'searchhead.php';
include 'naturehead.php';
 include 'header.php';

?>


<div class="navbar" style="height: 70px;">
        <div class="nav-container flex">
            <h1 class="logo" style="font-family: 'Satisfy', cursive;">Things To Do</h1>
            <nav>
                <ul>
                    <li><a href="Nature.php" id="onclick">Nature</a></li>
					
                </ul>
            </nav>
        </div>
    </div>




<?php
                    if(isset($_POST['submit-search'])){
                        $search = $_POST['search'];
						include 'config.php';
                        $pdo = config::getConnection();
                        
                        $sql = "SELECT * from nature1 where image_caption LIKE '%".$search."%' or title LIKE '%".$search."%' or
                         txt LIKE '%".$search."%' or link1 LIKE '%".$search."%' or link1_txt LIKE '%".$search."%' or
                          link2 LIKE '%".$search."%' or link2_txt LIKE '%".$search."%' or paragraph LIKE '%".$search."%' " ;
                        $stmt = $pdo->prepare($sql);
                        $result = $stmt->execute();
                        
                       // $result = mysqli_query($conn , $sql);
                       // $queryResult = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        $queryResult = $stmt->rowCount();
                        $i = 0;
                        if ($queryResult > 0){
                        while ($i < $queryResult)
                            {
                                $rows = $data[$i];
                                $i++;
                    ?>
                        <div style="margin-top: 75px; padding: 30px; "> 
                             <img src="<?php echo $rows['image_path'].$rows['image_name']?>">
                             <figcaption ><?php echo $rows['image_caption'] ?> </figcaption>
            
                        </div>
                                    <li>
                                <div id="hiking-textpart">
                                    <h3><?php echo $rows['title']?></h3>
                                    <p style="outline-offset: 2em;">
                                       <?php echo $rows['txt'] ?>
                                        <ul id="lista-hiking">
                                            <li>
                                                <a href="<?php echo $rows['link1'] ?>" target="_blank" rel="noreferrer noopener" style="color: black;">
                                                    <mark id="mark" style="background-color: rgba(128, 128, 128, 0.199);"> <?php echo $rows['link1_txt'] ?></mark></a>
                                            </li>
                                            <li>
                                                <a href="<?php echo $rows['link2'] ?> " target="_blank" rel="noreferrer noopener" style="color: black;">
                                                    <mark style="background-color: rgba(128, 128, 128, 0.199);"> <?php echo $rows['link2_txt'] ?> </mark></a>
                                            </li>
                                        </ul>
                                        <p> <?php echo $rows['paragraph']?> </p>
                                    </p>
                                </div>
                            </li>
                            <?php 
                                } 
                            } else { 
                                echo "<h1 style='font-family: 'Satisfy', cursive;'> There are no results matching your search! </h1>";
                            } 

                            }
                            ?>
                        </ul>
                    </div>
                                