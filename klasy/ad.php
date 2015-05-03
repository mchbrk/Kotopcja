<?php

class Ad {
	
	static public $conn;
	public $adId;
	public $adTitle;
	public $adFrom;
	public $adContents;
	public $adPicturePath;
	public $adLocationId;
	public $adDate;
	
	public static function conn($conn)
	{
		Ad::$conn = $conn;
	}
	
	public function __construct()
	{
		$this->adTitle = "";
		$this->adFrom = "";
		$this->adContents = "";
		$this->adPicturePath = "";
		$this->adLocationId = "";
		$this->adDate = "";
	}
	
	public function get_adId()
	{
		return $this->adId;
	}
	
	public function set_adTitle($adTitle)
	{
		$this->adTitle = $adTitle;
	}
	
	public function get_adTitle()
	{
		return $this->adTitle;
	}
	
	public function set_adFrom($adFrom)
	{
		$this->adFrom = $adFrom;		
	}
	
	public function get_adFrom()
	{
		return $this->adFrom;
	}
	
	public function set_adContents($adContents)
	{
		$this->adContents = $adContents;
	}
	
	public function get_adContents()
	{
		return $this->adContents;
	}
	
	public function set_adPicturePath($adPicturePath)
	{
		$this->adPicturePath = $adPicturePath;
	}
	
	public function get_adPicturePath()
	{
		return $this->adPicturePath;
	}
	
	public function set_adLocationId($adLocationId)
	{
		$this->adLocationId = $adLocationId;
	}
	
	public function get_adLocationId()
	{
		return $this->adLocationId;
	}
		
	public function set_adDate($adDate)
	{
		$this->adDate = $adDate;
	}
	
	public function get_adDate()
	{
		return $this->adDate;
	}
	
	public function createAd($adTitle, $adFrom, $adContents, $adPicturePath, $adLocationId, $adDate)
	{
		$this->adTitle = $adTitle;
		$this->adFrom = $adFrom;
		$this->adContents = $adContents;
		$this->adPicturePath = $adPicturePath;
		$this->adLocationId = $adLocationId;
		$this->adDate = $adDate;
		
		$sqlQuery = "INSERT INTO Ads('ad_title', 'ad_from', 
					'ad_contents', 'ad_picture_path', 
					'ad_location_id', 'ad_date') 
					VALUES('$this->adTitle', '$this->adFrom', 
					'$this->adContents', '$this->adPicturePath', 
					'$this->adLocationId', $this->adDate')";
		
		$result = Ad::$conn->query($sqlQuery);
	}
	
	public function showAd()
	{
 		$sqlQuery = "SELECT * FROM Ads 
 					JOIN Users 
 					ON Ads.ad_from=Users.user_id 
 					JOIN Locations 
 					ON Ads.ad_location_id=Locations.location_id";

 		$result = Ad::$conn->query($sqlQuery);
	}

	public function update()
	{
// 		$sqlQuery = "";

// 		$result = Ad::$conn->query($sqlQuery);		
	}
	
	public function deleteAd()
	{
// 		$sqlQuery = 
		
// 		$result = Ad::$conn->query($sqlQuery);
	}
	
}

?>