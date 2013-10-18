<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$user = User::model()->find('email=:email',array(':email'=>$this->username));
		if($user==null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($user->password!==$user->hashPassword($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else{
                        $this->setState('user_id', $user->id);
                        //$this->_id = $user->id;
                        //$this->_username = $user->email;
                        $this->errorCode=self::ERROR_NONE;
                }
		return !$this->errorCode;
	}
}