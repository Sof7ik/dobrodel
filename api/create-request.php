<?
function saveFile($tmp_name, $path)
{
    if (file_exists($path))
    {
        $path = $path.'-'.time();
        echo $path;

        try {
            move_uploaded_file($tmp_name, $path);
            return 1;
        } catch (\Throwable $th) {
            return 0;
        }
    }
    else
    {
        try {
            move_uploaded_file($tmp_name, $path);
            return 1;
        } catch (\Throwable $th) {
            return 0;
        } 
    }
}

$name = trim($_POST['request-name']);
$desc= trim($_POST['request-desc']);
$category = trim($_POST['request-category']);
$imageBefore = $_FILES['request-image'];

$rootFolder = $_SERVER['DOCUMENT_ROOT'];

echo $name.' '.$desc.' '.$category;

if ($name != '' && $desc != '' && $category != '')
{
    echo "<pre>";
        print_r($imageBefore);
    echo "</pre>";

    $error = 0;
    
    if($imageBefore['size'] > 10485760)
    {
        $error = 1;
        echo json_encode("Большой размер файла", JSON_UNESCAPED_UNICODE);
    }

    if ($imageBefore['type'] != 'image/jpeg')
    {
        if ($imageBefore['type'] != 'image/png')
        {
            if ($imageBefore['type'] != 'image/bmp')
            {
                $error = 1;
                echo json_encode("Ты со мной не на том языке разговариваешь", JSON_UNESCAPED_UNICODE);
            }
        }
    }

    echo 'error = '.$error;

    if ($error == 0)
    {
        $destination = $rootFolder.'/images/'.$imageBefore['name'];

        if (file_exists($rootFolder.'/images'))
        {
            saveFile($imageBefore['tmp-name'], $destination);
        }
        else
        {
            try {
                mkdir($rootFolder.'/images');
                saveFile(saveFile($imageBefore['tmp-name'], $destination));
            } 
            catch (\Throwable $th) 
            {
                echo 'Произошла оишбка при создании папки\n'.$th.'\n';
            }
        }
    }
}
else
{
    echo 'Не заполнены обязательные поля';
}
?>