<?php


class form
{
    //Declare instance variables
    private $_first;
    private $_last;
    private $_phone;
    private $_year;
    private $_model;
    private $_comments;
    private $_service;

    /** Default constructor
     * @param $first the name
     * @param $last the last name
     * @param $phone the number
     * @param $year the year
     * @param $model the model
     * @param $comments the comments
     * @param $service the service
     */
    public function __construct($first = "joe", $last = "shmo", $phone = "",
                            $year = "", $model = "", $comments = "", $service = "")
    {
        $this->setFirst($first);
        $this->setLast($last);
        $this->setPhone($phone);
        $this->setYear($year);
        $this->setModel($model);
        $this->setComments($comments);
        $this->setService($service);
    }

    /** Set the first
     *  @param $first the first
     */
    public function setFirst($first)
    {
        $this->_first = $first;
    }

    /** Set the last
     *  @param $last the last
     */
    public function setLast($last)
    {
        $this->_last = $last;
    }

    /** Set the phone
     *  @param $phone the number
     */
    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }

    /** Set the year
     *  @param $year the year
     */
    public function setYear($year)
    {
        $this->_year = $year;
    }

    /** Set the model
     *  @param $model the model
     */
    public function setModel($model)
    {
        $this->_model = $model;
    }

    /** Set the comments
     *  @param $comments the comments
     */
    public function setComments($comments)
    {
        $this->_comments = $comments;
    }

    /** Set the service
     *  @param $service the service
     */
    public function setService($service)
    {
        $this->_service = $service;
    }


    /** Get the first
     *  @return the first
     */
    public function getFirst()
    {
        return $this->_first;
    }

    /** Get the last
     *  @return the last
     */
    public function getLast()
    {
        return $this->_last;
    }

    /** Get the phone
     *  @return the number
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /** Get the year
     *  @return the year
     */
    public function getYear()
    {
        return $this->_year;
    }

    /** Get the model
     *  @return the model
     */
    public function getModel()
    {
        return $this->_model;
    }

    /** Get the comments
     *  @return the comments
     */
    public function getComments()
    {
        return $this->_comments;
    }

    /** Get the service
     *  @return the service
     */
    public function getService()
    {
        return $this->_service;
    }

    /** toString() returns a String representation
     *  of an order object
     *  @return string
     */
    public function toString()
    {
        $out = $this->_first . ", ";
        $out .= $this->_last . ", ";
        $out .= $this->_phone . ", ";
        $out .= $this->_year . ", ";
        $out .= $this->_model . ", ";
        $out .= $this->_comments . ", ";
        $out .= $this->_service . ", ";

        return $out;
    }
}