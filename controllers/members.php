    
<?php

class members extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();


        $logged = Session::get('loggedIn', 'minter_id');
        if ($logged > '') {
            
        } else {
            Session::destroy();
            header('Location: /');
        }
    }

    public function index() {
        $this->view->page_title = 'Home (' . Session::get('loggedIn', 'minter_firstname') . ')';
        $this->view->fsdata = $this->model->interivity_featured('5');
        $this->view->data = $this->model->invertivities_slidesteam(Session::get('loggedIn', 'minter_id'));
        $this->view->plydata = $this->model->peoplelikeyou(Session::get('loggedIn', 'minter_interests'), Session::get('loggedIn', 'minter_id'));
        $this->view->lhmefeed = $this->model->lhmefeed_interest(Session::get('loggedIn', 'minter_interests'));
        $this->view->rhmefeed = $this->model->rhmefeed_interest(Session::get('loggedIn', 'minter_interests'));
        $this->view->lrhmefeed = $this->model->lrhmefeed_interest(Session::get('loggedIn', 'minter_interests'));
        $this->view->rlhmefeed = $this->model->rlhmefeed_interest(Session::get('loggedIn', 'minter_interests'));
        $this->view->yurintrst = $this->model->yourinterestshme(Session::get('loggedIn', 'minter_interests'));
        $this->view->iyarea = $this->model->inyourarea();
        $this->view->render('members/index');
    }

    public function my_posts() {
        $this->view->page_title = Session::get('loggedIn', 'minter_firstname')."'s Posts";
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->usrglb = $this->model->getUserGlobal(Session::get('loggedIn', 'minter_id'));
        $this->view->location = $this->model->geoCheckIP();
        $this->view->render('members/profile');
    }

    public function add_post() {
        $this->view->page_title = Session::get('loggedIn', 'minter_firstname')." Post a Interivity";
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->location = $this->model->geoCheckIP();
        $this->view->render('members/compose');
    }

    public function profile_stream() {
        $this->model->invertivities_stream(Session::get('loggedIn', 'minter_id'));
    }

    public function local_stream() {
        $this->model->local_invertivities_steam();
    }

    public function country_stream() {
        $this->model->country_invertivities_steam();
    }

    public function view_stream($user) {
        $this->model->invertivities_steam($user);
    }

    public function category_steam($cat) {
        $this->model->category_interivities_steam($cat);
    }

    public function view($user) {
        $this->view->page_title = 'Viewing Profile';
        $this->view->user = $this->model->getuserdata($user);

        $this->view->fsdata = $this->model->interivity_featured('5');
        $this->view->userphotodata = $this->model->getuserimage($user);
        $this->view->iyarea = $this->model->inyourarea();
        $this->view->chkfollow = $this->model->chkfllow($user, Session::get('loggedIn', 'minter_id'));
        $this->view->chkblock = $this->model->chkblock($user, Session::get('loggedIn', 'minter_id'));
        $this->view->urintrst = $this->model->yourinterests_pview($user);
        $this->view->statistics = $this->model->statistics($user);
        $this->view->render('members/view');
    }

    public function post($postid) {
        $this->view->page_title = 'Viewing Post';
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->data = $this->model->interivity_post($postid);
        $this->view->cdata = $this->model->comment_post($postid);
        $this->view->fsdata = $this->model->interivity_featured('5');
        $this->view->userphotodata = $this->model->getuserimage(Session::get('loggedIn', 'minter_id'));
        $this->view->yurintrst = $this->model->yourinterests(Session::get('loggedIn', 'minter_interests'));
        $this->view->iyarea = $this->model->inyourarea();
        $this->view->render('members/post');
    }

    public function local() {
        $this->view->page_title = Session::get('loggedIn', 'minter_firstname');
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->userphotodata = $this->model->getuserimage(Session::get('loggedIn', 'minter_id'));
        $this->view->fsdata = $this->model->interivity_featured('5');

        $this->view->yurintrst = $this->model->yourinterests(Session::get('loggedIn', 'minter_interests'));
        $this->view->iyarea = $this->model->inyourarea();
        $this->view->render('members/local');
    }

    public function country() {
        $this->view->page_title = Session::get('loggedIn', 'minter_firstname');
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->userphotodata = $this->model->getuserimage(Session::get('loggedIn', 'minter_id'));
        $this->view->fsdata = $this->model->interivity_featured('5');

        $this->view->yurintrst = $this->model->yourinterests(Session::get('loggedIn', 'minter_interests'));
        $this->view->iyarea = $this->model->inyourarea();
        $this->view->render('members/country');
    }

    public function messages() {
        $this->view->page_title = 'Messages';
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->userphotodata = $this->model->getuserimage(Session::get('loggedIn', 'minter_id'));
        $this->view->fsdata = $this->model->interivity_featured('5');
        $this->view->iyarea = $this->model->inyourarea();
        $this->view->yurintrst = $this->model->yourinterests(Session::get('loggedIn', 'minter_interests'));
        $this->view->render('members/messages');
    }

    public function compose() {
        $this->view->page_title = 'Compose Messages';
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->userphotodata = $this->model->getuserimage(Session::get('loggedIn', 'minter_id'));
        $this->view->fsdata = $this->model->interivity_featured('5');
        $this->view->iyarea = $this->model->inyourarea();
        $this->view->yurintrst = $this->model->yourinterests(Session::get('loggedIn', 'minter_interests'));
        $this->view->render('members/compose');
    }

    public function account() {
        $this->view->page_title = 'Account';
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->userphotodata = $this->model->getuserimage(Session::get('loggedIn', 'minter_id'));
        $this->view->usrglb = $this->model->getUserGlobal(Session::get('loggedIn', 'minter_id'));

        $this->view->location = $this->model->geoCheckIP();
        $this->view->render('members/account');
    }

    public function post_comment() {
        $this->model->post_comment();
    }

    function xhrcomment_post($postid) {
        $this->model->xhrcomment_post($postid);
    }

    function post_interivity() {
        $this->model->post_interivity(Session::get('loggedIn', 'minter_id'));
    }

    function follow($following) {
        $this->model->follow($following, Session::get('loggedIn', 'minter_id'));
    }

    function unfollow($following) {
        $this->model->unfollow($following, Session::get('loggedIn', 'minter_id'));
    }

    function block($block_user) {
        $this->model->block($block_user, Session::get('loggedIn', 'minter_id'));
    }

    function unblock($block_user) {
        $this->model->unblock($block_user, Session::get('loggedIn', 'minter_id'));
    }

    public function invertivities_post() {
        $this->model->invertivities_post();
    }

    public function category($cat) {

        $this->view->page_title = 'Category (' . $cat . ')';
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->userphotodata = $this->model->getuserimage(Session::get('loggedIn', 'minter_id'));
        $this->view->fsdata = $this->model->interivity_featured('5');
        $this->view->iyarea = $this->model->inyourarea();
        $this->view->cat_id = $cat;
        $this->view->yurintrst = $this->model->yourinterests(Session::get('loggedIn', 'minter_interests'));
        $this->view->render('members/category');
    }

    public function browse_countries() {
        $this->view->page_title = 'Browse Countries';
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->userphotodata = $this->model->getuserimage(Session::get('loggedIn', 'minter_id'));
        $this->view->fsdata = $this->model->interivity_featured('5');
        $this->view->iyarea = $this->model->inyourarea();
        $this->view->yurintrst = $this->model->yourinterests(Session::get('loggedIn', 'minter_interests'));




        $this->view->render('members/browse-countries');
    }

    public function browse_cities() {
        $this->view->page_title = 'Browse Cities';
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->userphotodata = $this->model->getuserimage(Session::get('loggedIn', 'minter_id'));
        $this->view->fsdata = $this->model->interivity_featured('5');
        $this->view->iyarea = $this->model->inyourarea();
        $this->view->yurintrst = $this->model->yourinterests(Session::get('loggedIn', 'minter_interests'));




        $this->view->fcountries = $this->model->fil_brwse();



        $this->view->render('members/browse-cities');
    }

    public function stream_cc() {

        $this->model->stream_cc();
    }

    public function stream_ccoc() {

        $this->model->stream_ccoc();
    }

    public function photo_upload() {
        $this->model->photo_upload(Session::get('loggedIn', 'minter_id'));
    }

    public function Query_Photo($DataType, $DataID) {
        $this->model->Query_Photo(Session::get('loggedIn', 'minter_id'), $DataType, $DataID);
    }

    public function photos($userid) {

        if ($userid == Session::get('loggedIn', 'minter_id')) {
            $this->view->page_title = "My Photos";
            $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
            $this->view->userphotodata = $this->model->getuserimage(Session::get('loggedIn', 'minter_id'));
            $this->view->yurintrst = $this->model->yourinterests(Session::get('loggedIn', 'minter_interests'));
        } else {
            $this->view->page_title = "Photos";
            $this->view->user = $this->model->getuserdata($userid);
            $this->view->userphotodata = $this->model->getuserimage($userid);
            $this->view->urintrst = $this->model->yourinterests_pview($userid);
        }
        $this->view->fsdata = $this->model->interivity_featured('5');
        $this->view->iyarea = $this->model->inyourarea();

        $this->view->usrphotos = $this->model->user_photos($userid);

        $this->view->render('members/photos');
    }

    public function photo_view($photoid) {
        $this->view->page_title = "My Photos";
        $this->view->user = $this->model->getuserdata(Session::get('loggedIn', 'minter_id'));
        $this->view->userphotodata = $this->model->getuserimage(Session::get('loggedIn', 'minter_id'));
        $this->view->fsdata = $this->model->interivity_featured('5');
        $this->view->iyarea = $this->model->inyourarea();
        $this->view->yurintrst = $this->model->yourinterests(Session::get('loggedIn', 'minter_interests'));
        $this->view->usrphotos = $this->model->view_photo($photoid);

        $this->view->render('members/photos_view');
    }

    public function logout() {
        unset($_SESSION['loggedIn']);
        Session::destroy();
        header('Location: /');
        exit;
    }

}

?>
