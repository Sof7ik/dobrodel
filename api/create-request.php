<?
$name = trim($_POST['request-name']);
$desc= trim($_POST['request-desc']);
$category = trim($_POST['request-category']);
$imageBefore = $_FILES['request-image'];

echo $name.' '.$desc.' '.$category;

if ($name != '' && $desc != '' && $category != '')
{
    echo "<pre>";
        print_r($imageBefore);
    echo "</pre>";

    $error = false;
    
    if($imageBefore['size'] > 10485760)
    {
        $error = true;
        echo json_encode("Большой размер файла (биг дик)", JSON_UNESCAPED_UNICODE);
    }

    if ($imageBefore['type'] != 'image/jpeg')
    {
        if ($imageBefore['type'] != 'image/png')
        {
            if ($imageBefore['type'] != 'image/bmp')
            {
                $error = true;
                echo json_encode("Ты со мной не на том языке разговариваешь", JSON_UNESCAPED_UNICODE);
            }
        }
    }

    echo $error;

    if (!$error)
    {
        $destination = `/images/${$imageBefore['name']}`;
        echo $destination;

        // move_uploaded_file($imageBefore['tmp-name'], $destination);
    }
}
?>