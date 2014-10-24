<?
class Controller_Admin extends Controller
{
	function __construct()
    {
        $this->model = new Model_Admin();
        $this->view = new View();
    }
	function action_index()
	{
		$this->model->get_data();
		$this->view->generate('admin_view.php', 'template_view.php', $data);
	}
	function action_add()
	{
		$data["add_status"] = $this->model->add_news();
		$this->view->generate('add_view.php', 'template_view.php', $data);
	}
	function action_list()
	{
		$data = $this->model->show_list();
		$this->view->generate('list_view.php', 'template_view.php', $data);
	}
	function action_delete($id)
	{
		$data = $this->model->delete_news($id);
	}
	function action_logout()
	{
		$this->model->logout();
	}
}
?>