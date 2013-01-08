<?php
/*---------------------------------------------\
|											   |
| @Author:       Andrey Brykin (Drunya)        |
| @Version:      1.0                           |
| @Project:      CMS                           |
| @package       CMS Fapos                     |
| @subpackege    Messages Entity               |
| @copyright     ©Andrey Brykin 2010-2012      |
| @last mod      2012/05/16                    |
|----------------------------------------------|
|											   |
| any partial or not partial extension         |
| CMS Fapos,without the consent of the         |
| author, is illegal                           |
|----------------------------------------------|
| Любое распространение                        |
| CMS Fapos или ее частей,                     |
| без согласия автора, является не законным    |
\---------------------------------------------*/



/**
 *
 */
class MessagesEntity extends FpsEntity
{
	
	protected $id;
	protected $to_user;
	protected $from_user;
	protected $sendtime;
	protected $subject;
	protected $message;
	protected $id_rmv;
	protected $viewed;

	
	
	
	public function save()
	{
		$params = array(
			'to_user' => $this->to_user,
			'from_user' => $this->from_user,
			'sendtime' => $this->sendtime,
			'subject' => $this->subject,
			'message' => $this->message,
			'id_rmv' => $this->id_rmv,
			'viewed' => $this->viewed,
		);
		if ($this->id) $params['id'] = $this->id;
		$Register = Register::getInstance();
		return ($Register['DB']->save('messages', $params));
	}
	
	
	
	public function delete()
	{ 
		$Register = Register::getInstance();
		$Register['DB']->delete('messages', array('id' => $this->id));
	}




}