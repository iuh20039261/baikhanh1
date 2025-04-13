<?php
class conn
{
	public function ketnoi()
	{
		$con = mysqli_connect("localhost", "root", "", "pkdt");

		// Check connection
		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
			exit();
		}
		return $con;
	}
	public function dongketnoi($con)
	{
		$con->close(); // Đóng kết nối cơ sở dữ liệu
	}
}
