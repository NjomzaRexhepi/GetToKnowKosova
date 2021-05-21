<?php 

include 'naturehead.php';
 include 'header.php';
?>

<form method = "POST" action = "natureaddform.php"  >
<input type = "text" name = "image_path" placeholder = "Insert image path" style = "display:block; width: 250px; background-color: white; padding: 25px; margin-bottom:10px; margin-left: 33%">
<input type = "text" name = "image_name" placeholder = "Insert image name" style = "display:block; width: 250px; background-color: white; padding: 25px; margin-bottom:10px; margin-left: 33%">
<input type = "text" name = "image_caption" placeholder = "Insert image caption" style = "display:block; width: 250px; background-color: white; padding: 25px; margin-bottom:10px; margin-left: 33%">
<input type = "text" name = "title" placeholder = "Insert title" style = "display:block; width: 250px; background-color: white; padding: 25px;  margin-bottom:10px; margin-left: 33%">
<input type = "text" name = "txt" placeholder = "Insert text" style = "display:block; width: 250px; background-color: white; padding: 25px; margin-bottom:10px; margin-left: 33%">
<input type = "text" name = "link1" placeholder = "Insert the first link" style = "display:block; width: 250px; background-color: white; padding: 25px; margin-bottom:10px; margin-left: 33%">
<input type = "text" name = "link1_txt" placeholder = "Insert the name of the first link" style = "display:block; width: 250px; background-color: white; padding: 25px; margin-bottom:10px; margin-left: 33%">
<input type = "text" name = "link2" placeholder = "Insert the second link" style = "display:block; width: 250px; background-color: white; padding: 25px; margin-bottom:10px; margin-left: 33%">
<input type = "text" name = "link2_txt" placeholder = "Insert the name of the second link" style = "display:block; width: 250px; background-color: white; padding: 25px; margin-bottom:10px; margin-left: 33%">
<input type = "text" name  ="paragraph"  placeholder = "Insert the paragraph" style = "display:block; width: 250px; background-color: white; padding: 25px;margin-bottom:10px; margin-left: 33%">
<button type = "submit" name = "submit-new-post" class = "search-button" style = "display:block; width: 250px; background-color: black; color:white; padding: 25px; margin-left: 33%; margin-bottom:10px; float:none"> ADD </button>
</form>

<form method = "POST" action = "natureaddform.php"  >

<input type = "text" name = "textwrite" placeholder = "You can write in file from here" style = "display:block; width: 250px; background-color: white; padding: 25px;margin-bottom:10px; margin-left: 33%">
<button type = "submit" name = "submit-write-file" class = "search-button" style = "display:block; width: 250px; background-color: black; color:white; padding: 25px; margin-left: 33%; margin-bottom:10px; float:none"> WRITE </button>
</form>

<?php
if(isset($_POST['submit-new-post']))
{
    $image_path = $_POST['image_path'];
    $image_name = $_POST['image_name'];
    $image_caption = $_POST['image_caption'];
    $title = $_POST['title'];
    $txt = $_POST['txt'];
    $link1 = $_POST['link1'];
    $link1_txt = $_POST['link1_txt'];
    $link2 = $_POST['link2'];
    $link2_txt = $_POST['link2_txt'];
    $paragraph = $_POST['paragraph'];

$pdo = config::getConnection();

$query = "INSERT INTO nature1(image_path, image_name, image_caption, title, txt, link1, link1_txt, link2, link2_txt, paragraph) VALUES ('$image_path', '$image_name', '$image_caption', '$title', '$txt', '$link1', '$link1_txt', '$link2', '$link2_txt', '$paragraph')";
$stmt = $pdo->prepare($query);
$result = $stmt->execute();
if ($result){
    printf ("Post with the title '%s' added.", $title);
} else {
    echo "Unable to add post.";
}
}
if(isset($_POST['submit-write-file']))
{
    $txt = $_POST['textwrite'];

    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $txt);
    fclose($myfile);
}

?>