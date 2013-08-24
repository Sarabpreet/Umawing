<?php


function select() {

$query='select * from wng_post';


$result=mysql_query($query);
$row=mysql_fetch_array($result);
echo $row[2];


}

function insert() {

$query ='insert into wng_post set wng_title="some title goes here",
							  wng_body="some random post goes here....",
							  wng_created_at=now(),
							  wng_user_id=1
							  ';


$result=mysql_query($query);
if(!$result){
echo mysql_error();
}
else {
echo "added that row";
}


} 


function update() {


$query ='update wng_post set
							  wng_title="some title goes here",
							  wng_body="some random post goes here....",
							  wng_created_at=now(),
							  wng_user_id=1
							  ';



$result=mysql_query($query);
if(!$result){
echo mysql_error();
}
else {
echo "updated that row";
}

}



function delete() {

$query ='delete from wng_post where wng_user_id=1';


$result=mysql_query($query);
if(!$result){
echo mysql_error();
}
else {
echo "Row Deleted";
}
}




//select();
//insert();
//update();
//delete();


?>