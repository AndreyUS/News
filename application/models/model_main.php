<?
class Model_Main extends Model
{
    function __construct()
    {
        $this->db = new DataBase();
    }
    public function get_data()
    {	
        return $this->get_news(0);
    }
    public function get_page($page)
    {
        $from = ($page * 10) - 10;
        return $this->get_news($from);
    }
    public function get_news($from)
    {
        $i = 0;
        $rows_per_page = 10;
        $querty = mysql_query("SELECT id, title, time, date FROM news ORDER BY id DESC LIMIT $from, $rows_per_page");
        while($row =  mysql_fetch_assoc($querty)) {
            $news[$i]['id'] = $row['id'];
            $news[$i]['title'] = $row['title'];
            $news[$i]['time'] = $row['time'];
            $news[$i]['date'] = $row['date'];
            $i++;
        }
        return $news;
    }
    public function get_rows()
    {
         $res = mysql_query("SELECT count(*) FROM `news`");
         $row = mysql_fetch_row($res);
         return $row[0];
    }
}
?>