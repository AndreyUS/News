<?
class Model_Admin extends Model
{
	function __construct()
    {
        session_start();
        $this->db = new DataBase();
    }
    private function upload_image()
    {
        //if file upload successful. Move to real directory
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']. '/news/images/'.$_FILES["image"]["name"])) {
           return $_FILES["image"]["name"];
        }else {
           return "image_upload_error";
        } 
    }
    public function get_data()
    {
        if(empty($_SESSION['login'])) {
            header('Location:'.Route::$path_to_script.'/login');
        } 
    }
    public function add_news()
    { 
        if(empty($_POST['title']) || empty($_POST['text'])) {
            return "data_empty";
        }
        if(is_uploaded_file($_FILES["image"]["tmp_name"])) {
            $image_name = $this->upload_image();
            if($image_name == "image_upload_error") {
                return $image_name;
            }
        } else {
            $image_name = "default.jpg";
        }
        $title = $_POST['title'];
        $text = $_POST['text'];
        $time = date("H:i:s");
        $date = date("Y-m-d");
        mysql_query("INSERT INTO `news` (`title`, `text`, `img`, `time`, `date`) 
                    VALUES ('$title', '$text', '$image_name', '$time', '$date')");
        return "data_successful";
    }
    public function show_list() 
    {   
        $querty = mysql_query("SELECT id, title FROM news ORDER BY id");
         while($row =  mysql_fetch_assoc($querty)) {
            $news[$i]['id'] = $row['id'];
            $news[$i]['title'] = $row['title'];
            $i++;
        }
        return $news;
    }
    public function delete_news($id) 
    {
        mysql_query("DELETE FROM `news` WHERE `id`='$id'");
        header('Location:'.Route::$path_to_script.'/admin/list');
    }
    public function logout()
    {
		session_destroy();
		header('Location:'.Route::$path_to_script);
    }
}
?>