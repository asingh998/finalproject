<?php


class controller
{
    private $_f3; //router
    private $_validator; //validation object

    /**
     * Controller constructor.
     * @param $f3
     * @param $validator
     */
    public function __construct($f3, $validator)
    {
        $this->_f3 = $f3;
        $this->_validator = $validator;
    }

    /**
     * Display the default route
     */
    public function home()
    {
        //echo '<h1>Dating</h1>';

        $view = new Template();
        echo $view->render('views/home.html');
    }

    /**
     * go to form 1
     */
    public function form()
    {
        //If the form has been submitted

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //var_dump($_POST);

            //Validate name
            if (!$this->_validator->validName($_POST['first'])) {

                //Set an error variable in the F3 hive
                $this->_f3->set('errors["first"]', "Invalid name");
            }
            if (!$this->_validator->validLname($_POST['last'])) {

                //Set an error variable in the F3 hive
                $this->_f3->set('errors["last"]', "Invalid name");
            }
            if (!$this->_validator->validPhone($_POST['phone'])) {

                //Set an error variable in the F3 hive
                $this->_f3->set('errors["phone"]', "Invalid Phone number");
            }
            //Data is valid
            else {
                if(empty($this->_f3->get('errors'))){
                    //Store the data in the session array
                    $_SESSION['first'] = $_POST['first'];
                    $_SESSION['last'] = $_POST['last'];
                    $_SESSION['phone'] = $_POST['phone'];
                    $_SESSION['service'] = $_POST['service'];

                    //Redirect to Order 2 page
                    $this->_f3->reroute('summary');
                }}
        }

        $this->_f3->set('first', $_POST['first']);
        $this->_f3->set('last', $_POST['last']);
        $this->_f3->set('phone', $_POST['phone']);
        $this->_f3->set('service', $_POST['service']);

        $views = new Template();
        echo $views->render('views/form.html');
    }

    /**
     * go to form 2
     */
    public function form2()
    {
        //If the form has been submitted

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //var_dump($_POST);

            //Validate name
            if (!$this->_validator->validName($_POST['first'])) {

                //Set an error variable in the F3 hive
                $this->_f3->set('errors["first"]', "Invalid name");
            }
            if (!$this->_validator->validLname($_POST['last'])) {

                //Set an error variable in the F3 hive
                $this->_f3->set('errors["last"]', "Invalid name");
            }
            if (!$this->_validator->validYear($_POST['year'])) {

                //Set an error variable in the F3 hive
                $this->_f3->set('errors["year"]', "Invalid year");
            }

            //Data is valid
            else {
                if(empty($this->_f3->get('errors'))){
                    //Store the data in the session array
                    $_SESSION['first'] = $_POST['first'];
                    $_SESSION['last'] = $_POST['last'];
                    $_SESSION['model'] = $_POST['model'];
                    $_SESSION['comments'] = $_POST['comments'];
                    $_SESSION['year'] = $_POST['year'];

                    //Redirect to Order 2 page
                    $this->_f3->reroute('summary2');
                }}
        }

        $this->_f3->set('first', $_POST['first']);
        $this->_f3->set('last', $_POST['last']);
        $this->_f3->set('model', $_POST['model']);
        $this->_f3->set('comments', $_POST['comments']);
        $this->_f3->set('year', $_POST['year']);

        $views = new Template();
        echo $views->render('views/form2.html');
    }

    /**
     * go to summary page
     */
    public function summary()
    {
        $view = new Template();
        echo $view->render('views/summary.html');

        //session_destroy();
    }

    /**
     * go to summary2 page
     */
    public function summary2()
    {
        $view = new Template();
        echo $view->render('views/summary2.html');

        //session_destroy();
    }

    /**
     * go to admin
     */
    public function admin()
    {
        $views = new Template();
        echo $views->render('views/admin.html');
    }
}

