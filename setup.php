<!-- user set up -->
<?php
include('connect.php');
$dropuser="Drop table Users";
$runuserdrop=mysqli_query($connection,$dropuser);
if ($runuserdrop) 
{
	echo "<p>User Table is dropped Successfully!!!</p>";
}
$create="CREATE table Users
		(
			UserID int Auto_Increment not null primary key,
			UserName varchar(100),
			PhoneNumber varchar(30),
			Email varchar(50),
			Password varchar(50),
			DateOfBirth varchar(30),
			Gender varchar(20),
			PostalAddress varchar(255),
			PostalCode varchar(20),
			ProfileImage varchar(255)
		)" ;
$createrun=mysqli_query($connection, $create);
if($createrun)
{
	echo "<p>User Table is created Successfully!!!</p>";
}
else
{
	echo mysqli_error($connection);
}
$insertuser="INSERT into Users values(1,'mgmg','09254325731','mgmg@gmail.com','123','28/03/2002','Male','United Kingdom','PC_00123','ProfileImage/p1.jpg')";
$runinsertuser=mysqli_query($connection,$insertuser);
if ($runinsertuser) 
{
	echo "<p>A sample data is data is inserted successfully!!!</p>";
}
?>
<!-- ----------------------------------------------------------------- -->
<!-- Feedback -->
<?php
$dropfeedback="Drop table Feedback";
$rundropfeedback=mysqli_query($connection,$dropfeedback);
if ($rundropfeedback) 
{
	echo "<p>Feedback Table Drop Successful</p>";
}
$createfeedback="CREATE table Feedback
		(
			FeedbackID int Auto_Increment not null Primary Key,
			UserID int,
			FeedbackDate varchar(20),
			Comment varchar(255)
		)";
$createfeedbackrun=mysqli_query($connection, $createfeedback);
if($createfeedbackrun)
{
	echo "<p>Feedback Table Created Sucessfully</p>";
}
else
{
	echo mysqli_error($connection);
}
$insertfeedback="INSERT into Feedback values(1,1,'2020-01-10','It is useful to view this site. I can get many information about pollutions. It has very good responsiblity'),(2,1,'2019-03-16','Everyone should see this website to maintain health problem associated with pollution and to maintain global warming')";
$runinsertfeedback=mysqli_query($connection,$insertfeedback);
if ($runinsertfeedback) 
{
	echo "<p>Feedback Insert Sucessful!</p>";
}
?>
<!-- ------------------------------------------------- -->
<!-- Country -->
<?php
$dropcountry="Drop table Country";
$rundropcountry=mysqli_query($connection,$dropcountry);
if ($rundropcountry) 
{
	echo "<p>Country Table Drop Successful</p>";
}
$create="CREATE table Country
		(
			CountryID int Auto_Increment not null Primary Key,
			CountryName varchar(30),
			PollutionRate varchar(50),
			Year int,
			Description text,
			CountryImage1 varchar(255),
			CountryImage2 varchar(255),
			CountryImage3 varchar(255)
		)";
$createrun=mysqli_query($connection, $create);
if($createrun)
{
	echo "<p>Country Table Created Sucessful!</p>";
}
else
{
	echo mysqli_error($connection);
}
$insertcountry="INSERT into Country values(1,'Myanmar','86.70',2019,'Destination Myanmar, a country in Southeast Asia, bordering the Andaman Sea and the Bay of Bengal south. It is bordered in north and northeast by China, in east by Laos and Thailand, in west by Bangladesh and the Indian states of Nagaland, Manipur and Mizoram. The country is also known as Burma and called the Golden Land.
The country covers an area of 676,578 km², making it almost twice the size of Germany or slightly smaller than the U.S. state of Texas.
Probably the highest elevation in both Myanmar and Southeast Asias is Mount Hkakabo Razi (Khaka Borazi) at  located  Kachin state near the countrys northern border with China, about 110 km (70 mi) north of Putao. Burmas main rivers are the Chindwin (the Mighty Chindwin) the Irrawaddy (Ayeyarwady).
Myanmar has a population of  million people. Largest city, former capital, the economic center of Myanmar is Yangon. Since Burmas new capital is Naypyidaw, a planned city in central. Spoken languages are Burmese (official). Kachin, Kayah, Karen, Chin, Mon, Rakhine, and Shan are regional languages. Rohingya, the language of the Rohingya people from Rakhine State is spoken by about 1.3 million. According to the United Nations, the Rohingya are one of the most persecuted minorities in the world. In 2017 hundreds of thousands Rohingya fled from western Myanmar into neighboring Bangladesh because of the repression and violence they face in Myanmar.','CountryImage/myanmar1.jpg','CountryImage/myanmar2.jpg','CountryImage/myanmar3.jpg')
	,
	(2,'Thailand','169',2016,'About 90 percent of the people are Buddhist, but about three million Muslims live in the south near the border with Malaysia.

Thai children go to elementary school for six years. Then they may attend high school for another six years, but their families must pay for the education. Boys begin military training in ninth grade.

Food in Thailand is influenced by Chinese and Indian cultures. Most Thai dishes are spicy and many common dishes include hot chilies, lemongrass, basil, ginger, and coconut milk.

Thai farmers cultivate mulberry trees that feed silkworms. The worms create silk, which is made into beautiful silk clothing in Thailand, France, and the United States.

Bangkok is called the Venice of the East because there are 83 canals. As many as 10,000 boats full of fruits, vegetables, and fish crowd the canals and create a floating market.

The city of Bangkok is home to many impressive Buddhist structures featuring gold-layered spires, graceful pagodas, and giant Buddha statues.','CountryImage/thailand1.jfif','CountryImage/thailand2.jpg','CountryImage/thailand3.jpg')
	,
	(3,'American','60',2018,'Throughout its history, the United States has been a nation of immigrants. The population is diverse with people from all over the world seeking refuge and a better way of life.

The country is divided into six regions: New England, the mid-Atlantic, the South, the Midwest, the Southwest, and the West. European settlers came to New England in search of religious freedom. These states are Connecticut, Maine, Massachusetts, New Hampshire, Rhode Island, and Vermont.

The mid-Atlantic region includes Delaware, Maryland, New Jersey, New York, Pennsylvania, and the city of Washington, D.C. These industrial areas attracted millions of European immigrants and gave rise to some of the East Coasts largest cities: New York, Baltimore, Philadelphia.

The South includes Alabama, Arkansas, Florida, Georgia, Kentucky, Louisiana, Mississippi, North Carolina, South Carolina, Tennessee, Virginia, West Virginia, all of which struggled after the Civil War, which lasted

The Midwest is home to the countrys agricultural base and is called the breadbasket. The region comprises the states of Illinois, Indiana, Iowa, Kansas, Michigan, Minnesota, Missouri, Nebraska, North Dakota, Ohio, South Dakota, and Wisconsin.

The Southwest is a beautiful stark landscape of prairie and desert. The states of Arizona, New Mexico, Oklahoma, and Texas are considered the Southwest and are home to some of the worlds great natural marvels, including the Grand Canyon and Carlsbad Caverns.

The American West, home of rolling plains and the cowboy, is a symbol of the pioneering spirit of the United States. The West is diverse, ranging from endless wilderness to barren desert, coral reefs to Arctic tundra, Hollywood to Yellowstone. The states of the West include Alaska, Colorado, California, Hawaii, Idaho, Montana, Nevada, Oregon, Utah, Washington, and Wyoming.','CountryImage/usa1.jpg','CountryImage/usa2.jpg','CountryImage/usa3.jpg')";
$runinsertcountry=mysqli_query($connection,$insertcountry);
if ($runinsertcountry)
{
	echo "<p>Country Insert Sucessful!</p>";
}else
{
	echo mysqli_error($connection);
}
?>
<!-- ---------------------------------------------------- -->
<!-- Question -->
<?php
$dropquestion="Drop table QandA";
$rundropquestion=mysqli_query($connection,$dropquestion);
if ($rundropquestion) 
{
	echo "<p>QandA Table Drop Successful</p>";
}
$createqanda="CREATE table QandA
		(
			QuestionID int Auto_Increment not null Primary Key,
			UserID int,
			Question varchar(255),
			QuestionDate varchar(30),
			Answer varchar(255)
		)";
$runcreateqanda=mysqli_query($connection, $createqanda);
if($runcreateqanda)
{
	echo "<p>QandA Table Created Sucessful!</p>";
}
else
{
	echo mysqli_error($connection);
}
$insertquestion="INSERT into QandA values(1,1,'How can i create another account!','2020-01-10','You can create account by register page!')";
$runinsertquestion=mysqli_query($connection,$insertquestion);
if ($runinsertquestion)
{
	echo "<p>QandA Insert Sucessful!</p>";
}
?>