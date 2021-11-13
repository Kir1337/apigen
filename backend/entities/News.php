<?php
//Команда генерации таблицы по модели в консоли:vendor/bin/doctrine orm:schema-tool:create

/** 
 * @Entity @Table(name="news")
 **/
class News
{
	/** @Id @Column(type="integer") @GenegatedValue **/
	protected $id;

	/** @Column(type="string") **/
	protected $title;

	/** @Id @Column(type="date") **/
	protected $date;

	/** @Id @Column(type="string") **/
	protected $announce;

	/** @Id @Column(type="string") **/
	protected $detail;

	//Сеттеры
	public function setTitle($title)
	{
		$this->title = $title;
	}
	public function setdate($date)
	{
		$this->date = $date;
	}
	public function setAnnounce($announce)
	{
		$this->announce = $announce;
	}
	public function setDetail($detail)
	{
		$this->detail = $detail;
	}

	//Геттеры
	public function getTitle()
	{
		return $this->title;
	}
	public function getdate()
	{
		return $this->date;
	}
	public function getAnnounce()
	{
		return $this->announce;
	}
	public function getDetail()
	{
		return $this->detail;
	}
}
?>