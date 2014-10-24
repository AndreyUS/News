<?
class Controller_News extends Controller
{

    function __construct()
    {
        $this->model = new Model_News();
        $this->view = new View();
    }
    
    function action_show($id)
    {
        $data = $this->model->get_data($id);		
        $this->view->generate('news_view.php', 'newstemplate_view.php', $data);
    }
}
?>