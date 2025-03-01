<?php

namespace App\Services;
class Image{

public function imageHandler(int $count,$request,string $name){

for($i=0; $i<$count; $i++){

$data= time().uniqid().".".$request->file($name)->GetClientOriginalExtension();

$request->file($name)->move(storage_path('app/public/images/'), $data);

}

return $data;

}


public function imagePublisher($image)
{
$image = asset('/storage/images/' . $image) ;

return $image;

}
}
