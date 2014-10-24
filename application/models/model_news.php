<?
class Model_News extends Model
{
    function __construct()
    {
        $this->db = new DataBase();
    }
    public function get_data($id)
    {	
        $querty = mysql_query("SELECT * FROM news WHERE id = $id LIMIT 1");
        return mysql_fetch_assoc($querty);
    }
}
?>