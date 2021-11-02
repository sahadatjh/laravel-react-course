<?php
class Person
{
    public $username;
    public $password;

    const   MINCHAR = '10';

    public function set_password($digit)
    {
        if (strlen($digit) < self::MINCHAR) {
            // echo "Password requires minimum: " . self::MINCHAR . " charecters";
            throw new Exception("Password requires minimum: " . self::MINCHAR . " charecters");
        } else {
            // echo "successfull";
            // $this->password = md5($digit);
            // $this->password = hash('md5', $digit);
            $this->password = hash('sha256', $digit);
        }
    }
}

$sujon = new Person();
$sujon->set_password('sdaf');
echo $sujon->password;
