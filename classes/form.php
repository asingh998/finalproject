<?php


class form
{
    //Declare instance variables
    private $_first;
    private $_last;
    private $_phone;

    /** Default constructor
     * @param $first the name
     * @param $last last name
     * @param $phone the number
     */
    public function __construct($first = "joe", $last = "shmo", $phone = "123-456-7890")
    {
        $this->setFirst($first);
        $this->setLast($last);
        $this->setPhone($phone);
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

    /** toString() returns a String representation
     *  of an order object
     *  @return string
     */
    public function toString()
    {
        $out = $this->_first . ", ";
        $out .= $this->_last . ", ";
        $out .= $this->_phone . ", ";

        return $out;
    }
}